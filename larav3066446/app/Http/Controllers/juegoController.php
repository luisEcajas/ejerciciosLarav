<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class juegoController extends Controller
{
    public function frmAdivinarNum(){
        $numeroAleatorio = rand(1,70);
        return view('juego', compact('numeroAleatorio'));

    }
    public function adivinarNum(Request $request){
       

        $numeroIngresado = $request->num;
        $numeroAleatorio = $request->numeroAleatorio;
         echo "El numero que se genero es $numeroAleatorio <br>";
        echo "El numero que se ingreso es $numeroIngresado <br>";
        if($numeroIngresado > $numeroAleatorio){
            echo "El numero a advinar es menor de $numeroIngresado";
            return view('juego',compact('numeroAleatorio'));


        }
        if($numeroIngresado < $numeroAleatorio){
            echo "El nunmero a adivinar es mayor de $numeroIngresado";
            return view('juego', compact('numeroAleatorio'));

        }
        if($numeroIngresado==$numeroAleatorio){
            echo "Acertaste el numero crack, felicidades, el numero establecido era $numeroAleatorio";

        }

    }
    //Ejercicio2    Ingresar un número del 1 al 10 y calcularsu factorial. Ejemplo el factorial de 4 es: 1*2*3*4
    
    
    public function frmFactorialNum(){
        return view('frmFactorial');
    }
    public function factorialNumero(Request $request){
    $numero = request->numero;

    if($num > 10){
            echo "El numero debe ser menor a 10";
            return view('frm_Factorial');
        }

        $resultado = $this->hallarFactorial($num);

        echo "El factorial de $num es: $resultado";
    }

    function hallarFactorial($n) {
        $resultado = 1;
        for ($i = 1; $i <= $n; $i++) {
            $resultado *= $i;
        }
        return $resultado;
    }
    //Ejercicio 3: 

    public function frmNotas(){
        return view('frm_Notas');
    }

    public function notas(Request $request){
        $nota1 = $request->num1;
        $nota2 = $request->num2;
        $nota3 = $request->num3;
        $nota4 = $request->num4;
        $nota5 = $request->num5;

        if($nota1 > 5){
            echo "Hay un error en la nota 1 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota2 > 5){
            echo "Hay un error en la nota 2 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota3 > 5){
            echo "Hay un error en la nota 3 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota4 > 5){
            echo "Hay un error en la nota 4 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }
        if($nota5 > 5){
            echo "Hay un error en la nota 5 <br>";
            echo "Ingrese una nota entre 0 y 5 <br>";
            return view('frm_Notas');
        }

        $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5;

        echo "El promedio es: $promedio <br>";

        if($promedio < 3){
            echo "El estudiante no paso";
        } else {
            echo "El estudiante paso";
        }
    }
     //Ejercicio 4: 
 
    public function frmMultiplicar(){
        return view('frm_Multiplicar');
    }

    public function multiplicar(Request $request){
        $num = $request->num;

        if($num > 10){
            echo "El numero debe ser menor o igual a 10";
            return view('frm_Multiplicar');
        }

        $contador = 1;
        while($contador <= 10){
            $resultado = $num * $contador;
            echo "$num x $contador = $resultado <br>";
            $contador = $contador + 1;
        }
    }
     //Ejercicio 5: 
   
    public function frm20Nums(){
        return view('frm_20Nums');
    }

    public function F20Nums(Request $request){
        $contador = 1;
        $pares = 0;
        $imparMul8 = 0;
        $mayorMul7 = 0;
        $num6 = 0;
        $num11 = 0;
        $num17 = 0;

        while($contador<=20){
            $numAleatorio = rand(1, 70);
            echo "numero $contador = $numAleatorio <br>";

            if($numAleatorio % 2 != 0 && $numAleatorio % 8 == 0){
                $imparMul8 = $imparMul8 + 1;
            }

            if($numAleatorio % 2 == 0){
                $pares = $pares + 1;
            }

            if($numAleatorio % 7 == 0 && $numAleatorio > $mayorMul7){
                $mayorMul7 = $numAleatorio;
            }

            if($numAleatorio == 6){
                $num6 = $num6 + 1;
            }

            if($numAleatorio == 11){
                $num11 = $num11 + 1;
            }

            if($numAleatorio == 17){
                $num17 = $num17 + 1;
            }

            $contador = $contador + 1;
        }

        echo "Numeros pares = $pares <br>";
        echo "Numeros impares multiplos de 8 = $imparMul8 <br>";
        echo "Mayor multiplo de 7 = $mayorMul7 <br>";
        echo "Cantidad de numeros 6 = $num6 <br>";
        echo "Cantidad de numeros 11 = $num11 <br>";
        echo "Cantidad de numeros 17 = $num17 <br>";
    }

    }
    

