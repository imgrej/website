<?php
    $linksData = file_get_contents('assets/json/links.json');
    $links = json_decode($linksData, true)['links'];
?>
<div class="card">
    <div class="profile-section">
        <img src="https://i.grej.xyz/f/IMG_2530.png" alt="Profile Picture" class="profile-picture">
        <h1 class="name">grej</h1>
        <p class="description">Yet another self-taught smart guy.</p>
    </div>
    <div class="links-section">
        <?php foreach ($links as $key => $link): ?>
            <a href="<?php echo $link['url']; ?>" class="link-button" style="background: <?php echo $link['color']; ?>;">
                <?php if ($link['logo-url'] ?? false): ?>
                    <img src="<?php echo $link['logo-url']; ?>" alt="<?php echo $key; ?> Logo" class="link-logo">
                <?php elseif ($link['font-awesome'] ?? false): ?>
                    <i class="<?php echo $link['font-awesome']; ?> link-logo"></i>
                <?php else: ?>
                    <i class="fa-solid fa-link link-logo"></i>
                <?php endif; ?>
                <span class="sitename">
                    <?php
                    if ($link['sitename'] ?? false) {
                        echo $link['sitename'];
                    } else {
                        echo ucfirst($key);
                    }
                    ?>
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</div>
