<div class="section-header" id="vox-populi-header">
    <img src="/assets/section-icons/vox-populi.png" alt="Vox Populi" class="section-header-icon" />
    <h1 class="section-header-text">Vox Populi</h1>
</div>

<div id="vp-section-body" class="section-body p-4">
    <div class="vp-slider d-flex w-100">
        <!-- Fetch Data -->
        <?php
        // Convert JSON to associative array (true parameter)
        $vp_photos = json_decode(file_get_contents('https://raw.githubusercontent.com/ronnparcia/tls-me2022/main/json/vox-populi.json'), true);
        ?>
        <div class="vp-button-wrapper d-flex align-items-center flex-shrink-1">
            <button id="left-btn" class="material-icons vp-button">chevron_left</button>
        </div>
        <div class="vp-master-wrapper position-relative">
            <div class="vp-wrapper-overlay"></div>
            <div id="vp-content" class="vp-wrapper">
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
        
        <div class="vp-button-wrapper d-flex align-items-center flex-shrink-1">
            <button id="right-btn" class="material-icons vp-button">chevron_right</button>
        </div>
    </div>
    <div class="vp-question">
        <h1>"What essential qualities do you seek in a leader?"</h1>
        <p>Scroll through the gallery and <span id="vp-question-device">hover</span> over the images!</p>
    </div>
</div>