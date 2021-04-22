<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user_domicilio;

use DB;
use DateTime;
use Carbon\Carbon;

class UserController extends Controller
{
    public function users(Request $request)
    {
        $users = DB::table('user_domicilio')->select('user_id', 'nombre_usuario','domicilio', 'fecha_nacimiento')->get();
        $fechanacimiento = DB::table('user_domicilio')->select('fecha_nacimiento')->get();

        /* $json = json_decode($fechanacimiento);
        print_r ($json); */
        $age = array();
        foreach($fechanacimiento as $mydata) {
            //echo($mydata->fecha_nacimiento);
            $date = $mydata->fecha_nacimiento;
            $edad = Carbon::parse($date)->age;
            array_push($age, $edad);

            //echo($edad);
        }
        //print_r($age);
        //$value->edad = $age;
        //echo json_encode($value);
        
        //print_r($fechanacimiento['fecha_nacimiento']);

        $date_expire = '2014-08-06';
        /* $edad = Carbon::parse($date_expire)->age;
        echo($edad); */

        /* $hoy = new DateTime();
        $annos = $hoy->diff("1990-12-24 00:00:00");
        echo $annos->y; */

        /* $date_expire = '2014-08-06';    
        $date = new DateTime($date_expire);
        $now = new DateTime();
        echo $date->diff($now)->format("%d days, %h hours and %i minuts"); */

        return response()->json($users);
    }
}
