<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE ?>">

    <head>

        <?php Loader::element('header_required'); ?>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/bootstrap.css" />
        <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/main.css" />
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/css/utility.css" />
        <?php
      $c = Page::getCurrentPage();
      $cp = new Permissions($c);
      if (is_object($cp) && ($cp->canWrite() || $cp->canAddSubContent() || $cp->canAdminPage())) { ?>
<style type="text/css">
.navbar{position:relative;z-index: 0}
</style>
<?php }   ?>


    </head>

    <body>

        <!--start main container -->
        <div class="tgs_wrapper">

            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    
                    
                   
                    <div class="collapse navbar-collapse" style="float:left">
                        <?php
$bt = BlockType::getByHandle('autonav');
$bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom'
$bt->controller->displayPagesCID = Collection_ID_Number; // if display pages is set ‘custom’
$bt->controller->orderBy = 'display_asc'; // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc' 
$bt->controller->displaySubPages = 'none'; //none', 'enough', 'enough_plus1', 'all', 'custom' 
$bt->controller->displaySubPageLevels = ''; //'all', 'none', 'enough', 'enough_plus1', 'custom' 
$bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
$bt->render('templates/bootstrap'); // for template 'templates/template_name'
?>
                        
                    </div><!--/.nav-collapse -->
                    <div class="navbar-header" style="float:right">
                        
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                         <a class="navbar-brand email" href="mailto:dennis@totalgardenservices.com"><img style="height:25px;width:auto" src="<?php echo $this->getThemePath(); ?>/img/email.png"> Email</a>
                    <a class="navbar-brand phone" href="tel:+441202917271"><img style="height:25px;width:auto" src="<?php echo $this->getThemePath(); ?>/img/phone.png"> 01202 971271</a>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row pad-top pad-bottom">
                    <div class="col-sm-5"><img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/img/logo.png"></div>
                    <div class="col-sm-7">
                        <?php  
			$a = new GlobalArea('Strapline');
			$a->display($c);
			?>
                    </div>
                </div>
            </div>
