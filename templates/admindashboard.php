<?php
    session_start();
    $connection = new mysqli('sql309.epizy.com','epiz_33877470','bMHwCfiDhW','epiz_33877470_gizmo');
    
    if(! $connection){
        echo var_dump($connection) ;
    }
    else{
        //echo 'connected';
        
    };

    // if(isset($_GET['deletid'])){
    //     $deletedId=$_GET['deletid'];
    //     // echo $deletedId;
    //     $sql="DELETE FROM products WHERE id =$deletedId";

    //    if (mysqli_query($connection,$sql)==true){
    //         header('location:admindashboard.php');
    //    }
    // }

   
    
  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
                <div class="content-wrapper">
                    <a href="../index.php">
                        <h1 id="siteName">GIZMO</h1>
                    </a>
                   
                    <nav>
                        
                        <a href="../index.php?page=products">Products</a>
                        <a href="newproduct.php">New Products</a>
                    </nav>
                    <!-- <div class="link-icons">
                        <a href="logout.php">
                        <i class="fa-solid fa-user"></i>
                        </a>
                    </div> -->
                </div>
    </header>
    <div class="container">
        <div class="row justify-content-end mb-5">
                <div > 
                <button class="btn btn-danger btn-lg btn-block" name="submit"><a href="logout.php" class='text-white text-decoration-none'> Logout</a></button>
                </div>
        </div>
        <div class="row mt-5">
            <div class="col-2"></div>
            <div class="col-8 ">
            <h1 style="text-align:center;">Storage</h1>
            <?php
            $sql= "SELECT * FROM products";
            $query = mysqli_query($connection,$sql);
            echo '<table class="table table-striped  border border-info">
                <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Details</th>
                <ht></th>
                </tr>';
            while(  $data = mysqli_fetch_assoc($query)){

                $name = $data['name'];
                $description = $data['desc'];
                $price = $data['price'];
                $id=$data['id'];
                
        
                
                echo "<tr>
                        <td>$name</td>
                        
                        <td>$price</td>
                        <td>$description</td>
                        <td>
                        <span class='btn btn-success'>
                        <a href='admindashboard.php?acceptid=$id'class='text-white text-decoration-none'>Edit</a>
                        </span>
                        </span>
                       
                        <span class='btn btn-danger'>
                        
                        <a href='admindashboard.php?deletid=$id' class='text-white text-decoration-none'>Delete</a>
                        </span>

                        </td>
                    </tr>";
               
            }
            ?>
           
            </div>

            <div class="col-2"></div>
            
        </div>
    </div>
</body>
</html>
