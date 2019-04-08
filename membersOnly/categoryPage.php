<?php
session_start();
if (!isset($_SESSION['IsActive']) || !$_SESSION['IsActive']) {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome <?php echo $_SESSION['Username'] ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <!-- Bootstrap -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>

        <script type="text/javascript" src="../js/filterSearchCategory.js"></script>

    </head>

    <body class="d-flex flex-column">
        <?php require '../headerFooter/Header.php'; ?>
        <input id="categorySearch" class="form-control text-center" type="text" placeholder="Search Category" aria-label="Search Category">

        <button id="CreateCategory" class="btn btn-dark" data-toggle="modal" data-target="#CreateCategoryModal"> Add Category </button>

        <table id="Dashboard" class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th class="font-weight-bold" scope="col"> # </th>
                    <th class="font-weight-bold" scope="col"> Categories </th>
                    <th class="font-weight-bold" scope="col"> Description </th>
                </tr>
            </thead>
            <tbody  id="categoryTableBody">
                <?php
                require_once '../loadData/getCategories.php';
                ?>
            </tbody>
        </table>

        <?php
        require '../modals/CreateCategory.php';
        ?>
    </body>
</html>
