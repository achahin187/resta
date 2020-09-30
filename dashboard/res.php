<?php include "include/header.php";
include "../classes/dashboard.php";

////////////////////////////////

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $admin=new admin();
    $admin->deleteRes($id);
    
    
    };
    ////////////////////////////////////////////////

?>

<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">
            <h2 style="color: white; padding:20px;">Reservation List : </h2>



            <div class="display-cat mt-5">
                <table class="table table-bordered">
                    <tr style="color: white">
                        <th>id</th>
                        <th>Name</th>
                        <th>phone</th>
                        <th>Date</th>
                        <th>category</th>
                        <th>Edit</th>

                    </tr>
                    <?php
$admin=new admin();
$rows=$admin->selectReservation();
$nom='';
foreach($rows AS $row){
    $nom++;
?>

                    <tr style="color: white">
                        <td><?php echo$nom ?></td>
                        <td><?php echo$row['name'] ?></td>
                        <td><?php echo$row['phone'] ?></td>
                        <td><?php echo$row['date'] ?></td>
                        <td><?php echo$row['category'] ?></td>
                        <td> <a href="res.php?id=<?php echo$row['id']?>"> <button type="submit"
                                    class="btn btn-danger">Delete</button>
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