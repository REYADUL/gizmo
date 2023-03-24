<?php
    function template_header($title){
        echo <<<EOT
        <!DOCTYPE html>
        <html>
        <head>

            <meta charset="utf-8">
            <title>$title</title>
            <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1 id="siteName">GIZMO</h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Products</a>
                    </nav>
                    <div class="link-icons">
                        <a href="index.php?page=login">
                        <i class="fa-solid fa-user"></i>
                        </a>
                    </div>
                </div>
            </header>

            <main>
    
        EOT;

    }
    function login_form(){
        echo <<<EOT
        <div class="container">
         <h1 style="text-align:center";>
            only for authorized user
        </h1>
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
                    </form>
                </div>
                <div class="col-4">
                    
                </div>
            </div>
        </div>
        EOT;
    }
    function admin_header($title){
        echo <<<EOT
        <!DOCTYPE html>
        <html>
        <head>

            <meta charset="utf-8">
            <title>$title</title>
            <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            
        </head>
        <body>
            <header>
                <div class="content-wrapper">
                    <h1 id="siteName">GIZMO</h1>
                    <nav>
                        
                        <a href="index.php?page=products">Products</a>
                    </nav>
                    <div class="link-icons">
                        <a href="logout.php">
                        <i class="fa-solid fa-user"></i>
                        </a>
                    </div>
                </div>
            </header>

            <main>
    
        EOT;

    }
    
    function template_footer(){
        $year=date("Y");
        echo <<<EOT
                </main>
                <footer>
                    <div class="content-wrapper">
                        <p>&copy;$year,Your Gizmo store
                        </p>
                </footer>
                <script src='../assets/js/script.js'></script>
            </body>
        </html>
        EOT;
    }
    

?>