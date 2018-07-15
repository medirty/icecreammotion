<? php


if(isset$_POST['submit']) {

    // $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = "Possible new project from $name";
    $to = "admin@icecreammotion.com" ;

    // check name only contains letters and whitespace

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

    }

    















}


?>