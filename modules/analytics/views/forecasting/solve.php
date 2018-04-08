<?php
/* @var $this yii\web\View */
?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="result"></div>
                </div>
            </div>
        </div>
    </div>

<script>
    (function pollServer() {
        $.getJSON('/url', function (response) {
            if (response.data) {
                showResult(data);
            }
            setTimeout(pollServer, 1000);
        });
    }());
    function showResult(data){
        if(data.status == 'waiting'){
            $('#result').html('<h2>Waiting...</h2>');
        }
    }
</script>