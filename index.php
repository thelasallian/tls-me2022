<!DOCTYPE html>
<html lang="en">
<?php require_once 'modules/head.php'; ?>
<body>
    <!-- Navbar -->
    <?php require_once 'modules/navbar.php'; ?>

    <!-- Main Content -->
    <main class="container">
        <!-- 
            - row-cols-lg-2:  On the md breakpoint, there are 2 columns, except Vox Populi.
            - row-cols-1:     When it gets smaller, it becomes 1 column.
            - g-4:            Adds the gutter (gap) between columns.
         -->
        <div class="row row-cols-1 row-cols-lg-2 g-4">
            <!-- 
                Column wrapping Vox Populi
                col-md-12:          On the md breakpoint, only Vox Populi spans two columns 
                order-5 order-md-1: On the md breakpoint, Vox Populi appears on top. But in mobile, it's last
            -->
            <div class="col-lg-12 order-5 order-lg-1">
                <!-- Vox Populi -->
                <section id="vox-populi">
                    <?php require_once 'modules/vox-populi.php'; ?>
                </section>
            </div>
            <!-- Column wrapping HTH and FT: 0.0 to 4.0 -->
            <div class="col order-1">
                <!-- Head to Head -->
                <section id="head-to-head" class="mb-4">
                    <?php require_once 'modules/head-to-head.php'; ?>
                </section>
                <!-- Fast Talk: 0.0 to 4.0 -->
                <section id="ft-rate">
                    <?php require_once 'modules/ft-rate.php'; ?>
                </section>
            </div>
            <!-- Column wrapping FT: Yes or No and Features -->
            <div class="col order-2">
                <!-- Fast Talk: Yes or No -->
                <section id="ft-yes-or-no" class="mb-4">
                    <?php require_once 'modules/ft-yes-or-no.php'; ?>
                </section>
                <!-- Features -->
                <section id="features">
                    <?php require_once 'modules/features.php'; ?>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php require_once 'modules/footer.php'; ?>

    <!-- Bootstrap JS Bundle and Custom JS Script File -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/ft-yes-or-no.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
