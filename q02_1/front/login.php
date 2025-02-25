<style>
    .login{
        width: 50%;
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
        background:#eee;
    }
    .input_padding{
        padding:5px;
    }
</style>

<fieldset class=login>
    <legend>會員登入</legend>
    <form action="./api/login.php" method="post">
        <div class="input_padding">
            <label for="acc">帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="input_padding">
            <label for="pw">密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div class="input_padding">
            <input type="submit" value="登入">
            <input type="reset" value="清除">
            <a href="?do=forget">忘記密碼</a>|<a href="?do=reg">尚未註冊</a>
        </div>

    </form>
</fieldset>