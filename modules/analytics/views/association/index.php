<?php
/* @var $this yii\web\View */
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <div class="card-header" data-background-color="purple">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <span class="nav-tabs-title">Assotsiativ qoidalarni izlash:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active">
                                        <a href="#step1" data-toggle="tab" aria-expanded="true">
                                            <i class="material-icons">file_upload</i>
                                            Faylni yuklash
                                            <div class="ripple-container"></div></a>
                                    </li>
                                    <li class="">
                                        <a href="#step2" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">code</i>
                                            Metodni tanlash
                                            <div class="ripple-container"></div></a>
                                    </li>
                                    <li class="">
                                        <a href="#step3" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">cloud</i>
                                            Natija
                                            <div class="ripple-container"></div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="step1">
                                1-qadam kontent
                            </div>
                            <div class="tab-pane" id="step2">
                                2-qadam kontent
                            </div>
                            <div class="tab-pane" id="step3">
                                Natija kontent
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function submitFile() {
        alert("Yelo");
    }
    $( '#file-form' )
        .submit( function( e ) {
            $.ajax( {
                url: '/analytics/association/upload',
                type: 'POST',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: function(html){
                    alert(html);
                }
            } );
            e.preventDefault();
    } );

</script>