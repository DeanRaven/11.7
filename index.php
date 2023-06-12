<html>
    <head>
        <br>
        <title>«Таблица истинности PHP»</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h3>Таблица истинности PHP</h3>
        <table>
            <tr><th>A</th><th>B</th><th>!A</th><th>A || B</th><th>A && B</th><th>A xor B</th></tr>
            
            <tr>
            <td><?php echo $a1 = 0;?></td>
            <td><?php echo $b1 = 0;?></td>
            <td><?php var_export (!$a1); ?></td>
            <td><?php var_export ($a1 || $b1); ?></td>
            <td><?php var_export ($a1 && $b1); ?></td>
            <td><?php var_export ($a1 xor $b1); ?></td>
            </tr>

            <tr>
            <td><?php echo $a2 = 0;?></td>
            <td><?php echo $b2 = 1;?></td>
            <td><?php var_export (!$a2); ?></td>
            <td><?php var_export ($a2 || $b2); ?></td>
            <td><?php var_export ($a2 && $b2); ?></td>
            <td><?php var_export ($a2 xor $b2); ?></td>
            </tr>

            <tr>
            <td><?php echo $a3 = 1;?></td>
            <td><?php echo $b3 = 0;?></td>
            <td><?php var_export (!$a3); ?></td>
            <td><?php var_export ($a3 || $b3); ?></td>
            <td><?php var_export ($a3 && $b3); ?></td>
            <td><?php var_export ($a3 xor $b3); ?></td>
            </tr>

            <tr>
            <td><?php echo $a4 = 1;?></td>
            <td><?php echo $b4 = 1;?></td>
            <td><?php var_export (!$a4); ?></td>
            <td><?php var_export ($a4 || $b4); ?></td>
            <td><?php var_export ($a4 && $b4); ?></td>
            <td><?php var_export ($a4 xor $b4); ?></td>
            </tr>
        </table>

        <br>
        <br>

        <h3>«Гибкое сравнение в PHP»</h3>
        <table>
        <tr>
            <th><?php echo $x = "";?></th>
            <th><?php $x1 = true; var_export ($x1);?></th>
            <th><?php $x2 = false; var_export ($x2);?></th>
            <th><?php echo $x3 = 1; ?></th>
            <th><?php echo $x4 = 0;?></th>
            <th><?php echo $x5 = -1;?></th>
            <th><?php $x6 = "1"; echo '"1"';?></th>
            <th><?php $x7 = null; echo "null";?></th>
            <th><?php $x8 = "php"; echo '"php"';?></th>
        </tr>

        <tr>
            <th><?php $y1 = true; var_export ($y1);?></th>
            <td><?php var_export ($x1 == $y1);?></td>
            <td><?php var_export ($x2 == $y1);?></td>
            <td><?php var_export ($x3 == $y1)?></td>
            <td><?php var_export ($x4 == $y1);?></td>
            <td><?php var_export ($x5 == $y1);?></td>
            <td><?php var_export ($x6 == $y1);?></td>
            <td><?php var_export ($x7 == $y1);?></td>
            <td><?php var_export ($x8 == $y1);?></td>
        </tr>

        <tr>
            <th><?php $y2 = false; var_export ($y2);?></th>
            <td><?php var_export ($x1 == $y2);?></td>
            <td><?php var_export ($x2 == $y2);?></td>
            <td><?php var_export ($x3 == $y2)?></td>
            <td><?php var_export ($x4 == $y2);?></td>
            <td><?php var_export ($x5 == $y2);?></td>
            <td><?php var_export ($x6 == $y2);?></td>
            <td><?php var_export ($x7 == $y2);?></td>
            <td><?php var_export ($x8 == $y2);?></td>
        </tr>

        <tr>
            <th><?php echo $y3 = 1; ?></th>
            <td><?php var_export ($x1 == $y3);?></td>
            <td><?php var_export ($x2 == $y3);?></td>
            <td><?php var_export ($x3 == $y3)?></td>
            <td><?php var_export ($x4 == $y3);?></td>
            <td><?php var_export ($x5 == $y3);?></td>
            <td><?php var_export ($x6 == $y3);?></td>
            <td><?php var_export ($x7 == $y3);?></td>
            <td><?php var_export ($x8 == $y3);?></td>
        </tr>

        <tr>
            <th><?php echo $y4 = 0;?></th>
            <td><?php var_export ($x1 == $y4);?></td>
            <td><?php var_export ($x2 == $y4);?></td>
            <td><?php var_export ($x3 == $y4)?></td>
            <td><?php var_export ($x4 == $y4);?></td>
            <td><?php var_export ($x5 == $y4);?></td>
            <td><?php var_export ($x6 == $y4);?></td>
            <td><?php var_export ($x7 == $y4);?></td>
            <td><?php var_export ($x8 == $y4);?></td>
        </tr>

        <tr>
            <th><?php echo $y5 = -1;?></th>
            <td><?php var_export ($x1 == $y5);?></td>
            <td><?php var_export ($x2 == $y5);?></td>
            <td><?php var_export ($x3 == $y5)?></td>
            <td><?php var_export ($x4 == $y5);?></td>
            <td><?php var_export ($x5 == $y5);?></td>
            <td><?php var_export ($x6 == $y5);?></td>
            <td><?php var_export ($x7 == $y5);?></td>
            <td><?php var_export ($x8 == $y5);?></td>
        </tr>

        <tr>
            <th><?php $y6 = "1"; echo '"1"';?></th>
            <td><?php var_export ($x1 == $y6);?></td>
            <td><?php var_export ($x2 == $y6);?></td>
            <td><?php var_export ($x3 == $y6)?></td>
            <td><?php var_export ($x4 == $y6);?></td>
            <td><?php var_export ($x5 == $y6);?></td>
            <td><?php var_export ($x6 == $y6);?></td>
            <td><?php var_export ($x7 == $y6);?></td>
            <td><?php var_export ($x8 == $y6);?></td>
        </tr>

        <tr>
            <th><?php $y7 = null; echo "null";?></th>
            <td><?php var_export ($x1 == $y7);?></td>
            <td><?php var_export ($x2 == $y7);?></td>
            <td><?php var_export ($x3 == $y7)?></td>
            <td><?php var_export ($x4 == $y7);?></td>
            <td><?php var_export ($x5 == $y7);?></td>
            <td><?php var_export ($x6 == $y7);?></td>
            <td><?php var_export ($x7 == $y7);?></td>
            <td><?php var_export ($x8 == $y7);?></td>
        </tr>
        <tr>
            <th><?php $y8 = "php"; echo '"php"';?></th>
            <td><?php var_export ($x1 == $y8);?></td>
            <td><?php var_export ($x2 == $y8);?></td>
            <td><?php var_export ($x3 == $y8)?></td>
            <td><?php var_export ($x4 == $y8);?></td>
            <td><?php var_export ($x5 == $y8);?></td>
            <td><?php var_export ($x6 == $y8);?></td>
            <td><?php var_export ($x7 == $y8);?></td>
            <td><?php var_export ($x8 == $y8);?></td>
        </tr>
        </table>

        <br>
        <br>

        <h3>«Жёсткое сравнение в PHP»</h3>
        <table>
        <tr>
            <th><?php echo $x = "";?></th>
            <th><?php $x1 = true; var_export($x1);?></th>
            <th><?php $x2 = false; var_export($x2);?></th>
            <th><?php echo $x3 = 1; ?></th>
            <th><?php echo $x4 = 0;?></th>
            <th><?php echo $x5 = -1;?></th>
            <th><?php $x6 = "1"; echo '"1"';?></th>
            <th><?php $x7 = null; echo "null";?></th>
            <th><?php $x8 = "php"; echo '"php"';?></th>
        </tr>

        <tr>
            <th><?php $y1 = true; var_export ($y1);?></th>
            <td><?php var_export ($x1 === $y1);?></td>
            <td><?php var_export ($x2 === $y1);?></td>
            <td><?php var_export ($x3 === $y1)?></td>
            <td><?php var_export ($x4 === $y1);?></td>
            <td><?php var_export ($x5 === $y1);?></td>
            <td><?php var_export ($x6 === $y1);?></td>
            <td><?php var_export ($x7 === $y1);?></td>
            <td><?php var_export ($x8 === $y1);?></td>
        </tr>

        <tr>
            <th><?php $y2 = false; var_export ($y2);?></th>
            <td><?php var_export ($x1 === $y2);?></td>
            <td><?php var_export ($x2 === $y2);?></td>
            <td><?php var_export ($x3 === $y2)?></td>
            <td><?php var_export ($x4 === $y2);?></td>
            <td><?php var_export ($x5 === $y2);?></td>
            <td><?php var_export ($x6 === $y2);?></td>
            <td><?php var_export ($x7 === $y2);?></td>
            <td><?php var_export ($x8 === $y2);?></td>
        </tr>

        <tr>
            <th><?php echo $y3 = 1; ?></th>
            <td><?php var_export ($x1 === $y3);?></td>
            <td><?php var_export ($x2 === $y3);?></td>
            <td><?php var_export ($x3 === $y3)?></td>
            <td><?php var_export ($x4 === $y3);?></td>
            <td><?php var_export ($x5 === $y3);?></td>
            <td><?php var_export ($x6 === $y3);?></td>
            <td><?php var_export ($x7 === $y3);?></td>
            <td><?php var_export ($x8 === $y3);?></td>
        </tr>

        <tr>
            <th><?php echo $y4 = 0;?></th>
            <td><?php var_export ($x1 === $y4);?></td>
            <td><?php var_export ($x2 === $y4);?></td>
            <td><?php var_export ($x3 === $y4)?></td>
            <td><?php var_export ($x4 === $y4);?></td>
            <td><?php var_export ($x5 === $y4);?></td>
            <td><?php var_export ($x6 === $y4);?></td>
            <td><?php var_export ($x7 === $y4);?></td>
            <td><?php var_export ($x8 === $y4);?></td>
        </tr>

        <tr>
            <th><?php echo $y5 = -1;?></th>
            <td><?php var_export ($x1 === $y5);?></td>
            <td><?php var_export ($x2 === $y5);?></td>
            <td><?php var_export ($x3 === $y5)?></td>
            <td><?php var_export ($x4 === $y5);?></td>
            <td><?php var_export ($x5 === $y5);?></td>
            <td><?php var_export ($x6 === $y5);?></td>
            <td><?php var_export ($x7 === $y5);?></td>
            <td><?php var_export ($x8 === $y5);?></td>
        </tr>

        <tr>
            <th><?php $y6 = "1"; echo '"1"';?></th>
            <td><?php var_export ($x1 === $y6);?></td>
            <td><?php var_export ($x2 === $y6);?></td>
            <td><?php var_export ($x3 === $y6)?></td>
            <td><?php var_export ($x4 === $y6);?></td>
            <td><?php var_export ($x5 === $y6);?></td>
            <td><?php var_export ($x6 === $y6);?></td>
            <td><?php var_export ($x7 === $y6);?></td>
            <td><?php var_export ($x8 === $y6);?></td>
        </tr>

        <tr>
            <th><?php $y7 = null; echo "null";?></th>
            <td><?php var_export ($x1 === $y7);?></td>
            <td><?php var_export ($x2 === $y7);?></td>
            <td><?php var_export ($x3 === $y7)?></td>
            <td><?php var_export ($x4 === $y7);?></td>
            <td><?php var_export ($x5 === $y7);?></td>
            <td><?php var_export ($x6 === $y7);?></td>
            <td><?php var_export ($x7 === $y7);?></td>
            <td><?php var_export ($x8 === $y7);?></td>
        </tr>
        <tr>
            <th><?php $y8 = "php"; echo '"php"';?></th>
            <td><?php var_export ($x1 === $y8);?></td>
            <td><?php var_export ($x2 === $y8);?></td>
            <td><?php var_export ($x3 === $y8)?></td>
            <td><?php var_export ($x4 === $y8);?></td>
            <td><?php var_export ($x5 === $y8);?></td>
            <td><?php var_export ($x6 === $y8);?></td>
            <td><?php var_export ($x7 === $y8);?></td>
            <td><?php var_export ($x8 === $y8);?></td>
        </tr>
        </table>
        <!--Вывод: Оператор жёсткого сравнения «===» сравнивает значение и тип операндов, а оператор гибкого сравнения «==» сравнивает только значения двух операндов.-->
    </body>
</html>
