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

<fieldset class=login>
    <legend>會員註冊</legend>


    <div style='color:red;font-size:14px'>*請設定您要註冊的帳號及密碼 ( 最長12個字元 ) </div>
    <!-- <form action="?do=reg" method="post"> -->
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
            <input type="submit" value="註冊" onclick='reg()'>
            <input type="reset" value="清除">
        </div>

    <!-- </form> -->
</fieldset>

<script>
    function reg(){
        let user={
            acc:$("#acc").val(),
            pw:$("#pw").val(),
            pw2:$("#pw2").val(),
            email:$("#email").val()
        }

        // console.log(user)

        if(user.acc=="" || user.pw=="" || user.pw2=="" || user.email==""){
            alert('不可空白');
        }else if(user.pw!=user.pw2){
            alert('密碼錯誤')
        }else{
            $.get("./api/chk_acc.php",{acc:user.acc},(res)=>{
                if(parseInt(res)==1){
                    alert('帳號重複');
                }else{
                    $.post("./api/reg.php",user,(res)=>{
                        if(parseInt(res)==1){
                            alert('註冊完成，歡迎加入');
                        }
                    })
                }
            })
        }
    }
</script>

<?php
  
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