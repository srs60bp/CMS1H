<?php>
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=cms;','root',root);
    } catch (PDOExecption $e) {
        exit('Database error');
    }
?>