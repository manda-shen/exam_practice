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

<?php

if(isset($_SESSION['login'])){
    to("admin.php");
    exit();
}

if(isset($_POST['acc'])){
    $row=$User->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);    
    if(!empty($row)){

        if($_POST['acc']=="admin"){
            $_SESSION['login']=2;
            to("admin.php");
        }else{
            $_SESSION['login']=1;
            $_SESSION['user']=$_POST['acc'];
            to("index.php");
        }

    }else{
        $acc=$User->find(['acc'=>$_POST['acc']]);
        if(!empty($acc)){
            echo "<script>alert('密碼錯誤')</script>";
        }else{
            echo "<script>alert('查無帳號')</script>";
        }
    }
}


// if(isset($_SESSION['login'])){
    
//     // if($_POST['acc']=="admin"){
//         to("admin.php");
//         exit();
//     // }else{
//     //     to("index.php");
//     //     exit();
//     // }
// }

// if(isset($_POST[['acc']])){
//     $row=$User->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
//     if(!empty($row)){
//         $_SESSION['login']=1;
//     }else{
//         $acc=$User->find(['acc'=>$_POST['acc']]);
//         if(!empty($acc)){
//             echo "<script>alert('密碼錯誤')</script>";
//         }else{
//             echo "<script>alert('查無帳號')</script>";
//         }
//     }
// }

?>

<fieldset class=login>
    <legend>會員登入</legend>
    <form action="?do=login" method="post">
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