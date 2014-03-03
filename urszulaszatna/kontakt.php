<div class="left">
	<h2>KONTAKT</h2>
	<div class="contact">
		<p>Biuro Porad Prawnych</p>
		<p>ul. Kłodzka 27</p>
		<p>57-402 Nowa Ruda</p>
		<p>Godziny przyjęć: 9:00 – 14:00</p>
		<p>Tel. 500 02 39 36</p>
		<p>e-mail: 
			<script language="JavaScript" type="text/javascript">
				var email1 = "porady";
				var email2 = "@";
				var email3 = "urszulaszatna.pl";
				document.write('<a href=\"mailto:' + email1 + email2 + email3 + '\">');
				document.write(email1 + email2 + email3);
				document.write('</a>');
			</script>
		</p>
	</div>
	<p class="center">Świadczone usługi wykonujemy zarówno w siedzibie Firmy, jak również w miejscach dogodnych dla Klienta.</p>
</div>
<div class="right">
	<h2>FORMULARZ KONTAKTOWY</h2>
	<?
		$validation_message = '';
		$sending_message = '';
		$sent = false;
		if (!empty($_POST['send'])) {
			$email = $_POST['email'];
			if (!check_email_address($email))
				$validation_message = "Niepoprawny adres e-mail.";
			$message = $_POST['message'];
			if (strlen($message) == 0)
				$validation_message = "Nie wypełniono wszystkich wymaganych pól.";
			if (strlen($validation_message) == 0) {
				$name = $_POST['name'];
				if (strlen($name) == 0)
					$name = "Klient ze strony www";
				require_once('class.phpmailer.php');
				$mail = new PHPMailer(true);
				$mail->SetFrom($email, $name);
				$mail->AddAddress("porady@urszulaszatna.pl", "Urszula Szatna");
				$mail->Subject = "Biuro Porad Prawnych - formularz kontaktowy";
				$mail->MsgHTML($message);
				$mail->CharSet = "UTF-8";
				
				try {
					if ($mail->Send())
						$sent = true;
				} catch (Exception $e) {
					$validation_message = "Niestety wiadomość nie mogła zostać wysłana. Prosimy o wysłanie wiadomości wysyłając e-mail.";
				}	
			}
		}
	?>
	<?if (!$sent):?>
		<form method="post">
			<?if (strlen($validation_message) > 0):?>
				<p class="red"><?=$validation_message?></p>
			<?endif?>
			<p class="label">Imię i nazwisko (opcjonalne):</p>
			<p><input name="name" size="30" value="<?=$_POST['name']?>"/></p>
			<p class="label">Adres e-mail:</p>
			<p><input name="email" size="30" value="<?=$_POST['email']?>"/></p>
			<p class="label">Wiadomość:</p>
			<p><textarea name="message" rows="5" cols="30"><?=$_POST['message']?></textarea></p>
			<p class="label" style="margin-left: 100px;"><input name="send" type="submit" value="Wyślij"/></p>
		</form>
	<?else:?>
		<p class="green">Wiadomość została wysłana.</p>
	<?endif?>
</div>

<?
	function check_email_address($email) {
	  // First, we check that there's one @ symbol, 
	  // and that the lengths are right.
	  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
	    // Email invalid because wrong number of characters 
	    // in one section or wrong number of @ symbols.
	    return false;
	  }
	  // Split it into sections to make life easier
	  $email_array = explode("@", $email);
	  $local_array = explode(".", $email_array[0]);
	  for ($i = 0; $i < sizeof($local_array); $i++) {
	    if
	(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
	      return false;
	    }
	  }
	  // Check if domain is IP. If not, 
	  // it should be valid domain name
	  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
	    $domain_array = explode(".", $email_array[1]);
	    if (sizeof($domain_array) < 2) {
	        return false; // Not enough parts to domain
	    }
	    for ($i = 0; $i < sizeof($domain_array); $i++) {
	      if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|↪([A-Za-z0-9]+))$", $domain_array[$i])) { 
	      	return false;  	
      		}
	    }
	  }
	  return true;
	}

?>