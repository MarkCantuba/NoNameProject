<div class="modal fade" id="UnsubscribeModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-dark">
                <h3 class="font-weight-bold w-100 text-white"> Unsubscribe to this thread? </h3>
                <button class="close text-white" role="button" data-dismiss="modal"> X </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="../loadData/processUnsubscribe.php?category=<?php echo $_GET['category']?><?php if (isset($_GET['threadUnsub'])) {echo "&thread=".$_GET['threadUnsub'];} ?>">
                        <button id="unsub" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="unsub"> Confirm </button>
                </form>
            </div>
        </div>
    </div>
</div>
