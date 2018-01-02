<?php


// specify your email here

$to = 'minds@inspiredmemories.in';



	// Assigning data from $_POST array to variables
    if (isset($_POST['Name'])) { $name = $_POST['Name']; }
    if (isset($_POST['Email'])) { $from = $_POST['Email']; }
    if (isset($_POST['Company'])) { $company = $_POST['Company']; }
    if (isset($_POST['Website'])) { $website = $_POST['Website']; }
    if (isset($_POST['Message'])) { $message = $_POST['Message']; }
	
	// Construct subject of the email
	$subject = 'Workshops Inspired Minds Enquiry ' . $name;

	// Construct email body
	$body_message .= 'Name: ' . $name . "\r\n";
	$body_message .= 'Email: ' . $from . "\r\n";
	$body_message .= 'Phone: ' . $company . "\r\n";
	$body_message .= 'Website: ' . $website . "\r\n";
	$body_message .= 'Message: ' . $message . "\r\n";

	// Construct headers of the message
	$headers = 'From: ' . $from . "\r\n";
	$headers .= 'Reply-To: ' . $from . "\r\n";

	$mail_sent = mail($to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
		window.alert("Sent Successfuly.");
		</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
                    window.alert("Error! Please Try Again Later.");
                </script>
<?php
	} // End else
    
?>
