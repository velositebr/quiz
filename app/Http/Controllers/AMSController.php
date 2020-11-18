<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contacts;

class AMSController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
        $contacts = Contacts::find(1);

        if($authUser){
            return view('ams')->with([
                'authUser' => $authUser,
                'contacts' => $contacts,
            ]);
        }else{
            return view('ams')->with([
                'contacts' => $contacts,
            ]);
        }
    }

    public function result()
    {
        //variáveis
        $totalScore = 0;

        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $register = $_POST['register'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];
        $q11 = $_POST['q11'];
        $q12 = $_POST['q12'];
        $q13 = $_POST['q13'];
        $q14 = $_POST['q14'];
        $q15 = $_POST['q15'];
        $q16 = $_POST['q16'];
        $q17 = $_POST['q17'];

        //Análise de respostas
        $totalScore = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17;

        if($totalScore <= 26){
            return view('result-ams')->with([
                'level' => 'muito-baixo',
                'risco' => 'Risco muito baixo',
                'color' => 'bg-success',
                'totalScore' => $totalScore,
                'name' => $name,
            ]);
        }elseif($totalScore > 26 && $totalScore <= 36){
            return view('result-ams')->with([
                'level' => 'baixo',
                'risco' => 'Risco baixo',
                'color' => 'bg-info',
                'totalScore' => $totalScore,
                'name' => $name,
            ]);
        }elseif($totalScore > 37 && $totalScore <= 49){
            return view('result-ams')->with([
                'level' => 'moderado',
                'risco' => 'Risco moderado',
                'color' => 'bg-warning',
                'totalScore' => $totalScore,
                'name' => $name,
            ]);
        }elseif($totalScore >= 50){
            return view('result-ams')->with([
                'level' => 'grave',
                'risco' => 'Risco grave',
                'color' => 'bg-danger',
                'totalScore' => $totalScore,
                'name' => $name,
            ]);
        }

    }
}
