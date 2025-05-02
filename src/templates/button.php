<?php
if (isset($link['label'], $link['url'], $link['color'])): ?>
    <a href="<?= htmlspecialchars($link['url']) ?>" 
       class="button" 
       style="background-color: <?= htmlspecialchars($link['color']) ?>;">
        <?= htmlspecialchars($link['label']) ?>
    </a>
<?php endif; ?>
?>