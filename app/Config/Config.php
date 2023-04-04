<?php

    ob_start();
    session_start();
    //setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese', 'ptb');
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('memory_limit', '15024M');
    ini_set('max_execution_time', 600);
    set_time_limit(-1);
    error_reporting(E_ALL);
    date_default_timezone_set('America/Sao_Paulo');

    //CARDIO
    define('CARDIO_HOST','10.2.0.24');
    define('CARDIO_NAME','Millenium');
    define('CARDIO_USER','sa');
    define('CARDIO_PASS','admin222@');

    //MYSQL
    define('HOST_MYSQL','10.2.0.13');
    define('USER_MYSQL','charles');
    define('PASS_MYSQL','011326');
    define('DB_MYSQL','tasy');

    //PIRAMIDE
    define('HOST_IBGE','10.2.0.13');
    define('DB_IBGE','ibge');

    //Tabelatuss201701
    define('DB_TUSS','tabelatuss201701');
