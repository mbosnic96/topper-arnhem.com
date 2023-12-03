<?php
if(isset($_POST['submit'])){
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  
    $error = "";
  
    //Validation
    if(empty($name)){
        $error .= "Enter name. <br>";
    }elseif(!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
        $error .= "Enter valid name <br>";
    }
    if(empty($title)){
        $error .= "Enter phone. <br>";
    }elseif(!preg_match('/^[0-9]+$/', $title)){
        $error .= "Enter valid phone. <br>";
    }
    if(empty($email)){
        $error .= "Enter email. <br>";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error .= "Enter valid email. <br>";
    }
    if(empty($message)){
        $error .= "Enter message. <br>";
    }
  
    if(empty($error)){
        //Send email
        $to = "info@ecotechelectrical.com.au";
        $subject = "New email - Eco Tech";
        $txt = "New message from " .$name. "<br>". ". Email: " .$email. "<br>". " Number: " .$phone."<br>". " Message: " .$message;
        $headers = "From: " .$email;
  
        mail($to,$subject,$txt,$headers);
        header('Location: ../?page=email_success');
  
    } else {
        echo $error;
    }
}

?>