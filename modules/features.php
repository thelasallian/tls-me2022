<div class="section-header">
    <img src="/assets/section-icons/features.png" alt="features" class="section-header-icon">
    <h1 class="section-header-text">Features</h1>
</div>

<div class="section-body">
    <div class="row row-cols-1 row-cols-md-1 g-2">
        <!-- PHP Loop to Render Feature Cards -->
        <?php
            $features = json_decode(file_get_contents('./json/features.json'), true);

            foreach($features as $item) { // foreach element in $arr
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