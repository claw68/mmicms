<div id="navigation">
<?php foreach($navigation as $nav)
{ ?>
	<a href="<?php echo $nav->url; ?>"><?php echo $nav->label; ?></a>
<?php 
} ?>
</div>
