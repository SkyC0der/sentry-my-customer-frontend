<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SettingsController extends Controller
{
    // Controller action to display settings page.
    public function index() {
        try{
            // This is the user_id and should be gotten from session
            $user_id = '5eee79d20699014986af4201';

            // api call to get the user info
            $client = new Client();
            $response = $client->get(env('API_URL') . '/user/' . $user_id);

            if ($response->getStatusCode() == 200) {
                $res = json_decode($response->getBody(), true);

                return view('backend.settings.settings')->with('user_details', $res);
            }

            if ($response->getStatusCode() == 500) {
                return view('errors.500');
            }

        } catch(\Exception $e) {
            return view('errors.500');
        }
    }

    // Controller action to update user details.
    public function update(Request $request) {
        try{

            // This is the user_id and should be gotten from session
            $user_id = '5eee79d20699014986af4201';

            // API NOT WORKING ONLINE YET: NODE
            // ==============================================
                // check if all fields are available
                // if($request->all()) {

                //     $control = $request->input('control', '');

                //     if ($control == 'profile_update') {

                //         // make an api call to update the user_details
                //         $client = new Client();
                //         $response = $client->put(env('API_URL') . '/user/update/' . $user_id, [
                //             'form_params' => [
                //                 'name' => $request->input('first_name'),
                //                 'lastname' => $request->input('last_name'),
                //                 'email' => $request->input('email')
                //             ]
                //         ]);

                //     } elseif ($control == 'password_change') {

                //         // make an api call to update the user_details
                //         $client = new Client();
                //         $response = $client->post(env('API_URL') . '/reset-password', [
                //             'form_params' => [
                //                 'current_password' => $request->input('current_password'),
                //                 'new_password' => $request->input('new_password')
                //             ]
                //         ]);

                //     } else {

                //         return view('errors.500');
                //     }

                //     // api call to get the updated user info
                //     $client = new Client();
                //     $user_detail = $client->get(env('API_URL') . '/user/' . $user_id);
                //     $user_detail_res = json_decode($user_detail->getBody(), true);

                //     if ($response->getStatusCode() == 201) {

                //         $res = json_decode($response->getBody(), true);

                //         return view('backend.settings.settings')->with([
                //             'user_details' => $res,
                //             'form_response' => $user_detail_res
                //         ]);
                //     }

                //     if ($response->getStatusCode() == 400) {

                //         $res = json_decode($response->getBody(), true);

                //         return view('backend.settings.settings')->with([
                //             'user_details' => $res,
                //             'form_response' => $user_detail_res
                //         ]);
                //     }

                //     if ($response->getStatusCode() == 500) {
                //         return view('errors.500');
                //     }
                // } else {
                //     return redirect('/backend/settings');
                // }
            // ==============================================
        } catch(\Exception $e) {
            return view('errors.500');
        }
    }
}
