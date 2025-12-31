<!-- Begin Header -->
<header class="app-header" id="appHeader">
    <div class="container-fluid w-100">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <div class="d-inline-flex align-items-center gap-5">
                    <a href="index" class="fs-18 fw-semibold">
                        <img height="30" class="header-sidebar-logo-default d-none" alt="Logo" src="assets/images/logo-dark.png">
                        <img height="30" class="header-sidebar-logo-light d-none" alt="Logo" src="assets/images/logo-light.png">
                        <img height="30" class="header-sidebar-logo-small d-none" alt="Logo" src="assets/images/logo-md.png">
                        <img height="30" class="header-sidebar-logo-small-light d-none" alt="Logo" src="../assets/images/logo-md-light.png">
                    </a>
                    <button type="button" class="vertical-toggle btn btn-light-light text-muted icon-btn fs-5 rounded-pill" id="toggleSidebar">
                        <i class="bi bi-arrow-bar-left header-icon"></i>
                    </button>
                    <button type="button" class="horizontal-toggle btn btn-light-light text-muted icon-btn fs-5 rounded-pill d-none" id="toggleHorizontal">
                        <i class="ri-menu-2-line header-icon"></i>
                    </button>
                </div>
            </div>
            <div class="flex-shrink-0 d-flex align-items-center gap-1">
                <!-- زر البحث محذوف -->
                <button class="btn header-btn d-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="bi bi-gear"></i>
                </button>
                <div class="dark-mode-btn" id="toggleMode">
                    <button class="btn header-btn active" id="lightModeBtn">
                        <i class="bi bi-brightness-high"></i>
                    </button>
                    <button class="btn header-btn" id="darkModeBtn">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                </div>
                <!-- قائمة المستخدم محذوفة -->
            </div>
        </div>
    </div>
</header>
<!-- END Header -->

<!-- مودال البحث محذوف بالكامل -->
