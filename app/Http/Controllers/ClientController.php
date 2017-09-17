<?php

namespace ApiClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected function makeRequest($method, $url, $params = []) {
        $client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem')]]);

        $response = $client->request($method, $url, $params);

        return $response->getBody()->getContents();
    }

    protected function makeGetRequest($url) {
        $response = $this->makeRequest('GET',$url);
        $parsed_response = json_decode($response);

        return $parsed_response;
    }

    // Functions for posts resources
    protected function fetchAllPosts() {
        return $this->makeGetRequest('http://jsonplaceholder.typicode.com/posts');
    }

    protected function fetchAPost($postId) {
        return $this->makeGetRequest("http://jsonplaceholder.typicode.com/posts/{$postId}");
    }

    // Functions for users resources
    protected function fetchAllUsers() {
        return $this->makeGetRequest('http://jsonplaceholder.typicode.com/users');
    }

     protected function fetchAUser($userId) {
        return $this->makeGetRequest("http://jsonplaceholder.typicode.com/users/{$userId}");
    }

    // Functions for albums resources
    protected function fetchAllAlbums() {
        return $this->makeGetRequest('http://jsonplaceholder.typicode.com/albums');
    }

    protected function fetchAnAlbum($album) {
        return $this->makeGetRequest("http://jsonplaceholder.typicode.com/albums/{$album}");
    }
}
