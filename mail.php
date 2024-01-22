
<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$subject = $_POST['sub'];
$message = $_POST['msg'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("recievers_mail_id@xyz.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>
I am writing to express my interest in the online moderation position as advertised. I am confident in my ability to contribute effectively to your team and ensure a positive online experience for users.I propose an hourly rate of $7-$10.I believe this reflects my skills and experience in the field and is competitive within the industry.I am pleased to provide references upon request. My previous employers and colleagues can attest to my dedication, reliability, and proficiency in handling online moderation tasks. Please let me know if you would like to receive a list of references to support my application.Regarding shift preferences, I am flexible and open to discussion but my preference is (time ) 
I am excited about the opportunity to contribute to your company's success and ensure a safe and enjoyable online environment for users.

https://www.onlinemoderation.com/moderationjobs/?ref=nodesk