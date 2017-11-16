<?php

$app->post('/api/Paybook/getAllStampedInvoices', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['sessionToken']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['sessionToken'=>'token'];
    $optionalParams = ['uuid'=>'uuid','issuer'=>'issuer','recipient'=>'recipient','dtCreateFrom'=>'dt_create_from','dtCreateTo'=>'dt_create_to','dtRegisterFrom'=>'dt_register_from','dtRegisterTo'=>'dt_register_to'];
    $bodyParams = [
       'query' => ['token','uuid','issuer','recipient','dt_create_from','dt_create_to','dt_register_from','dt_register_to']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['dt_create_from'] = \Models\Params::toFormat($data['dt_create_from'], 'unixtime'); 
    $data['dt_create_to'] = \Models\Params::toFormat($data['dt_create_to'], 'unixtime'); 
    $data['dt_register_from'] = \Models\Params::toFormat($data['dt_register_from'], 'unixtime'); 
    $data['dt_register_to'] = \Models\Params::toFormat($data['dt_register_to'], 'unixtime'); 

    $client = $this->httpClient;
    $query_str = "https://sync.paybook.com/v1/invoicing/mx/invoices";

    

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