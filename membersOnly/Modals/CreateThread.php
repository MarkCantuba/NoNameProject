<div class="modal fade" id="CreateThreadModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h3 class="font-weight-bold w-100"> Create a New Thread </h3>
                <button class="close" role="button" data-dismiss="modal"> X </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="../loadData/getCreateThread.php?category=<?php echo $_GET['category']?>">
                    <div class="form-group">
                        <label> Thread Name: </label>
                        <input required id="Threadname" class="form-control" name="ThreadName" placeholder="Thread Name">
                    </div>

                    <div class="form-group">
                        <label> Initial Post: </label>
                        <textarea required class="form-control" rows="2" name="InitPost" placeholder="Enter first post here..." style="resize: none;"></textarea>
                    </div>
                        <button id="createThread" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="createThread"> Create </button>
                </form>
            </div>
        </div>
    </div>
</div>