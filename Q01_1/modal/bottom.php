<?php include_once "../api/db.php";
$bottom=$Bottom->find(1);
// dd($bottom)
?>
<h3 class="cent">頁尾版權管理</h3>
<hr>
<form action="api/update_bottom.php" method="post" enctype="multipart/form-data">
    <table style="margin:auto">
        <tr>
            <td>頁尾版權資料：</td>
            <td><input type="text" name="bottom" value="<?=$bottom['bottom'];?>"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="bottom">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>