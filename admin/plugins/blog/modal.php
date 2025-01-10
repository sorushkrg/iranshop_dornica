<?php
require_once "../../checkLogin.php";
$id = $_GET["id"];

$db->where("id", $modal_id);
$locked = $db->getValue("blog_page", "locked");





?>

<div class="modal-dialog" role="document">
    <form>
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                    توضیحات
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="color: red;"></p>
                <textarea class="form-control" id="content" rows="5" placeholder="متن خود را وارد کنید..."></textarea>
                <p id="errorN"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">بستن</button>
                <button type="click" id="send-des" class="btn btn-primary waves-effect waves-light">ذخیره</button>
            </div>
        </div>
    </form>
</div>



<script>
    $("#send-des").on("click", function(e) {
        e.preventDefault();

        const content = $("#content").val().trim();

        if (content == "") {
            $("#errorN").text("فیلد توضیحات را پر کن ").css("color", "red");
            return;
        }

        const formData = {
            modal_id: <?= $id ?>,
            content: content,
        };



        $.ajax({
            type: "POST",
            url: "lock-submit.php",
            data: formData,
            success: function(response) {

                if (response.indexOf("عملیات") !== -1) {
                    $("#errorN").text(response).css("color", "green");
                    $("#content").val("");
                    setTimeout(function() {
                        window.location.href = "blog_list.php";
                    }, 2000);


                } else {

                    const errors = JSON.parse(response);
                    if (errors.errorN) {
                        $("#errorN").text(errors.errorN).css("color", "red");
                    }
                }

            },
            error: function() {

                $("#errorN").html("خطایی رخ داده است. لطفا دوباره تلاش کنید").css("color", "red");
            }
        });
    });
</script>