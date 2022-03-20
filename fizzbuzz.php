<?php

$i = 1;

while ( $i <= 100 ) {

    if ( 0 == $i % 3 || 0 == $i % 5 ) {
        echo 'FizzBuzz' . '<br>';
    } elseif ( 0 == $i % 3 ) {
        echo 'Fizz' . '<br>';
    } elseif ( 0 == $i % 5 ) {
        echo 'Buzz' . '<br>';
    } else {
        echo $i . '<br>';
    }

    $i++;
}