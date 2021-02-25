<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Finance Business HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('template/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('template/assets/css/fontawesome.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/templatemo-finance-business.css') ?>">
    <link rel="stylesheet" href="<?= base_url('template/assets/css/owl.css') ?>">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>










<?= $this->renderSection('content'); ?>










    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('template/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('template/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Additional Scripts -->
    <script src="<?= base_url('template/assets/js/custom.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/owl.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/slick.js') ?>"></script>
    <script src="<?= base_url('template/assets/js/accordions.js') ?>"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>