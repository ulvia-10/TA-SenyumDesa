<!DOCTYPE html>
<html lang="en">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Chitrakoot Web" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Startup Agency and SasS Business Template" />
    <meta name="description" content="Amava - Startup Agency and SasS Business Template" />

    <!-- title  -->
    <title>Amava - Startup Agency and SasS Business Template</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/logos/favicon.png" />
    <link rel="apple-touch-icon" href="img/logos/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/logos/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/logos/apple-touch-icon-114x114.png" />

    <!-- plugins -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/plugins.css" />

    <!-- search css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/search/search.css" />

    <!-- quform css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/quform/css/base.css">

    <!-- switcher css -->
    <link href="<?php echo base_url() ?>assets/frontend/css/switcher.css" rel="stylesheet">

    <!-- theme core css -->
    <link href="<?php echo base_url() ?>assets/frontend/css/styles.css" rel="stylesheet" id="colors">

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">



        <?php $this->load->view($namafolder . '/' . $namafileview) ?>


    </div>
    <!-- end main-wrapper section -->





    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- jquery -->
    <script src="<?php echo base_url() ?>assets/frontend/js/core.min.js"></script>

    <!-- Search -->
    <script src="<?php echo base_url() ?>assets/frontend/search/search.js"></script>

    <!-- custom scripts -->
    <script src="<?php echo base_url() ?>assets/frontend/js/main.js"></script>

    <!-- form plugins js -->
    <script src="<?php echo base_url() ?>assets/frontend/quform/js/plugins.js"></script>

    <!-- form scripts js -->
    <script src="<?php echo base_url() ?>assets/frontend/quform/js/scripts.js"></script>

    <!-- all js include end -->

</body>

</html>