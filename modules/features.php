<div class="section-header" id="features-header">
    <img src="/assets/section-icons/features.png" alt="features" class="section-header-icon">
    <h1 class="section-header-text">Features</h1>
</div>

<div class="section-body">
    <?php
        // Convert JSON to associative array (true parameter)
        $features_data = json_decode(file_get_contents('./json/feature-articles.json'), true);

        // TEMPORARYL To display each array element
        echo '<ol>';
        foreach ($features_data as $i) {
            
            echo '<li>';
            echo $i["title"].'<br/>';
            echo $i["byline"].'<br/>';
            echo '</li>';
        }
        echo '</ol>';
    ?>
</div>