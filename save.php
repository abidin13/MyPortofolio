<?php
if(isset($_POST['user_email'])){

include('config.php');

$email = strip_tags($_POST['user_email']);

$sql = 'INSERT INTO subscribers (email) VALUES( "'.$email.'")';
mysql_query($sql);

echo $email;
} else { echo '0'; }
?>

<?php ?>
