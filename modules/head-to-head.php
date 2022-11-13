<div class="section-header" id="head-to-head-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon" />
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <!-- Pills -->
    <div class="hth-ft-pills nav-pills-wrapper d-flex justify-content-center">
        <ul class="nav nav-pills" id="myTab" role="tablist">
            <li class="nav-item me-2" role="presentation">
                <button class="nav-link active" id="executive-board-tab" data-bs-toggle="tab" data-bs-target="#executive-board-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Executive Board</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="college-presidents-tab" data-bs-toggle="tab" data-bs-target="#college-presidents-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">College Presidents</button>
            </li>
        </ul>
    </div>

    <?php
    // Convert JSON to associative array (true parameter)
    $hth_eb_data = json_decode(file_get_contents('./json/hth-eb-articles.json'), true);
    $hth_cp_data = json_decode(file_get_contents('./json/hth-cp-articles.json'), true);
    ?>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
        <!-- Executive Board -->
        <div class="tab-pane fade show active" id="executive-board-pane" role="tabpanel" aria-labelledby="executive-board-tab" tabindex="0">
            <?php foreach ($hth_eb_data as $eb_article): ?>
                <div class="hth-ft-article-card">
                    <div class="hth-ft-visual-wrapper">
                        <img src="<?php echo $eb_article["visual"]; ?>" alt="" class="hth-ft-visual">
                    </div>
                    <div class="hth-ft-article-info">
                        <span class="position-label"><?php echo $eb_article["position"]; ?></span>
                        <a href="<?php echo $eb_article["link"]; ?>" target="_blank">
                            <h2><?php echo $eb_article["title"]; ?></h2>
                        </a>
                        <p><?php echo $eb_article["byline"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- College Presidents -->
        <div class="tab-pane fade" id="college-presidents-pane" role="tabpanel" aria-labelledby="college-presidents-tab" tabindex="0">
            <?php foreach ($hth_cp_data as $cp_article): ?>
                <div class="hth-ft-article-card">
                    <div class="hth-ft-visual-wrapper">
                        <img src="<?php echo $cp_article["visual"]; ?>" alt="" class="hth-ft-visual">
                    </div>
                    <div class="hth-ft-article-info">
                        <span class="position-label"><?php echo $cp_article["position"]; ?></span>
                        <a href="<?php echo $cp_article["link"]; ?>" target="_blank">
                            <h2><?php echo $cp_article["title"]; ?></h2>
                        </a>
                        <p><?php echo $cp_article["byline"]; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>