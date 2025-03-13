<div>目前位置：首頁 > 分類網誌 > 健康新知</div>

<div style="direction:row;">
    <div>
    <legend>分類網誌</legend>
    </div>
    <div>
        <?php
        $rows=$News->all();
        foreach($rows as $row):
        ?>
        <p><?=$row['type'];?></p>
        <?php endforeach; ?>
    </div>
</div>