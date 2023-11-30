<html>
    <head>
    <title>Таблица истинности PHP</title>
    <link rel="stylesheet" href="style.css" />

    </head>
    <body>
    <h1>Таблица истинности PHP</h1>

<table>
    <thead>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $A = 0?></td>
        <td><?php echo $B = 0?></td>
        <td><?php echo !$A?></td>
        <td><?php echo (int)($a||$b)?></td>
        <td><?php echo (int)($A && $B)?></td>
        <td><?php echo (int)($A xor $B);?></td>
    </tr>
    <tr>
        <td><?php echo $A = 0?></td>
        <td><?php echo $B = 1?></td>
        <td><?php echo!$A?></td>
        <td><?php echo (int)($A||$B)?></td>
        <td><?php echo (int)($A && $B)?></td>
        <td><?php echo (int)($A xor $B);?></td>
    </tr>
    <tr>
        <td><?php echo $A = 1?></td>
        <td><?php echo $B = 0?></td>
        <td><?php echo((int)!$A)?></td>
        <td><?php echo (int)($A||$B)?></td>
        <td><?php echo (int)($A && $B)?></td>
        <td><?php echo (int)($A xor $B);?></td>
    </tr>
    <tr>
        <td><?php echo $A = 1?></td>
        <td><?php echo $B = 1?></td>
        <td><?php echo((int)!$A)?></td>
        <td><?php echo (int)($A||$B)?></td>
        <td><?php echo (int)($A && $B)?></td>
        <td><?php echo (int)($A xor $B);?></td>

    </tr>
</tbody>
</table>

<h1>Таблица сравнения</h1>
<h2>Гибкое сравнение в PHP</h2>
<table>
    <thead>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>

        </tr>
    </thead>
    <tbody>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">true</td>
        <td><?php var_export(true == true)?></td>
        <td><?php var_export(true == false)?></td>
        <td><?php var_export(true == 1)?></td>
        <td><?php var_export(true == 0)?></td>
        <td><?php var_export(true == -1)?></td>
        <td><?php var_export(true == "1")?></td>
        <td><?php var_export(true == null)?></td>
        <td><?php var_export(true == "php")?></td>

    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">false</td>
        <td><?php var_export(false == true)?></td>
        <td><?php var_export(false == false)?></td>
        <td><?php var_export(false == 1)?></td>
        <td><?php var_export(false == 0)?></td>
        <td><?php var_export(false == -1)?></td>
        <td><?php var_export(false == "1")?></td>
        <td><?php var_export(false == null)?></td>
        <td><?php var_export(false == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">1</td>
        <td><?php var_export(1 == true)?></td>
        <td><?php var_export(1 == false)?></td>
        <td><?php var_export(1 == 1)?></td>
        <td><?php var_export(1 == 0)?></td>
        <td><?php var_export(1 == -1)?></td>
        <td><?php var_export(1 == "1")?></td>
        <td><?php var_export(1 == null)?></td>
        <td><?php var_export(1 == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">0</td>
        <td><?php var_export(0 == true)?></td>
        <td><?php var_export(0 == false)?></td>
        <td><?php var_export(0 == 1)?></td>
        <td><?php var_export(0 == 0)?></td>
        <td><?php var_export(0 == -1)?></td>
        <td><?php var_export(0 == "1")?></td>
        <td><?php var_export(0 == null)?></td>
        <td><?php var_export(0 == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">-1</td>
        <td><?php var_export(-1 == true)?></td>
        <td><?php var_export(-1 == false)?></td>
        <td><?php var_export(-1 == 1)?></td>
        <td><?php var_export(-1 == 0)?></td>
        <td><?php var_export(-1 == -1)?></td>
        <td><?php var_export(-1 == "1")?></td>
        <td><?php var_export(-1 == null)?></td>
        <td><?php var_export(-1 == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">"1"</td>
        <td><?php var_export("1" == true)?></td>
        <td><?php var_export("1" == false)?></td>
        <td><?php var_export("1" == 1)?></td>
        <td><?php var_export("1" == 0)?></td>
        <td><?php var_export("1" == -1)?></td>
        <td><?php var_export("1" == "1")?></td>
        <td><?php var_export("1" == null)?></td>
        <td><?php var_export("1" == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">null</td>
        <td><?php var_export(null == true)?></td>
        <td><?php var_export(null == false)?></td>
        <td><?php var_export(null == 1)?></td>
        <td><?php var_export(null == 0)?></td>
        <td><?php var_export(null == -1)?></td>
        <td><?php var_export(null == "1")?></td>
        <td><?php var_export(null == null)?></td>
        <td><?php var_export(null == "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">"php"</td>
        <td><?php var_export("php" == true)?></td>
        <td><?php var_export("php" == false)?></td>
        <td><?php var_export("php" == 1)?></td>
        <td><?php var_export("php" == 0)?></td>
        <td><?php var_export("php" == -1)?></td>
        <td><?php var_export("php" == "1")?></td>
        <td><?php var_export("php" == null)?></td>
        <td><?php var_export("php" == "php")?></td>
    </tr>
</tbody>
</table>
<h2>Жёсткое сравнение в PHP</h2>
<table>
    <thead>
        <tr>
            <th></th>
            <th>true</th>
            <th>false</th>
            <th>1</th>
            <th>0</th>
            <th>-1</th>
            <th>"1"</th>
            <th>null</th>
            <th>"php"</th>

        </tr>
    </thead>
    <tbody>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">true</td>
        <td><?php var_export(true === true)?></td>
        <td><?php var_export(true === false)?></td>
        <td><?php var_export(true === 1)?></td>
        <td><?php var_export(true === 0)?></td>
        <td><?php var_export(true === -1)?></td>
        <td><?php var_export(true === "1")?></td>
        <td><?php var_export(true === null)?></td>
        <td><?php var_export(true === "php")?></td>

    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">false</td>
        <td><?php var_export(false === true)?></td>
        <td><?php var_export(false === false)?></td>
        <td><?php var_export(false === 1)?></td>
        <td><?php var_export(false === 0)?></td>
        <td><?php var_export(false === -1)?></td>
        <td><?php var_export(false === "1")?></td>
        <td><?php var_export(false === null)?></td>
        <td><?php var_export(false === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">1</td>
        <td><?php var_export(1 === true)?></td>
        <td><?php var_export(1 === false)?></td>
        <td><?php var_export(1 === 1)?></td>
        <td><?php var_export(1 === 0)?></td>
        <td><?php var_export(1 === -1)?></td>
        <td><?php var_export(1 === "1")?></td>
        <td><?php var_export(1 === null)?></td>
        <td><?php var_export(1 === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">0</td>
        <td><?php var_export(0 === true)?></td>
        <td><?php var_export(0 === false)?></td>
        <td><?php var_export(0 === 1)?></td>
        <td><?php var_export(0 === 0)?></td>
        <td><?php var_export(0 === -1)?></td>
        <td><?php var_export(0 === "1")?></td>
        <td><?php var_export(0 === null)?></td>
        <td><?php var_export(0 === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">-1</td>
        <td><?php var_export(-1 === true)?></td>
        <td><?php var_export(-1 === false)?></td>
        <td><?php var_export(-1 === 1)?></td>
        <td><?php var_export(-1 === 0)?></td>
        <td><?php var_export(-1 === -1)?></td>
        <td><?php var_export(-1 === "1")?></td>
        <td><?php var_export(-1 === null)?></td>
        <td><?php var_export(-1 === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">"1"</td>
        <td><?php var_export("1" === true)?></td>
        <td><?php var_export("1" === false)?></td>
        <td><?php var_export("1" === 1)?></td>
        <td><?php var_export("1" === 0)?></td>
        <td><?php var_export("1" === -1)?></td>
        <td><?php var_export("1" === "1")?></td>
        <td><?php var_export("1" === null)?></td>
        <td><?php var_export("1" === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">null</td>
        <td><?php var_export(null === true)?></td>
        <td><?php var_export(null === false)?></td>
        <td><?php var_export(null === 1)?></td>
        <td><?php var_export(null === 0)?></td>
        <td><?php var_export(null === -1)?></td>
        <td><?php var_export(null === "1")?></td>
        <td><?php var_export(null === null)?></td>
        <td><?php var_export(null === "php")?></td>
    </tr>
    <tr>
        <td style=" background-color: rgb(32, 235, 204)">"php"</td>
        <td><?php var_export("php" === true)?></td>
        <td><?php var_export("php" === false)?></td>
        <td><?php var_export("php" === 1)?></td>
        <td><?php var_export("php" === 0)?></td>
        <td><?php var_export("php" === -1)?></td>
        <td><?php var_export("php" === "1")?></td>
        <td><?php var_export("php" === null)?></td>
        <td><?php var_export("php" === "php")?></td>
    </tr>
</tbody>
</table>
    </body>

    <?php 
    echo "<br>
    <strong>Выводы о сравнении в PHP.</strong><br>
    При логическом отрицании (!), оператор вернет true, если переменная не true. <br>
    При логическом ИЛИ (||), оператор вернет true, если первая переменная или вторая переменная true. <br>
    При логическом И (&&), оператор вернет true, если и первая переменная, и вторая переменная true. <br>
    При логическом Исключающее ИЛИ (xor), оператор вернет true, если первая переменная или вторая переменная true, но не обе переменные true. <br>
    Для перевода true/false в 1/0 можно использовать приведение типов с помощью: (int)true, что вернет 1 и (int)false, что вернет 0. <br>
    При нестрогом сравнении оператор сначала осуществляет преобразования типов, он вернет true, если значения после преобразования будут равны. <br>
    При строгом сравнении оператор вернет true, только если оба операнда имеют одинаковый тип и одно и то же значение. <br>
    <br>"
    ?>

</html>