<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
class ScreenController extends Controller
{
    public function hellow($name){
        return view('hello',['name'=> $name]);
    }
    public function operations(int $n1,int $n2,$operation = "todas"){
        return view('operations',['n1'=> $n1,'n2' => $n2,'operation'=>$operation]);
    }
    public function age(int $year,int $month=1,int $day=1){
        $birthdate = $year."-".$month."-".$day;
        $date = new DateTime($birthdate);
        $today = new DateTime();
        $diff = $today->diff(new DateTime($birthdate));
        $years = $diff->y;
        $months = $diff->m;
        $days = $diff->d;
        $alert ='';
        if($date>new DateTime())
        {
            $alert = 'DATA';
        }
 
        return view('age',['years'=>$years,'months'=>$months,'days'=>$days,'alert'=>$alert]);
    }
}
