<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $file = storage_path('app/settings.json');

        if (!file_exists($file)) {
            file_put_contents($file, json_encode([
                "appkey" => "",
                "authkey" => "",
                "phone" => ""
            ]));
        }

        $data = json_decode(file_get_contents($file), true);

        return view('settings', $data);
    }

    public function save(Request $req)
    {
        $json = [
            "appkey" => $req->appkey,
            "authkey" => $req->authkey,
            "phone" => $req->phone
        ];

        file_put_contents(storage_path('app/settings.json'), json_encode($json));

        return back()->with("msg", "Settings Saved!");
    }
}
