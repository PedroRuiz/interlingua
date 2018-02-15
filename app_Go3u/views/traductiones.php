<!DOCTYPE html>
<html lang="ia">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45947458-7"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'UA-45947458-7');
      </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <?php foreach($files as $file) :?>
      <meta content="description" content="<?=$file['taxon']?>">
    <?php endforeach;?>
    <meta content="description" content="Interlingua">
    <meta name="author" content="Pedro Ruiz Hidalgo">
    <link rel="icon" href="../../favicon.ico">

    <title>Interlingua | Archivo <?=ucfirst($archivo)?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    
    <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
  </head>


  <body>

    <?php $this->load->view('inc/menu.php',array('traductiones_active'=>TRUE))?>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?=ucfirst($archivo)?></h1>
        <p class="lead blog-description">Nos ha iste traductiones.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php foreach($files as $file) : ?>
            <h2><a href="<?=$file['href']?>"><?=ucfirst(str_replace('_',' ',$file['name']))?></a></h2>
            <p>
                Data: <strong><?=$file['date']?></strong><br>
                Typo: <strong><?=$file['typo']?></strong><br>
                Taxinomia: <strong><?=$file['taxon']?></strong><br>
            </p>
        <?php endforeach;?>
          
         <br><br><br>

          

        </div><!-- /.blog-main -->
<?php /*
        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
*/?>
      </div><!-- /.row -->
        <?php $this->load->view('inc/footer')?>
    </div><!-- /.container -->

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/bootstrap/dist/js/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/bootstrap/dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
