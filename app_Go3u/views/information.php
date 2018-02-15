<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="ia">
  <?php $this->load->view('inc/carousel.head.php'); ?>


    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Informationes in linguas national</h2>
            <p class="blog-post-meta">2006-01-10 17:32 <a href="http://www.interlingua.com/taxonomy/term/9">Altere</a></p>

            <p>Clicca al bandiera pro haber informationes de interlingua in tu proprie lingua.</p>
            
          </div><!-- /.blog-post -->

         
        <?php (!isset($national) ? NULL: $this->load->view('national',$national))?>
          
          

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h3>Sub construction</h3>
            <p>Iste pagina es ancora sub construction. Le material ancora non existe in omne linguas.</p>
          </div>
          <div class="sidebar-module">
            <h3>Linguages</h3>
            <ol class="list-unstyled">
              <h4>
              <li><a href="/information/national/anglese/en" title="anglese">Anglese <img src="<?=base_url('assets/image/flags/gb.svg')?>" width="20"></a></li>
              <li><a href="/information/national/arabe/ar" title="anglese">Arabe <img src="<?=base_url('assets/image/flags/iq.svg')?>" width="20"></a></li>
              <li><a href="/information/national/basco/eu" title="euskera">Basco <img src="<?=base_url('assets/image/flags/eusk.svg')?>" width="20"></a></li>
              <li><a href="/information/national/bulgaro/bg" title="bulgaro">Bulgaro <img src="<?=base_url('assets/image/flags/bg.svg')?>" width="20"></a></li>
              <li><a href="/information/national/catalano/cat" title="catalano">Catalano <img src="<?=base_url('assets/image/flags/es-ct.svg')?>" width="20"></a></li>
              <li><a href="/information/national/chinese traditional/zh_hant" title="Chinese traditional">Chinese Traditional <img src="<?=base_url('assets/image/flags/cn.svg')?>" width="20"></a></li>
              <li><a href="/information/national/chinese simplificate/zh_hans" title="Chinese simplificate">Chinese simplificate <img src="<?=base_url('assets/image/flags/cn.svg')?>" width="20"></a></li>
              <li><a href="/information/national/danese/da" title="danese">Danese <img src="<?=base_url('assets/image/flags/dk.svg')?>" width="20"></a></li>
              <li><a href="/information/national/espaniol/es" title="espaniol">Espaniol <img src="<?=base_url('assets/image/flags/es.svg')?>" width="20"></a></li>
              <li><a href="/information/national/estoniano/et" title="estoniano">Estoniano <img src="<?=base_url('assets/image/flags/ee.svg')?>" width="20"></a></li>
              </h4>
            </ol>
          </div>
          
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
 <!-- FOOTER -->
      <?php $this->load->view('inc/footer.php'); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url('assets/bootstrap/assets/js/vendor/jquery.min.js')?>"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?=base_url('assets/bootstrap/assets/js/vendor/holder.min.js')?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('assets/bootstrap/assets/js/ie10-viewport-bug-workaround.js')?>"></script>
  </body>
</html>
