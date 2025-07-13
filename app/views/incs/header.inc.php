<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--   тепер public є коренем тому ми вже відштовхуємося від неї, щоб підключити стилі -->
<!--    /assets/css/main.css = public/assets/css/main.css-->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <title><?= $title ?? "TITLE" ?></title>
</head>
<body>


<header class="header">
    <nav class="nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/app/controllers/about.php">About</a></li>
            <!--            <li><a href="#">Contacts</a></li>-->
        </ul>
    </nav>
</header>