<?php
require_once("../controllers/service_controller.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <form action="../actions/addcategory.php" method="post">
    <input type="text" name="categoryname" placeholder="Add new category">
    <button type="submit" name="AddCategory">AddCategory</button>
    </form>



    <p>Edit your category names here</p>
    <table>
    <tr>
        <th>Original Category Name</th>
        <th>New Category Name</th>
       
    </tr>


    <?php $list = returnCategory_ctr(); foreach($list as $input){?>
    <tr>
        <form action="../actions/addandeditcategory.php" method="POST">
        <td><?php echo $input['cat_name'] ?> <input hidden type='number' name="cid" value="<?php echo $input['cat_id'] ?>"></td>
        <td> <input type="text" name="cname" placeholder="Input new category name"> </td>
        <td> <input type="submit" name="editCategory" value="Edit"> </td>
        </form>
        <form action="../actions/categorydelete.php" method="POST">
        <td><?php echo $input['cat_name'] ?> <input hidden type='number' name="cid" value="<?php echo $input['cat_id'] ?>"></td>
        <td> <input type="text" name="cname" placeholder="Input new category name"> </td>
        <td> <input type="submit" name="editCategory" value="Edit"> </td>
        </form>
    </tr>
    <?php } ?>

    </table>

</body>
</html>