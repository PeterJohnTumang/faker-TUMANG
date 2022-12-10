<?php
    require ('vendor/autoload.php');

    $faker = Faker\Factory::create('en_PH');
    $conn = mysqli_connect("localhost","root","112364","fakeractivity");

    if(!$conn)
    {   
    die(mysqli_error());
    }  
     
    for ($i=0; $i<20; $i++){
        $sql = "INSERT INTO fakeractivity.carddetail(creditCardType,creditCardNumber,creditCardExpirationDate,userIdNumber) values('".$faker->creditCardType."','".$faker->creditCardNumber."','".$faker->date($format = 'Y-m-d H:i:s', $max = 'now')."','".$faker->randomDigit(0, 100)."')";
    
        mysqli_query($conn, $sql);
    }
?>