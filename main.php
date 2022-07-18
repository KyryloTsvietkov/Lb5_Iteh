<?php 
include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>
<form action="lab1_1.php" method="post">
    <p>Select the chief:</p>
    <select name="chief">
    
        <option>John Chen</option>
        <option>Luis Popp</option>
        <option>Bruce Ernst</option>
        <option>Valii Pataballa</option>
    </select>
    <p><input  type="submit" name="submit"/></p>
</form>

<form action="lab1_2.php" method="post">
    <p>Select the project name:</p>
    <select name="project">
        <option>Project1</option>
        <option>Project2</option>
        <option>Project3</option>
        <option>Project4</option>
        <option>Project5</option>
    </select>
    <p><input  type="submit" name="submit"></p>
</form>

<form action="lab1_3.php" method="post">
    <p>Select the project name:</p>
    <select name="pr">
        <option>Project1</option>
        <option>Project2</option>
        <option>Project3</option>
        <option>Project4</option>
        <option>Project5</option>
    </select>
    <p>Select the date:</p>
    <select name="date">
        <option>2022.02.18</option>
        <option>2022.02.19</option>
        <option>2022.02.20</option>
        <option>2022.04.02</option>
        <option>2022.04.05</option>
        <option>2022.04.10</option>
        <option>2022.03.14</option>
        <option>2022.03.23</option>
        <option>2022.03.27</option>
        <option>2022.01.10</option>
        <option>2022.01.16</option>
        <option>2022.01.23</option>
    </select>
    <p ><input type="submit" name="submit"/></p>
</form>
</body>
</html>






