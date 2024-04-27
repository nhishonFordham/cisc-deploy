<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    $env = parse_ini_file('../.env');
    /** database config **/
    define('DBNAME', $env['DBNAME']);
    define('DBHOST', $env['DBHOST']);
    define('DBUSER', $env['DBUSER']);
    define('DBPASS', $env['DBPASS']);


}else
{
    /** database config **/
    define('DBNAME', getenv('DBNAME'));
    define('DBHOST', getenv('DBHOST'));
    define('DBUSER', getenv('DBUSER'));
    define('DBPASS', getenv('DBPASS'));

    define('ROOT', 'https://cisc3300-1-2b4be2ca4ddb.herokuapp.com/');

}

