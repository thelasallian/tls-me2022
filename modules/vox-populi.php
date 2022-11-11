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
        
    </div>
</div>