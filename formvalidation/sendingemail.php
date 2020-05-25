<?php
$emailTo ="dzulfikar.maulana@gmail.com";
$subject ="testing";
$body ="lets check its working or not using better variable way";
$headers ="From:dzulfikar.maulana@gmail.com";
 
 if (mail($emailTo, $subject, $body, $headers))  {
	echo "Mail sent successfully!";
} else {
					echo "Mail not sent!";
}
?>