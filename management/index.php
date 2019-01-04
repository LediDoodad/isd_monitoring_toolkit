<?php include('../layout/header.php'); ?>
<link rel="stylesheet" href="../dist/css/datatable.style.css">
<link rel="stylesheet" href="../dist/css/mduploader.css">

<body class="fixed-sn white-skin">
  <header>
    <?php include('../layout/side_nav.php'); ?>
    <?php include('../layout/nav_header.php'); ?>
  </header>
  <main>
    <div class="container-fluid">
      <?php include('../components/management.php'); ?>
    </div>
  </main>
  <?php include('../layout/footer.php'); ?>
  <script type="text/javascript" src="index.js"></script>
  <script>

  </script>
  <script>
    $('.mdb_upload').mdb_upload();
    $(".button-collapse").sideNav();
    var container = document.querySelector('.custom-scrollbar');
    Ps.initialize(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
    $(function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })
  </script>

  <script>
    function preventNumberInput(e) {
      var keyCode = (e.keyCode ? e.keyCode : e.which);
      if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107) {
        e.preventDefault();
      }
    }
    $(document).ready(function() {
      $('#surname').keypress(function(e) {
        preventNumberInput(e);
      });
    });
  </script>


  <script>
    $('#dtMaterialDesignExample_wrapper').find('label').each(function() {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function() {
      $('.dataTables_filter input').attr("placeholder", "Search");
      $('.dataTables_filter input').removeClass('form-control-sm');
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
    $('#dtMaterialDesignExample_wrapper select').removeClass('custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
  </script>
