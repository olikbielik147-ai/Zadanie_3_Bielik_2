<?php 
include "function.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php 
$file_path = "parts/header.php"; 
if (!include($file_path)) { 
    echo "Failed to include $file_path";
}
?>

<main>

    <section class="slides-container">
        <?php render_banners(); ?>
        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <p><strong><em>
                    Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui.
                </em></strong></p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-50">
                <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
            </div>
            <div class="col-50">
                <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut...</p>
                <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do...</p>
            </div>
        </div>
    </section>

</main>

<?php 
$file_path = "parts/footer.php"; 
if (!include($file_path)) { 
    echo "Failed to include $file_path";
}
?>

<script src="js/menu.js"></script>
<script src="js/slider.js"></script>

</body>
</html>