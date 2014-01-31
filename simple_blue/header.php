<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
  //response messages
	$not_human       = "Human verification incorrect.";
	$missing_content = "Please supply all information.";
	$email_invalid   = "Email Address Invalid.";
	$message_unsent  = "Message was not sent. Try Again.";
	$message_sent    = "Thanks! Your message has been sent.";
 
	//user posted variables
	$name = $_POST['message_name'];
	$email = $_POST['message_email'];
	$message = $_POST['message_text'];
	$human = $_POST['message_human'];
 
	//php mailer variables
	$to = get_option('admin_email');
	$subject = "Someone sent a message from ".get_bloginfo('name');
	$headers = 'From: '. $email . "rn" .
	'Reply-To: ' . $email . "rn";
	
	if(!$human == 0){
  if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
  else {
 
   //validate email
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	my_contact_form_generate_response("error", $email_invalid);
	else //email is valid
	{
  //validate presence of name and message
  if(empty($name) || empty($message)){
  my_contact_form_generate_response("error", $missing_content);
}
else //ready to go!
  //send email
  $sent = wp_mail($to, $subject, strip_tags($message), $headers);
if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
	}
  }
}
	else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

	global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
 
  }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<META NAME="description" CONTENT="Official site of Eshcole Peets">
<META NAME="copyright" CONTENT="(c) 2013 Eshcole.com">
<META NAME="Title" CONTENT="Eshcole Peets Portfolio...Blog....Life">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link  rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<title>Eshcole.com <?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

<header>
 <a href="<?php bloginfo('wpurl') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ep.png" alt="The site logo which is the owner's initials. E.P. and a link to the homepage."/></a>
 <ul>
  <li><a href="http://www.facebook.com/epeets" data-title="FaceBook" target="new"></a></li>
  <li><a href="http://www.linkedin.com/pub/eshcole-peets/4/aa4/309/" data-title="LinkedIn" target="new"></a></li>
  <li><a href="http://www.pinterest.com/eshcolep/web-design/" data-title="Pinterest" target="new"></a></li>
  <li><a href="http://www.youtube.com/epeets" data-title="YouTube" target="new"></a></li>
 </ul>
</header><!--header--->