<?php
    $first_Name=$first_Name;
    $last_Name=$last_Name;
    $password=$password;
	
	$mailto = $email;
    $mailSub = "Notification For Account Information";
	$message="
	
	<table border='1' width='590' align='center' cellpadding='2px' cellspacing='2' >
			<tr>
				<td align='left' style='color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;'>
				<!-- section text ======-->
				<h2 style=''>
					Dear ".$first_Name." <hr/>
					Your Account informatiom
					
				</h2>
				
				<h6 style=''>
					<b> First Name : </b>".$first_Name."
				</h6>
				<h6 style=''>
					<b> Last Name : </b>".$last_Name."
				</h6>
				<h6 style=''>
					<b> Full Name : </b>".$first_Name." ".$last_Name."
				</h6>
				<h6 style=''>
					<b> Your Email Address: </b>".$mailto."
				</h6>
				<h6 style=''>
					<b> Your  Password: </b>".$password."
				</h6>
				<p>Now you can login to the system</p>
				<a href='http://localhost/lawyermanagementsystem/login.php'>Login Here</a>
			</td>
		</tr>
	</table>

	
	"
	;
    $mailMsg = $message;
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer();
	
	$mail->SMTPOptions = array(
    'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
    )
	);
	$mail ->IsSmtp();
	$mail ->SMTPDebug = 0;
	$mail ->SMTPAuth = true;
	$mail ->SMTPSecure = 'ssl';
	$mail ->Host = "smtp.gmail.com";
	// $mail ->Port = 465; // or 587
	$mail ->Port = 465; // or 587
	$mail ->IsHTML(true);
	$mail ->Username = "1000514@daffodil.ac";
	$mail ->Password = "00159095 ";
	$mail->setFrom('1000514@daffodil.ac', 'Account Information');
	//$mail->addReplyTo('lunchforyou48@gmail.com', 'Lunch4U');
	$mail ->Subject = $mailSub;
	$mail ->Body = $mailMsg;
	$mail ->AddAddress($mailto);
	
	if(!$mail->Send())
	{
		//echo "Mail Not Sent";
	}
	else
	{
		//echo "Mail Sent";
	}	
