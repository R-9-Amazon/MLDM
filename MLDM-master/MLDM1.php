<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моя 1 лабораторная работа</title>
    <link rel = "stylesheet" href = "css/css.css">
    <script type = "text/javascript" src = "js/scripts.js"></script>
</head>
<body>
    <h1 style="text-align: center;">Лабораторная работа  №1</h1>

        <form method="" action="">
            <table>
                <tr>
                    <td style="text-align: center;"> Введите первый массив </td>
                    <td> <br><input class="mass" type = "text" id = "mass1" value = "" size = "150" /><br> </td>
                </tr>
                <tr>
                    <td > Введите второй массив </td>
                    <td><br> <input class="mass" type = "text" id = "mass2" value = "" size = "150" /><br> </td>
                </tr>
                <tr>
                    <td style="text-align: center; "colspan="2"> <br><input style="font-size: 20px;" type="button" value = "Объединение" onclick = "unification();"> </td>
                </tr>
                <tr>
                    <td style="text-align: center; " colspan="2" ><br> <input style="font-size: 20px;" type="button" value = "Пересечение" onclick = "intersection();"> </td>
                </tr>
                <tr>
                    <td style="text-align: center; " colspan="2"> <br><input style="font-size: 20px;" type="button" value = "Дополнение" onclick = "addition();"> </td>
                </tr>
                <tr>
                    <td style="text-align: center; " colspan="2"> <br><input style="font-size: 20px;" type="button" value = "Симметрическая разность" onclick = "symmetricDifference();"> </td>
                </tr>
            </table>
        </form>

    <h2 style="text-align: center;"> Результат</h2>

    <div id = "outUnification"> </div> <br>
    
    <div id = "outIntersection"> </div> <br>
    <div id = "outAdditionAB"> </div>
    <div id = "outAdditionBA"> </div> <br>
    <div id = "outSymmetricDifference"> </div> <br>
</body>
</html>