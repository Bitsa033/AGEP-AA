<?php require 'php/paginate.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Plateforme numerique pour gestion des ecoles primaires APC">
  <meta name="author" content="PASCAL BITSA ">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Ecole Primaire</title>
  <!-- Favicons style -->
  <?php require 'includes/filesCss.php'; ?>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php require 'includes/header.php'; ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php require 'includes/sliderbar.php'; ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <?php require_once 'pages/note_add.php'; ?>

      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      
    </footer>
    <!--footer end-->

  </section>

  <!-- js placed at the end of the document so the pages load faster -->
 <?php require 'includes/filesJs.php'; ?>
 <script type="text/javascript" src="includes/information.js"></script>

  <script type="text/javascript">
      payment_of_school()
  </script>
  
</body>

</html>
