<?php
    if(!defined('APPPATH')){
        exit('No direct script access allowed');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
    </head>

    <body>
        <div id="container">
            <div id="navbar">
                <div id="navbar-inner">
                    <a href="/">Home</a>
                    <a href="/menu">Menu</a>
                </div>
            </div>
            
            <div id="content">
                <h1>{pagetitle}</h1>
                {content}
            </div>
            
            <div id="footer">
                Copyright &copy; 2016
            </div>
        </div>
    </body>
</html>