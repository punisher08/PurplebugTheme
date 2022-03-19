<?php

$purplebug_divider_color = get_option( 'purplebug_divider_color', '#000000' );
$purplebug_menu_color = get_option( 'purplebug_menu_color', '#000000' );


?>
<style type="text/css">
    .card-title{
        color:<?=$purplebug_divider_color;?>;
    }
    .menu ul li a{
        color:<?=$purplebug_menu_color;?>;
    }
</style>