<?php
include 'db.php';
$id=$_GET['id'];
$sql = "select * from addt where id= '$id'";
$rows = $db->query($sql);
$row= $rows->fetch_assoc();
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $sql2= "update addt set name= '$name' where id= '$id'";
    $db->query($sql2);
    header('location:index.php');
  
}


    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div class="container mt-3">
        <div class="row ">

            <center>
                <h2>Update TOdo list</h2>
            </center>
            <div class="col-md-10 col-md- offset-1">
                <div class="mt-4">


                    <!-- Modal Header -->

                    <!-- Modal body -->

                    <form method="post">
                        <td>Task</td>
                        <input type=text placeholder="Update Task" name="name" value="<?php echo $row['name']; ?>">
                        <input type="submit" name="send" class="btn btn-success">



                    </form>

                </div>

                <!-- Modal footer -->


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>