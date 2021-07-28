<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">		
<style>	

@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');
.msg{
	display: block;
    background: #de6d6d;
    border-radius: 5px;
    padding: 10px;
    border: solid 1px #d74e4e;
    color: #7f2e2e;
    font-weight: 600;
	margin:5px auto;
	font-family: 'Roboto', sans-serif;
	}
	
.msg.success{
	background:rgba(0, 128, 0, 0.35);
    border-color: #669866;
    color: #4d754d;
}
.msg .fa-times{
	float:right;
	text-decoration:none
}
.msg.success .fa-times{
    color: #4d754d;
}	
.msg.error{
	background: #e69f9f;
    border-color: #967272;
    color: #9a4848;
}
.msg.error .fa-times{
    color: #9a4848;
}
.msg.info{
	background: #aed8e6;
    border-color: #5899af;
    color: #5594a9;
}
.msg.info .fa-times{
    color: #5594a9;
}	
</style>
<?php
function alerta($type, $title, $msg)
{
    echo "<script type='text/javascript'>
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: false,
        progressBar: true,
        positionClass: 'toast-top-right',
        preventDuplicates: false,
        showDuration: 400,
        hideDuration: 1000,
        timeOut: 5000,
        extendedTimeOut: 1000,
        showEasing: 'swing',
        hideEasing: 'linear',
        showMethod: 'fadeIn',
        hideMethod: 'fadeOut'
      }
      toastr['$type']('$msg','$title')
            </script>";
}
?>
<div>
	<!--<span class="msg <?php echo $msg->classe?>"><i class="fas <?php echo $msg->icone?>"></i> <?php echo $msg->msg?><a href="javascript:;" onclick="fecharMsg()" class="fas fa-times float-right"></a></span>-->
    <?= alerta($msg->classe, ucfirst($msg->classe), $msg->msg ); ?>
</div>
