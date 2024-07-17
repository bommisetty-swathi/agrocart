 <?php
include("../Includes/db.php");
session_start();
 $sessphonenumber = $_SESSION['phonenumber'];
 $sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
$run_query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run_query)) {
    $name = $row['farmer_name'];
    $phone = $row['farmer_phone'];
    $address = $row['farmer_address'];
   $pan = $row['farmer_pan'];
    $bank = $row['farmer_bank'];
    $state = $row['farmer_state'];
    $district = $row['farmer_district'];
}


?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
    background-color: #f8f9fa;
    font-family: 'Arial', sans-serif;
}

h1 {
    font-family: 'Impact', Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-align: center;
    margin-top: 20px;
}

.container {
    max-width: 520px;
    margin: auto;
    background-color: #ffffff;
    padding: 20px;
    margin-top: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form {
    margin: 10px;
    padding: 10px;
}

.text {
    font-weight: bold;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

textarea {
    resize: vertical;
}

button {
    cursor: pointer;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background-color: #28a745;
    border: none;
    border-radius: 5px;
    padding: 10px;
    margin-top: 10px;
    width: 100%;
}

button:hover {
    background-color: #218838;
}
</style>
</head>

<body>
    <div class="container-fluid">
        <form action="EditProfile.php" method="post">
            <h1>FARMER'S PROFILE</h1>
            <label for="name"><b>Name:</b></label>
            <input type="text" readonly class="form-control-plaintext border border-dark" id="name" value="<?php echo $name ?>">

            <label for="phone"><b>Phone Number:</b></label>
            <textarea rows="2" column="10" disabled><?php echo $phone ?></textarea>

            <label for="address"><b>Address:</b></label>
            <textarea rows="3" column="56" disabled><?php echo $address ?></textarea>

            <label for="state"><b>State:</b></label>
            <textarea rows="3" column="56" disabled><?php echo $state ?></textarea>

            <label for="district"><b>District:</b></label>
            <textarea rows="3" column="56" disabled><?php echo $district ?></textarea>

            <label for="pan"><b>Pan Number:</b></label>
            <textarea rows="2" column="10" disabled><?php echo $pan ?></textarea>

            <label for="bank"><b>Account Number:</b></label>
            <textarea rows="2" column="10" disabled><?php echo $bank ?></textarea>

            <input type="submit" name="editProf" value="Edit Profile">
        </form>
    </div>
</body>

</html>
