<?php

namespace App\Controllers;

use App\Models\SendMail;
use App\Models\User;
use T4\Mvc\Controller;

class ServiceMail
    extends Controller
{
    public function actionUser()
    {
        $f = fopen('php://input' , 'r');
        $data = '';
        while ($str = fgets($f)) {
            $data .= $str;
        }
        $data = json_decode($data);

        if (is_numeric($data->user) && !empty(User::findByPK($data->user))) {
            $send = new SendMail();
            $send->fill($data);
            $send->save();
            echo http_response_code();
            exit(0);
        } else {
            header('HTTP/1.1 404 User Not Found');
            exit(0);
        }
    }
}