<div class="section-header" id="features-header">
    <img src="/assets/section-icons/features.png" alt="features" class="section-header-icon">
    <h1 class="section-header-text">Features</h1>
</div>

<div class="section-body">
    <!-- Import data -->
    <!-- https://raw.githubusercontent.com/ronnparcia/tls-me2022/main/json/ -->
    <?php $features_data = json_decode(file_get_contents('json/feature-articles.json'), true); ?>
    <!-- Articles -->
    <?php foreach ($features_data as $feature_article): ?>
        <div class="hth-ft-article-card">
            <div class="hth-ft-visual-wrapper">
                <img src="<?php echo $feature_article["visual"]; ?>" alt="" class="hth-ft-visual">
            </div>
            <div class="hth-ft-article-info">
                <a href="<?php echo $feature_article["link"]; ?>" target="_blank">
                    <h2><?php echo $feature_article["title"]; ?></h2>
                </a>
                <p><?php echo $feature_article["byline"]; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>