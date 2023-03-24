<?php
    
     $connection = new mysqli('localhost','root','','gizmo');
     if(! $connection){
        var_dump($connection) ;
        }
        else{
            // echo 'connected';
        }
    if(isset($_POST['submit'])){
        $productname = $_POST['productname'];
        $desc=$_POST['desc'];
        $price=$_POST['price'];
        $imageName=$_POST['imageName'];
        $empMsg='Please fill up this fieeld';

        // $sql = "INSERT INTO products(name, desc, price, quantity, img) VALUES(:productname, :desc, :price, :quantity, :imageName)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->bindParam(':productname', $productname);
        // $stmt->bindParam(':desc', $desc);
        // $stmt->bindParam(':price', $price);
        // $stmt->bindValue(':quantity', 0); 
        // $stmt->bindParam(':imageName', $imageName);
        // $stmt->execute();
        // if ($stmt->execute()) {
        //     // echo "Product added successfully.";
        //     header('location:admindashboard.php?added_new_product');
        // } else {
        //     echo "Error adding product: " . $stmt->errorInfo()[2];
        // }
        $sql= "INSERT INTO `products` (`name`,`desc`,`price`,`quantity`,`img`) VALUES('$productname','$desc','$price','','$imageName')";
        
        // var_dump($sql);
        $query = mysqli_query($connection,$sql);
        // $stmt = $connection->query($sql);
        if($query) {
                // echo 'user created';
                header('location:admindashboard.php?added_new_product');
        }
        else{
            
            echo 'not created';
        }
    }
?>


<?=admin_header('new-product')?>
<div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4" style="margin-top: 50px;">
                <form action="newproduct.php" method="POST">

                    <div class="mt-2">
                        <label class="form-label" for="name" >
                            product name
                        </label>
                            <input type="text" class="form-control"name="productname" id="" value="<?php if(isset($_POST['submit'])){echo $productname ;} ?>" >
                        
                        
                        <?php 
                            if(isset($_POST['submit'])&& $_POST['productname']==false){
                                echo "<span class='text-danger'>".$empMsg."
                                </span>";
                            }
                        ?>
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="desc">
                            Description
                        </label>
                            <input type="text" class="form-control"name="desc" id="" value="<?php if(isset($_POST['submit'])){echo $desc;} ?>">
                        
                        <?php 
                            if(isset($_POST['submit'])&& $_POST['desc']==false){
                                echo "<span class='text-danger'>".$empMsg."
                                </span>";
                            }
                        ?> 
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="price">
                            Price
                        </label>
                            <input type="text" class="form-control"name="price" id="" value="<?php if(isset($_POST['submit'])){echo $price ;} ?>">
                        
                        <?php 
                            if(isset($_POST['submit'])&& $_POST['price']==false){
                                echo "<span class='text-danger'>".$empMsg."
                                </span>";
                            }
                        ?>
                    </div>
                    <div class="mt-2">
                        <label class="form-label" for="imageName">
                            image-name
                        </label>
                        <input type="text" class="form-control" name="imageName" id="" value="<?php if(isset($_POST['submit'])){echo $imageName ;} ?>">

                        <?php 
                            if(isset($_POST['submit'])&& $_POST['imageName']==false){
                                echo "<span class='text-danger'>".$empMsg."
                                </span>";
                            }
                        ?> 
                    </div>
                    
                    <div class="mt-2">
                        
                        <button class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
                        
                    </div>

                </form>
            </div>
            <div class="col-4">
                
            </div>
        </div>
    </div>
</body>