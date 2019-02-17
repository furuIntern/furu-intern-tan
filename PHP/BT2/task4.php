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
        <div class="">
            <form action="./php_task4.php" method="post">
                <div>
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" min="0"/>
                </div>           
                <div>
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" min="0"/>
                </div>
                <div>
                    <input type="submit" value="submit"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>