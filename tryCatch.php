<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', 'me', 'no');
} catch (Exception $other) {
    var_dump($other);
    echo "An exception was throwned";
} finally {
    echo "<br/>script ended";
}
