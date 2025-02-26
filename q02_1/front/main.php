<style>
    .types{
        display:flex;
    }
    
    .type{
        background:#eee;
        margin:0px;
        margin-top:10px;
        margin-right:-1px;
        padding:5px 10px;
        border:1px solid #ccc;
    }
    .type:hover{
        background:white;
        border-bottom:1px solid white;
        cursor: pointer;
    }
    .show{
        display:block;
        width: 750px;
        padding:15px;
        border:1px solid #ccc;
        margin-top:-1px;
        overflow-wrap:break-word;
    }
</style>
<div class="types">
    <div class="type"><a href="?show=health">健康新知</a></div>
    <div class="type"><a href="?show=smoke">菸害防治</a></div>
    <div class="type"><a href="?show=cancer">癌症防治</a></div>
    <div class="type"><a href="?show=sick">慢性病防治</a></div>
</div>
<div class="show">
    <?php
	$show=$_GET['show']??'health';
	$file="text/".$show.".php";
	if(file_exists($file)){
		include $file;
	}else{
		include "text/health.php";
	}
	?>
    

</div>
<script>
    
</script>