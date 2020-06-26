<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SingleTransactionController extends Controller
{
    //
    public function index($id)
    {
        // $url = "https://dev.customerpay.me/transaction/$id";
        // return $url;
        try {
            $client = new Client();
            $response = $client->request('GET', "https://dev.customerpay.me/transaction/$id");
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $body = $response->getBody()->getContents();
                $transaction = json_decode($body);
                return view('backend.transactions.show')->with('response', $transaction);
            }

            if ($statusCode == 500) {
                return view('errors.500');
            }
        } catch (\Exception $e) {
            // return view('errors.500');
            return $e;
        }
    }
}
