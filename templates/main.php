<?php
script('renderedcom', array('script','progressbar','php_file_tree'));
style('renderedcom', array('default','style','bootstrap'));
?>

<div id="app" >
	<div id="app-content" class="row" >
		<div id="app-content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php print_unescaped($this->inc('content')); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <?php print_unescaped($this->inc('progreso')); ?>
            </div>
		</div>
	</div>
</div>
