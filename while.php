<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="box">
        <h1>งานที่ 1 สุพัตรา เวชชศาสตร์ BIT.2/5 เลขที่31</h1>

        <a href="index.php">For Loop</a>

        <form action="">
            <label for="" class="xxx">กรอกเลขแม่สูตรคูณ :</label> <br>
            <input class="www" type="number" name="num" id="">
            <br>
            <input class="eee" type="submit" value="คำนวณ">
        </form>

        <div class="aaa">

            <?php
            if (isset($_GET["num"])) {
                $num = $_GET["num"];
                echo "สูตรคูณแม่ " . $num . "<br>";
                $i = 1;
                while ($i <= 12) {
                    echo $num . " x " . $i . " = " . $num * $i . "<br>";
                    $i++;
                }
            }
            ?>
            <div>
        </div>


</body>

</html>