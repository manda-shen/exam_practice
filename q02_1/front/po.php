<style>
.title-left {
    width: 20%;
}

.title-right {
    width: 50%;
}

.row{
    display:flex;
    flex-direction: row;
}
</style>
<?php
$istype=(isset($_GET['type']))?$_GET['type']:"健康新知";
?>

<div>目前位置：首頁 > 分類網誌 > <?=$istype;?></div>

<div class="row">
<fieldset class="title-left">
    <legend>分類網誌</legend>

    <div>
        <?php
            $rows = $News->all();
            $showntypes = [];
            foreach ($rows as $row):
                if (! in_array($row['type'], $showntypes)):
                    $showntypes[] = $row['type'];
                ?>
		        <p><a href="?do=news&type=<?=$row['type'];?>"><?=$row['type'];?></a></p>
		        <?php
                        endif;
                    endforeach;
                ?>
    </div>
</fieldset>

<fieldset class="title-right">
    <legend>文章列表</legend>
    <div>
    <?php
    $titles=$News->all(['type'=>$istype]);
    foreach($titles as $title):
    ?>
    <div>
    <a href=""><?=$title['title'];?></a>
    </div>
    <?php endforeach; ?>
    </div>
</fieldset>
</div>