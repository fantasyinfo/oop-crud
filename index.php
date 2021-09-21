<?php

//include('./inc/crud-action.php');




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP OOP CRUD</title>
</head>

<body>

    <div class="container">

        <div class="jumbotron">
            <h1 class="text-center text-success ">PHP OOP CRUD</h1>
        </div>

    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-5">

            </div>
            <div class="col-md-7">
                <div class="alert alert-warning">
                    <h1 class="text-center">Users Data</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($allData['data'] as $row) { ?>

                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $row['user_name']; ?></td>
                            <td><?= $row['user_email']; ?></td>
                            <td>
                                <button id="view" data-type="view-id=<?= $row['user_id']; ?>" class="btn btn-success"><i
                                        class="fas fa-eye"></i></button>
                                <button id="edit" data-type="edit-id=<?= $row['user_id']; ?>" class="btn btn-warning"><i
                                        class="fas fa-pencil-alt"></i></button>
                                <button id="delete" data-type="delete-id=<?= $row['user_id']; ?>"
                                    class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php $i++;
                        } // closing foreach 
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>


    <script>
    $(document).ready(function() {
        $.ajax({
            url: './inc/crud-action.php',
            method: 'get',
            contentType: 'application/json',
            success: function(response) {
                console.log(response);
            }
        });
    });
    </script>





</body>

</html>