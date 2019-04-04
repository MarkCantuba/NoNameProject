<div class="modal fade" id="CommentModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-dark text-white">
                <h3 class="font-weight-bold w-100">
                    <?php
                    if (isset($_GET['threadName'])) {
                        echo $_GET['threadName'];
                    }
                    ?> </h3>
                <button class="close text-white" role="button" data-dismiss="modal"> X </button>
            </div>

            <div class="modal-body">
                <?php require '../loadData/getComments.php'; ?>
            </div>

            <div class="modal-body">
                <form method="POST">
                    <div class="form-group text-center">
                        <textarea  required class="form-control" rows="2" name="postComment" placeholder="Enter Comment..." style="resize: none;"></textarea>
                    </div>

                    <button id="createComment" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="createThread"> Create </button>
                </form>
            </div>

        </div>
    </div>
</div>