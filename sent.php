<?php
$sendto = "jwilcox09@gmail.com";
$title = "Contact Form";
$name = $_POST['name'];
$email = $_POST['email'];
$why = $_POST['why'];
$comment = $_POST['comment'];
$message = <<<DATA
<strong>Name:</strong> $name <br>
<strong>Email:</strong> $email <br>
<strong>Why:</strong> $why <br>
<strong>Comment:</strong> $comment<br>
DATA;

mail($sendto, $title, $message);

?>
<?php
    echo '<h2>Thanks for getting in touch.</h2>'
?>
<?php echo '<a href="http://gonzogirl.com">Return Home</a>'; ?>

