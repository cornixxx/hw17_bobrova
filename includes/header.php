<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wrapper">
    <header class="h-page">
        <div class="container-fluid clearfix">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                    <?php

                    foreach ($nav as $item) {
                        echo "<li><a href=" . $item['url'] . ">" . $item['title'] . "</a></li>";
                    }
                    ?>
                    </ul>
                </div>
            </nav>

        </div>
    </header>

