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
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email)) {
            $emailError = "Invalid Email Format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderError = "Gender is Required";
    } else {
        $gender =test_user_input($_POST["gender"]);

    }

    if (empty($_POST["website"])) {
        $websiteError = "Website is Required";
    } else {
        $website = test_user_input($_POST["website"]);

        // check Website address syntax is valid or not
        if (!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website)) {
            $websiteError = "Invalid Website Address Format";
        }
    }

    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["website"])) {
        if ((preg_match("/^[A-Za-z\. ]*$/", $name) == true) && (preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email) == true) && (preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website) == true)) {
            echo "<h2>Your Submit Information</h2> <br>";
            echo "Name:" . ucwords ($_POST["name"]) . "<br>";
            echo "Email: {$_POST["email"]}<br>";
            echo "Gender: {$_POST["gender"]}<br>";
            echo "Website: {$_POST["website"]}<br>";
            echo "Comments: {$_POST["comment"]}<br>";

            $emailTo = "dzulfikar.maulana@gmail.com";
            $subject = "Contact Form";
            $body = " A person name : " . $_POST["name"]." With the Email : " . $_POST["email"] .
                " have Gender : " . $_POST["gender"] . " have website of: " . $_POST["website"] .
                " Added Comment :: " .$_POST["comment"];
            $Sender = "From:dzulfikar.maulana@gmail.com";

            if (mail($emailTo, $subject, $body, $Sender)) {
                echo "Mail sent successfully!";
            } else {
                echo "Mail not sent!";
            }
        } else {
            echo '<span class="Error">* Please Complete & Correct your Form & Try Again *</span>';
        }
    }
}

//Submit Scope  Ends here
//Function to get and throw data to each of the field final variable like Name / Gender etc.
function test_user_input($data) {
    return $data;
}

//php code ends here
?>


<!DOCTYPE>

<html>
<head>
    <title>Form Validation Project</title>
</head>

<style type="text/css">
    input[type="text"],input[type="email"],textarea{
        border:  1px solid dashed;
        background-color: rgb(221,216,212);
        width: 600px;
        padding: .5em;
        font-size: 1.0em;
    }

    .error{
        color: red;
    }
</style>

<body>
<?php ?>
<h2>Form Validation with PHP.</h2>

<form action="index.php" method="post">
    <legend>* Please Fill Out the following Fields.</legend>
    <fieldset>
        Name:<br>
        <input class="input" type="text" Name="name" value="">
        <span class="error">*<?php echo $nameError;  ?></span><br>
        E-mail:<br>
        <input class="input" type="text" Name="email" value="">
        <span class="error">*<?php echo $emailError; ?></span><br>
        Gender:<br>
        <input class="radio" type="radio" Name="gender" value="Female">Female
        <input class="radio" type="radio" Name="gender" value="Male">Male
        <span class="error">*<?php echo $genderError; ?></span><br>
        Website:<br>
        <input class="input" type="text" Name="website" value="">
        <span class="error">*<?php echo $websiteError; ?></span><br>
        Comment:<br>
        <textarea Name="comment" rows="5" cols="25"></textarea>
        <br>
        <br>
        <input type="Submit" Name="submit" value="Submit Your Information">
    </fieldset>
</form>

</body>
</html>
