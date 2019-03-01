<?php include 'header.php' ?>
<body class="container mt-5 d-flex">
    <div class="container w-50 m-auto">
        <form method="post" class="form-signin">
            <h1 class="w-25 ml-auto mr-auto text-center">Sign in</h1>
            <label for="user" class="input-group-label">User</label>
            <input type="text" name="user" id="user" class="form-control mb-3"/>
            <label for="password" class="input-group-label">Password</label>
            <input type="password" name="password" id="password" class="form-control mb-3"/>
            <input type="submit" name="submit" class="btn btn-primary btn-block"/>
        </form>
        <div class="invalid"><?php include 'Test-user.php' ?></div>
    </div>
</body>
</html>