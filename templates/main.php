<?php
script('renderedcom', array('script','progressbar','php_file_tree'));
style('renderedcom', array('bootstrap', 'font-awesome.min','style'));
?>

<div id="app" >
	<div id="app-content" class="row" >
		<div id="app-content-wrapper" class="col-xs-12 col-sm-12 col-md-12">
         <div id="job-nav" class="sidenav-left">
				<div class="user-image">
					<i class="fa fa-user-circle" aria-hidden="true"></i>
				</div>
				<p id="userNameFront"><?php p($_['user']);?></p>
				<?php print_unescaped($this->inc('part.navigation')); ?>
         </div>
         <div class="render-form">
         	<?php print_unescaped($this->inc('content')); ?>
         </div>
		</div>
	</div>
</div>
