<div class="modal fade" id="SubscribeModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center bg-dark">
                <h3 class="font-weight-bold w-100 text-white"> Subscribe to SMS Notifications </h3>
                <button class="close text-white" role="button" data-dismiss="modal"> X </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="../loadData/processSubscribe.php?<?php
                $thread = "";
                if (isset($_GET['thread'])) {
                    $thread = "&thread=" . $_GET["thread"];
                }
                echo "category=" . $_GET['category'] . $thread
                ?>">

                    <div id="subGroup" class="form-group">
                        <label> Phone Number: </label>
                        <input required id="PhoneNumber" class="form-control" name="PhoneNumber" placeholder="+1306XXXXXXX">
                    </div>
                    <button id="Subscribe" role="button" class="btn btn-lg bg-dark text-white font-weight-bold" type="submit" name="Subscribe"> Subscribe </button>
                </form>
            </div>
        </div>
    </div>
</div>
