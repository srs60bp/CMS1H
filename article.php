<?php 
include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
    $id = $_GET['id'];      // dislay article
    $data = $article->fetch_data($id);
    
    //print_r($data);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <title> CMS Tutorial </title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    
    <body>
        <div class="container">
            <a href="index.php" id="logo">CMS</a>

       <h4><?php echo $data['article_title']  ?> - 
           <small>
               posted <?php echo date('l jS', $article['article_timestamp']) ?>
           </small>
       </h4>
       <p> <?php echo $data['article_content'] ?></p>
       
       <a href="index.php">&larr; Back</a>
       
        </div>
    </body>
</html>

<?php
} else {
    header('Location: index.php');
    exit();
}

?>