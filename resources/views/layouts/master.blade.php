<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="shortcut icon" href="../storage/app/images/nd.black.ico" type="image/x-icon" /> 
        <title> Natasa Damnjanovic </title>
        
        <link rel="stylesheet" type="text/css" href="css/menu.style.css" />
        <link rel="stylesheet" type="text/css" href="css/container.style.css" />
        @yield('scripts')
    </head>

    <body>
        @section('sidebar')
            <div class="menu"> 
                <div class="menu-logo">
                    <a href="<?php echo url('home') ?>" class="menu-logo-link"></a>  
                    <img src="../storage/app/images/logo.white.transparent.png" class="menu-logo-img" />               
                </div>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
