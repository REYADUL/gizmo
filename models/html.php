<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<head>

            <meta charset="utf-8">
            <title>$title</title>
            <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1 style="color:gold;">Gizmo</h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Products</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=cart">
                        <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </header>

            <main>
                <h1 class='myclass'>haa</h1>
                <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4" style="margin-top: 50px;">

                <form action="login.php" method="POST">
                    <div class="mt-2">
                        <label class="form-label" for="email">
                            Email
                        </label>
                            <input type="text" class="form-control"name="email" id="" required>
                        
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="password">
                            Password
                        </label>
                            <input type="password" class="form-control"name="password" id="" required>
                        
                    </div>
                    <div class="mt-2">
                        
                        <button class="btn btn-success btn-lg btn-block" name="submit">Login</button>
                        
                    </div>
                    or
                    <a href="registration.php">Registration</a>

                </form>
            </div>
            <div class="col-4">
                
            </div>
        </div>
        </div>
                
            <php?
                
            ?>
                </main>
                <footer>
                    <div class="content-wrapper">
                        <p>&copy;<?php $year=date("Y");echo $year;?>,Your Gizmo store
                        </p>
                </footer>
                <script src='../assets/js/script.js'></script>
            </body>
        </html>
</html>