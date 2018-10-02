<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="jokes.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title><?=$title?></title>
    </head>
    <body>
        <div class="navbar navbar-dark bg-dark style="background-color: #b2f2fd;" ">
        <header>
            <h2 class="navbar-brand">Internet Joke Database</h2>
        </header>
        <nav >
            <ul class="nav">
                <li class= "nav-link"><a href="index.php">Home</a></li>
                <li class= "nav-link"><a href="index.php?action=list">Jokes List</a></li>
                <li class= "nav-link"><a href="index.php?action=edit">Add a new Joke</a></li>
            </ul>
        </nav>
        </div>
        <div class="container mt-3" >
            <main >
                <?=$output?>
            </main>
        </div> 
        <div class="container mt-3" >
        <?php include 'footer.html.php'; ?>
        </div>
    </body>
</html>