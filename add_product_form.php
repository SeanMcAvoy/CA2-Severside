<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

require('database.php');
$query = 'SELECT *
          FROM categories
          ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!-- the head section -->
 <div class="container">
<?php
include('includes/header.php');
?>
        <h1>Add product</h1>
        <form action="add_product.php" method="post" enctype="multipart/form-data"
              id="add_record_form">

            <label>Category:</label>
            <select id="category" name="category_id" onBlur="category_validation();">
            <option selected="" value="Default">Please select a Category</option>
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </option>
            <?php endforeach; ?>
            </select><span id="category_err"></span>
            <br>
            <label>Name:</label>
            <input type="input" name="name" placeholder="Full Product Name" required>
            <br>

            <label>Size:</label>
            <input type="input" name="size" required>
            <br>

            <label>List Price:</label>
            <input type="input" name="price" required>
            <br>        
            
            <label>Image:</label>
            <input type="file" name="image" accept="image/*" />
            <br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Add product">
            <br>
        </form>
        <p><a class="button1" href="index.php">View Homepage</a></p>
    <?php
include('includes/footer.php');
?>