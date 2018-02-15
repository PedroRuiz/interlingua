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
    <meta name="description" content="dictionario de interlingua">
    <meta name="author" content="Pedro Ruiz Hidalgo">
    <link rel="icon" href="../../favicon.ico">

    <title>Interlingua | <?=$titulo?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    
    <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
  </head>


  <body>

    <?php $this->load->view('inc/menu.php',array('cercar_active'=>TRUE))?>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Dictionario</a></h1>
        <p class="lead blog-description">Dictionario official interlingua-anglese.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        

        <div class="col-sm-8 blog-main">
            
            <?= form_open('cercar')?>
            <div class="form-group">
              <label for="terminus">Termino*</label>
              <input type="text" value="<?=set_value('terminus')?>" name="terminus" class="form-control form-control-lg" id="terminus" aria-describedby="emailHelp" placeholder="Introduce termino">
              <?=form_error('terminus');?>
             
                <button type="submit" class="btn btn-primary">Inviar</button>
              
              <?=form_close()?>
            
              <?php if( isset($prefix) ): ?>
                    <?php if (isset($result)): ?>
                  
                  <?php foreach($result as $res):?>
                    <h1><?=ucfirst($res['interlingua'])?></h1>
                    <p><?=$res['anglese']?></p>
                  <?php endforeach;?>
                <?php endif;?>
              <?php else: ?>
                <?php if (isset($result)): ?>
                  <h1><?=ucfirst($result[0]['interlingua'])?></h1>
                  <?php foreach($result as $res):?>
                    
                    <p><?=$res['anglese']?></p>
                  <?php endforeach;?>
                <?php endif;?>
              <?php endif;?>
              <br><br><br>

          

            </div>
        </div>
        
        <div class="col-sm-4">
              <h3>Instructiones</h3>
              <ul>
                <li>Non distinguibile inter literas <strong>capital e minusculas.</strong>.</li>
                <li><strong><a href="<?=base_url('cercar/prefix')?>" title="Cercar tote prefixos">Cercar prefixos</a></strong>: prefixo post tracto de union. Ex. 'dis-'.</li>
                <li><strong><a href="<?=base_url('cercar/sufix')?>" title="Cercar tote suffixos">Cercar suffixos</a></strong>: suffixo ante tracto de union. Ex. '-ada'.</li>
                <li><strong><a href="<?=base_url('cercar/radices')?>" title="Cercar tote radices">Cercar radices</a></strong>: inter simple tracto de union. Ex. -cerot-.</li>
                <li><strong><a href="<?=base_url('cercar/expressiones')?>" title="Cercar tote expressiones">Cercar expressiones</a></strong>: inter simple virgulas. Ex. -cerot-.</li>
              </ul>
        </div>
        
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
