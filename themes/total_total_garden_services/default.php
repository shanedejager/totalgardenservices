<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
            <?php  
			$a = new Area('Slider');
			$a->display($c);
			?>
        </div>
        
    </div>
    <div class="row pad-top">
<!--        <div class="col-sm-3">
            <img class="img-responsive" src="<?php echo $this->getThemePath(); ?>/img/logo2.png">
        </div>-->
        <div class="col-sm-12">
            <?php  
			$a = new Area('Main');
			$a->display($c);
			?>
        </div>
    </div>
    <div class="row pad-top">
        <div class="col-sm-4 pad-bottom">
            <?php  
			$a = new Area('Box 1');
			$a->display($c);
			?>
        </div>
        <div class="col-sm-4 pad-bottom">
            <?php  
			$a = new Area('Box 2');
			$a->display($c);
			?>
            
        </div>
        <div class="col-sm-4 pad-bottom">
            <?php  
			$a = new Area('Box 3');
			$a->display($c);
			?>
        </div>
    </div>
</div>

<?php $this->inc('elements/footer.php'); ?>