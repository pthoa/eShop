<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>

  <link href="web/css/font/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="web/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
  <link href="web/bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
  <link href="web/css/home.css" rel="stylesheet" type="text/css" />
  <script src="web/js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="web/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

  
</head>
<body data-container="body" class="cms-home cms-index-index page-layout-1column" aria-busy="false" style="font-size: 14px; font-family: Arial, sans-serif;">
    <div class="page-wrapper">
        <?php
            include('modules/header.php');
            include('modules/home.php');
            include('modules/footer.php');
        ?>
    </div>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
          
          for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
          }
        });

        $('#btn-display-grid').on('click', function() {
            $('#display-grid').show();
            $('#display-list').hide();
            $(this).css("color", "#0157AE");
            $('#btn-display-list').css("color", "#6C6C6C");
        })
        $('#btn-display-list').on('click', function() {
            $('#display-list').show();
            $('#display-grid').hide();
            $(this).css("color", "#0157AE");
            $('#btn-display-grid').css("color", "#6C6C6C");
        })
    </script>
</body>
</html>
