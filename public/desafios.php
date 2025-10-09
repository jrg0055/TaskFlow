<?php
    // Desafio 1.
    $num1 = 1;
    $num2 = 0;
    $num3 = 0;
    for ($i = 0; $i < 20; $i++) {
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        echo $num3 . "<br>";
    }

    // Desafio 2.
    $numero = 97;
    if ($numero % 2 == 0) {
        echo "No es primooo.";
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0 ) {
                echo "No es primo.";
                break;
            } else {
                echo "Es primo.";
                break;
            }
        }
    }

    echo "<br>";
    // Desafio 3.
    $palabra = 'holaloh';
    $palabrainvertida = '';
    for ($i = 0; $i < strlen($palabra); $i++) {
        $palabrainvertida = $palabra[$i] . $palabrainvertida;
    }
    if ($palabra === $palabrainvertida) {
        echo "Es palindroma.";
    } else {
        echo "No es palindroma.";
    }

    echo "<br>";
    // Desafio 4.
    // $numeros = [5, 2, 8, 1, 9, 4];
    // for ($i = 0; $i < count($numeros); $i++) {
    //     for ($j = 0; $j < count($numeros); $j++) {
    //         
    //     }
    // }

    // MINI RETO.
    $saldo = 1000;
    $pinCorrecto = "1234";
    $pinUsuario = "1234";
    $opcion = 1; 
    if ($pinUsuario === $pinCorrecto) {
        echo "Pin correcto.";
        echo "<br> BIENVENIDO A SU CAJERO AUTOMATICO <br>";
        switch ($opcion) {
            case 1:
                echo "Tu saldo actual es de: " . $saldo . "€<br>";
                break;
            case 2:
                $ingreso = 50;
                $saldo += $ingreso;
                echo "Has ingresado: " . $ingreso . " €. Tu nuevo saldo es de ". $saldo . " €. <br>";
                break;
            case 3:
                $retiro = 100;
                if ($retiro > $saldo) {
                    echo "Saldo Insuficiente para realizar la operación.<br>";
                    break;
                } else {
                    $saldo -= $retiro;
                    echo "Has retirado: " . $retiro . " €. Tu nuevo saldo es de ". $saldo . " €. <br>";
                    break;
                }
            default:
                echo "Opción no válida.<br>";
        }
    } else {
        echo "Pin incorrecto, operación cancelada.<br>";
    }

    // Desafio 5.


?>