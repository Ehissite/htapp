<?php

if (isset($_POST['SendInq']))
{
    $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $subject = trim(stripslashes(htmlspecialchars($_POST['subject'])));
    $message = trim(stripslashes(htmlspecialchars($_POST['message'])));
    

    
        $sql = "insert into inquiry (name,email,subject,message) values ('$name','$email','$subject','$message')"; 
        $result = $conn->query($sql); 
        if ($result) {
            echo "
            <script>
                alert('Success! Message sent');
                window.location.href = '';
            </script>
            ";
        }
    
}

?>