<?php
// session_start();
// $_SESSION["data"] ="dasf";
// setcookie("username","annguyen", time()+ 86400, "/", "localhost", true, true);
// setcookie("username1","annguyen", time()+ 86400, "/", "localhost");
// echo $_COOKIE["username"];
$ketqua = "";
    if(isset($_GET["submit"])){
        $a = $_GET["heso1"];
        $b = $_GET["heso2"];
        if((int) $a === 0 && (int) $b === 0) {
           $ketqua = "Phuong trinh co vo so nghiem";
        } else if((int) $a === 0 && (int) $b != 0){
            $ketqua = "Phuong trinh vo nghiem";
        } else {
            $ketqua = -$b/$a;
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giai phuong trinh bac 1</title>
</head>
<body>
    <div>
        <h1>Giai phuong trinh bac nhat ax + b = 0</h1>
        <form method="get" action="">
            <input type="text" name="heso1">
            <input type="text" name="heso2">
            <input type="submit" name="submit">
        </form>
        <h2>Ket qua: <?php echo $ketqua;?></h2>
    </div>
    <!-- <script>
        function caculate(){
            let fromdata = document.forms[0]
            let a = fromdata.querySelectorAll("input")[0]
            let b = fromdata.querySelectorAll("input")[1]
            // http://localhost/codeExample/l04/tinhtoan.php?heso1=2&heso2=5&submit=Submit
            fetch("http://localhost/codeExample/l04/tinhtoan.php?heso1="+a.value+"&heso2="+b.value+"&submit=Submit").then(result => result.json()).then(data => {
                document.getElementsByTagName("h2")[0].innerHTML = "Ket qua: " + data.ketqua
            })
        }
    </script> -->
</body>
</html>