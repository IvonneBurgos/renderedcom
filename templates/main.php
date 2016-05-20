<?php
script('renderedcom', 'script');
style('renderedcom', 'style');
?>

<div id="app">
	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('part.content')); ?>
		</div>
	</div>
</div>
