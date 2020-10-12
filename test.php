<?php
if(!empty($_POST))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $adres = $_POST['adres'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/libs/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">

    <title>Обработчик</title>
</head>
<body>
    <section class="output">
        <div class="container">
            <div class="output_title">
                <h1>
                    Информация о заказе
                </h1>
            </div>
            <div class="output_content">
                <p>Имя: <?php echo $name;?></p>
                <p>Фамилия: <?php echo $surname;?></p>
                <p>Адрес: <?php echo $adres;?></p>
                <p>Телефон: <?php echo $phone;?></p>
                <p>Email: <?php echo $email;?></p>
                <a href="index.php">На главную</a>
            </div>


        </div>
    </section>


</body>
</html>

