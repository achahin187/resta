<?php include "include/header.php";

include "../classes/dashboard.php";
///////////////////////

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $admin=new admin();
    $admin->deleteContact($id);
    
    
    };
    ////////////////////////////////////////////////

?>


?>

<div class="bradcam_area bradcam_bg_2">
    <div class="container ">
        <div class="row">
            <h2 style="color: white; padding:20px;">Contact Us List : </h2>



            <div class="display-cat mt-5">
                <table class="table table-bordered">
                    <tr style="color: white">
                        <th>id</th>
                        <th>Message</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>subject</th>
                        <th>Edit</th>

                    </tr>

                    <?php
$contact=new admin();
$rows=$contact->selectContact();
$nom='';
foreach($rows AS $row){
    $nom++;
?>


                    <tr style="color: white">
                        <td><?php echo$nom ?></td>

                        <td><?php echo$row['message'] ?></td>
                        <td><?php echo$row['name'] ?></td>
                        <td><?php echo$row['email'] ?></td>
                        <td><?php echo$row['subject'] ?></td>
                        <td> <a href="contact-list.php?id=<?php echo$row['id'] ?>"> <button type="submit"
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