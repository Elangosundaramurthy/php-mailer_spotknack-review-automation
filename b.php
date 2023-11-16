<!DOCTYPE html>
<html>
<head>
    <title>spotknack</title>
</head>
<body>
    <form method="post" action="">
        <label for="question1">Question 1:</label>
        <input type="text" id="question1" name="question1"><br><br>

        <label for="question2">Question 2:</label>
        <input type="text" id="question2" name="question2"><br><br>

        <label for="question3">Question 3:</label>
        <input type="text" id="question3" name="question3"><br><br>

        <label for="question4">Question 4:</label>
        <input type="text" id="question4" name="question4"><br><br>

        <label for="question5">Question 5:</label>
        <input type="text" id="question5" name="question5"><br><br>

        <label for="question6">Question 6:</label>
        <input type="text" id="question6" name="question6"><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
    include("conn.php");
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $q1=$_POST["question1"];
    $q2=$_POST["question2"];
    $q3=$_POST["question3"];
    $q4=$_POST["question4"];
    $q5=$_POST["question5"];
    $q6=$_POST["question6"];
    $sqli="INSERT INTO question (question_1,question_2,question_3,question_4,question_5,question_6)
    VALUES  ('$q1','$q2','$q3','$q4','$q5','$q6')";
   if($conn->query($sqli)==TRUE){
    echo "data insterted";
   }else{
    echo "error".$sqli."<br>".
    $conn->error;
   }
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\php\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\php\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\php\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(true);
//if(isset($_POST["submit"])){
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'es7741140@gmail.com';
    $mail->Password   = 'yodvoyxnojimeqtv';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    
    $mail->setFrom('es7741140@gmail.com', 'elango');
    $mail->addAddress('elango.sofficial@gmail.com', 'elango_2');

    $mail->isHTML(true);
    $mail->Subject = 'main frame';
    $mail->Body    = 'main frame got sent</b>';
    
    $mail->send();
    echo 'Mail has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//}
    ?>
</body>
</html>