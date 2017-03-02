<?php
  $username	= htmlentities(stripslashes($_REQUEST['username']));

  if($username == "") {
								
				$name	= htmlentities(stripslashes($_REQUEST['name']));
				$email	= htmlentities(stripslashes($_REQUEST['email']));
				$message	= htmlentities(stripslashes($_REQUEST['message']));

				
				$to = 'info@sitemakers.in';
				
				
				$subject = 'Enquiry from Site Makers';
				
				// message
				 $message = '
				<html>
				<head>
				  <title>Enquiry from Site Makers</title>
				</head>
				<body>
				  <table width="600" border="0" align="center" style="border:#EFEFEF 5px solid; padding:5px; font-family:Arial, Helvetica, sans-serif; font-size:11px; color:#666666">
  <tr>
    <td ><table width="100%" border="0" cellpadding="2" cellspacing="6">
      <tr>
        <td width="50%">Name</td>
        <td>'.$name.'</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>'.$email.'</td>
      </tr>
      <tr>
        <td>Message</td>
        <td>'.$message.'</td>
      </tr>
    </table></td>
  </tr>
</table>
				
				</body>
				</html>
				';
				
				// To send HTML mail, the Content-type header must be set
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				
				// Additional headers
				$headers .= 'To: Site Makers <info@sitemakers.in>' . "\r\n";
				$headers .= 'From: '.$name.'<'.$email.'> ' . "\r\n";
				
				// Mail it
				mail($to, $subject, $message, $headers);
				
				print("<script>window.location='index.php?sent=y';</script>");
				
  }
  else
  {
	  print("<script>window.location='index.php?error=y';</script>");
  }

?>