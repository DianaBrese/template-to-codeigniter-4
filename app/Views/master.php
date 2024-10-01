<!DOCTYPE html>
<html lang="en">


<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title><?php echo esc($title ?? 'Blog com Codeigniter') ?></title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->

<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/aos/aos.css') ?> rel=" stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/fragment.css'); ?>">


<!-- Template Main CSS Files -->
<link href=<?php echo base_url('assets/css/variables.css') ?> rel="stylesheet">
<link href=<?php echo base_url('assets/css/main.css') ?> rel="stylesheet">
<?= $this->renderSection('css') ?>

<!-- =======================================================
  * Template Name: ZenBlog - v1.2.1
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
    <?= $this->include('partials/header') ?>
    <main id="main">
        <?= $this->renderSection('content') ?>
    </main>
    <?= $this->include('partials/footer') ?>

</body>

</html>