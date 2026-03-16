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