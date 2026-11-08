<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #e0f2fe, #ede9fe);
            color: #1f2937;
        }
        .welcome-card {
            width: min(90%, 520px);
            padding: 42px 32px;
            text-align: center;
            background: white;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(31, 41, 55, 0.12);
        }
        h1 { margin: 0 0 14px; color: #4f46e5; }
        p { line-height: 1.6; color: #4b5563; }
        a {
            display: inline-block;
            margin-top: 18px;
            padding: 12px 22px;
            color: white;
            background: #4f46e5;
            text-decoration: none;
            border-radius: 9px;
        }
        a:hover { background: #4338ca; }
    </style>
</head>
<body>
    <main class="welcome-card">
        <?php
            $visitorName = "Guest";
            echo "<h1>Welcome, " . htmlspecialchars($visitorName, ENT_QUOTES, "UTF-8") . "!</h1>";
            echo "<p>We are happy to have you here. Explore the website and enjoy your visit.</p>";
        ?>
        <a href="index.php">Get Started</a>
    </main>
</body>
</html>
