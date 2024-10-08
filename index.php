<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud2</title>
</head>

<body>
    <div class="navbar navbar-light justify-content-center fs-3 mb-5">
        PHP CRUD
    </div>
    <div class="container">
        <?php
        if(isset($_GET['msg'])){
            $msg = $_GET['msg'];
            echo '<div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            '.$msg.'
            
          </div>';
        }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <td scope="col">ID</td>
                    <td scope="col">First Name</td>
                    <td scope="col">Last Name</td>
                    <td scope="col">Email</td>
                    <td scope="col">Gender</td>
                    <td scope="col">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db_conn.php';
                    $sql = "SELECT * FROM crud2table";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                    <th><?php echo $row['id']?></th>
                    <th><?php echo $row['first_name']?></th>
                    <th><?php echo $row['last_name']?></th>
                    <th><?php echo $row['email']?></th>
                    <th><?php echo $row['gender']?></th>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square
                    fs-5 me-3"></i></a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash
                    fs-5"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>