<?php
ob_start();

include "include/header.php" ;

include "../classes/dashboard.php";
////////////////////////////////

if(isset($_GET['id'])){
$id=$_GET['id'];
$admin=new admin();
$admin->delete($id);


};
////////////////////////////////////////////////

    

////////////////////////////////////////////////////
if(isset($_POST['add'])){
$name=$_POST['category-food'];
if(!empty($_POST['category-food'])){
    $admin=new admin();
    $admin->insertCategory($name);


}else{
    $msg="<div class='alert alert-success' role='alert'>
write category name !
</div>";
}
}
////////////////////////////////////////////////////////////////


?>

<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">

            <div class=" col-md-10 ">
                <h1 style="color: white; padding:20px;">Category Food : </h1>

                <form action="" method="POST" class="form-group">
                    <label style="color: white">Add Category Food</label>
                    <input type="text" name="category-food" class="form-control">
                    <br>
                    <input type="submit" name="add" class="form-group btn btn-primary" value="Add">
                </form>
            </div>


            <div class="display-cat mt-5">
                <table class="table table-bordered">

                    <tr style="color: white">
                        <th>category_Num</th>
                        <th>category_Name</th>
                        <th>Edit</th>

                    </tr>
                    <?php
$admin=new admin();
$rows=$admin->selectCategory();
$nom='';
foreach($rows AS $row){
    $nom++;
?>


                    <tr style="color: white">
                        <td><?php echo$nom ?></td>
                        <td><?php echo$row['name'] ?></td>
                        <td> <a href="admin.php?id=<?php echo$row['id'] ?>"> <button type="submit"
                                    class="btn btn-danger btn-sm">Delete</button>
                            </a></td>
                    </tr>


                    <?php
}


?>



                </table>
            </div>
        </div>
    </div>
</div>








<?php include "include/footer.php" ?>