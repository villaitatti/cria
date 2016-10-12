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
