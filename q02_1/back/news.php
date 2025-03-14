<form action="./api/edit_news.php" method="post">
    <table>
        <tr>
            <th width="10%">編號</th>
            <th width="70%">標題</th>
            <th width="10%">顯示</th>
            <th width="10%">刪除</th>
        </tr>
        <?php
        $total=$News->count();
        $div=3;
        $pages=ceil($total/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;

        $rows=$News->all(" LIMIT $start,$div");
        $n=$start+1;
        
        foreach($rows as $row):
        ?>
        <tr>
            <td style="background:#eee; text-align:center"><p><?=$n.".";?></p></td>
            <td><?=$row['title'];?></td>
            <td><input type="checkbox" name="sh[]" id="sh[]" value="<?=$row['id'];?>"></td>
            <td><input type="checkbox" name="del[]" id="del[]" value="<?=$row['id'];?>"></td>
            <input type="hidden" name="<?=$row['id'];?>">
        </tr>
        <?php
        $n++;
        endforeach;
        ?>
    </table>
    <div class="ct">
            <?php
            if($now>1){
                echo "<a href='?do=news&p=".($now-1)."'> < </a>";
            }
            for($i=1;$i<=$pages;$i++){
                $size=($i==$now)?"24px":"16px";
                echo "<a href='?do=news&p=$i' style='font-size:$size'>$i</a>";
            }
            if($now<$pages){
                echo "<a href='?do=news&p=".($now+1)."'> > </a>";
            }
            ?>
        </div>
    <input type="submit" value="確定修改" class="cent">
</form>

