<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Conference Registration Form</title>
</head>

<body>
    <div class="form-container">
        <h1>Conference Registration</h1>
        <form action="pg_process.php" method="POST">
            <input type="hidden" name="form_type" value="pg_form">

            Personal Information
            <label for="name">Full Name:</label>
            <input type="text" name="name" required><br>

            <label for="title">Title:</label>
            <select name="title" required>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
            </select><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other<br>

            <label for="affiliation">Affiliation/Institution:</label>
            <input type="text" name="affiliation" placeholder="Name of the hospital, university, or organization" required><br>

            <label for="department">Department:</label>
            <input type="text" name="department" placeholder="Specific department within the institution" required><br>

            <label for="designation">Designation/Position:</label>
            <input type="text" name="designation" required><br>

            Address Information
            <label for="street_address">Street Address:</label>
            <input type="text" name="street_address" required><br>

            <label for="city">City:</label>
            <input type="text" name="city" required><br>

            <label for="state_province">State/Province:</label>
            <input type="text" name="state_province" required><br>

            <label for="postal_zip_code">Postal/Zip Code:</label>
            <input type="text" name="postal_zip_code" required><br>

            <label for="country">Country:</label>
            <input type="text" name="country" required><br>

            Contact Information
            <label for="email">Email Address:</label>
            <input type="email" name="email" required><br>

            <label for="phone_number">Phone Number (with country code):</label>
            <input type="text" name="phone_number" required><br>

            <br />
            <button type="submit" class="ticket_add_to_cart button">Submit & Proceed to Pay</button>
        </form>
    </div>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>