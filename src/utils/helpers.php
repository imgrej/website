<?php
function loadLinks($filePath) {
    if (!file_exists($filePath)) {
        return [];
    }

    $jsonContent = file_get_contents($filePath);
    return json_decode($jsonContent, true);
}

function generateButton($link) {
    $url = htmlspecialchars($link['url']);
    $color = htmlspecialchars($link['color']);
    $text = htmlspecialchars($link['text']);
    
    return "<a href=\"$url\" class=\"button\" style=\"background-color: $color;\">$text</a>";
}

function renderButton($link) {
    if (isset($link['label'], $link['url'], $link['color'])) {
        return '<a href="' . htmlspecialchars($link['url']) . '" class="button" style="background-color: ' . htmlspecialchars($link['color']) . ';">' . htmlspecialchars($link['label']) . '</a>';
    }
    return '';
}
?>