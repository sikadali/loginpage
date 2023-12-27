<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="update-profile">
        <?php
        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id= '$user_id'") or die('query failed');
        if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <?php
            if ($fetch['image'] == '') {
                echo '<img src="images/default-avatar.jpg">';
            } else {
                echo '<img src="uploaded_img/' . $fetch['image'] . '">';
            }
            ?>
            <div class="flex">
                <div class="inputBox">
                    <span>username :</span>
                    <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
                    <span>your email :</span>
                    <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                    <span>update your pic :</span>
                    <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
                </div>
                <div class="inputBox">
                    <input type="hidden" name="old_name" value="<?php echo $fetch['password']; ?>">
                    <span>old password :</span>
                    <input type="password" name="update_pass" placeholder="enter previous password" class="box">
                    <span>new password :</span>
                    <input type="password" name="new_pass" placeholder="enter new password" class="box">
                    <span>confirm password :</span>
                    <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
                </div>
            </div>
            <input type="submit" value="update profile" name="update_profile" class="btn">
            <a href="home.php" class="delete-btn">go back</a>
        </form>
    </div>

</body>

</html>