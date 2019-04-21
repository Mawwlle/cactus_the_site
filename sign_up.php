<?php 
    require "db.php";
   
    $data=$_POST;
    
    if( isset($data ['do']) ){//Проверка того что кнопка нажата(isset-cуществует перменная do =>нажата кнопка =>регаем)
        $errors=array();
        
        
        if(trim($data['login']) == '' ){//Проверка на корректность формы
            $errors[]='Введите логин!';
        }
        if(trim($data['email']) == '' ){
            $errors[]='Введите Email!';
        }
        if($data['password'] == '' ){
            $errors[]='Введите пароль!';
        }
       // $isConnected = R::testConnection();
        if( empty($errors) ){//Если массив с ошибками пуст,всё хорошо-регестрируем
            $user = R::dispense( 'users' );
           $user->login = $data['login'];
           $user->email = $data['email'];
           $user->password = $data['password'];
           R::store($user);
           echo '<div style="color:green;">Вы успешно зарегистрированы!</div><hr>';
        }else{
            echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
 
        }

    }
?>
    <form action="/sign_up.php" method="POST">
        <p>
        <input type="text" name="login" placeholder="Login" value=<?php echo @$data['login']?>><br>
        </p>
        <p>
        <input type="email" name="email" placeholder="Your Email" value=<?php echo @$data['email']?>><br>
        </p>
        <p>
        <input type="password" name="password" placeholder="Password">
        </p>
        <button type="submit" name="do">Отправить</button>
    </form>
