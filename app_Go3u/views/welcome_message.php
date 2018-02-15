<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="ia">
  <?php $this->load->view('inc/carousel.head.php'); ?>


    <?php $this->load->view('inc/carousel.carousel.php'); ?>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <?php $this->load->view('inc/carousel.marketing.php'); ?>
    
    <?php $this->load->view('inc/features.php');?>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php $this->load->view('inc/footer.php'); ?>
     <?php /*form action="http://interlingua.com/ied/cerca" method="get" id="your_form_id">
<div><div class="form-item">
 <input maxlength="255" name="edit[keys]" id="edit-keys" size="20" value="" class="form-text" type="text">
</div>
<input name="op" value="Cerca" class="form-submit" type="submit">
<div class="form-item">
 
</div>
<input name="edit[form_id]" id="edit-your-form-id" value="your_form_id" type="hidden">

</div></form>*/?>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="<?=base_url('assets/bootstrap/assets/js/vendor/jquery.min.js')?>"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="<?=base_url('assets/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url('assets/bootstrap/js/ie10-viewport-bug-workaround.js')?>"></script>
  </body>
</html>
