<?php

function generate_password($length)
{

    $generate_password = "";

    //creiamo un ciclo per la stampa

    for ($i = 0; $i < $length; $i++) {
        //dichiarazione caratteri in una stringa poichè in array non riesco
        $string_caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_+=';
        //recuperiamo un carattere a caso
        $rand_caratt_ind = rand(0, strlen($string_caratteri) - 1);
        $rand_caratts = $string_caratteri[$rand_caratt_ind];
        // var_dump($rand_caratts); cosi controllo se mi stampa random il carattere
        $generate_password .= $rand_caratts;
    }
    return $generate_password;
};
