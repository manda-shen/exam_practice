<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
    <div style="height:32px; display:block;"></div>
    <!--正中央-->
    <h3 class='cent'>更多最新消息資料區</h3>
    <hr>
    
    
        <?php 

        $div=5;
        $total=$News->count();
        $pages=ceil($total/$div);
        $now=$_GET['p']??1;
        $start=($now-1)*$div;

        echo "<ol start='".($start+1)."'>";
        $rows=$News->all(" limit $start,$div");
        foreach($rows as $row){
                $text=mb_substr($row['text'],0,30);
                echo "<li class='sswww'>";  
                echo $text . "...";
                echo "<span class='all' style='display:none'>";
                echo $row['text'];
                echo "</span>";
                echo "</li>";
            }
        ?>
        </ol>
        <div class="cent">
        <?php    

        if($now-1>0){
            $prev=$now-1;
            echo "<a href='?do=$do&p=$prev'>";
            echo "<";
            echo "</a>";
        }
        for($i=1;$i<=$pages;$i++){
            $size=($i==$now)?"20px":"14px";
            echo "&nbsp;" . "<a href='?do=$do&p=$i' style='font-size:$size'>";
            echo $i;
            echo "</a>" . "&nbsp;";
        
        }
        if(($now+1)<=$pages){
            $next=$now+1;
            echo "<a href='?do=$do&p=$next'>";
            echo ">";
            echo "</a>";
        }

        ?>
        </div>
</div>
<div id="alt"
    style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
</div>
<script>
    $(".sswww").hover(
        function() {
            $("#alt").html("" + $(this).children(".all").html() + "").css({
                "top": $(this).offset().top - 50
            })
            $("#alt").show()
        }
    )
    $(".sswww").mouseout(
        function() {
            $("#alt").hide()
        }
    )
</script>