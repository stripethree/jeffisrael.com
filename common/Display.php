<?php
  class Display {
  
    public static function closeContainer() {
?>
    <!--
      <footer>
        <p class="pull-right muted">
          <?php $startYear = 2016; ?>
          &copy; jeff israel <?php echo $startYear; ?>
          <?php if ( date( "Y", time() ) != $startYear ) { echo " - ".date( "Y", time() ); } ?>
        </p>        
      </footer>
    -->

    </div><!--/.fluid-container-->
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/c0f9739473.js"></script>
<?php
    }

    public static function closeBody() {
?>
  </body>
</html>
<?php
    }

    public static function openBody() {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>jeff israel dot com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <style type="text/css">
      html {
        overflow-y: scroll;
      }
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .centered {
        text-align:center
      }   
    </style>

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?php echo baseHref; ?>img/favicon.png">

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo baseHref; ?>img/touch-icon-iphone-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo baseHref; ?>img/touch-icon-iphone-114.png" />  
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo baseHref; ?>img/touch-icon-ipad-144.png" />  
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo baseHref; ?>img/touch-icon-ipad-144.png" />
    <link rel="apple-touch-icon" href="<?php echo baseHref; ?>img/apple-touch-icon.png">
  </head>

  <body>
<?php
    }

    public static function openContainer() {
?>
    <div class="container-fluid">
<?php
    }
  }
?>
