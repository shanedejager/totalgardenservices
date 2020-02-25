<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php Loader::element('footer_required'); ?>

<div class="footer">
    <div class="container">
        <div class="row pad-top pad-bottom">
            <div class="col-sm-4">
                <?php
                $a = new GlobalArea('Footer 1');
                $a->display($c);
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                $a = new GlobalArea('Footer 2');
                $a->display($c);
                ?>
            </div>
            <div class="col-sm-4">
                <?php
                $a = new GlobalArea('Footer 3');
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
</div>
<div class="grass-footer">
    <div class="container">
        <div class="row pad-top">
            <div class="col-sm-12">
                <?php
                $a = new GlobalArea('Footer 4');
                $a->display($c);
                ?>
            </div>
        </div>
    </div>
       
</div>


</div><!-- tgs wrapper -->

<script src="<?php echo $this->getThemePath(); ?>/js/bootstrap.min.js"></script>
</body>
</html>
