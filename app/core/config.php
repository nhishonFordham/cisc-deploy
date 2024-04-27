<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    /** database config **/
    define('DBNAME', $env['DBNAME']);
    define('DBHOST', $env['DBHOST']);
    define('DBUSER', $env['DBUSER']);
    define('DBPASS', $env['DBPASS']);

    define('ROOT', 'http://localhost:8888/');

}else
{
    /** database config **/
    define('DBNAME', getenv('DBNAME'));
    define('DBHOST', getenv('DBHOST'));
    define('DBUSER', getenv('DBUSER'));
    define('DBPASS', getenv('DBPASS'));

    define('ROOT', 'https://cisc3300-1-2b4be2ca4ddb.herokuapp.com/');

}

