<?php
    $user=$_POST["user"];
    $number=$_POST["phone"];
    $CMND=$_POST["CMND"];
    $address=$_POST["address"];
    $email=$_POST["email"];
    $sex=$_POST["sex"];
    $note=$_POST["note"];
    $img=$_FILES["img"];
    $pass=0;
    $image=0;
    $folder="image/";
    $file_name=$folder . basename($img["name"]);
    $arr = array(
        "user" => $user,
        "number" => $number,
        "CMND" => $CMND,
        "address" => $address,
        "email" => $email,
        "sex" => $sex,
        "note" => $note,
);
foreach($arr as $key => $student) {
    if(strlen($student) == 0 ) {
        echo "nhập thông tin đầy đủ <br/>";
        $pass=1;
        break;
    }
}
if($img["name"] == NULL){
    echo "xin hãy upload hình ảnh";
}
else {
    move_uploaded_file($img["tmp_name"],$file_name);
    $image= 1;
}
if($pass == 0) {
    foreach($arr as $key => $student) {
            echo "$key là: $student <br/>";
    }
    if($image == 1) {
        echo '<img src="'.$file_name.'"/>';
    }
}

?>