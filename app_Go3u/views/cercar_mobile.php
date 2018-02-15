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
    <meta name="description" content="">
    <meta name="author" content="">
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
        <p class="lead blog-description">Dictionario Interlingua - Anglese.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        
        <div class="col-sm-8 blog-main">
            <?php if ($mobile) :?>
            <a href="<?=current_url().'#instructiones'?>">Vider instructiones infra</a>
            <?php endif;?>
            <?= form_open('cercar')?>
            <div class="form-group">
              <label for="terminus">Termino*</label>
              <input type="text" value="<?=set_value('terminus')?>" name="terminus" class="form-control form-control-lg" id="terminus" aria-describedby="emailHelp" placeholder="Introduce termino">
              <?=form_error('terminus');?>
             
                <button type="submit" class="btn btn-primary">Inviar</button>
              
              <?=form_close()?>
              <?php /* <p><small>(Process in <strong><?php $this->benchmark->mark('fin'); echo $this->benchmark->elapsed_time('initio', 'fin');?></strong> secundes)</small></p>*/?>
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
        
        <a name="instructiones"></a>
        <div class="col-sm-4">
          <div>
              <h3>Instructiones</h3>
              <ul>
                <li>Non distinguibile inter literas <strong>capital e minusculas.</strong>.</li>
                <li><strong>Cercar prefixos</strong>: prefixo post tracto de union. Ex. 'dis-'.</li>
                <li><strong>Cercar suffixos</strong>: suffixo ante tracto de union. Ex. '-ada'.</li>
                <li><strong>Cercar radices</strong>: inter simple tracto de union. Ex. -cerot-.</li>
                <li><strong>Cercar expressiones</strong>: inter simple virgulas. Ex. 'abonar se'.</li>
              </ul>
          </div>
          <div>
              <h3>Altere information</h3>
              <ul>
                <li><strong><a href="<?=base_url('cercar/prefix')?>" title="Cercar tote prefixos">Prefixos</a></strong></li>
                <li><strong><a href="<?=base_url('cercar/radices')?>" title="Cercar tote radices">Radices</a></strong></li>
                <li><strong><a href="<?=base_url('cercar/sufix')?>" title="Cercar tote suffixos">Suffixos</a></strong></li>
                <li><strong><a href="<?=base_url('cercar/verbos')?>" title="Cercar tote verbos">Verbos</a></strong></li>
                <li><strong><a href="<?=base_url('cercar/adjectivos')?>" title="Cercar tote verbos">Adjectivos</a></strong></li>
                <li><strong><a href="<?=base_url('cercar/expressiones')?>" title="Cercar tote expressiones">Expressiones</a></strong></li>
              </ul>
          </div>
          <small>Copyright &copy; dictionario IED</small><br>
          <small>Copyright &copy; xml @pedroruizhidalg</small>
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
