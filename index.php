<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sureya016</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>Hello world</h1>


    <form action="" method="post">
        <div class="input">
            <input type="number" name="num1" required>
            <input type="number" name="num2" required>
            <input type="number" name="num3" required>
        </div>
        <div class="button">
            <input type="submit" value="ส่งข้อมูล">
            <input type="reset" value="ลบข้อมูล">
        </div>
    </form>

    <?php
        if(!empty($_POST['num1']) || !empty($_POST['num2']) || !empty($_POST['num3']))
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $n3=$_POST['num3'];
    ?>

    <h1>Sumary = <?php echo $n1+$n2+$n3 ; ?></h1>
    <h1>Avg = <?php echo number_format(($n1+$n2+$n3)/3,2) ; ?></h1>
</body>
</html>