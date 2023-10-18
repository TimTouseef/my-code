<!DOCTYPE html>
<html lang="en">
<?php
    require_once "conn.php";
    if(isset($_POST["PostTitle"]) && isset($_POST["description"]) && isset($_POST["image"])){
        $PostTitle = $_POST['Posttitle'];
        $Description = $_POST['Description'];
        $image = $_POST['image'];
        $sql = "UPDATE post_crud SET `PostTitle`= '$PostTitle', `Description`= '$Description', `image`= $image  WHERE id= ".$_GET["id"];
        if (mysqli_query($conn, $sql)) {
            header("location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">Touseef Ahmed Post Crud</h1>
        <div class="container">
            <form action="adddata.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-4">
                        <label for=""><b>PostTitle</b></label>
                        <input type="text" name="PostTitle" id="PostTitle" class="form-control" required>
                    </div>
                    
                    <div class="form-group col-lg-6">
                        <label for=""><b>Description</b></label>
                        <input type="text" name="Description" id="description" class="form-control" required>
                    </div>
                    

                    <div class="form-group col-lg-3">
                        <label for=""><b>Image</b></label>
                        <input type="file" name="Image" id="formfile" class="form-control" required>
                        </div>

                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>


    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">PostTitle</th>
                    <th scope="col">Description</th>
                    <th scope="col">image</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM post_crud";
                        if ($post_crud = $conn ->query($sql_query)) {
                            while ($row = $post_crud -> fetch_assoc()) { 
                                $Id = $row['id'];
                                $PostTitle = $row['PostTitle'];
                                $Description = $row['Description'];
                                $image = $row['image'];
                    ?>


                    
                    <tr class="trow">
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $PostTitle; ?></td>
                        <td><?php echo $Description; ?></td>
                        <td><?php echo $image; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>
</body>
