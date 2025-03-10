<style>
    .login{
        width: 55%;
        margin:auto;
        margin-top:100px;
        padding:15px;
    }
    form{
        width: 100%;
        text-align:center;
    }
    label{
        display: inline-block;
        width: 40%;
        line-height:28px;
        background:#eee;
    }
    .input_padding{
        padding:5px;
        font-size:14px;
    }
    .input_text{
        width: 40%;
    }
</style>

<?php

?>

<fieldset class=login>
    <legend>忘記密碼</legend>
    <form action="?do=login" method="post">
        <div class="input_padding">
            <label for="acc">請輸入信箱以查詢密碼</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="input_padding">
            <input type="submit" value="查詢">
        </div>

    </form>
</fieldset>