<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" href="view/css/bootstrap.min.css" />
<link rel="stylesheet" href="view/css/style.css" />
 <title><?= $titre ?></title>
    </head>
    <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">BOOK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collaps  e" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="sndpart">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=addbook">Ajouter un book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=book ">Afficher les books</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=bookstore ">Afficher les bookstores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?action=addbookstore ">ajouter un bookstore</a>
                  </li>
                </ul>
                </div>
          </div>
        </div>
      </nav>
            <div id="contenu">
                <?= $contenu ?>
            </div>
            <footer id="piedBlog">Base de donné BookStore</footer>
    </div>
    </body>
</html>