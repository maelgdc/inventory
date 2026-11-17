<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./assets/images/logo_fond_transparent.png">
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <script src="./assets/script/deconnexion.js" defer></script>
</head>

<body>
    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <img width="80px" src="./assets/images/logo_fond_transparent.png" alt="Le logo" class="navbar-brand">
            <span class="navbar-brand"><?= $_SESSION["user"] ?? "" ?></span>
            <?php if (isset($_SESSION["user"])) { ?>
                <button class="btn btn-outline-danger navbar-brand"
                    id="bouton_deconnexion"
                    type="button">
                    <i class="bi bi-box-arrow-right"></i> Déconnexion
                </button>
            <?php } ?>
        </div>
    </nav>