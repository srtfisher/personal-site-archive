<?php
/**
 * The Backend Request for submitting the contact form
**/

@define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
if (! IS_AJAX) exit;

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
wp_mail('srtfisher+contact@gmail.com', 'Contact Form: '.$_POST['subject'], $msg);

echo json_encode(array(
    'status'    => 'ok',
));