<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>Register now</h3>
            <input type="text" name="name" placeholder="enter username" class="box" required>
            <input type="text" name="email" placeholder="enter email" class="box" required>
            <input type="text" name="password" placeholder="enter password" class="box" required>
            <input type="text" name="cpassword" placeholder="confirm password" class="box" required>
            <input type="file" class="box" accept="image/jpg, image/jpeg, image/png">
            <input type="submit" value="register now" class="btn">
            <p>already have an account ? <a href="login.php">login now</a></p>
        </form>

    </div>

</body>

</html>