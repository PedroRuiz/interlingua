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
        <meta name="description" content="<?=(isset($description)) ? $description : NULL;?>">
        <meta name="author" content="@pedroruizhidalg">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
        
        <link rel="icon" href="bootstrap/favicon.ico">
    
        <title><?=(isset($title)) ? $title : 'Interlingua';?></title>
    
        <!-- Bootstrap core CSS -->
        <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
        
       
    
        <!-- Custom styles for this template -->
        <link href="<?=base_url('assets/bootstrap/dist/css/carousel.css')?>" rel="stylesheet">
      </head>
      <body>
    
        <?php $this->load->view('inc/menu.php');?>
        