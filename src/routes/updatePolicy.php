<?php

$app->post('/api/Keygen/updatePolicy', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accountId','accessToken','policyId']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accountId'=>'accountId','accessToken'=>'accessToken','policyId'=>'policyId'];
    $optionalParams = ['name'=>'name','duration'=>'duration','strict'=>'strict','floating'=>'floating','requireCheckIn'=>'requireCheckIn','checkInInterval'=>'checkInInterval','checkInIntervalCount'=>'checkInIntervalCount','maxMachines'=>'maxMachines','protected'=>'protected','metadata'=>'metadata'];
    $bodyParams = [
       'json' => ['data']
    ];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);

    

    $client = $this->httpClient;
    $query_str = "https://api.keygen.sh/v1/accounts/{$data['accountId']}/policies/{$data['policyId']}";

    $data['data']['type'] = 'policies';
$data['data']['attributes']['name'] = $data['name'];
$data['data']['attributes']['duration'] = $data['duration'];
$data['data']['attributes']['strict'] = $data['strict'];
$data['data']['attributes']['floating'] = $data['floating'];
$data['data']['attributes']['requireCheckIn'] = $data['requireCheckIn'];
$data['data']['attributes']['checkInInterval'] = $data['checkInInterval'];
$data['data']['attributes']['checkInIntervalCount'] = $data['checkInIntervalCount'];
$data['data']['attributes']['maxMachines'] = $data['maxMachines'];
$data['data']['attributes']['protected'] = $data['protected'];
$data['data']['attributes']['metadata'] = $data['metadata'];

    $requestParams = \Models\Params::createRequestBody($data, $bodyParams);
    $requestParams['headers'] = ["Authorization"=>"Bearer {$data['accessToken']}"];
     

    try {
        $resp = $client->patch($query_str, $requestParams);
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