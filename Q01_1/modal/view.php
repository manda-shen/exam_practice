<h3 class="cent">進站總人數管理</h3>
<hr>
<form action="api/update_view.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>進站總人數</td>
            <td><input type="number" name="total"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="total">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
    </div>
</form>