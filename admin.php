<?php
session_start();
if(($_SESSION["username"]) != "mcavoy1129")
{
    header("location: index.php");
    exit;
}
require_once('database.php');
// Get users
$queryUsers = "SELECT * FROM users
ORDER BY id";
$statement2 = $db->prepare($queryUsers);
$statement2->execute();
$users = $statement2->fetchAll();
$statement2->closeCursor();

?>
<div class="container">
    <?php include('includes/header.php');?>
    <h2>Admin Page</h2>
    <aside>
        <a class="button1" href="manage-products.php">Manage Products</a>
    </aside>
    <section id="AdminPage">
        <!-- display a table of users -->
        <h2>System Users</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Joined</th>
                <th>Delete User</th>
            </tr>
            <?php foreach ($users as $users) : ?>
                <tr>
                    <td><?php echo $users['id']; ?></td>
                    <td><?php echo $users['username'] ?></td>
                    <td><?php echo $users['created_at']; ?></td>

                    <td>
                        <form action="delete_user.php" method="post" id="delete_user_form">
                            <input type="hidden" name="user_id" value="<?php echo $users['id']; ?>">
                            <input id="deleteUserButton" type="submit" value="Delete" >
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>




   
   
<?php include('includes/footer.php');?>  
