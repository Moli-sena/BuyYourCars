<!DOCTYPE html>
<html lang="en">
<head>

     <title>PHPJabber | Car Dealer Website Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    
    
     
<?=$this->Html->css(['/assets/css/bootstrap.min','/assets/css/font-awesome.min','/assets/css/owl.carousel','/assets/css/owl.theme.default.min','/assets/css/style']);?>
    
<?=$this->fetch('scriptTop');?>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <!-- HOME -->
	 <?=$this->element('header');?>
	 <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
   <?=$this->element('footer');?>
   <?=$this->Html->script(['/assets/js/jquery','/assets/js/bootstrap.min','/assets/js/owl.carousel.min','/assets/js/smoothscroll.js','/assets/js/custom.js']);?>

<?=$this->fetch('scriptBottom');?>
     <!-- SCRIPTS -->
    

</body>
</html>