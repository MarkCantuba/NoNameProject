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
        <title>Welcome <?php echo $_SESSION['Username']?></title>
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

    </head>
    
    <body>
        <!-- Navigation bar -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- Logo -->
                <h3 class="navbar-text text-white text-we">
                    <a class="navbar-brand" href="#" >
                       <img src="../images/Logo.png" alt="CatFish" style="max-height: 45px; max-width: 45px;">
                    </a>
                    The Sketchy Web
                </h3>

                <!-- NavBar Buttons -->
                <div>
                <button class="btn btn-dark btn-info"> 
                    <a class="text-white" href="../accountProcessing/logout.php"> Logout </a>
                </button>
                </div>
            </div>
       </nav>

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
        
        <div class="modal fade" id="CreateCategoryModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center"> 
                        <h3 class="font-weight-bold w-100"> Add Category </h3>
                        <button class="close" role="button" data-dismiss="modal"> X </button>
                    </div> 
                    
                    <div class="modal-body">    
                        <form method="POST" action="../loadData/getCreate.php">
                            <div class="form-group"> 
                                <label> Category Name: </label>
                                <input required="true" id="Categoryname" class="form-control" name="CategoryName" placeholder="Category Name">
                            </div>
                            
                            <div class="form-group"> 
                                <label> Category Description: </label>
                                <input required="true" id="Description" class="form-control" name="Description" placeholder="Enter Category Description">
                            </div>
                            <button id="CreateCategory" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="createCategory"> Create </button>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
                
         
        <!-- Footer -->
        <footer class="page-footer black text-center fixed-bottom">
            <div class="footer-copyright">
                © Not Really Copyrighted
                <a href="#"> CMPT350 Project</a>
            </div>
        </footer>
    </body>
</html>
