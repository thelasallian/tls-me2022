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
                <div class="vp-photo-overlay d-flex flex-column justify-content-between">
                    <div class="vp-quote-wrapper">
                        <span class="material-icons">format_quote</span>
                        <p class="vp-answer"><?php echo $photo["answer"]; ?></p>
                    </div>
                    <div class="vp-interviewee-wrapper">
                        <span class="vp-name"><?php echo $photo["name"]; ?></span><br/>
                        <span class="vp-id"><?php echo $photo["id"]; ?></span>
                    </div>
                </div>
                <img src="<?php echo $photo["filepath"]; ?>?" alt="" class="vp-photo">
            </div>
        <?php endforeach; ?>
    </div>
</div>