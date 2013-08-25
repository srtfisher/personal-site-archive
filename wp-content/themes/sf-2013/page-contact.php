<?php
/**
 * The Backend Request for submitting the contact form
**/

@define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if (IS_AJAX OR isset($_POST['is-robot'])) :

	if (! isset($_POST['is-robot']) AND $_POST['is-robot'] !== 'nope') :
	    wp_redirect('/', 301);
	    exit;
	endif;

	if (! isset($_POST['subject']) OR empty($_POST['subject']) OR ! isset($_POST['content']) OR empty($_POST['content'])) :
	    echo json_encode(array('status' => 'error'));
	    exit;
	endif;

	if (! isset($_POST['your-name']) OR empty($_POST['your-name']) OR ! isset($_POST['your-email']) OR empty($_POST['your-email'])) :
	    echo json_encode(array('status' => 'personal-details'));
	    exit;
	endif;

	if (! is_email($_POST['your-email'])) :
	    echo json_encode(array('status' => 'invalid-email'));
	    exit;
	endif;

	$msg = '<p>This is a contact form from your website:<br />
	<br />
	User Details: <br />
	'.$_POST['your-name'].' '.$_POST['your-email'].'<br />
	<br />

	<h3>'.$_POST['subject'].'</h3>

	<p>'.htmlentities($_POST['content']).'</p>';

	add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
	wp_mail('srtfisher+contact@gmail.com', 'Contact Form: '.$_POST['subject'], $msg, [
		'Content-type: text/html',
		'Reply-To: '.$_POST['your-email']
	]);

	if (IS_AJAX)
		echo json_encode(array(
		    'status'    => 'ok',
		));
	else
		die('You are good to go! Hear back soon.');

	return;
endif;

get_header(); ?>
<section class="focus-area super-dark">
	<div class="container">
		<h2 class="leading">Contact Sean</h2>
		<p class="leading">Don't prefer E Mail? I'd love to hear from you &mdash; Call me at <strong>(347) 855-7326</strong> or Skype me at <a href="skype:srtfisher?add">srtfisher</a></p>
	</div>
</section>
<?php
define('SINGLE_PAGE', true);
get_template_part('contact-form', 'page');

get_footer();