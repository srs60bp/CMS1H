<?php 

session_start();


include_once('../includes/connection.php');

if (isset($_SESSION['logged_in'])) {
    // display index
    ?>
    
    <html>
    <head>
        <title> CMS Tutorial </title>
        <link rel="stylesheet" href="../assets/style.css" />
    </head>
    
    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a>
        
            <br />
            <ol>
                <li>
                    <a href="add.php">Add Article</a>
                    <a href="delete.php">Delete Article</a>
                    <a href="logout.php">Logout</a>
                </li>
            </ol>
        

            
        </div>
    </body>
</html>
    
    <?php
} else {
    // display login
    if (isset($_POST['username'], $_POST['password'])) {
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        if (empty($username) or empty($password)) {
            
            $error = 'All fields are required';
        } else {
            $query = $pdo->prepare("Select * FROM users WHERE user_name = ? AND user_password = ?");
            $query->bindValue(1,$username);
            $query->bindValue(2,$password);
            $query->execute();
            
            $num = $query->rowCount();
            if ($num == 1) {
                // user entered correct details
                $_SESSION['logged_in'] = true;
                header('Location: index.php');
                exit();
            } else {
                $error = 'Incorect details';
            }
        
            return $query->fetch();
            
        }
        }
    }


?>
   
<?php
    
    <html>
    <head>
        <title> CMS Tutorial </title>
        <link rel="stylesheet" href="../assets/style.css" />
    </head>
    
    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a>
        
            <br /><br />
        
            <?php if(isset(isset($error)) { ?>
                < small style="color:#aa0000;"><?php</small>
                <br><br />
            }
                     
                     
                            
            <form action="index.php" method="post" autocomplete="off">                                                                                                                                                                                                               
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="Password" placeholder="Password" />
                <input type="submit" value="Login" />
            </form>
            
        </div>
    </body>
</html>
    
}

?>