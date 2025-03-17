<style>
    .news{
        width: 95%;
        border-spacing: 5px;
    }
    .news td, .news th{
        padding: 10px;

    }
    .detail{
        display:none;
    }

</style>

<fieldset>
    <legend>目前位置：首頁 > 最新文章區</legend>

    <div>
        <table class="news">
            <tr>
                <th width="25%">標題</th>
                <th>內容</th>
                <th></th>
            </tr>
            <?php
            $div=5;
            $total=$News->count(['sh'=>1]);
            $page=ceil($total/$div);
            $now=$_GET['p']??1;
            $start=($now-1)*$div;

            $rows=$News->all(['sh'=>1]," LIMIT $start,$div");
            foreach($rows as $row):
            ?>
            <tr>
                <td style="background:#eee"><?=$row['title'];?></td>
                <td class="content">
                    <span class="simple"><?=mb_substr($row['content'],0,20);?>&nbsp;...</span>
                    <span class="detail"><?=$row['content'];?></span>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
    <div class="ct">
        <?php
        if($now>1){
            echo "<a href='?do=news&p=".($now-1)."'> < </a>";
        }

        for($i=1;$i<=$page;$i++){
            $size=($i==$now)?"24px":"16px";
            echo "<a href='?do=news&p=$i' style='font-size:$size'>$i</a>";
        }

        if($now<$page){
            echo "<a href='?do=news&p=".($now+1)."'> > </a>";
        }
        ?>
        
    </div>

</fieldset>

<script>
    $(".content").on("click",function(){
        $(this).children(".simple,.detail").toggle();
    })
</script>