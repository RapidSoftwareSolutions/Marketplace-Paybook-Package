<?php

$app->post('/api/Paybook/getAttachmentsCount', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['sessionToken']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['sessionToken'=>'token'];
    $optionalParams = ['idTransaction'=>'id_transaction','idAccount'=>'id_account','idCredential'=>'id_credential','isValid'=>'is_valid','dtRefreshFrom'=>'dt_refresh_from','dtRefreshTo'=>'dt_refresh_to','keywords'=>'keywords','skipKeywords'=>'skip_keywords'];
    $bodyParams = [
       'query' => ['token','id_account','id_attachment_type','id_credential','id_transaction','is_valid','dt_refresh_from','dt_refresh_to','keywords','skip_keywords']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['dt_refresh_from'] = \Models\Params::toFormat($data['dt_refresh_from'], 'unixtime'); 
    $data['dt_refresh_to'] = \Models\Params::toFormat($data['dt_refresh_to'], 'unixtime');

    if(!empty($data['skip_keywords']))
    {
        $data['skip_keywords'] = \Models\Params::toString($data['skip_keywords'], ',');
    }

    if(!empty($data['keywords']))
    {
        $data['keywords'] = \Models\Params::toString($data['keywords'], ',');
    }


    $client = $this->httpClient;
    $query_str = "https://sync.paybook.com/v1/attachments/count";

    

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = [];
     

    try {
        $resp = $client->get($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});