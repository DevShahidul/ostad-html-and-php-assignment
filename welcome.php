<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <div class="container mx-auto pt-20 space-y-5">
        <h1 class="text-5xl">Welcome, <?php echo htmlspecialchars($_GET["first_name"]); ?>!</h1>
	    <p>Thank you for logging in.</p>
    </div>
</body>
</html>