<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <a href="index.php">First Page</a> <br />
                    <a href="index1.php">Second Page</a> <br />
                    <a href="index2.php">Third Page</a> <br />
                </ul>
            </nav>
                <?php 

                    for ($i = 0; $i < 6; $i++) {
                        echo "<p>
                                САЙТ ВИЗИТКА МОЕГО КОТА
                            </p>";
                    }
                ?>
                                <p style="font-size: 4px">поставьте 10</p>
            </div>
            <div id="sidebar">
                <p>MOI KOT
                    <?php
                        $image = "cat2.jpg";
                        if ($image) {
                            echo "<img width='250' height='250' src='".$image."'>";
                        } else {
                            echo "<span style='color: red;'>NO CAT:(</span>";
                        }
                    ?>
                </p>
            </div>
            <footer>
                <p style="font-size: 30px; color:steelblue;">by Dmitri Ulmada</p>
            </footer>
        </div>
    </body>
</html>
