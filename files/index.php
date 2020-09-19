<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website on Apache Server</title>
</head>
<body>
    <h1>Website on Apache Server</h1>
    
    <?php
        $message = 'PHP 7 installed';
        echo '<h2>' . $message .'</h2>' ;

        $servername = "127.0.0.1";
        $username = "root";
        $password = "azerty";
        $dbname = "test";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to MariaDb";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }


    ?>
</body>
</html>