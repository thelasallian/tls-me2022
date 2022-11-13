<div class="section-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon" />
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <!-- Bootstrap Pills: Executive Board / CLA, COB, SOE, GCOE / COS, BACGED, LCSG -->
    <div class="hth-pills nav-pills-wrapper d-flex justify-content-center">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link active" id="executive-board-tab" data-bs-toggle="tab" data-bs-target="#executive-board-pane" type="button" role="tab" aria-controls="pills-executive-board" aria-selected="true">EXECUTIVE BOARD</button>
            </li>
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link" id="cla-cob-soe-gcoe-tab" data-bs-toggle="tab" data-bs-target="#cla-cob-soe-gcoe-pane" type="button" role="tab" aria-controls="pills-cla-cob-soe-gcoe" aria-selected="false">CLA, COB, SOE, GCOE</button>
            </li>
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link" id="cos-bagced-lcsg-tab" data-bs-toggle="tab" data-bs-target="#cos-bagced-lcsg-pane" type="button" role="tab" aria-controls="pills-cos-bagced-lcsg" aria-selected="false">COS, BAGCED, LCSG</button>
            </li>
        </ul>
    </div>

    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
        
        <!-- Executive Board -->
        <div class="tab-pane fade show active" id="executive-board-pane" role="tabpanel" aria-labelledby="executive-board-tab" tabindex="0">
            <!-- PHP Loop to Render Executive Board Cards -->
            <?php $hth_cp_data = json_decode(file_get_contents('./json/hth-eb-articles.json'), true);

            foreach($hth_cp_data as $item) { // foreach element in $arr
                $position = $item['position'];
                $title = $item['title'];
                $byline = $item['byline'];
                $visual = $item['visual'];
                $link = $item['link'];
            ?>

            <div class="hth-article-card">
                <div class="hth-visual-wrapper">
                    <img src="<?php echo $visual; ?>" alt="" class="hth-visual">
                </div>
                <div class="hth-article-details">
                    <span class="position-label"><?php echo $position; ?></span>
                    <a href="<?php echo $link; ?>" target="_blank">
                        <h2><?php echo $title; ?></h2>
                    </a>
                    <p><?php echo $byline; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <!-- CLA, COB, SOE, GCOE -->
        <div class="tab-pane fade" id="cla-cob-soe-gcoe-pane" role="tabpanel" aria-labelledby="cla-cob-soe-gcoe-tab" tabindex="0">
            <!-- PHP Loop to Render Executive Board Cards -->
            <?php $hth_cp_data = json_decode(file_get_contents('./json/hth-cla-cob-soe-gcoe-articles.json'), true);

            foreach($hth_cp_data as $item) { // foreach element in $arr
                $position = $item['position'];
                $title = $item['title'];
                $byline = $item['byline'];
                $visual = $item['visual'];
                $link = $item['link'];
            ?>

            <div class="hth-article-card">
                <div class="hth-visual-wrapper">
                    <img src="<?php echo $visual; ?>" alt="" class="hth-visual">
                </div>
                <div class="hth-article-details">
                    <span class="position-label"><?php echo $position; ?></span>
                    <a href="<?php echo $link; ?>" target="_blank">
                        <h2><?php echo $title; ?></h2>
                    </a>
                    <p><?php echo $byline; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        
        <!-- COS, BACGED, LCSG -->
        <div class="tab-pane fade" id="cos-bagced-lcsg-pane" role="tabpanel" aria-labelledby="cos-bagced-lcsg-tab" tabindex="0">
            
            <!-- PHP Loop to Render Executive Board Cards -->
            <?php $hth_cp_data = json_decode(file_get_contents('./json/hth-cos-bagced-lcsg-articles.json'), true);

            foreach($hth_cp_data as $item) { // foreach element in $arr
                $position = $item['position'];
                $title = $item['title'];
                $byline = $item['byline'];
                $visual = $item['visual'];
                $link = $item['link'];
            ?>

            <div class="hth-article-card">
                <div class="hth-visual-wrapper">
                    <img src="<?php echo $visual; ?>" alt="" class="hth-visual">
                </div>
                <div class="hth-article-details">
                    <span class="position-label"><?php echo $position; ?></span>
                    <a href="<?php echo $link; ?>" target="_blank">
                        <h2><?php echo $title; ?></h2>
                    </a>
                    <p><?php echo $byline; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>       
</div>