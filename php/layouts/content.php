<?php
// ternary operator
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> <?php echo strtoupper($page); ?> </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <!-- Ini content setiap page dari folder pages -->
    <?php
    if ($page == 'dashboard') {
        include('../pages/dashboard/Dashboard.php');
    } elseif ($page == 'users') {
        include('../pages/user/Users.php');
    } elseif ($page == 'profile') {
        include('../pages/profil/Profile.php');
    } else {
        include('../pages/not/Notfound.php');
    }
    ?>
</main>