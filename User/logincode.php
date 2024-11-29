                         <?php
                  

                          $email = $_POST['email'];
                          $password = $_POST['password'];
                          
                         include("../admin/db.php");
                         session_start();
                         

                        $sel = "SELECT * FROM `user_register`where email = '$email'";
                        $query = mysqli_query($conn,$sel);
                        $row = mysqli_fetch_array($query);

                        if($row['email']== $email){
                            if($row['password'] == $password){

                              $_SESSION['email'] = $email;
                              
                              

                              header("location:dashboard.php");

                            }
                             else{
                                echo"password not password";
                             }
                        }
                        else{
                            echo"email not match";
                        }
                    
                        
                        ?>