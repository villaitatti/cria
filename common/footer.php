</div>
</div>
	</div>

    <div id="footer">
        <div class="row">			
<!-- about menu----	<h4>About</h4>
		<ul class="link-list">
			<li><a href="http://omeka.org" id="omeka-logo" name="omeka-logo">Powered by Omeka</a></li> <li> <a href="http://omeka.org/codex/">Documentation</a></li> <li> <a href="http://omeka.org/forums/">Support Forums</a></li>
		</ul>
		</div>		
<!--- main menu ---
		<div class="footer-menu large-4 columns">
		<h4>Menu</h4>
		<ul class="link-list"
		</ul>
		</div>-->
            <div class="footer-menu large-3 columns">
            <?php // echo public_nav_main(); ?>			
                <div>
                    <h6>SEARCH</h6>
                    <?php //echo link_to_item_search('More Search Options'); ?>
                    <?php echo search_form(array('show_advanced' => false));?>
                </div>			
            </div>
            <div class="footer-menu large-3 columns">
            <?php // echo public_nav_main(); ?>			
                <div class="">
                    <h6>PAGES </h6>
                    <div>
                    <ul style="list-style: none;margin-left:0;">
                    <li><a>The Story</a></li>
                    <li><a>The Committee</a></li>
                    <li><a>The Rescue</a></li>
                    <li><a>About</a></li>
                    <li><a>Colophon</a></li>
                    </ul>
                    </div>
                </div>			
            </div>
            <div class="footer-menu large-3 columns">
            <?php // echo public_nav_main(); ?>			
                <div class="">
                    <h6>?</h6>
                </div>			
            </div>
            <div class="footer-menu large-3 columns" style="border-right:1px solid #1e1e1e;">
            <?php // echo public_nav_main(); ?>			
                <div>
                    <h6>CREDITS</h6>
                    
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