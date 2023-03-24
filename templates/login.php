<?php
    // session_start();

    $connection = new mysqli('localhost','root','','userdb');
    if(! $connection){
        echo 'not connected with database';
         var_dump($connection) ;
    }
    else{
        echo 'connected';
    }
 
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        $empMsg='Please fill up this fieeld';
       
       if(!empty($password)&&!empty($email)){

           $sql= "SELECT * FROM approved_user WHERE email='$email' AND user_type='admin' ";
           $query=$connection->query($sql);
            if($query->num_rows>0){
                  
                $_SESSION['login']='login success';
                header('location:admindashboard.php') ;
            }  
            else{
                echo 'not found';
                // header('location:waitingpage.php') ;
            }
        }                          
    };
    
?>


<?=template_header('Login')?>
<?=login_form()?>
<?=template_footer()?>