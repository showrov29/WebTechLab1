<?php
if($_SERVER['REQUEST_METHOD']==='POST'){

    if(empty($_POST['fname'])){
        echo "First name is empty <br>";
    }
    if(empty($_POST['lname'])){
        echo "Last name is empty <br>";
    }
    if(empty($_POST['Gender'])){
        echo "Gender is empty <br>";
    }
    
    if(empty($_POST['email'])){
        echo "Email name is empty <br>";
    }
    if(empty($_POST['mobile'])){
        echo "Mobile no is empty <br>";
    }
    if(empty($_POST['address'])){
        echo "Address is empty <br> ";
    }

}
else
{
    echo "This is not a POST requesrt ";
}


?>