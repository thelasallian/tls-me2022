<div class="section-header">
    <img src="/assets/section-icons/features.png" alt="features" class="section-header-icon">
    <h1 class="section-header-text">Features</h1>
</div>

<div class="section-body">
    <div class="row">
        <!-- PHP Loop to Render Feature Article Cards -->
        <?php $features = json_decode(file_get_contents('./json/feature-articles.json'), true);

            foreach($features as $item) { // foreach element in $arr
                $title = $item['title'];
                $byline = $item['byline'];
                $visual = $item['visual'];
                $link = $item['link'];
            ?>
            
            <div class="feature-article-card">
                <div class="feature-visual-wrapper">
                    <img src="<?php echo $visual; ?>" alt="" class="feature-visual">
                </div>
                <div class="feature-article-details">
                    <a href="<?php echo $link; ?>" target="_blank">
                        <h2><?php echo $title; ?></h2>
                    </a>
                    <p><?php echo $byline; ?></p>
                </div>
            </div>
            <?php } ?>
    </div>
</div>