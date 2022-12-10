<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect("localhost","root","112364","fakeractivity");

    if(!$conn)
    {   
    die(mysqli_error());
    }  

    for ($i=0; $i<100; $i++){
        $sql = "INSERT INTO fakeractivity.useraccount(email, lastName, firstName, userName, password) values('".$faker->email."','".$faker->lastName."','".$faker->firstName."','".$faker->userName."','".$faker->password."')";
    
        mysqli_query($conn, $sql);
    }
?>