<?php

$notificacaoes = 1;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Painel Administrativo</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    <!-- Pignose Calender -->
    <link href="../assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!--*******************
        Preloader
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader
    ********************-->


    <!--**********************************
        Main wrapper
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="../assets/img/avatar/sem-foto.jpg" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Editar</span></a>
                                        </li>

                                        <hr class="my-2">
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Sair</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">SC SOFTWARES</li>
                    <li>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="icon-speedometer menu-icon"></i><span class="nav-text">HOME</span></a>

                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#medicos" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="icon-speedometer menu-icon"></i><span class="nav-text">MÉDICOS</span></a>

                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#funcionarios" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="icon-speedometer menu-icon"></i><span class="nav-text">FUNCIONÁRIOS</span></a>

                            <?php if($notificacaoes > 0) { ?>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#notificacoes" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="icon-speedometer menu-icon"></i><span class="nav-text">NOTIFICAÇÕES</span><span class="badge bg-secondary"><?php echo $notificacaoes; ?></span></a>
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">

                <!-- chamado pelo menu -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php include_once("home.php"); ?></div>

                    <div class="tab-pane fade" id="medicos" role="tabpanel" aria-labelledby="v-pills-profile-tab"><?php include_once("medicos.php"); ?></div>

                    <div class="tab-pane fade" id="funcionarios" role="tabpanel" aria-labelledby="v-pills-profile-tab">Funcionários</div>

                    <div class="tab-pane fade" id="notificacoes" role="tabpanel" aria-labelledby="v-pills-profile-tab">Notificações</div>
                </div>
                <!-- Fim do chamado pelo menu -->

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body
        ***********************************-->


        <!--**********************************
            Footer
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; SC SOFTWARES. 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="../assets/js/custom.min.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/gleek.js"></script>
    <script src="../assets/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="../assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="../assets/plugins/d3v3/index.js"></script>
    <script src="../assets/plugins/topojson/topojson.min.js"></script>
    <script src="../assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="../assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="../assets/js/dashboard/dashboard-1.js"></script>

</body>

</html>