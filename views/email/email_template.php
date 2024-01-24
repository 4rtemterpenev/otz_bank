<?php

use app\models\BanksAddresses;
use app\modules\v1\service\OrderService;

?>
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 style="text-align: center">Запрос из отзыва Камкомбанк</h1>

    <table>
        <tr>
            <th>Поле</th>
            <th>значение</th>
        </tr>
        <tr>
            <td>Имя</td>
            <td><?= $model->name ?></td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td><?= $model->phone ?></td>
        </tr>
        <tr>
            <td>Текст</td>
            <td><?=  $model->body?></td>
        </tr>
    </table>
</div>
</body>
</html>
