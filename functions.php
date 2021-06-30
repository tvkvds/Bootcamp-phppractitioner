<?php

function legalAge($age){
    $legal = false;
    if ($age >= 21){
        $legal = true;
    }
    return $legal;
}