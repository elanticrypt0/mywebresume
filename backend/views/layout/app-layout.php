<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend :: MyWebResume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="?ctrl=dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Backend</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="?ctrl=posts" class="nav-link">Posts</a></li>
            <li class="nav-item"><a href="?ctrl=skills" class="nav-link">Skills</a></li>
            <li class="nav-item"><a href="?ctrl=social" class="nav-link">Social</a></li>
        </ul>
        </header>
    </div>
    <main id="app" class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    $this->renderView();
                ?>
            </div>
        </div>
    </main>
</body>
</html>