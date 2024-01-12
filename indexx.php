<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One8 Events</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<img class="bg" src="two.jpg" alt="">
<h2>
    <?php
    if(isset($_POST['name'])){

    
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this databse failed due to" .mysqli_connect_error());
    }


    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $topic=$_POST['topic'];
    $venue=$_POST['venue'];
    $other=$_POST['other'];
    $sql="INSERT INTO `one8events`.`event` ( `name`, `age`, `gender`, `email`, `phone`, `topic`, `venue`, `other`, `dt`)
     VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$topic', '$venue', '$other', current_timestamp())";

    if($con->query($sql)==true){
        echo "Successfully Inserted";
    }
    else
    {
        echo "ERROR:$sql<br> $con->error";

    }
    
    $con->close();
    } 
    ?>
   </h2>
    <div class="container">
         <h3>Welcome to One8 Events</h3>
        <p> Enter your details and submit the form for confirmation for Events</p>

        <form action="" method="post" >
   

            <input type="text " name="name" id="name" placeholder="Enter your name" required>
            <input type="number" name="age" pattern="\d*" id="age" placeholder="Enter your age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender" required>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <input type="tel" name="phone" id="phone" pattern="[7-9]{1}[0-9]{9}"  placeholder="Enter your Mobile-no" required>
           <label for=""> topic</label>
           <select  name="topic" required>
           <option value="">--select interest of topic--</option>
            <option value="">Art Exhibitions</option>
            <option value="">Concerts and Music Festivals</option>
            <option value="">Photography exhibitions</option>
            <option value=""> Employee appreciation events</option>
            <option value="">Investor events</option>
            <option value="">Virtual hackathons</option>
           </select>
           <label for="">venue  </label>
           <select name="venue" required>
            <option value="" >--Choose a venue--</option>
            <option value="">Sangli</option>
            <option value="">Kolhapur</option>
            <option value="">Mumbai</option>
            <option value=""> Pune</option>
            <option value="">Nashik</option>
            <option value="">Bangalore</option>
           </select>
            <textarea name="other" id="description" col="30" row="10" placeholder="Enter other info " required></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>

    </div>

</form>
   
</body>
</html>