        <nav class="navbar navbar-static-top navbar-light bg-faded">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="<?=base_url()?>" class="navbar-brand">Interlingua</a>
            </div>
            
            <ul class="nav navbar-nav">
              
              <li class="nav-item <?=(isset($home_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url(),'Home'); ?>
              </li>
              
              <li class="nav-item <?=(isset($information_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('information'),'Information'); ?>
              </li>
              <li class="nav-item <?=(isset($traductiones_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('traductiones'),'Traductiones'); ?>
              </li>
              
              <li class="nav-item <?=(isset($contactar_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('contactar'),'Contactar'); ?>
              </li>
              
              <li class="nav-item <?=(isset($leger_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('leger'),'Leger'); ?>
              </li>
              
              <li class="nav-item <?=(isset($cercar_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('cercar'),'Dictionary'); ?>
              </li>
              
              <?php /*
              <li class="nav-item <?=(isset($litteratura_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('litteratura'),'Litteratura'); ?>
              </li>
              
              <li class="nav-item <?=(isset($radio_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('radio'),'Radio'); ?>
              </li>
              
              <li class="nav-item <?=(isset($juniores_active)) ? 'active' : NULL?>">
                <?php echo sprintf('<a class="nav-link" href=%s>%s</a>',base_url('juniores'),'Juniores'); ?>
              </li>
              */?>
            </ul>
          </div>
      </nav>