<div class="section-header">
    <img src="/assets/section-icons/vox-populi.png" alt="Vox Populi" class="section-header-icon" />
    <h1 class="section-header-text">Vox Populi</h1>
</div>

<div class="section-body">
    <!-- Fetch Data -->
    <?php
    // Convert JSON to associative array (true parameter)
    $vp_photos = json_decode(file_get_contents('./json/vox-populi.json'), true);
    ?>
    <div class="vp-wrapper">
        <?php foreach ($vp_photos as $photo): ?>
            <div class="vp-photo-wrapper">
                <div class="vp-photo-overlay">
                    <p class="vp-quote"><?php echo $photo["answer"]; ?></p>
                    <span class="vp-name"><?php echo $photo["name"]; ?></span><br/>
                    <span class="vp-name"><?php echo $photo["id"]; ?></span>
                </div>
                <img src="<?php echo $photo["filepath"]; ?>?" alt="" class="vp-photo">
            </div>
        <?php endforeach; ?>
    </div>
</div>