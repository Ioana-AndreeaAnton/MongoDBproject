<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digital Business Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Digital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <!-- css files -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
        <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
        <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
        <!-- //css files -->

        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <!-- //google fonts -->

    </head>
    <!-- //header -->
    <header class="py-4">
        <div class="container">
            <div id="logo">
                <h1> <a href="index.php"><span class="fa fa-cloud" aria-hidden="true"></span> Digital</a></h1>
            </div>
            <!-- nav -->
            <nav class="d-lg-flex">
                <div class="login-icon ml-lg-2">
                    <?php
                    session_start();
                    if (isset($_SESSION["user_name"])) {
                        $visits = 1;
                        if (isset($_COOKIE["visits"])) {
                            $visits = (int) $_COOKIE["visits"];
                        }
                        setcookie("visits", $visits + 1, time() + 60 * 60 * 24 * 30);
                        echo "<a href='logout.php'>Logout</a>";
                    } else {
                        header('Location:index.php');
                    }
                    ?>
                </div>
            </nav>
            <div class="clear"></div>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="banner" id="home">
        <div class="container">
            <div class="row banner-text">
                <div class="slider-info col-lg-6">
                    <div class="banner-info-grid mt-lg-5">
                        <?php
                        require_once 'connection.php';
                        $bulk = new MongoDB\Driver\BulkWrite;

                        if (!isset($_POST["submit"])) {
                            $id = new \MongoDB\BSON\ObjectId($_GET['id']);
                            $filter = ['_id' => $id];
                            $query = new MongoDB\Driver\Query($filter);
                            $article = $client->executeQuery("clienti.clienti", $query);
                            $doc = current($article->toArray());
                        } else {
                            $id = new \MongoDB\BSON\ObjectId($_POST['id']);
                            $filter = ['_id' => $id];
                            $query = new MongoDB\Driver\Query($filter);
                            $article = $client->executeQuery("clienti.clienti", $query);
                            $doc = current($article->toArray());

                            if (isset($_POST["image"])) {
                                $target = "./images/" . md5(uniqid(time())) . basename($_FILES['image']['name']);
                            } else {
                                $target = $doc->image;
                            }
                            $data = ['nume' => $_POST['nume'], 'image' => $target];
                            $filter = ['_id' => $id];
                            $update = ['$set' => $data];
                            $bulk->update($filter, $update);
                            $client->executeBulkWrite('clienti.clienti', $bulk);
                            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                                header('location: user.php');
                            } else {
                                $msg = "Vai vai vai...";
                            }
                        }
                        ?>
                        <h1>Editati inregistrarea</h1>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $doc->_id; ?>">
                            Nume:<br><input type="text" name="nume" value="<?php echo $doc->nume; ?>"><br/>
                            Image:<br><input type="file" name="image" value="<?php echo $doc->image; ?>"><br/>
                            <br><img src="<?php echo $doc->image; ?>" width="300" height="300"><br/>
                            <input type="submit" name="submit" value="Update"><br>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>