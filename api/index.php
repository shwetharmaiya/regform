<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="form-container">
        <h1>Registration Form</h1>
        <form action="" method="POST">
            <p>Personal Information:</p>

            <label for="name">Full Name:</label>
            <input name="name" type="text" required><br>

            <label for="title">Title:</label>
            <select name="title">
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Mrs.">Mrs.</option>
            </select><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others<br>

            <p>Address Information:</p>
            <label for="street_address">Street Address:</label>
            <input type="text" name="street_address" required><br>

            <label for="city">City:</label>
            <input type="text" name="city" required><br>

            <label for="state_province">State/Province:</label>
            <input type="text" name="state_province" required><br>

            <label for="postal_zip_code">Postal/Zip Code:</label>
            <input type="text" name="postal_zip_code" required><br>

            <p>Contact Information:</p>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" required><br>

            <button type="submit" name="Submit">Submit</button><br>
        </form>
    </div>
</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
