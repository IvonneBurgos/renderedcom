<?php
script('renderedcom', array('script','progressbar','validator'));
style('renderedcom', array('style','bootstrap'));
?>

<div id="app" >
	<div id="app-content" class="row" >
		<div id="app-content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <?php print_unescaped($this->inc('content')); ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <?php print_unescaped($this->inc('progreso')); ?>
            </div>
		</div>
	</div>
</div>
