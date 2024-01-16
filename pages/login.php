<!doctype html>
<html lang="ru" data-bs-theme="dark">
  <?php require_once('../blocks/header.php');?>
    <body>
        <?php 
        session_start();
        require_once("../blocks/navbar.php");
        require_once("db_connect.php");

        // Получение данных из формы
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            $login = $_POST['login'];
            // $email = $_POST['email'];
            $password = $_POST['password'];
        
            // Запрос на проверку данных в базе
            $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
            try {
                $result = $connection->query($query);
            } catch (mysqli_sql_exception $e) {
                $fsmsg = "Ошибка!";
            }
            if ($result->num_rows == 1){
                $_SESSION['login'] = $login;
                $smsg = "Авторизация прошла успешно!";
            }    
            else {
                $fsmsg = "Неправильный логин или пароль!";
            }

            if(isset($_SESSION['login']))
            {
                $login = $_SESSION['login'];
                 
            }
          
            $connection->close();
        }
        
        ?>

        <div class="container">
            <div class="row">
            <div class="col-md-4 offset-md-4">
                <h2 class="text-center mb-4">Авторизация</h2>
                <form action="login.php" method="POST">
                <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php }?>
                <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div><?php }?>
                <div class="form-group">
                    <label for="login">Логин</label>
                    <input type="login" class="form-control" id="login" name="login" placeholder="Введите ваш логин" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
                </div>
                <div class="form-group btn-enter">
                    <button type="submit" class="btn btn-primary btn-block">Авторизироваться</button>
                    <br>
                    <a href="registrate.php">Регистрация</a>
                </div> 
                </form>
            </div>
            </div>
        </div>

        <?php require_once("../blocks/footer.php");?>
    </body>
</html>
