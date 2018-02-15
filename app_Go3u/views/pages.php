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
    <?php foreach($meta as $tag):?>
      <meta name="description" content="<?=$tag?>">
    <?php endforeach;?>
    <meta name="description" content="Interlingua">
    <meta name="author" content="Pedro Ruiz Hidalgo">
    <link rel="icon" href="../../favicon.ico">

    <title>Interlingua | <?=$document['contento']['titulo']?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
    
  </head>

  <body>

    <?php $this->load->view('inc/menu.php')?>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?=$document['contento']['titulo']?></h1>
        <p class="lead blog-description">Documento typo:<?=$document['typo']?></p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-6 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?=$document['taxinomia']?></h2>
            <?=date('d-m-Y',strtotime($document['data']))?>
            <?php foreach($document['autores'] as $autor):?>
            <p class="blog-post-meta"><?=$autor['nomine']?><a href="#"></a>
              (<?php if(is_array($document['autores']['autor']['retes'])):?>
              <?php foreach($autor['retes'] as $rete): ?>
              <small><?=$rete?></small>
              <?php endforeach;?>
              <?php else:?>
              <small><?=$document['autores']['autor']['retes']?></small>
              <?php endif;?>
            <?php endforeach;?>
            )</p>
            <?php if(!empty($document['contento']['imagine'])):?>
            <div>
              <img src="<?=$document['contento']['imagine']?>" class="img-responsive img-thumbnail" alt="Responsive image"><hr>
            </div>
            <?php endif;?>
            
            
               <p class="text-justify"><?=$texto?></p>
                
            <div class="row">
              <?php if(isset($document['incatenar'])): ?>
               <?php if( !empty($document['incatenar']['veni'])):?>
                  <div class="col-xs-12 col-sm-6 col-md-8"><a rel="prev" href="<?=$document['incatenar']['veni']?>">Pagina anterior</a></div>
               <?php endif; ?>
               <?php if( !empty($document['incatenar']['vade'])):?>
                  <div class="col-xs-6 col-md-4"><a rel="next" href="<?=$document['incatenar']['vade']?>">Pagina sequente</a></div>
               <?php endif;?>
             <?php endif;?>
          </div>
            <hr><br><br>
        </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>Archivos</h4>
            <ol class="list-unstyled">
            <?php foreach($archivo as $k => $v): $k=ucfirst($k);?>
              <li><a href="<?=base_url('archivo/').$v['year'].'/'.$v['month']?>"><?="$k (".($v['quantity'].')')?></a></li>
            <?php endforeach;?>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
        <br><br><br>

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
