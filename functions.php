<?php

function dd ( $data ) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function isOldEnough ( $age ) {
    if ( $age >= 21 ) {
        return true;
    } else {
        return false;
    }
} 