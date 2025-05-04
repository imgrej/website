<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree Website</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
    <script src="assets/js/background.js" defer></script>
    <script src="assets/js/main.js" defer></script>
</head>
<body>
    <?php include '../src/templates/header.php'; ?>

    <div id="threejs-container"></div>
    <main class="content">
        <div class="logo-container">
            <img src="assets/images/logo.svg" alt="Logo" class="logo">
        </div>
        <div class="button-container"></div>
    </main>

    <?php include '../src/templates/footer.php'; ?>
</body>
</html>