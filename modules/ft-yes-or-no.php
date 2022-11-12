<div class="section-header">
    <img src="/assets/section-icons/ft-yes-or-no.png" alt="Fast Talk: Yes or No" class="section-header-icon"/ >
    <h1 class="section-header-text">Fast Talk: Yes or No</h1>
</div>

<div class="section-body">
    <!-- Fetch Data -->
    <?php
    // Convert JSON to associative array (true parameter)
    $candidates_list_data = json_decode(file_get_contents('./json/candidates-per-position.json'), true);
    ?>

    <div class="row row-cols-auto justify-content-center mb-3">
        <div class="col">
            <!-- Dropdown -->
            <select class="form-select" aria-label="List of Issues" id="issues-dropdown">
                <option value="default" disabled selected hidden>Select an Issue...</option>
                <option value="ilw">Independent Learning Week</option>
                <option value="masks">Voluntary Wearing of Face Masks</option>
                <option value="sim-card">SIM Card Registration</option>
                <option value="rotc">Mandatory ROTC</option>
                <option value="no-fail">No Fail Policy for F2F Classes</option>
                <option value="state-calamity">National State of Calamity Declaration</option>
                <option value="face-to-face">Full F2F Setup</option>
            </select>
        </div>

        <div class="col">
            <!-- Legend -->
            <div class="ft-legend">
                <!-- <span class="ft-legend-label">Legend:</span> -->
                <div class="ft-legend-item me-3">
                    <img class="ft-cand-portrait ft-cand-sample ft-cand-yes me-2" src="https://icones.pro/wp-content/uploads/2021/03/avatar-de-personne-icone-homme.png" alt=""  />
                    Yes
                </div>
                <div class="ft-legend-item">
                    <img class="ft-cand-portrait ft-cand-sample ft-cand-no me-2" src="https://icones.pro/wp-content/uploads/2021/03/avatar-de-personne-icone-homme.png" alt=""  />
                    No
                </div>
            </div>
        </div>
    </div>

    <!-- Display Candidates -->
    <div class="row row-cols-1 row-cols-md-2 g-2 px-4 px-md-0">
        <!-- Column 1: OPRES to RVRCOB CP -->
        <div class="col">

            <!-- OPRES -->
            <span class="position-label mb-3"><?php echo $candidates_list_data[0]["position"].":"; ?></span>
            <div class="row g-2 mb-4">
                
                <?php foreach ($candidates_list_data[0]["candidates"] as $cand): ?>
                    <div class="col">
                        <?php render_cand_info($cand); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php $pos_index = 1; ?>

            <!-- OVPEA to RVRCOB -->
            <?php for ($row = 0; $row < 3; $row++): ?>
                <div class="row row-cols-2 g-2 mb-4">
                    <?php for ($col = 0; $col < 2; $col++): ?>
                        <div class="col">
                            <span class="position-label mb-3"><?php echo $candidates_list_data[$pos_index]["position"].":"; ?></span>
                            <?php foreach ($candidates_list_data[$pos_index]["candidates"] as $cand): ?>
                                <?php render_cand_info($cand); ?>
                            <?php endforeach; ?>
                            <?php $pos_index++; ?>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

        </div>
        <!-- Column 2: SOE CP to COS CP -->
        <div class="col">
            <?php for ($row = 0; $row < 3; $row++): ?>
                <div class="row row-cols-2 g-2 mb-4">
                    <?php for ($col = 0; $col < 2; $col++): ?>
                        <div class="col">
                            <!-- <span class="position-label"><?php echo $candidates_list_data[$pos_index]["position"].":"; ?></span> -->
                            <?php if ($pos_index < 12) : ?>
                                <span class="position-label mb-3"><?php echo $candidates_list_data[$pos_index]["position"].":"; ?></span>
                                <?php foreach ($candidates_list_data[$pos_index]["candidates"] as $cand): ?>
                                    <?php render_cand_info($cand); ?>
                                <?php endforeach; ?>
                                <?php $pos_index++; ?>
                            <?php endif; ?>
                        
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
        
    </div>

    
    
    <?php
    function render_cand_info($cand) {
        // Replace spaces in surname with dashes, if any
        $candidate_id = $cand["surname"];
        $candidate_id = str_replace(" ", "-", $candidate_id);

        echo <<<INFO
            <div class="ft-cand-info d-flex">
                <img class="ft-cand-portrait ft-cand-flip me-2" id="{$candidate_id}" src="{$cand["portrait"]}" alt=""  />
                <p>
                    <span class="ft-cand-name">{$cand["surname"]}</span><br/>
                    <span class="ft-cand-party">{$cand["party"]}</span>
                </p>
            </div>
        INFO;
    }
    ?>
</div>