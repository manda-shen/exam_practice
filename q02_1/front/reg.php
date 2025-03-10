<fieldset class=login>
    <legend>會員註冊</legend>


    <div style='color:red;font-size:14px'>*請設定您要註冊的帳號及密碼 ( 最長12個字元 ) </div>
    <form action="?do=reg" method="post">
        <div class="input_padding">
            <label for="acc">Step1:登入帳號</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class="input_padding">
            <label for="pw">Step2:登入密碼</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div class="input_padding">
            <label for="pw">Step3:再次確認密碼</label>
            <input type="password" name="pw2" id="pw2">

        </div>
        <div class="input_padding">
            <label for="email">Step4:信箱(忘記密碼時使用)</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input_padding">
            <input type="submit" value="註冊">
            <input type="reset" value="清除">
        </div>

    </form>
</fieldset>

<?php
if(isset($_POST['acc'])){
    

}



    
    // if(!isset($_POST['acc']) || !isset($_POST['pw']) || !isset($_POST['pw2']) || !isset($_POST['email'])){
    //     echo "<script>alert('不可空白')</script>";
    // }else{
    //     $acc=$User->find($_POST['acc']);
    //     if(isset($acc)){
    //         echo "<script>alert('帳號重複')</script>";
    //     }elseif($_POST['pw'] != $_POST['pw2']){
    //         echo "<script>alert('密碼錯誤')</script>";
    //     }
    // }
    // $User->save(['acc'=>$_POST['acc'],'pw'=>$_POST['pw'],'email'=>$_POST['email']]);
    
    
    ?>