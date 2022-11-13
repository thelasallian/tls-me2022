<div class="section-header">
    <img src="/assets/section-icons/head-to-head.png" alt="Head-to-Head" class="section-header-icon" />
    <h1 class="section-header-text">Head-to-Head</h1>
</div>

<div class="section-body">
    <!-- Bootstrap Pills: EB / CLA, COB, SOE, GCOE / COS, BAGCED, LCSG -->
    <ul class="nav nav-pills d-flex justify-content-center mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-eb-tab" data-bs-toggle="pill" data-bs-target="#pills-eb" type="button" role="tab" aria-controls="pills-eb" aria-selected="true">EB</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-cla-cob-soe-gcoe-tab" data-bs-toggle="pill" data-bs-target="#pills-cla-cob-soe-gcoe" type="button" role="tab" aria-controls="pills-cla-cob-soe-gcoe" aria-selected="false">CLA, RVRCOB, SOE, GCOE</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-cos-bagced-lcsg-tab" data-bs-toggle="pill" data-bs-target="#pills-cos-bagced-lcsg" type="button" role="tab" aria-controls="pills-cos-bagced-lcsg" aria-selected="false">COS, BAGCED, LCSG</button>
        </li>
    </ul>

    <!-- Container for Card Grid -->
    <div class="tab-content" id="pills-tabContent">
        <!-- EB -->
        <div class="tab-pane fade show active" id="pills-eb" role="tabpanel" aria-labelledby="pills-eb-tab">
            <div class="row row-cols-1 row-cols-md-1 g-2">
                <!-- PHP Loop to Render EB Cards -->
                <?php
                    $hth_eb = json_decode(file_get_contents('./json/hth-eb-articles.json'), true);

                    foreach($hth_eb as $item) { // foreach element in $arr
                        $position = $item['position'];
                        $title = $item['title'];
                        $byline = $item['byline'];
                        $visual = $item['visual'];
                        $link = $item['link'];
                ?>
                    <div class="col">
                        <a href="<?php echo $link; ?>" target="_blank">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4 col-lg-5 p-2">
                                        <img src="<?php echo $visual; ?>" alt="" class="card-img">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <p class="card-tag"><?php echo $position; ?></p>
                                        <h5 class="card-title"><?php echo $title; ?></h5>
                                        <p class="card-text"><?php echo $byline; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- CLA, COB, SOE, GCOE -->
        <div class="tab-pane fade" id="pills-cla-cob-soe-gcoe" role="tabpanel" aria-labelledby="pills-cla-cob-soe-gcoe-tab">
        <div class="row row-cols-1 row-cols-md-1 g-2">
                <!-- PHP Loop to Render CLA/COB/SOE/GCOE Cards -->
                <?php
                    $hth_cla_cob_soe_gcoe = json_decode(file_get_contents('./json/hth-cla-cob-soe-gcoe-articles.json'), true);

                    foreach($hth_cla_cob_soe_gcoe as $item) { // foreach element in $arr
                        $position = $item['position'];
                        $title = $item['title'];
                        $byline = $item['byline'];
                        $visual = $item['visual'];
                        $link = $item['link'];
                ?>
                    <div class="col">
                        <a href="<?php echo $link; ?>" target="_blank">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4 col-lg-5 p-2">
                                        <img src="<?php echo $visual; ?>" alt="" class="card-img">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <p class="card-tag"><?php echo $position; ?></p>
                                        <h5 class="card-title"><?php echo $title; ?></h5>
                                        <p class="card-text"><?php echo $byline; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- COS, BAGCED, LCSG -->
        <div class="tab-pane fade" id="pills-cos-bagced-lcsg" role="tabpanel" aria-labelledby="pills-cos-bagced-lcsg-tab">
        <div class="row row-cols-1 row-cols-md-1 g-2">
                <!-- PHP Loop to Render EB Cards -->
                <?php
                    $hth_cos_bagced_lcsg = json_decode(file_get_contents('./json/hth-cos-bagced-lcsg-articles.json'), true);

                    foreach($hth_cos_bagced_lcsg as $item) { // foreach element in $arr
                        $position = $item['position'];
                        $title = $item['title'];
                        $byline = $item['byline'];
                        $visual = $item['visual'];
                        $link = $item['link'];
                ?>
                    <div class="col">
                        <a href="<?php echo $link; ?>" target="_blank">
                            <div class="card border-0">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4 col-lg-5 p-2">
                                        <img src="<?php echo $visual; ?>" alt="" class="card-img">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        <p class="card-tag"><?php echo $position; ?></p>
                                        <h5 class="card-title"><?php echo $title; ?></h5>
                                        <p class="card-text"><?php echo $byline; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
          
</div>

    <?php /*
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
        echo '</ol>'; */
    ?> 
</div>