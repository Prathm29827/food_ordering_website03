<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    require "index.php";
   
        $firstname = $_POST['first'];
        $lastname = $_POST['last'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "contact";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ");
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        
        // $sql = "INSERT INTO `contact form` (`first name`, `last name`, `email`,`message`) VALUES ('$firstname', '$lastname', '$email,'$message')";
        // $result = mysqli_query($conn, $sql);

       $sql=" INSERT INTO `contact form` (`first name`, `last name`, `email`, `message`) VALUES ('meghna ', 'sudke', 'meghna@gamil.com', 'hii');";
 $result = mysqli_query($conn, $sql);

       $sql=" INSERT INTO `contact form` (`first name`, `last name`, `email`, `message`) VALUES ('$firstname ', '$lastname', '$email', '$message');";
 $result = mysqli_query($conn, $sql);

        if($result){
          echo "successful";
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo "notsuccessful";
        }

      }

    }

    
?>