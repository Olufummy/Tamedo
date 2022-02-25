<?php include("header.php"); ?>
<?php 
$response = "";
if(isset($_POST["submit_button"]) ) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
	
		mysqli_query($con, "INSERT INTO emails VALUES(
		'0',
		'$name',
		'$subject',
		'$email',
		'$message'
		)");
	
		$response = "<span style='color:dodgerblue;font-size:30px;'>Thank you for contacting us,
		we will respond shortly.</span>";
	}
?>

<section id='contact'>
	<h3>Contact Us</h3>
	<p>Do you hav any comments, questions or remarks? we would love to hear from you
	feel free to send us a message using the form below
	</p>
	
<?php echo $response; ?>
<form method='post' action='contact.php'>
	<input type='text' name='name' placeholder='Full name' class='input_field' required>
		
	<input type='text' name='subject' placeholder='subject' class='input_field' required>
		
	<input type='email' name='email' placeholder='Email' class='input_field' required>
		
	<textarea class='text_field' name='message' placeholder='Enter a message' required>
	</textarea>
		
	<button type='submit' class='contact_send_btn' name='submit_button'>send</button>
</form>
</section>

<?php include("footer.php"); ?>