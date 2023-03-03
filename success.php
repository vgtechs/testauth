<?php
session_start();
if(isset($_SESSION['name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="success" name="description">
    <meta content="Yuriy Grischenko" name="author">
    <!-- стили -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
   <h1 class="greet">Добро пожаловать, <?php echo $_SESSION['name']; ?></h1>
    <p class="pg"><a href="logout.php">Выйти</a></p>
</div>
</body>
</html>
<?php } else {
    http_response_code(403); die();
}
?>