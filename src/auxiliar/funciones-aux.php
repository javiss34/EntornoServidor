<?php

    declare(strict_types=1);
    const LETRAS_DNI = ['T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E'];
    function calcularLetraDni(int $dni):string{

        return LETRAS_DNI[$dni%23];

    }

const CARACTERES_PERMITIDOS = [
    // Letras mayúsculas
    'A','B','C','D','E','F','G','H','I','J','K','L','M',
    'N','O','P','Q','R','S','T','U','V','W','X','Y','Z',

    // Letras minúsculas
    'a','b','c','d','e','f','g','h','i','j','k','l','m',
    'n','o','p','q','r','s','t','u','v','w','x','y','z',

    // Números
    '0','1','2','3','4','5','6','7','8','9',

    //Carácteres especiales
    '.','&','/'
];

function generarContrasenia(int $num_caracteres):string{
        $contrasenia = "";
        for ($i=0; $i<$num_caracteres; $i++){
            $indice = random_int(0,count(CARACTERES_PERMITIDOS)-1);
            $contrasenia .= CARACTERES_PERMITIDOS[$indice];
        }
        return $contrasenia;
    }
