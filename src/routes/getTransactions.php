<?php

$app->post('/api/Paybook/getTransactions', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['sessionToken']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['sessionToken'=>'token'];
    $optionalParams = ['idTransaction'=>'id_transaction','idAccount'=>'id_account','idCredential'=>'id_credential','idSite'=>'id_site','idSiteOrganization'=>'id_site_organization','idSiteOrganizationType'=>'id_site_organization_type','isDisable'=>'is_disable','hasAttachment'=>'has_attachment','hasAttachment'=>'has_attachment','dtRefreshFrom'=>'dt_refresh_from','dtRefreshTo'=>'dt_refresh_to','dtTransactionFrom'=>'dt_transaction_from','dtTransactionTo'=>'dt_transaction_to','fields'=>'fields','skip'=>'skip','limit'=>'limit','order'=>'order','keywords'=>'keywords','skipKeywords'=>'skip_keywords'];
    $bodyParams = [
       'query' => ['id_account','token','has_attachment','id_transaction','dt_refresh_from','dt_refresh_to','dt_transaction_from','dt_transaction_to','id_credential','id_site','id_site_organization','id_site_organization_type','is_disable','fields','limit','skip','order','keywords','skip_keywords']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    
    $data['dt_refresh_from'] = \Models\Params::toFormat($data['dt_refresh_from'], 'unixtime'); 
    $data['dt_refresh_to'] = \Models\Params::toFormat($data['dt_refresh_to'], 'unixtime'); 
    $data['dt_transaction_from'] = \Models\Params::toFormat($data['dt_transaction_from'], 'unixtime'); 
    $data['dt_transaction_to'] = \Models\Params::toFormat($data['dt_transaction_to'], 'unixtime'); 
    $data['fields'] = \Models\Params::toString($data['fields'], ','); 

    $client = $this->httpClient;
    $query_str = "https://sync.paybook.com/v1/transactions";

    

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