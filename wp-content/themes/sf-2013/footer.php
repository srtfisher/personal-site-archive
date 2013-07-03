<!-- Footer -->
<footer>
<div class="container">
    <div class="row">
        <div class="span6">
            <ul class="clearfix">
                <li><a href="http://twitter.com/srtfisher" target="_blank">Twitter</a></li>
                <li><a href="http://linkedin.com/in/srtfisher" target="_blank">LinkedIn</a></li>
                <li><a href="http://facebook.com/talking.with.sean" target="_blank">Facebook</a></li>
            </ul>
        </div>
        
        <div class="span5" style="text-align:right;">
            &copy; <?=date('Y')?> <a href="<?php echo home_url(); ?>">Sean Fisher</a>
        </div>
    </div>
    
    <div class="final-quote">
        <p>A man should look for what is, and not for what he thinks should be.</p>
        <cite>Albert Einstein</cite>
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
