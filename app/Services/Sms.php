<?php
namespace  App\Services;

class Sms {

    public static function send_sms($user)
    {

        $url = 'http://api.yamamah.com/SendSMS';
        $fields = array(
            "Username"             => "0533336567",
            "Password"             => "Thamer12345",
            "Message"              => __('auth.sms') . $user->code,
            "RecepientNumber"      => '966' . ltrim($user->phone, '0'),
            "ReplacementList"      => "",
            "SendDateTime"         => "0",
            "EnableDR"             => False,
            "Tagname"              => "BASMATII",
            "VariableList"         => "0"
        );

        $fields_string             = json_encode($fields);
        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_POST           => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER     => array(
                'Content-Type: application/json'
            ),
            CURLOPT_POSTFIELDS     => $fields_string
        ));
        $result                    = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
