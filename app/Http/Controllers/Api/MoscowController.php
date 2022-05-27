<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\moscow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoscowController extends Controller
{
    public function index()
    {
        return moscow::all();
    }

    public function update()
    {

        $url = "https://samples.openweathermap.org/data/2.5/forecast?id=524901&appid=884feb904f2a10ee380c1d2e073b86ea";

        $data = file_get_contents($url);
        $data2 = json_decode($data , true);

        if($data2["cod"]) {

            $dateToday =  date("Y-m-d",$data2["list"][0]["dt"]);;
            $tempToday = $data2["list"][0]['main']['temp'] - 273;
            $descriptionToday = $data2["list"][0]["weather"][0]["description"];

            $dateTommorow =  date("Y-m-d",$data2["list"][5]["dt"]);;
            $tempTommorow = $data2["list"][5]['main']['temp'] - 273;
            $descriptionTommorow = $data2["list"][5]["weather"][0]["description"];


            DB::table('moscows')
                ->where('id', '=', 1)
                ->update(
                    [
                        'date' => $dateToday,
                        'temp' => $tempToday,
                        'cloudy' => $descriptionToday
                    ]
                );

            DB::table('moscows')
                ->where('id', '=', 2)
                ->update(
                    [
                        'date' => $dateTommorow,
                        'temp' => $tempTommorow,
                        'cloudy' => $descriptionTommorow
                    ]
                );

        } else {
            echo 'code != 200';
        }

        return moscow::all();
    }


}
