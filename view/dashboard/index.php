<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <?php include '../../layout/headdetail.php'; ?>
  <?php include '../../layout/basecss.php'; ?>
  <?php include '../../layout/for-dashboard.php'; ?>
  <script src="../../assets/plugins/pace/pace.min.js"></script>
</head>

<body class="pace-top">
  <div id="page-loader" class="fade show"><span class="spinner"></span></div>
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">

    <?php include '../../layout/header.php'; ?>
    <?php include '../../layout/sidebar.php'; ?>

    <div id="content" class="content">
      <?php include '../../pages/'; ?>
    </div>

    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

  </div>

  <?php include '../../layout/basejs.php'; ?>
  <?php include '../../layout/dashboardjs.php'; ?>
  <script>
    $(document).ready(function() {
      App.init();
      DashboardV2.init();
    });
  </script>

</body>

</html>
