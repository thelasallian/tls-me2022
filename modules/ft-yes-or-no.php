<div class="section-header">
    <img src="/assets/section-icons/ft-yes-or-no.png" alt="Fast Talk: Yes or No" class="section-header-icon"/ >
    <h1 class="section-header-text">Fast Talk: Yes or No</h1>
</div>

<div class="section-body">
    <?php
        // Convert JSON to associative array (true parameter)
        $candidates_list_data = json_decode(file_get_contents('./json/candidates-per-position.json'), true);

        // TEMPORARY To display each array element
        foreach ($candidates_list_data as $i) {
            echo $i["position"];

            echo '<ol>';
            foreach ($i["candidates"] as $j) {
                echo '<li>';
                echo $j["surname"].' - '.$j["party"];
                echo '</li>';
            }
            echo '</ol>';
        }
        
    ?>
</div>