<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; background-color: #f4f4f9; }
        .container { background-color: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #0056b3; }
        p { color: #555; font-size: 1.2em; }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Set default timezone if needed
            date_default_timezone_set('Asia/Seoul');
            
            $name = "Guest";
            $time = date("H");
            $greeting = "Good evening";

            if ($time < "12") {
                $greeting = "Good morning";
            } elseif ($time >= "12" && $time < "17") {
                $greeting = "Good afternoon";
            }

            echo "<h1>Welcome to Our Website!</h1>";
            echo "<p>$greeting, $name. We are thrilled to have you here.</p>";
            echo "<p>Today is " . date("l, F j, Y") . ".</p>";
        ?>
    </div>
</body>
</html>