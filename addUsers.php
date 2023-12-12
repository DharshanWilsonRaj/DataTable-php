<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/db.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    if (!empty($username) && !empty($email) &&  !empty($phone)) {
        $duplicate  = mysqli_query($conn, "SELECT * FROM users_lists WHERE email = '$email' and phone='$phone' and username ='$username'");

        if (mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('user is already exist')</script>";
        } else {
            $query = "INSERT INTO users_lists (username, email, phone) VALUES ('$username', '$email', '$phone')";
            if (mysqli_query($conn, $query)) {
                header("Location: index.php");
            } else {
                echo "<script>alert('Error in registration')</script>";
            }
        }
    }
}


?>

<div class="d-flex p-5">
    <div class="ms-auto me-5">
        <a href="index.php " class="fs-5">Home</a>
    </div>
</div>


<form action="" method="post" class="d-flex align-items-center justify-content-center flex-column mt-5" onsubmit="return validation(['username','email','phone'])">
    <div class="form_element mb-4  ">
        <input type="text" name="username" placeholder="Name" id="username">
        <div class="error text-danger"> </div>
    </div>
    <div class="form_element mb-4">
        <input type="email" name="email" placeholder="Email" id="email">
        <div class="error text-danger"> </div>
    </div>
    <div class="form_element mb-4">
        <input type="text" name="phone" placeholder="Phone" id="phone">
        <div class="error text-danger"> </div>
    </div>

    <button name="submit" value="submit">Sumbit</button>
</form>



<?php require_once __DIR__ . '/footer.php';
