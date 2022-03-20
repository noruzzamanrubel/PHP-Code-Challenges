<?php

    function flip() {

    // return ( 0 == rand( 0, 1 ) ) ? 'H' : 'T';

        if ( 0 == rand( 0, 1 ) ) {
            return 'H';
        } else {
            return 'T';
        }

    }

?>

<style>
    .coin{
        background-color: #999;
        color: #fff;
        border-radius: 50%;
        padding: 50px;
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        width: 50px;
        margin: 0 auto;
    }
</style>
<div class="coin">
    <?php echo flip(); ?>
</div>
