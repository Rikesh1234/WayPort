<?php

session_start();

if(isset($_SESSION['uname']) == ""){
  header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="status.css?v=<?php echo time(); ?>">
    <title>Waste Managment System</title>
</head>
<body>
<div class="container text-center text-white">
    <div class="row pt-5">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">Requested Data</h1>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">
                <div class="table-responsive">
                    <table class="table table-fixed">
                        <thead>
                            <tr>
                                <th scope="col" class="col-3">R_Id</th>
                                <th scope="col" class="col-3">Address</th>
                                <th scope="col" class="col-3">Status</th>
                                <th scope="col" class="col-3">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="col-3">1</th>
                                <td class="col-3">Mark</td>
                                <td class="col-3">Otto</td>
                                <td class="col-3">@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- End -->
                
            </div>
        </div>
    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</html>