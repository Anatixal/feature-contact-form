<?php

    $username = $_POST['data-username'];
    $mail = $_POST['data-mail'];
    $subject = $_POST['data-subject'];
    $message = $_POST['data-message'];
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Salut, <?php echo $username; ?>,
    tu as <?php echo $age;?> ans !</p>
</body>
</html>