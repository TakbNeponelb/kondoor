<!doctype html>
<html lang="ru" data-bs-theme="dark">
<?php require_once('../blocks/header.php');?>
    <body>
        <?php 
        require_once("../blocks/navbar.php");
        require_once("db_connect.php");
        // Получение данных из формы
        if (isset($_POST["login"]) && isset($_POST["password"])) {
            
          $login = $_POST['login'];
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Запрос на проверку данных в базе
          $query = "INSERT INTO users (login, email, password) VALUES ('$login', '$email', '$password')";
          //$result = mysqli_query($connection, $query);
          try {
            $result = mysqli_query($connection, $query);
            $smsg = "Регистрация прошла успешно!";
          } catch (mysqli_sql_exception $e) {
            $fsmsg = "Ошибка!";
          }
            
          // Закрытие соединения с базой данных
          $connection->close();
        }
        ?>
        <div class="container">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <h2 class="text-center mb-4">Регистрация</h2>
            <form action="registrate.php" class="form-signin" method="POST">
              <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div><?php }?>
              <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php echo $fsmsg; ?> </div><?php }?>
              <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Введите ваш логин" required>
              </div>
              <div class="form-group">
                <label for="email">Email адрес</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Введите ваш email" required>
              </div>
              <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
              </div>
              <div class="form-group btn-enter">
                <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
                <br>
                <a href="login.php">Авторизация</a>
              </div> 
            </form>
          </div>
        </div>
</div>
        <?php require_once("../blocks/footer.php");?>
    </body>
</html>
