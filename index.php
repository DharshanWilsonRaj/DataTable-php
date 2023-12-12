<?php require_once __DIR__ . '/head.php';

require_once __DIR__ . '/db.php';
// $lists = [];

$usersList = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['page_no'])) {
        $page =  $_GET['page_no'];
        global $conn;
        $itemsPerPage = 5;
        $offset = ($page - 1) * $itemsPerPage;
        $sql = "SELECT * FROM users_lists ORDER BY id DESC LIMIT $offset, $itemsPerPage";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $usersList = $result;
        }
    }
}


// delete functiion
$is_deleted = false;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['delete_id'])) {
        $deleteId =  $_GET['delete_id'];
        $sql = "DELETE FROM users_lists WHERE id=$deleteId";
        if (mysqli_query($conn, $sql)) {
            $is_deleted = true;
            header("Location: index.php");
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
}

function getTotalList()
{
    global $conn;
    $sql = "SELECT * FROM users_lists";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    }
}
?>


<p class="text-bold text-center mt-2">PHP Data table</p>
<?php
if ($is_deleted === true) {
    echo "<div class='alert alert-success' role='alert'>
    Deleted Sucessfully
    </div>";
}

?>

<div class="row mt-5">
    <div class="d-flex">
        <div class="ms-auto me-5">
            <a href="addUsers.php" class="btn btn-primary">Add New</a>
        </div>
    </div>

    <!-- table -->
    <div class="container col-8">
        <div class="row">
            <table id="Mytable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = $usersList;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo
                        '<tr>
                        <td>' . $row['id'] . '</td>
                        <td>' . $row['username'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['phone'] . '</td>
                        <td class="d-flex align-items-center justify-content-center gap-2">
                        <a href="editUser.php?id=' . $row['id'] . '">
                            <span>
                                <i class="bi bi-pencil-square"></i>
                            </span>
                         </a>
                         <a href="index.php?delete_id=' . $row['id'] . '"  onclick="return confirm(\'Are you sure you want to delete this record?\');">
                            <span class="text-danger" >
                                <i class="bi bi-trash-fill"></i>
                            </span>
                        </td>
                        </a>
                      </tr>';
                    } ?>
                </tbody>
            </table>
            <?php
            $result = getTotalList();
            $numRows = mysqli_num_rows($result);
            $pageCount = $numRows / 5;
            $currentPage = 1;
            echo "<div>";
            while ($currentPage <= $pageCount) {
                echo '<a class="me-2 text-decoration-none p-2 btn-primary "  href="index.php?page_no=' . $currentPage . '">' . $currentPage . '</a>';
                $currentPage++;
            }
            ?>
        </div>



    </div>
</div>

</div>



<?php require_once __DIR__ . '/footer.php';
