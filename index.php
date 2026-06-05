<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>งานที่ 1 สุพัตรา เวชชศาสตร์ BIT.2/5 เลขที่31</h1>

    <a href="while.php">While Loop</a>

    <form action="" >
        <label for="">กรอกเลขแม่สูตรคูณ :</label> <br>
        <input type="number" name="num" id="">
        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่".$num."<br>";
            //.เริ่ม จบ เพิ่มทีละ1
            for($i=1; $i <= 12; $i++){
                echo $num . " x " . $i . " = " . $num * $i . "<br>";
            }
        }
    ?>

</body>
</html>
