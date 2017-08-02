<?php 
      session_start();
      $noNavBar = '';
      $pageTitle='index';
       if(isset($_SESSION['username'])){
          header('location:dashboard.php');  
          
       }
      include 'init.php' ;
      include $tpl.'header.php';
      

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
       $stmt = $con->prepare("select 
                                    user_id,username,password 
                              from 
                                   users 
                              where 
                                   username = ? 
                              and 
                                   password = ? 
                              and 
                                   group_id = 1
                              limit 1"
                            );


       $stmt->execute(array($username,$password));
       $count = $stmt->rowCount();
       if($count > 0 ){
                       
                    $_SESSION['username'] = $username;
                    header('location:dashboard.php');    
       }
} 
?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h4 class="text-center" >Admin Login Form</h4>
    <input class="form-control input-lg" type="text" name="user" placeholder="username" autocomplete="off">
    <input class="form-control input-lg" type="password" name="pass" placeholder="password" autocomplete="off">
    <input class="btn btn-primary btn-block btn-lg"  type="submit" value="login">

</form>


<?php include $tpl.'footer.php' ?>






