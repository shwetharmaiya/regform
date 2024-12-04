<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Basic Reset */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .error {
            color: #ff0000;
            font-size: 14px;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>
    <?php
    // Define variables and initialize with empty values
    $name = $email = $phone = "";
    $name_err = $phone_err = "";

    // Processing form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate name
        if (empty(trim($_POST["name"]))) {
            $name_err = "Please enter your name.";
        } else {
            $name = trim($_POST["name"]);
        }

        // Validate phone
        if (empty(trim($_POST["phone"]))) {
            $phone_err = "Please enter your phone number.";
        } else {
            $phone = trim($_POST["phone"]);
        }

        // Optional email field
        $email = trim($_POST["email"]);

        // Check for errors before submitting
        if (empty($name_err) && empty($phone_err)) {
            // Display success message or handle form submission
            echo "<p style='color: green; text-align: center;'>Form submitted successfully!</p>";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="name">Name <span class="error">*</span></label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $name_err; ?></span>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <label for="phone">Phone <span class="error">*</span></label>
            <input type="tel" name="phone" id="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phone_err; ?></span>
        </div>

        <input type="submit" class="btn-submit" value="Submit">
    </form>
</div>

</body>
</html>
