<?php
    session_start();
    require "libs/rb.php";
    R::setup( 'mysql:host=localhost;dbname=mydatabase',
    'mysql', 'mysql' );


