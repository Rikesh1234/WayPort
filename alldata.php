<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alldata.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php include("adminheader.php") ?>
    <div class="container text-center text-white">
        <div class="row pt-5">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4" style="color:rgb(31 163 101);">Requested Data</h1>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <table class="table col-lg-7 mx-auto bg-white rounded shadow">
                    <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Article Name</th>
                            <th scope="col">Author</th>
                            <th scope="col">Shares</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bootstrap 4 CDN and Starter Template</td>
                            <td>Cristina</td>
                            <td>2.846</td>
                            <td>
                                <button data-modal-target="#add" type="button" class="btn btn-primary">Pending</button>
                                <div class="modal" id="add">
                                    <div class="modal-header">
                                        <div class="title">Add Remarks</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <textarea style="width:100%;height:80px;"></textarea>
                                        </div>
                                        <button class="btn btn-primary" id="submit_sub-categories_add" name="submit_sub-categories_add" type="submit">Add Sub-Categories</button>
                                        </form>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                <button type="button" class="btn btn-success"><i class="fa fa-check"></i></button>
                                <button type="button" data-modal-target="#add" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="pop.js"></script>
</html>