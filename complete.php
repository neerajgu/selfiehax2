<html>
    <head>
        <title>Check Php</title>
    </head>
    <body>
        <?php
        require_once "config.sql";
        try {
            $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        
            $sth = $dbh->prepare();
            $sth->execute();
            $user = $sth->fetch(); //stores in associative array
        }
        catch (PDOException $e) {
            echo "<p>Error connecting to database!</p>";
        }
        
        ?>
    </body>
</html>