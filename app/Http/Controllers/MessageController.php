<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('send-message');
    }

    public function send(Request $req)
    {
        $config = json_decode(file_get_contents(storage_path('app/settings.json')), true);

        $chat = [
            "secret"    => $config["appkey"],
            "account"   => $config["authkey"],
            "recipient" => $config["phone"],
            "type"      => "text",
            "message"   => $req->message
        ];

        $cURL = curl_init("https://api.net.pk/api/send/whatsapp");
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_POSTFIELDS, $chat);
        $response = curl_exec($cURL);
        curl_close($cURL);

        return "Message Sent! API Response: <br><br>" . $response;
    }
}
