<?php 
ob_start();

include "include/header.php" ;
include "../classes/dashboard.php";

/////////////////////////////////////
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $admin=new admin();
    $admin->deleteFood($id);
    
    
    };
////////////////////////////////////////////
$msg='';
  if(isset($_POST['add'])){
$food=$_POST['food'];
$desc=$_POST['desc'];
$category=$_POST['category'];
$price=$_POST['price'];
$filename=$_FILES['foodImage']['name'];
$temp=$_FILES['foodImage']['tmp_name'];
$foodImage = rand(0,1000).'_'.$filename;
move_uploaded_file($temp,"upload\\".$foodImage);
$admin=new admin();
$admin->insertFood($food,$foodImage,$desc,$price,$category);
$msg="<div class='alert alert-success' role='alert'>
Added Successfully !
</div>";




  }
////////////////////////////////////////

?>

<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">
            <div class=" col-md-10 ">
                <h2 style="color: white; padding:20px;">Foods List : </h2>
                <h4 style="text-align: center;"><?php  echo$msg;    ?></h4>


                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="form-group"
                    enctype="multipart/form-data">
                    <label style="color: white">Add Food</label>
                    <input type="text" name="food" class="form-control" placeholder="Add Food">
                    <br> <br>
                    <div class="form-group">
                        <select name="category" class="form-control">
                            <?php
$admin=new admin();
$rows=$admin->selectCategory();
$nom='';
foreach($rows AS $row){
    $nom++;
?>

                            <option value="<?php echo$row['id'] ?>"><?php echo$row['name'] ?></option>

                            <?php
}


?>
                        </select>

                    </div>
                    <br> <br>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foodImage">
                    </div>
                    <br> <br>
                    <input type="text" placeholder="Add Desc here" name="desc" class="form-control">

                    </input>
                    <br> <br>
                    <input type="text" name="price" placeholder="price">
                    <br> <br>
                    <input type="submit" name="add" class="form-group btn btn-primary" value="Add">
                </form>
            </div>


            <div class="display-cat mt-5">
                <table class="table table-bordered">
                    <tr style="color: white">

                        <th>food_Num</th>
                        <th>food_Name</th>
                        <th>food_category</th>
                        <th>food_image</th>
                        <th>desc</th>
                        <th>Price</th>
                        <th>Edit</th>

                    </tr>

                    <?php
                    $admin=new admin();
$rows=$admin->selectfoods();
$nom='';
foreach($rows AS $row){
    $nom++;
?>
                    <tr style="color: white">

                        <td><?php echo$nom ?></td>
                        <td><?php echo$row['name'] ?></td>
                        <td><?php echo$row['category_id'] ?></td>
                        <td><img src="upload/<?php echo$row['image'] ?>" style=" height: 120px; width:150px"></td>
                        <td><?php echo$row['description'] ?></td>
                        <td><?php echo$row['price'] ?></td>
                        <td> <a href="food-list.php?id=<?php echo$row['id'] ?>"> <button type="submit"
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








<?php include "include/footer.php"; ?>