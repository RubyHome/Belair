<?php

/* @var $modalHeader string */
?>

<div id="infoModal" class="modal inmodal fade" role="dialog"  aria-hidden="true">
    
    <div class="modal-dialog">
      <div class="modal-content animated fadeIn">
    <div class="modal-header">
        <h3> <?php echo $modalHeader; ?></h3>
    </div>
    <div class="modal-body form">
        <p id="textInfo" class="well span4"></p>
    </div>
    <div class="modal-footer">
        <button type="button" id="textInfoBtn" data-dismiss="modal" aria-hidden="true" class="btn btn-primary">ОК</button>
    </div>
</div>
    </div>
</div>

<script>
    
    function doSync(url, objectId) {
        //alert('fvsv');
        $.post('/payGate/'+url, {id: objectId}, function (data) {
            //console.log('/payGate/'+url);
            //console.log(objectId);
        if (typeof data.error !== 'undefined') { // Process the errors
                $('#textInfo').html('<b>Error:</b> ' + data.error).addClass('error');
            } else {
                $('#textInfo').html(data.message).removeClass('error');
                if (typeof data.url !== 'undefined') { // Redirect is needed
                    $('#textInfo').addClass('url').attr('url', data.url);
                    $('#textInfoBtn').text('Proceed');
                } else {    // Simple reload
                    $('#textInfoBtn').text('Reload');
                }
            }
            
        }, 'json')
                .done(function () {
                    $('#infoModal').modal('show');
                });
               return false;
    }

    $('#infoModal').on('hidden', function () {
        if ($('#textInfo').hasClass('url')) {
            document.body.style.cursor = 'wait';
            window.location.href = $('#textInfo').attr('url');
        } else {
            if (!$('#textInfo').hasClass('error')) {
                document.body.style.cursor = 'wait';
                location.reload();
            }
        }
    });
    
    $('#textInfoBtn').click(function(){
        location.reload();
    });
</script>
<style>
    p.error {
        padding: 5px;
        border-style:solid;
        border-color: red;
        background-color: #FFF6BF;
    }

</style>