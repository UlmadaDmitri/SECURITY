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
                                НЕ ЕШЬ ЭТИ МЯГКИЕ ФРАНЦУЗСКИЕ БУЛКИ И НЕ ПЕЙ ЧАЙ
                                НЕ ЕШЬ ЭТИ МЯГКИЕ ФРАНЦУЗСКИЕ БУЛКИ И НЕ ПЕЙ ЧАЙ
                                НЕ ЕШЬ ЭТИ МЯГКИЕ ФРАНЦУЗСКИЕ БУЛКИ И НЕ ПЕЙ ЧАЙ
                            </p>";
                    }
                ?>
                                <p style="font-size: 4px">поставьте 10</p>
            </div>
            
            <div id="sidebar">
                <p>
                    <?php
                        $image = "";
                        if ($image) {
                            echo "<img src='".$image."'>";
                        } else {
                            echo "<span style='color: green;'>NO CAT :(</span>";
                        }
                    ?>
                </p>
            </div>
            
            <footer>
                <p>by Dmitri Ulmada</p>
            </footer>
        </div>
    </body>
</html>
