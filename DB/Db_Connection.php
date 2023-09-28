<?php

function pdo_connect_mysql()
{
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASSWORD = '';
    $DATABASE_NAME = 'monolog';

    try{
        return new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME",$DATABASE_USER,$DATABASE_PASSWORD);
    }catch(PDOException $exception)
    {
        exit('Failed to connect to database!');
    }
}


function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="../css/style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>
        <body>
        <nav class="navtop">
            <div>
                <h1>CRUD-PHP</h1>
                <a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
            </div>
        </nav>
    EOT;
}

function template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
}