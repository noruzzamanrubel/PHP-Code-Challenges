<?php

function check_capacity( $capacity, $attendees = 0 ) {

    if ( $attendees < $capacity ) {
        return 'There are still seats available.';
    } else {
        return 'Sorry, the event is full.';
    }

}

$venues = array(
    'Rubel Ahmed'  => [100, 50],
    'Enamul Hqe'   => [100, 100],
    'Rafsan joni'  => [98, 100],
    'Robin Islam'  => [100, 200],
    'Shahed Islam' => [2, 0],
);

foreach ( $venues as $name => $numbers ) {
    echo $name . ' : ' . check_capacity( $numbers[0], $numbers[1] ) . '<br>';
}
