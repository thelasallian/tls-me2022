<div class="section-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon">
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <?php
        // Convert JSON to associative array (true parameter)
        $hth_data = json_decode(file_get_contents('./json/hth-articles.json'), true);

        // TEMPORARYL To display each array element
        echo '<ol>';
        foreach ($hth_data as $i) {
            
            echo '<li>';
            echo $i["position"].'<br/>';
            echo $i["title"].'<br/>';
            echo $i["byline"].'<br/>';
            echo '</li>';
        }
        echo '</ol>';
    ?>
</div>