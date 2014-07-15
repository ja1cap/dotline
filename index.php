<? $page = (isset($_GET['page']) ? 'pages/' . $_GET['page'] . '.php' : 'pages/main.php') ?>
<!DOCTYPE html>
<html>
<? include('head.php') ?>
<body>

    <div class="main-bg"></div>

    <div class="header-container" data-spy="affix" data-offset-top="125">
        <div class="header-logo-container">
            <a href="/">
                <img src="/img/logo.png" class="header-logo">
            </a>
        </div>
    </div>

    <div class="main-container">

        <? include('menu.php') ?>

        <div class="page-content">

            <div class="container">
                <? include($page) ?>
            </div>

        </div>

    </div>

</body>
</html>