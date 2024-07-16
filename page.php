<body>
    <?php
    include("header.php");
    $page=$_GET["id"];
    include($page.".php");
    include("footer.php");
    ?>
</body>