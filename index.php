<?php
// Initialize the session
session_start();

//Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    // header("location: login.php");
    // exit;
}
else if (($_SESSION["loggedin"])) {
    $loginMessage ="<h2>Hi, <b> $_SESSION[username]</b>. Welcome to Jersey Direct.</h2>";
    $accountButton = "";   
}
//will only print admin account if you are admin!
if (($_SESSION["username"]) == "mcavoy1129") {
    $adminButton = "<a id=adminButton class=button1 href=admin.php >Admin Menu</a>";
}

require_once('database.php');

// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(
        INPUT_GET,
        'category_id',
        FILTER_VALIDATE_INT
    );
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}




// Get name for current category
$queryCategory = "SELECT * FROM categories
WHERE categoryID = :category_id";
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
$category_name = $category['categoryName'];

// Get all categories
$queryAllCategories = 'SELECT * FROM categories
ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryRecords = "SELECT * FROM products
WHERE categoryID = :category_id
ORDER BY productID";
$statement3 = $db->prepare($queryRecords);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>
<div class="container">
    <?php
    include('includes/header.php');
    ?>
    <br>
    <?php echo $loginMessage;?>
    <?php echo $adminButton;?>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><a class="button1" href=".?category_id=<?php echo $category['categoryID']; ?>">
                            <?php echo $category['categoryName']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Size</th>
                <th>Price</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><img src="image_uploads/<?php echo $product['image']; ?>" width="100px" height="100px" /></td>
                    <td><?php echo $product['name']; ?></td>
                    <td><?php echo $product['size'] ?></td>
                    <td><?php echo $product['price']; ?></td>

                    <td>
                        <form action="delete_product.php" method="post" id="delete_record_form">
                            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                            <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                    <td>
                        <form action="edit_product_form.php" method="post" id="delete_record_form">
                            <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                            <input type="hidden" name="category_id" value="<?php echo $product['categoryID']; ?>">
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a class="button1" href="add_product_form.php">Add product</a></p>
        <p><a class="button1" href="category_list.php">Manage Categories</a></p>
    </section>
    <?php
    include('includes/footer.php');
    ?>