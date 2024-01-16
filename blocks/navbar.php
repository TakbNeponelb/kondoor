<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../pages/index.php">Кондор</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 top-menu">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../pages/catalog.php">Каталог</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Доставка</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart">
                  <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <div class="modal fade" id="modal-cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Корзина</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                      </div>
                      <div class="modal-body">
                        <table class="table">
                          <tbody>
                            <tr>
                              <td>Раз</td>
                              <td>Два</td>
                              <td>Три</td>
                              <td>Четыре</td>
                            </tr>
                            <tr>
                              <td>Пять</td>
                              <td>Шесть</td>
                              <td>Семь</td>
                              <td>Восемь</td>
                            </tr>
                            <tr>
                              <td>Девять</td>
                              <td>Десять</td>
                              <td>Одиннадцать</td>
                              <td>Двенадцать</td>
                            </tr>
                            <tr>
                              <td>Тринадцать</td>
                              <td>Четырнадцать</td>
                              <td>Пятнадцать</td>
                              <td>Шестандцать</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить изменения</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-success" type="submit">Поиск</button>
              </form>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-current="page" href="#"><i class="fa-solid fa-user"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../pages/login.php">Авторизация</a></li>
                  <li><a class="dropdown-item" href="../pages/registrate.php">Регистрация</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Выход</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>