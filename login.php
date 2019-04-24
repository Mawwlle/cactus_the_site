<?php 
   require "db.php";
    $data=$_POST;
    if(isset($data['do_login'])){

        $errors=array();
        $user=R::findOne('users','login = ?',array($data['login']));
        if($user){
       
            //логин существует
           
            if(password_verify($data['password'],$user->password)){
               

                $_SESSION['logged_user']=$user;
                header("Location: /account.php");
                exit(); 
                echo 'Вы авторизованы';
             

            }else{
                $errors[]='Пароль введён неверно!';
            }
        }else{
            $errors[]='Пользователь с таким логином не существует!';
        }
    if( !empty($errors) ){//Если массив с ошибками не пуст,выводим ошибки
        echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    }
}
?>
<form action="/login.php" method="POST">
        <p>
        <input type="text" name="login" placeholder="Login" value="<?php echo @$data['login']; ?>"><br>
        </p>
        <p>
        <input type="password" name="password" placeholder="Password">
        </p>
    <div>Нет аккаунта? <a href="/sign_up.php">Зарегистрироваться</a></div>
        <button type="submit" name="do_login" >Войти</button>
    </form>