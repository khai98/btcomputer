<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function form()
    {
        return view('view');
    }
    /**
     * @param Request $request
     */

    public function calculator(Request $request)
    {
        $number1 = $request->input('input1');
        $number2 = $request->input('input2');
        $Addition = $request->input('Addition');
        $Subtraction = $request->input('Subtraction');
        $Multiplication = $request->input('Multiplication');
        $Division = $request->input('Division');

        if ($Addition !== null) {
            $total = $number1 + $number2;
            echo $total;
        } else if ($Subtraction !== null) {
            $total = $number1 - $number2;
            echo $total;
        } else if($Multiplication !== null){
            $total = $number1 * $number2;
            echo $total;
        }else if ($Division!== null) {
            $total = $number1 / $number2;
            echo $total;
        }

    }

}


