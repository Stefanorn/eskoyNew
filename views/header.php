<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eskøy</title>

    <link rel="icon" href="<?php echo URL;?>Public/images/icon.png">
    <link rel="stylesheet" href="<?php echo URL;?>Public/lib/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo URL;?>Public/css/site.css" />

</head>
<body>

    <script src="<?php echo URL;?>Public/lib/jquery/dist/jquery.js"></script>
    <script src="<?php echo URL;?>Public/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?php echo URL;?>Public/js/site.js"></script>
    


    <nav class="navbar navbar-color navbar-fixed-top">
        <div class="container no-padding-on-med-screen" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only" >Toggle navigation</span>
                    <span class="icon-bar" style="background-color: red"></span>
                    <span class="icon-bar" style="background-color: red"></span>
                    <span class="icon-bar" style="background-color: red"></span>
                </button>
                <a asp-area="" asp-controller="Home" asp-action="Index" class="navbar-brand">
                    <img class="logo" src="<?php echo URL;?>Public/images/logo.png" alt="Eskøy">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav nav-text-color navbar-nav padding-left-smallscreen">
                    <li><a href="<?php echo URL;?>index">Hjem</a></li>
                <!--    <li><a class="navbar-button" asp-area="" asp-controller="Home" asp-action="kontaktinformasjon">Kontakt oss</a></li> -->
                    <li><a href="<?php echo URL;?>history">historie</a></li>
                    <li><a href="<?php echo URL;?>our_ship">Våre skip</a></li>
                    <li><a href="<?php echo URL;?>jobs">Jobbsøknader</a></li>
                    <li><a href="<?php echo URL;?>kontakt_oss">Kontatk oss</a></li>
                    <li><a href="<?php echo URL;?>fish_service">Fisketjeneste</a></li>
                </ul>
                <div class="nav navbar-nav navbar-right padding-left-smallscreen" style="height: 50px;">
        <!--            <select class="laungauge-picker" style="margin-top: 15px" >
                         
                        <option value="" hidden selected>Nosk</option>
                        <option value="english">English</option>
                        <option value="norwegian">Nosk</option>
                    </select> -->
                </div>

            </div>
        </div>
    </nav>
<div class="content">