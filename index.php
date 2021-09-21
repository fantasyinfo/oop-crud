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
                    <tbody id="get_data">

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
        var sendingHtml = "";
        $.ajax({
            url: './inc/crud-action.php',
            method: 'get',
            contentType: 'application/json',
            success: function(response) {
                console.log(typeof(response));
                response = jQuery.parseJSON(response);
                var finalData = response.data;
                console.log(finalData);
                console.log(finalData['0'].user_name);
                for (i = 1; i < finalData.length; i++) {
                    sendingHtml += "<tr><td>" + i + "</td><td>" + finalData[i].user_name +
                        "</td><td>" + finalData[i].user_email +
                        "</td><td><button class='btn btn-success' data-type='view-" + finalData[i]
                        .user_id +
                        "'>Eye</button><button class='btn btn-warning' data-type='view-" +
                        finalData[i].user_id +
                        "'>Edit</button><button class='btn btn-danger' data-type='view-" +
                        finalData[i].user_id + "'>Delete</button></td></tr>";

                }
                jQuery('#get_data').html(sendingHtml);


                // sendingHtml = "";

                // finalData.map((data, i) => {

                //     console.log(i);
                //     sendingHtml += `  <tr>
                //         <td>${i}</td>
                //         <td>${data.user_name}</td>
                //         <td>${data.user_email}</td>
                //         <td>
                //         empty
                //         </td>
                //     </tr>`;

                //     //console.log(sendingHtml);
                // });
                // jQuery('#get_data').html(sendingHtml);








                console.log(typeof(finalData));
            }
        });
    });
    </script>





</body>

</html>