<?php
 
// if(isset($_GET["username"])) {
//     $name = $_GET["username"];

// }
$name = isset($_GET["username"]) ? $_GET["username"] : "";
$password = isset($_GET["password"]) ? $_GET["password"] : "";
$repassword = isset($_GET["repassword"]) ? $_GET["repassword"] : "";
$email = isset($_GET["email"]) ? $_GET["email"] : "";
$agree = isset($_GET["agree"]) ? $_GET["agree"] : "";
   echo $name . $password . $repassword.$email .$agree;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form-container{
            color: white;
            width: 35%;
            background-size: cover;
            border-radius: 10px;
            background-image: url("cat.jpg");
            display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
        }
        .inputfield{
            display: flex;
        flex-direction: column;
        }
        .inputfield input{
            border-radius: 10px;
            border: unset;
            height: 30px;
            background-color: #ffffff96;
            margin-bottom: 10px ;
        }
        .inputfield input:focus{
            outline: unset;
        }
    </style>
</head>
<body>
    <div style="    display: flex;
    width: 100vw;
    height: 100vh;
    background-color: white;
    justify-content: center;
    align-items: center;">
        <div class="form-container">
            <h3 style="text-align: center;">SIGN UP</h3>
            <h4 style="color: red;" id="validError"></h4>
            <form method="GET" style="width: 50%;" onsubmit="return submitValue();">
                <div class="inputfield">
                    <label>USERNAME</label>
                    <input id="username" type="text" name="username" required="required" minlength="6"/>
                </div>
                <div class="inputfield">
                    <label>E-MAIL</label>
                    <input id="email" type="email" name="email"  required="required"/>
                </div>
                <div class="inputfield">
                    <label>PASSWORD</label>
                    <input id="password" type="password" name="password"  required="required" minlength="6"/>
                </div>
                <div class="inputfield">
                    <label>REPASSWORD</label>
                    <input id="repassword" type="password" name="repassword"  required="required" minlength="6"/>
                </div>
  
                <div class="inputfield" style="flex-direction: row;">
                    <input id="agree" type="checkbox" name="agree"/> <span>I agree</span>
                </div>
                <div class="inputfield">
                    <input type="submit" style="color: white;     background-color: #0a77ff;" class="btn" name="submit" value="SIGN UP"/>
                </div>
            </form>
        </div>

    </div>
    <script>
        function submitValue(){
            let validError = document.getElementById("validError")
            let username = document.getElementById("username")
            let password = document.getElementById("password")
            let repassword = document.getElementById("repassword")
            let email = document.getElementById("email")
            let chexbox = document.getElementById("agree")
            
             var res = password.value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{6,}$/);
            if (repassword.value != password.value) {
                validError.innerText = "Nhap lai mat khau khong chinh xac"
            } else if(res == null || res == undefined) {
                validError.innerText = "Password gom so, chu thuong, chu hoa"
            } else {
                validError.innerText = "Thanh cong";
                return true
            }
            return false;
        }
    </script>
</body>
</html>