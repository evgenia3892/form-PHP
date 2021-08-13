<?php
//var_dump($_REQUEST); die;
// okna-komfort39@mail.ru
if(isset($_POST['submit'])){
    $to = "euschevlyakova@yandex.ru"; // this is your Email address https://stackoverflow.com/   questions/18379238/send-email-with-php-from-html-form-on-submit-with-the-same-script
    $from = "zaiavka@okna-komfort39.ru"; // this is the sender's Email address
    $user = $_POST['user'];
    $phone = $_POST['phone'];
    $subject = "Заявка";    
    $message = "\n\nИмя:" . $user . "\n\nТелефон:" . $phone;
    $headers = "From:" . $from;    
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "
    <html>
    <head>
    <style>
        * {
      -moz-animation: fadein 2s; /* Firefox */
    -webkit-animation: fadein 2s; /* Safari and Chrome */
    -o-animation: fadein 2s; /* Opera */
    }
    @keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-moz-keyframes fadein { /* Firefox */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-o-keyframes fadein { /* Opera */
    from {
        opacity:0;
    }
    to {
        opacity: 1;
    }
}
    </style>
    </head>
    <body style='background-image:url(legal scales.jpg);background-size:cover; '>
    <p style='display:inline-block;  position: absolute;
  left: 50%;
  top: 50%;transform: translate(-50%, -50%);font-size: 200%;
color: white;
padding: 20px;
background-color: rgba(105,105,105,0.7);
border-radius: 25px;
font-family: Arial;
text-align: center;'>Спасибо "  . $user . "<br> В скором времени мы с вами свяжемся</p>
    </body></html>






















    ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>