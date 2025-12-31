 <div class="d-flex align-items-center mt-2 mb-2">
    <h6 class="mb-0 flex-grow-1">@yield('pagetitle')</h6>
    <div class="flex-shrink-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end mb-0">
                <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('title-sub')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('pagetitle')</li>
            </ol>
        </nav>
    </div>
</div>