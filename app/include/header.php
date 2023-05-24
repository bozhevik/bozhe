<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="index.php"><i class="fa-solid fa-list" style="color: #ffffff;"></i> список покупок</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="koll.php">Список</a></li>
                   
                    <li id="regist">
                            <?php if(isset($_SESSION['id'])): ?>
                                    <a href="#">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['login']; ?>

                        </a>
                        <ul>
                

                        <li><a href="././admin/posts/index.php">Редактирование</a> </li>

                        

                            <li><a href="./logout.php">Выход</a> </li>
                        </ul>
                                <?php else: ?>

                            <a href="./log1.php">
                            <i class="fa fa-user"></i>
                            Войти
                            </a>
                            <ul>
                                <li><a href = "./reg.php">Регистрация</a> </li>
                            </ul>
                                <?php endif; ?>
                        
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>
</header>