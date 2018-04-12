<?php
/* @var $this yii\web\View */
?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="result"><?php echo $id;?></div>
                </div>
            </div>
        </div>
    </div>

<?php
$script = <<< JS
    function pollServer() {	
	$.ajax({
            url: 'http://localhost:5000/mdm/api/v1.0/check',
            type: 'post',
            dataType: 'json',
	        contentType: "application/json",
            success: function(data){
                var d = JSON.parse(data)
                $("#result").append("<br>Status: "+d.status);
            },
            data: "{\"params\": {\"id\":\"$id\"}}",
        });
	        
    };
    function showResult(data){
        if(data.status == 'waiting'){
            $('#result').html('<h2>Waiting...</h2>');
        }
    }
    var checker = setInterval(pollServer,4000);
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>
