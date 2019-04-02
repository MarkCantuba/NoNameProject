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