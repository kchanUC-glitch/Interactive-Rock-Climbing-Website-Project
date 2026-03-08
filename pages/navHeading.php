<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles.css">

        <script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U="
            crossorigin="anonymous"></script>

        <script> $(document).ready(function () {
            $.getScript("../scripts.js")
        }) </script>

        <title>Welcome!</title>

    </head>

    <body>

        <nav class = "welcome-header">
            <h1 class = "logo"> Rock Climbing Gear </h1>

            <div class = "navbar">
                <a class = "btn" style = "font-size: 30px" href = "index.php">Home</a>
                <a class = "btn" style = "font-size: 30px" href = "about.php">About</a>
                <a class = "btn" style = "font-size: 30px" href = "contact.php">Contact</a>
            </div>

            <form id = "searchFunction">
                <input type = "text" placeholder = "Search for gear..." class = "form-control me-2">
                <button id = "searchBtn" class = "btn btn-success" type="submit">Search</button>
            </form>
        </nav>
       

    </body>

</html>