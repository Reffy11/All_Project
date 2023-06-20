<?php
include'db.php';

$sql="select * from addt";
$rows= $db->query($sql);


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
                <h2>TOdo list</h2>
            </center>
            <div class="col-md-10 col-md- offset-1">
                <div class="mt-4">
                    <input type="btn" value="Add task" class="btn btn-success col-sm-2" name="task"
                    data-bs-toggle="modal" data-bs-target="#myModal" class="form-control">
                        <input type="btn" value="Print" class="btn btn-warning col-md-2 text-right" onclick="print()" name="print">
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add task</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form method="post" action="add.php">
                                        <td>Task</td>
                                        <input type=text placeholder="Add Task" name="name">
                                        <input type="submit" name="send" class="btn btn-success">



</form>

                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                       
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sl.no</th>
                                <th>Task</th>
                            </tr>
                        </thead>
                        <tbody>
                                  <?php while($row= $rows->fetch_assoc()):  ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td class="col-md-5"><?php echo $row['name']?></td>
                                <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                                <?php endwhile;?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>