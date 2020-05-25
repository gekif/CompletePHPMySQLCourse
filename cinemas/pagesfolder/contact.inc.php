<h1 id="request">Movie Premier Booking Form</h1>
<p class="req">Interested in Movie Premier at NY Cinema? Please complete and submit the following form to the Booking Office. One of our representatives will send you an information package tailored to the field(s) of Premier that interest you. Please indicate whether you would like additional information or not</p>

<?php
// Initialize variables to null.
$nameError = "";
$emailError = "";
$genderError = "";
$websiteError = "";

//On Submitting form, below function will execute
//Submit Scope starts from here
if (isset($_POST['submit'])) {
    if (empty($_POST["name"])) {
        $nameError = "Name is Required";

     } else {
        $name = test_user_input($_POST["name"]);

        // check Name only contains letters and whitespace
        if (!preg_match("/^[A-Za-z\. ]*$/", $name)) {
            $nameError = "Only Letters and white space are allowed";
        }
     }

    if (empty($_POST["email"])) {
        $emailError = "Email is Required";
    } else {
        $email = test_user_input($_POST["email"]);

        // check if e-mail address syntax is valid or not
        if (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/",$email)) {
            $emailError = "Invalid Email Format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is Required";
    } else {
        $gender = test_user_input($_POST["gender"]);
    }

    if (empty($_POST["website"])) {
        $websiteError = "Website is Required";
    } else {
        $website = test_user_input($_POST["website"]);

        // check Website address syntax is valid or not
        if (!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website)) {
            $websiteError = "Invalid Webside Address Format";
        }
    }

    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) &&!empty($_POST["website"])) {
        if ((preg_match("/^[A-Za-z\. ]*$/", $name) == true) &&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email) == true)&&(preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website) == true)) {
            $emailTo = "dzulfikar.maulana@gmail.com";
            $subject = "Contact Form";
            $body = " Name : " . $_POST["name"] . " Email : " . $_POST["email"] .
                    " Gender : ". $_POST["gender"] . "Website : " . $_POST["website"] .
                    " Message :: " . $_POST["comment"];
             $sender = "From:dzulfikar.maulana@gmail.com";

            if (mail($emailTo, $subject, $body, $sender)) {
                echo "<h2>" . $_POST['name'] . ",  Your Message Submitted Successfully</h2> <br>";
            } else {
                 echo "<h2>" . $_POST['name'] . " Something Went Wrong :/ Try Again !</h2> <br>";
            }

        } else {
            echo '<span class="Error">* Please Complete & Correct your Form then Try Again*<br><br></span>';
        }
    }
}//Submit Scope  Ends here

//Function to get and throw data to each of the field final variable like Name / Gender etc.
function test_user_input($data) {
	return $data;
}

//php code ends here
?>

<style type="text/css">
input[type="text"],input[type="email"],textarea{
	border:  1px solid dashed;
	background-color: rgb(221,216,212);
	width: 480px;
	padding: .5em;
	font-size: 1.0em;
}
.error {
	color: red;
    font-size: 1.2em;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
}

input[type="submit"]{
 color: white;
    float: right;
    font-size: 1.3em;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    width: 170px;
    height: 40px;
    background-color:  #5D0580;
    border: 5px solid ;
    border-bottom-left-radius: 35px;
   border-bottom-right-radius: 35px;
   border-top-left-radius: 35px;
   border-top-right-radius: 35px;
    border-color: rgb(221,216,212);
      font-weight: bold;
}
.FieldInfo{
     color: rgb(251, 174, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 1.3em;
   

}
.MF{
	color: black;
    font-size: 1.2em;  
font-family: Bitter,Georgia,Times,"Times New Roman",serif;}

</style>

<?php ?>

<form  action="" method="post"> 
<legend>* Please Fill Out the following Fields.</legend>			
<fieldset>
 <span class="FieldInfo">
Name:</span><br>
<input class="input" type="text" Name="name" value="">
<span class="error">*<?php echo $nameError;  ?></span><br>
<span class="FieldInfo">
E-mail:</span><br>
<input class="input" type="text" Name="email" value="">
<span class="error">*<?php echo $emailError; ?></span><br>
<span class="FieldInfo">
Gender:</span><br>
<input class="radio" type="radio" Name="gender" value="Female"><span class="MF">Female</span>
<input class="radio" type="radio" Name="gender" value="Male"><span class="MF">Male</span>
<span class="error">*<?php echo $genderError; ?></span><br>
<span class="FieldInfo">
Website:</span><br>
<input class="input" type="text" Name="website" value="">
<span class="error">*<?php echo $websiteError; ?></span><br>
<span class="FieldInfo">
Message:</span><br>
<textarea Name="comment" rows="5" cols="25"></textarea>
<br>
<br>
<input type="Submit" Name="submit" value="Submit">
   </fieldset>
</form>
