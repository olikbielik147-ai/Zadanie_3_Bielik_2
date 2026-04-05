<?php
function generateSlides($dir) {
    $files = glob($dir . "/*.jpg");

    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);

    $text = $data["text_banner"];

    foreach ($files as $file) {
        $filename = basename($file);

        echo '<div class="slide fade">';
        echo '<img src="' . $file . '">';

        echo '<div class="slide-text">';
        echo isset($text[$filename]) ? $text[$filename] : "";
        echo '</div>';

        echo '</div>';
    }
}
?>

<?php

function load_banner_data() {
    $path = "data/banery.json";
    if (!file_exists($path)) {
        return null;
    }

    $json = file_get_contents($path);
    return json_decode($json, true);
}

function render_banners() {
    $data = load_banner_data();
    if (!$data) return;

    foreach ($data["text_banner"] as $img => $info) {
        echo '
        <div class="slide fade" onclick="window.location.href=\'' . $info["url"] . '\'">
            <img src="img/' . $img . '">
            <div class="slide-text">' . $info["text"] . '</div>
        </div>';
    }
}