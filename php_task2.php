<?php
$user=$_POST["user"];
$number=$_POST["phone"];
$CMND=$_POST["CMND"];
$address=$_POST["address"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$note=$_POST["note"];
$pass=0;
$arr = array(
    "user" => $user,
    "number" => $number,
    "CMND" => $CMND,
    "address" => $address,
    "email" => $email,
    "sex" => $sex,
    "note" => $note
);
foreach($arr as $key => $value) {
        if(strlen($value) == 0){
            echo "xin vui nhap nhap thong tin day du <br>";
            $pass=1;
            echo '
                    <a href="/task2.php" style="background-color:#f44336; color:#ffffff ; text-align:center">Back</a>
                 ';
            break;
        }
}
foreach($arr as $key => $value) {
    if($key == "user" && $value == "Nguyen Hoang Lam" || 
        $key == "CMND" && $value == "8723451") {
            echo "chua dong hoc phi";
            break;
        }
}
if($pass == 0) {
    foreach($arr as $key => $value) {
        echo "$key la: $value <br/>";
    }
}
?>