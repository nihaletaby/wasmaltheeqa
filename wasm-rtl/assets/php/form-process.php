<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "الاسم مطلوب";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "الايميل مطلوب";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "الموضوع مطلوب";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// Phone Number
if (empty($_POST["phone_number"])) {
    $errorMSG .= "رقم الجوال مطلوب";
} else {
    $phone_number = $_POST["phone_number"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "الرسالة مطلوبة";
} else {
    $message = $_POST["message"];
}


// Update here your email address
$EmailTo = "info@wasmaltheeqa.com";

$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Phone Number: ";
$Body .= $phone_number;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "تم الارسال بنجاح";
}else{
    if($errorMSG == ""){
        echo "هناك خطأ ما :(";
    } else {
        echo $errorMSG;
    }
}

?>