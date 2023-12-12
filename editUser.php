<?php
require_once __DIR__ . '/head.php';
require_once __DIR__ . '/db.php';

// Get User data Values
$editId =  $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $editUserQuery = mysqli_query($conn, "SELECT * from users_lists where id = $editId");

        if ($editUserQuery) {
            if (mysqli_num_rows($editUserQuery) > 0) {
                $userData = mysqli_fetch_assoc($editUserQuery);
                $username = $userData['username'];
                $email = $userData['email'];
                $phone = $userData['phone'];
            } else {
                echo "No user found with ID: $editId";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

// Update User data 

if (isset($_POST['Update_submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    if (!empty($username) && !empty($email) &&  !empty($phone)) {

        $sql = "UPDATE users_lists SET username=$username,  email=$email,  phone=$phone  WHERE id=$editId";
        // print_r($sql, 0);
        $result = mysqli_query($conn, "UPDATE users_lists SET username=$username,  email=$email,  phone=$phone  WHERE id=$editId");
        if ($result) {
            print_r(0);
            echo "Record updated successfully";
            header("Location: index.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
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
        <input type="text" value="<?php echo isset($username) ? $username : ''; ?>" name="username" placeholder="Name" id="username">
        <div class="error text-danger"> </div>
    </div>
    <div class="form_element mb-4">
        <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" placeholder="Email" id="email">
        <div class="error text-danger"> </div>
    </div>
    <div class="form_element mb-4">
        <input type="text" name="phone" value="<?php echo isset($phone) ? $phone : ''; ?>" placeholder="Phone" id="phone">
        <div class="error text-danger"> </div>
    </div>

    <button name="Update_submit" value="submit">Sumbit</button>
</form>