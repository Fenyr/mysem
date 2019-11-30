<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Home</title>

    <!-- Style CSS -->
   <link href="<?php echo base_url('asset/style.css')?>" rel="stylesheet" type="text/css" />

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?= base_url(''); ?>"><font color="orange" >Seminar.ly</font></a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('')?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <?php if ($this->session->userdata('level') == 2) {?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('panitia/pendaftaran')?>">Pendaftaran<span class="sr-only">(current)</span></a>
                            </li>
                            <?php } ?>
                            <?php if ($this->session->userdata('login') == 1) {?>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi <?php echo $this->session->userdata('username'); ?></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profil Saya</a>
                                    <a class="dropdown-item text-danger" href="<?=base_url('auth/logout')?>">Log Out</a>
                                    
                                </div>
                            </li>
                            <?php } ?>
                            <?php if ($this->session->userdata('login') != 1) {?>
                            <li class="nav-item">
                                <a class="nav-link tex-blue" href="<?= base_url('auth')?>">Login<span class="sr-only"></span></a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Cari Sesuatu...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->