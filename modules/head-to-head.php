<div class="section-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon" />
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <!-- Pills -->
    <ul class="nav nav-pills" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="executive-board-tab" data-bs-toggle="tab" data-bs-target="#executive-board-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Executive Board</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="college-presidents-tab" data-bs-toggle="tab" data-bs-target="#college-presidents-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">College Presidents</button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="myTabContent">
        <!-- Executive Board -->
        <div class="tab-pane fade show active" id="executive-board-pane" role="tabpanel" aria-labelledby="executive-board-tab" tabindex="0">
            EB
        </div>
        <!-- College Presidents -->
        <div class="tab-pane fade" id="college-presidents-pane" role="tabpanel" aria-labelledby="college-presidents-tab" tabindex="0">
            CP
        </div>
    </div>


    <?php
// Convert JSON to associative array (true parameter)
$hth_data = json_decode(file_get_contents('./json/hth-articles.json'), true);

// TEMPORARYL To display each array element
echo '<ol>';
foreach ($hth_data as $i) {

    echo '<li>';
    echo $i["position"] . '<br/>';
    echo $i["title"] . '<br/>';
    echo $i["byline"] . '<br/>';
    echo '</li>';
}
echo '</ol>';
?>
</div>