<?php 
    require_once '../load.php';
    confirm_logged_in();

    if (isset($_GET['filter'])) {
       
        $args = array(
            'tbl' => 'tbl_products',
            'tbl2' => 'tbl_category',
            'tbl3' => 'tbl_products_categories',
            'col' => 'prod_id',
            'col2' => 'category_id',
            'col3' => 'category_name',
            'filter' => $_GET['filter'],
        );
        $getProds = getProductsByCategories($args);
    } else {
        $prod_table = 'tbl_products';
        $getProds = getAll($prod_table);
    }
    
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome! <?php echo $_SESSION['user_name'];?></h2>

    <a href="admin_createuser.php">Create User</a>
    <a href="admin_edituser.php">Edit User</a>
    <a href="admin_deleteuser.php">Delete User</a>

    <a href="admin_addmovie.php">Add Product</a>

    <a href="admin_logout.php">Sign Out</a>
</body>
</html>


    
    
 