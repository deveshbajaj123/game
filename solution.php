<?php 

       define("HOSTNAME", "localhost");
       define("USERNAME", "root");
       define("PASSWORD", "");
       define("DATABASE", "crud");

       $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

       if(!$connection){
         die("Connection failed");
       }

       else{
         echo "yesss it is connected";
       }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CSS Box Model</title>
  <style>
    
    div {
      height: 400px;
      width: 400px;
      padding: 300px;
      background-color: white;
      font-family: "Manrope";
    }

    p {
      margin: 0;
    }
    

    #first {
      background-color: cadetblue;
      padding: 20px;
      border: 20px solid black;      
    }
    #button {
  background-color: white;
  border-color: black;
  border-width: 2px;
  color: rgb(231, 41, 105);
  padding: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 90px;
  border-radius: 12px;
  border-top: 2px solid black;
  border-left: 2px solid black;
  border-right: 2px solid black;
  width: 200px;
}
     
    #center {  
      display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

    #second {      
     border: 5px solid;
     position: absolute;
     top: 50%;
     left: 50%;

     transform: translate(-50%, -50%);
     padding: 10px;           
    }

    input {
  border: none;
  border-bottom: 1px solid black;
}

#button:hover
{
   background-color: #00b2ed;
   color: #fff;
}

    

    #third {
      background-color: indianred;
      border: 10px solid black;
      margin-left: 40px;
    }
    
    .star{
      color: red;
    }
    #purple{
      color: purple
    }

    #orange{
      color: orange
    }

    #darkblue{
      color:blue
    }

    #green{
      color: green
    }


  </style>
</head>

<body>
  
  
  <div id="second">
    <br>
    <img src="Our Blue.png" alt="Trulli" width="60" height="40px" id="center">
    <br>
    <br>
       <form action="#" method ="POST">
        <label id = purple><b>Your Name:</b>  </label>
        <label class="star">*</label>
        <input type="text" name="f_name" class="center" required>
        <br>
        <br>
        <br>
        <label id="orange"><b>Email:</b></label>
        <label class="star">*</label>
        <input type="text" name="l_name" value="" class="center" required>
        <br>
        <br>
        <br>
        <label id="darkblue"><b>Phone number:</b></label>
        <label class="star">*</label>
        <input type="text" name="s_name" class="center" required>
        <br>
        <br>
        <br>
        <label for="country" id="green"><b>Country:</b></label>
           
<select name="countries" id="cars" class = "center">
  <option value="empty">23</option>
  <option value="ind">India</option>
  <option value="pak">Pakistan</option>
  <option value="uga">Uganda</option>
  <option value="usa">United States of America</option>
</select>                                          
<br>
        <br>
        <br>
        <input type="submit" name="Submit" class="center" id="button" value="register">
        </form>
        <br>
        
        
  </div>
  
</body>

</html>

<?php
      

      

      if($submit = $_POST['Submit'])
      {
         $fname = $_POST['f_name'];
         $lname = $_POST['l_name'];
         $age = $_POST['s_name'];
         $countries = $_POST['countries'];
         $query = "INSERT INTO form (name1, email, phone_number, country) VALUES ('$fname', '$lname', '$age', '$countries')";
         $connection->close();

       
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
        

  // if($fname== ""|| empty($fname)){
  //     header('location:index.php?message=You need to fill in the first name!');
  // }

  // else{  
  //        $query = "insert into 'customer' ('name', 'email', 'phone_number', 'country') values ('$fname', '$lname', '$age', '$countries')";
  // }
      
?>