<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <form action="./php_task2.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="user">Họ và tên</label>
                <input type="text" name="user" id="user"/>
            </div>
            <div>
                <label for="phone">điện thoại</label>   
                <input type="number" name="phone" id="phone"/>
            </div>
            <div>
                <label for="CMND">CMND</label>
                <input type="number" name="CMND" id="CMND" min="0"/>
            </div>
            <div>
                <label for="address">địa chỉ</label>
                <input type="text" name="address" id="address"/>
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" id="email"/>
            </div>
            <div>
                <input type="radio" name="sex" value="nam" id="nam" checked/>
                <label for="nam" class="label">nam</label>
            </div>
            <div>
                <input type="radio" name="sex" value="nu" id="nu"/>
                <label for="nu" class="label">nữ</label>
            </div>
            <div>
                <label for="note">ghi chú</label>
                <input type="text" name="note" id="note" height="50"/>
            </div>
            <div>
                <input type="submit" name="submit" value="submit"/>
            </div>
        </form>
    </div>
</body>
</html>