<?php 
require "db.php";
    $data=$_POST;
    
    if( isset($data ['acq']) ){//Проверка того что кнопка нажата
        $errors=array();
        if(trim($data['name']) == '' ){//Проверка на корректность формы
            $errors[]='Введите Имя!';
        }
        if(trim($data['surname']) == '' ){
            $errors[]='Введите Фамилию!';
        }
        if($data['place'] == '' ){
            $errors[]='Введите Адрес!';
        }
        if($data['index'] == '' ){
            $errors[]='Введите почтовый индекс!';
        }
        if( empty($errors) ){//Если массив с ошибками пуст,всё хорошо
            
            $inf = R::dispense( 'information' );
            $inf->name = $data['name'];
            $inf->surname = $data['surname'];
            $inf->place = $data['place'];
            $inf->postindex = $data['index'];
            R::store($inf);
            $_SESSION['inf_user']=$inf;
            header("Location: /account.php");
            exit();
            
        }else{
            echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
    
        }
    }
    
?>




<div style="text-align:center;">Привет!Ты попал на наш сайт,прошу тебя заполнить небольшую информацию о тебе!</div>


<form action="/hello.php" method="POST">
        <p>
        <input type="text" name="name" placeholder="Имя" value=<?php echo @$data['name']?>><br>
        </p>
        <p>
        <input type="text" name="surname" placeholder="Фамилия" value=<?php echo @$data['surname']?>><br>
        </p>
        <p>
        <input type="text" name="place" placeholder="Адрес" value=<?php echo @$data['place']?>><br>
        </p>
        <p>
        <input type="text" name="index" placeholder="Индекс" value=<?php echo @$data['index']?>>
        </p>
        <button type="submit" name="acq">Отправить</button>
    </form>