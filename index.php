<? $page = (isset($_GET['page']) ? 'pages/' . $_GET['page'] . '.php' : 'pages/main-page.php') ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="/js/jquery/2.1.1/jquery.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <link href="/stylesheets/main.css" rel="stylesheet">
    <script type="text/javascript" src="/js/isotope/isotope.pkgd.min.js"></script>
</head>
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