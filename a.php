<!DOCTYPE html>
<html>
<head>
    <title>Name and Number Form</title>
</head>
<body>
    <h1>Enter Your Name and Number</h1>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
    session_start();
	include("conn.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $numbere = $_POST["number"];
        $sql="insert into start (name,number) VALUES ('$name', '$numbere')";
        if ($conn->query($sql) == TRUE) {
            header("location:b.php");
        } else {
            echo "Error: " . $sql . "<br>" . 
            $conn->error;
        }
        // Close the database connection
        $conn->close();
    }
        ?>
</body>
</html>