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

        <script type="text/javascript" src="../js/showComments.js"></script>

        <script type="text/javascript" src="../js/filterSearchThread.js"></script>
    </head>

    <body class="d-flex flex-column">
        <!-- Header -->
        <?php require '../headerFooter/Header.php'; ?>

        <button id="CreateThread" class="btn btn-dark" data data-toggle="modal" data-target="#CreateThreadModal"> Create New Thread </button>

        <input id="threadSearch" class="form-control text-center" type="text" placeholder="Search Thread" aria-label="Search Thread">

        <div class="container-fluid text-center font-weight-bold">
            <h1 class="font-weight-bold"> <?php echo $_GET['category'] ?> </h1>
        </div>


        <div id="threadArea" class="container-fluid">
            <?php include '../loadData/getThreads.php'; ?>
        </div>

        <!-- Modals -->
        <?php
        require '../modals/CreateThread.php';
        require '../modals/CommentModal.php';
        require '../modals/Subscribe.php';
        require '../modals/Unsubscribe.php';
        require '../modals/Success.php';
        ?>

    </body>

</html>