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
    <meta name="description" content="Contacto">
    <meta name="author" content="Pedro Ruiz Hidalgo">
    <link rel="icon" href="../../favicon.ico">

    <title>Interlingua | Contacta nos</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('assets/bootstrap/dist/css/jumbotron.css')?>" rel="stylesheet">
    
    <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
  </head>

  <body>

    <?php $this->load->view('inc/menu',array('contactar_active'=>'active'))?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-1" style="color:#FFF">Contacta nos!</h1>
        <h2 style="color:#FFF">Le plus simple modo de initiar un contacto con nos.</h2>
        
      </div>
    </div>
<br>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8">
          <h2>Formulario de contacto</h2>
          <?= form_open('contactar')?>
            <div class="form-group">
              <label for="email">Email*</label>
              <input type="email" value="<?=set_value('email')?>" name="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="Introduce email">
              <?=form_error('email');?>
              <small id="emailHelp" class="form-text text-muted">*Nos nunquam compartira tu direction de email.</small>
            </div>
            <div class="form-group">
              <label for="nomine">Nomine</label>
              <input type="text" value="<?=set_value('nomine')?>" name="nomine" class="form-control form-control-lg" id="nomine" placeholder="Introduce tu nomine">
              <?=form_error('nomine');?>
            </div>
            <div class="form-group">
              <label for="nominefamilia">Nomine de familia</label>
              <input type="text" value="<?=set_value('nominefamilia')?>" name="nominefamilia" class="form-control form-control-lg" id="nominefamilia" placeholder="Introduce tu nomine de familia">
              <?=form_error('nominefamilia');?>
            </div>
            <div class="form-group">
              <label for="textarea">Texto de Contacto</label>
              <textarea class="form-control form-control-lg" name="textarea" id="textarea" rows="3"><?=set_value('textarea')?></textarea>
              <?=form_error('textarea');?>
            </div>
            <button type="submit" class="btn btn-primary">Inviar</button>
          <?=form_close()?>
        </div>
        
      </div>

      <hr>

     
        <?php $this->load->view('inc/footer')?>
      
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>');</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
