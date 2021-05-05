<?php      
 class sign{
     public function connect(){
        $db = new PDO('mysql:host=127.0.0.1;dbname=labevent','root', '');
        if(isset($_POST['submitSign'])){
            if(!empty($_POST['username'])){
               $username = htmlspecialchars($_POST['username']);
               $stmt = $db->prepare("INSERT INTO users (username) VALUES(?)");
               $stmt->execute(array($username));
               header("location:form.php");
               session_start();
               session_destroy();
               session_start();
               $_SESSION['username'] = $userinfo['username'];
               $_SESSION['ID'] = $userinfo['ID'];
               $_SESSION['score'] = $userinfo;
              
            }
            else{
                echo "nom vide";
            } 
        }
     }
 }


?>