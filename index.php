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
                    <?php 
                        $navigation = array("Home", "About", "Third");
                        $urls = array("index.php", "about.php", "third.php");
                        for ($i = 0; $i < count($navigation); $i++) {
                            echo "<li><a href=".$urls[$i].">".$navigation[$i]."</a></li>";
                        }
                    ?>
                    <!--<li><a href="index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Third page</a></li>-->
                </ul>
            </nav>
            
            <div id="content_area">
                <h2>This is about page!</h2>
                <p>
                    This project was created to demonstrate skills in nginx server
                </p>
                <br>
                <?php 
                    for ($i = 0; $i < 4; $i++) {
                        echo "<p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa, ea? Illum, exercitationem cupiditate totam at, alias 
                                ratione accusantium placeat, commodi consequuntur vitae cumque nostrum optio provident consectetur eligendi adipisci 
                                quas blanditiis nesciunt fugit corporis ullam soluta sit voluptate. Nesciunt doloremque maiores est corporis quod 
                                qui recusandae earum ea quia quas?
                            </p>";
                    }
                ?>
            </div>
            
            <div id="sidebar">
                <p>Some text an image
                    <?php
                        $image = "https://via.placeholder.com/150/d32776";
                        if ($image) {
                            echo "<img src='".$image."'>";
                        } else {
                            echo "<span style='color: red;'>There is no image:(</span>";
                        }
                    ?>
                </p>
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
