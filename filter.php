<?php

function valida($testo){
    $cd = htmlspecialchars($testo);
    $cd = htmlentities($testo);
    $cd = trim($testo);
    $cd = stripcslashes($testo);
    
    return $cd;
}

