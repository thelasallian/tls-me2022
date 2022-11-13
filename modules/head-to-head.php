<div class="section-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon" />
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <!-- Bootstrap Pills: Executive Board / College Presidents -->
    <div class="hth-ft-pills nav-pills-wrapper d-flex justify-content-center">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link active" id="executive-board-tab" data-bs-toggle="tab" data-bs-target="#executive-board-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">EXECUTIVE BOARD</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="college-presidents-tab" data-bs-toggle="tab" data-bs-target="#college-presidents-pane" type="button" role="tab" aria-controls="pills-cla-cob-soe-gcoe" aria-selected="false">COLLEGE PRESIDENTS</button>
            </li>
        </ul>
    </div>

    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
        <!-- Executive Board -->
        <div class="tab-pane fade show active" id="executive-board-pane" role="tabpanel" aria-labelledby="executive-board-tab" tabindex="0">
            
            <!-- Convert JSON to associative array (true parameter) -->
            <?php $hth_eb_data = json_decode(file_get_contents('./json/hth-eb-articles.json'), true); ?>

            <!-- PHP Loop to Render Executive Board Cards -->
            <?php foreach($hth_eb_data as $eb_article): ?>
                <div class="hth-article-card">
                    <div class="hth-visual-wrapper">
                        <img src="<?php echo $eb_article['visual']; ?>" alt="" class="hth-visual">
                    </div>
                        <div class="hth-article-details">
                            <span class="position-label"><?php echo $eb_article['position']; ?></span>
                            <a href="<?php echo $eb_article['link']; ?>" target="_blank">
                                <h2><?php echo $eb_article['title']; ?></h2>
                            </a>
                            <p><?php echo $eb_article['byline']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- College Presidents -->
        <div class="tab-pane fade" id="college-presidents-pane" role="tabpanel" aria-labelledby="college-presidents-tab" tabindex="0">

            <!-- Convert JSON to associative array (true parameter) -->
            <?php $hth_cp_data = json_decode(file_get_contents('./json/hth-cp-articles.json'), true); ?>

            <!-- PHP Loop to Render College Presidents Cards -->
            <?php foreach($hth_cp_data as $cp_article): ?>
                <div class="hth-article-card">
                    <div class="hth-visual-wrapper">
                        <img src="<?php echo $cp_article['visual']; ?>" alt="" class="hth-visual">
                    </div>
                        <div class="hth-article-details">
                            <a href="<?php echo $cp_article['link']; ?>" target="_blank">
                                <h2><?php echo $cp_article['title']; ?></h2>
                            </a>
                            <p><?php echo $cp_article['byline']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>       
</div>