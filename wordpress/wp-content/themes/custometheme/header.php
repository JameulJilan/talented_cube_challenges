<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <title>ABC Insurance</title>

    <!-- navbar -->
    <section id="header" class="container-fluid">
        <div class="nav-bar-section">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/abc_logo.png" alt="logo" style="max-width: 30%;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2">
                            <a class="nav-link text-danger" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-danger" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <section id="image-under-nav" class="row no-gutters">
                <div class="relative" href="google.com">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hero.jpg" class="img-rounded" alt="Cinque Terre" width="100%" height="100%">
                    <a href="https://google.com" class="btn btn-danger button_class">Request A Quote</a>
                </div>
            </section>
        </div>
    </section>
</head>