<?php
class loginManager extends controller {
   
    function __construct()
    {
        parent::__construct();
        if(isset($_POST['phone_data'])) { 
            $username_data = $this->model->escape_string($_POST['phone_data']);
            $idcard_data = $this->model->escape_string($_POST['reg_data']);
            $password_data = $this->model->escape_string($_POST['pass_data']);
            //search username in database
            $result = $this->model->query("select * from `accountmanager` where username = '$username_data';", true);
            if($result === false){ 
                die("Failed in loginManager 1");
            }
            // $result = NULL;
            if(isset($_POST['signup'])) { // sign up
                if($result === NULL) {
                    $data = array(
                        'username' => $username_data,
                        'citizenID' => $idcard_data,
                        'password' => $password_data,
                    );
                    if($this->model->insert('accountmanager', $data) !== false){
                        echo "<script>alert('Đăng kí thành công');
                                window.location.replace('index.php');
                                </script>";
                    }
                    else {
                        die('sign up: Failed!');
                        echo "<script>alert('sign up: Failed!');
                                window.location.replace('index.php');
                                </script>";
                    }
                } else {
                    echo "<script>alert('Tên đăng kí đã tồn tại');
                                window.location.replace('index.php');
                                </script>";
                }
                // unset($data);
            }
        }
       $this->model->disconnect();
    }
}
class signUpManager extends controller {
   
    function __construct()
    {
        parent::__construct(); 

        if(isset($_GET['signInNum'])) {
            $signInuser =  $this->model->escape_string($_GET['signInNum']);
            $signInPassword =  $this->model->escape_string($_GET['signInpass']);
            $checkuser = $this->model->query("select * from `accountmanager` where username = '$signInuser';", true);
            $checkpassword =  $this->model->query("select * from `accountmanager` where password = '$signInPassword';", true);
            
            if($checkuser === false || $checkpassword === false) {
                die("Failed in loginManager 1");
            }
             if(isset($_GET['signin']) /*&& $_POST['randcheck']== $_SESSION['rand']*/ ){
                if(isset($_GET['signInpass'])) {
                    if($checkpassword !== NULL 
                        && $checkuser !== NULL
                        && $checkuser[0]['username'] == $signInuser
                        && $checkpassword[0]['password'] == $signInPassword){
                        header("Location: home.php");
                    } else {
                        //header("Location:index.php");
                        echo "<script>alert('thông tin đăng nhập chưa chính xác');
                                window.location.replace('index.php');
                                </script>";
                    }
                } else{
                    // alert("chưa đủ thông tin đăng nhập");
                    echo "<script>alert('chưa đủ thông tin đăng nhập');
                            window.location.replace('index.php');
                            </script>";
                    //return false;
                }
            }
        }
        // unset($signInuser);
        // unset($signInPassword);
        return $this->model->disconnect();
    } 
}
?>