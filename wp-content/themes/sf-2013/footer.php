<!-- Footer -->
<footer>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <ul class="clearfix">
                <li><a href="http://twitter.com/srtfisher" target="_blank">Twitter</a></li>
                <li><a href="http://linkedin.com/in/srtfisher" target="_blank">LinkedIn</a></li>
                <li><a href="http://facebook.com/talking.with.sean" target="_blank">Facebook</a></li>
            </ul>
        </div>
        
        <div class="col-lg-6 col-md-6 col-sm-6" style="text-align:right;">
            &copy; <?=date('Y')?> <a href="<?php echo home_url(); ?>">Sean Fisher</a>
        </div>
    </div>
</div>
</footer>

<?php wp_footer(); ?>
	<script type="text/javascript"><?php
	// We can hook onto this using `add_action('jquery_load', function() { … });`
	if (has_action('jquery_load')) :
        ?>$(document).ready(function () {
        <?php do_action('jquery_load'); ?>
        });
        <?php
    endif;
    
    // Not wraped in jQuery on document.ready
    do_action('js_footer');
    ?>
    </script>
</body>
</html>
