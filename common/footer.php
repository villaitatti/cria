</div>
</div>
	</div>

	<div id="footer">

		
		<div class="row">
			<div class="footer-menu large-4 columns">
			

				
				
<!-- about menu----	<h4>About</h4>
		<ul class="link-list">
			<li><a href="http://omeka.org" id="omeka-logo" name="omeka-logo">Powered by Omeka</a></li> <li> <a href="http://omeka.org/codex/">Documentation</a></li> <li> <a href="http://omeka.org/forums/">Support Forums</a></li>
		</ul>
		</div>


-->

				
				<!--- main menu ---
				<div class="footer-menu large-4 columns">
			<h4>Menu</h4>
			<ul class="link-list"
			<?php
echo public_nav_main();
?></ul>
			</div>
			
-->
				
			
					<div class="">
		<h4>Search </h4>
				<?php
echo link_to_item_search('More Search Options');
?>
				
<?php
echo search_form(array(
    'show_advanced' => false
));
?>
</div>			
			
			
	</div>
</div>
</div>

<!-- Loading all the foundation js files. It doesn't work if you load them in the head -->
  <?php
echo js_tag('foundation/foundation');
?>
<?php
echo js_tag('foundation/foundation.alert');
?>
  <?php
echo js_tag('foundation/foundation.accordion');
?>
<?php
echo js_tag('foundation/foundation.clearing');
?>
<?php
echo js_tag('foundation/foundation.dropdown');
?>
<?php
echo js_tag('foundation/foundation.equalizer');
?>
<?php
echo js_tag('foundation/foundation.interchange');
?>
<?php
echo js_tag('foundation/foundation.joyride');
?>
<?php
echo js_tag('foundation/foundation.magellan');
?>
<?php
echo js_tag('foundation/foundation.offcanvas');
?>
<?php
echo js_tag('foundation/foundation.orbit');
?>
<?php
echo js_tag('foundation/foundation.reveal');
?>
<?php
echo js_tag('foundation/foundation.slider');
?>
<?php
echo js_tag('foundation/foundation.tab');
?>
<?php
echo js_tag('foundation/foundation.tooltip');
?>
<?php
echo js_tag('foundation/foundation.topbar');
?>
<script>
  $(document).foundation();
</script>