<?php

require_once 'IPAddress.php';

class Weather
{
    public static function getWeather(): array
    {
        $ipAddress = IPAddress::getUserIP();

        if (!empty($ipAddress)) {

            $key = "d40fb2e80a4d43ce8ce112219200111";
            $url = "http://api.weatherapi.com/v1/current.json?key=$key&q=$ipAddress";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $data = json_decode(curl_exec($ch), true);
            curl_close($ch);

            $location = $data['location']['name'] . ", " . $data['location']['country'];
            $date = $data['location']['localtime'];
            return [
                'location' => $location,
                'time' => date('D, g:i a', strtotime($date)),
                'temp' => $data['current']['temp_c'],
                'condition' => $data['current']['condition']['text'],
                'condition_img' => $data['current']['condition']['icon'],
                'wind' => $data['current']['wind_kph'],
                'precip' => $data['current']['precip_in'],
                'humidity' => $data['current']['humidity']
            ];
        } else {
            return [];
        }
    }
}