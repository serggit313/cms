<!DOCTYPE html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/libs/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">

    <title>Главная</title>

</head>
<body>
    <div class="questionnaire">
        <div class="container">
            <div class="questionnaire_title">
                <h1>
                    Форма заказа
                </h1>
            </div>

            <div class="questionnaire_content">
                <form action="test.php" method="post" class="questionnaire_content_form">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="surname" placeholder="Фамилия">
                    <input type="text" name="adres" placeholder="Адрес">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <input type="email" name="email" placeholder="Email">
                    <button type="submit">Отправить</button>
                </form>
            </div>
        </div>
    </div>

























    <script src="js/libs/bootstrap.min.js"></script>
</body>
</html>