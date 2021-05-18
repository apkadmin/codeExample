<?php
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
    echo json_encode(["ketqua" => $ketqua], JSON_UNESCAPED_UNICODE);
?>