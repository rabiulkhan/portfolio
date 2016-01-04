<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Front extends CI_Controller
{
    
    
   
    
    /***ADMIN DASHBOARD***/
    function index()
    {
		$page_data['page_name']='index';
        $this->load->view('frontend/index', $page_data);
    }
	
	function send_mail()
    {
	if($para = "mail"){
		if (isset($_POST['submit'])) {

			$name = $_POST['name'];
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$name = $_POST['comment'];

			if ( $email && $name && $comment ) {
				$to = '';
				$from = '';
				$subject = 'Subject: ' . $_POST['website'] . "\r\n\r\n";
				$message = 'From: ' . $_POST['email'] . "\r\n\r\n" . 'Comment' . $_POST['comment'] . "\r\n\r\n";

				$headers = "From: $from\r\nReply-to: $email";
				$sent = mail($to, $subject, $message, $headers);

				if ($sent) {
					echo 'Your message has been sent.';

				}
			} else {
				echo 'Sorry, there was a problem.';
			}
		}
    }
	}
	
	
    
    
	
}
