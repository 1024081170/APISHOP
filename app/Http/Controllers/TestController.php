<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CurlController;

use GuzzleHttp\Client;

class TestController extends Controller
{
    //对称加密
    public function guzzle()
    {
        /**
         * GET
         */
        // Create a client with a base URI
        $client = new Client(['base_uri' => 'http://www.xxx.com/']);
        // Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'guzzle/get');
        echo $body = $response->getBody();

        /**
         * POST
         * (默认转json)
         */
        // Send a request to https://foo.com/root

        $data = 'xxxxxxxxxxxxxxxx';
        $key = 'Paint';
        $iv = '0123456789abcdef';
        $response = $client->request('post', 'guzzle/post', [
            'body' => base64_encode(openssl_encrypt($data, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv))]);


        echo $body = $response->getBody();

        /**
         * 文件上传
         */
        $filename = '/wwwroot/client/logo.jpg';
//        $data = new \CURLFile($filename);
        $data = fopen($filename, 'r');
        $res = $client->request('POST', 'guzzle/file', ['body' => $data]);
        $body = $res->getBody();
        print_r($body->getContents());
    }

    //非对称加密
    public function test_rsa()
    {
        $data = 'XXXXXXXXXXXXXXXXXXXXXX';
        $private = openssl_get_privatekey('file://' . storage_path('key/test_private_key.pem'));
        openssl_private_encrypt($data, $xxx, $private);
        $client = new Client(['base_uri' => 'http://www.xxx.com/']);

        $response = $client->request('post', 'test_rsa', [
            'body' => base64_encode($xxx)]);
        echo $body = $response->getBody();
    }

    //签名
    public function signature()
    {
        $data = 'XXXXXXXXXXXXXXCCCCCCCCCCC';

        $key = 'Paint';
        $iv = '0123456789abcdef';
        $datastr = openssl_encrypt($data, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
        $private = openssl_get_privatekey('file://' . storage_path('key/test_private_key.pem'));
        openssl_sign($datastr,$signa,$private);

        $client = new Client(['base_uri' => 'http://www.xxx.com/']);
        $response = $client->request('post', 'signature', ['body' => base64_encode(serialize(['data'=>$datastr,'signa'=>$signa]))]);


        echo $body = $response->getBody();
    }
}
