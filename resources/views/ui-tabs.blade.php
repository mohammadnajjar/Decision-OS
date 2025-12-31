@extends('partials.layouts.master')

@section('title', 'UI Tabs | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Tabs')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Default Tabs</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>default tabs</strong> in Bootstrap by using <code>&lt;ul
                                class="nav nav-tabs"&gt;</code> for the tab headers and <code>&lt;div
                                class="tab-content"&gt;</code> for the content. Link tabs to content with matching
                            <code>id</code> attributes.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-1_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-1_profile" role="tab"
                                    aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-1_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-1_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-1_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-1_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-1_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-1_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Justified alignment</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>justified tabs</strong> in Bootstrap with the
                            <code>.nav-justified</code> class. Apply this class to the <code>&lt;ul
                                class="nav nav-tabs"&gt;</code> to make tabs evenly spread across the width of their
                            container.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-2_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-2_profile" role="tab"
                                    aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-2_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-2_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-2_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-2_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-2_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-2_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pills Tabs</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <strong>pills</strong> for tabs in Bootstrap by applying the
                            <code>.nav-pills</code> class to the <code>&lt;ul class="nav"&gt;</code> element. This
                            creates tabs with a pill-like appearance for a distinctive look.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-secondary nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-3_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-3_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-3_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-3_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-3_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-3_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-3_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-3_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Vertical alignment</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create <strong>vertical tabs</strong> in Bootstrap by using the
                            <code>.nav-tabs</code> class with <code>.flex-column</code> on the <code>&lt;ul
                                class="nav"&gt;</code>. This arranges tabs vertically alongside their content.</p>
                        <div class="row">
                            <div class="col-md-3">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills flex-column" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-4_home" role="tab"
                                            aria-selected="false" tabindex="-1">
                                            <span><i class="fas fa-home"></i></span>
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-4_profile"
                                            role="tab" aria-selected="true">
                                            <span><i class="far fa-user"></i></span>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-4_messages"
                                            role="tab" aria-selected="false" tabindex="-1">
                                            <span><i class="far fa-envelope"></i></span>
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-4_settings"
                                            role="tab" aria-selected="false" tabindex="-1">
                                            <span><i class="fas fa-cog"></i></span>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-9">
                                <!-- Tab panes -->
                                <div class="tab-content pt-3">
                                    <div class="tab-pane" id="demo-tab-4_home" role="tabpanel">
                                        <h6 class="mt-1 mb-3">Home</h6>
                                        <p class="mb-0">
                                            Welcome to our Admin! Here you can find information about our latest news,
                                            events, and updates. Stay tuned for blog posts and announcements. If you're new,
                                            we recommend checking out our About Us page to learn more about what we do and
                                            how we can help you. Feel free to explore and contact us if you have any
                                            questions!
                                        </p>
                                    </div>
                                    <div class="tab-pane active show" id="demo-tab-4_profile" role="tabpanel">
                                        <h6 class="mt-1 mb-3">Profile</h6>
                                        <p class="mb-0">
                                            Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member
                                            since 2020 and have actively participated in various forums and discussions.
                                            Your recent activities include posting in the tech forum and commenting on the
                                            latest industry trends. Update your profile picture, manage your personal
                                            information, or review your recent activity logs to stay on top of things.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="demo-tab-4_messages" role="tabpanel">
                                        <h6 class="mt-1 mb-3">Messages</h6>
                                        <p class="mb-0">
                                            You have 3 new messages in your inbox. Check them out to stay updated with the
                                            latest communications from your team and friends. Don’t forget to review your
                                            message threads for any important announcements or updates. If you need to send
                                            a new message or reply to existing conversations, use the messaging tools
                                            provided here.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="demo-tab-4_settings" role="tabpanel">
                                        <h6 class="mt-1 mb-3">Settings</h6>
                                        <p class="mb-0">
                                            Customize your account settings here. Update your email address, change your
                                            password, or adjust your notification preferences. You can also configure
                                            privacy settings to control who can see your information. Make sure to review
                                            your settings periodically to ensure everything is tailored to your needs and
                                            preferences.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex justify-content-between align-items-center gap-2">
                        <h5 class="card-title mb-0">Header Tabs</h5>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-5_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-5_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-5_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-5_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="demo-tab-5_home" role="tabpanel">
                                <h6 class="mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-5_profile" role="tabpanel">
                                <h6 class="mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-5_messages" role="tabpanel">
                                <h6 class="mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-5_settings" role="tabpanel">
                                <h6 class="mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Footer Tabs </h5>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="demo-tab-6_home" role="tabpanel">
                                <h6 class="mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-6_profile" role="tabpanel">
                                <h6 class="mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-6_messages" role="tabpanel">
                                <h6 class="mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-6_settings" role="tabpanel">
                                <h6 class="mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end align-items-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-6_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-6_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-6_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-6_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Custom Tabs </h5>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav gap-3 custom-verti-nav-pills nav-success text-center mb-4" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-61_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-home-4-line d-block fs-20 mb-1"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-61_profile"
                                    role="tab" aria-selected="true">
                                    <i class="ri-user-2-line d-block fs-20 mb-1"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-61_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-mail-line d-block fs-20 mb-1"></i>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-61_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-settings-line d-block fs-20 mb-1"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane" id="demo-tab-61_home" role="tabpanel">
                                <h6 class="mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-61_profile" role="tabpanel">
                                <h6 class="mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-61_messages" role="tabpanel">
                                <h6 class="mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-61_settings" role="tabpanel">
                                <h6 class="mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Custom Tabs</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use <code>nav-tabs-custom</code> class to create custom tabs with borders.
                        </p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-7_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-7_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-7_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-7_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-7_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-7_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-7_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-7_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Arrow Nav tabs</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted"> Use <strong>arrow navigation</strong> for tabs with the
                            <code>.arrow-navtabs</code> class to add arrows for easier tab switching.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills arrow-pills nav-justified nav-danger" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-8_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-8_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-8_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-8_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-8_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-8_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-8_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-8_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Custom Tabs Bordered </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create bordered tabs with smooth animations using the
                            <code>.nav-tabs-bordered</code> class. This class adds borders around each tab for a distinct
                            look.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs-bordered nav-justified" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-9_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-home"></i></span>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-9_profile"
                                    role="tab" aria-selected="true">
                                    <span><i class="far fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-9_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="far fa-envelope"></i></span>
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-9_settings" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <span><i class="fas fa-cog"></i></span>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-9_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-9_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-9_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-9_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12 col-lg-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Icon Tabs </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add icons to Bootstrap tabs by placing an <code>&lt;i&gt;</code> tag inside
                            the tab links. This enhances the look and improves navigation.</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs-bordered justify-content-end" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-10_home" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-home-4-line d-block fs-20 mb-1"></i>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-10_profile" role="tab"
                                    aria-selected="true">
                                    <i class="ri-user-2-line d-block fs-20 mb-1"></i>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-10_messages" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    <i class="ri-mail-line d-block fs-20 mb-1"></i>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-10_settings"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    <i class="ri-settings-line d-block fs-20 mb-1"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content pt-3">
                            <div class="tab-pane" id="demo-tab-10_home" role="tabpanel">
                                <h6 class="mt-1 mb-3">Home</h6>
                                <p class="mb-0">
                                    Welcome to our Admin! Here you can find information about our latest news, events, and
                                    updates. Stay tuned for blog posts and announcements. If you're new, we recommend
                                    checking out our About Us page to learn more about what we do and how we can help you.
                                    Feel free to explore and contact us if you have any questions!
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-10_profile" role="tabpanel">
                                <h6 class="mt-1 mb-3">Profile</h6>
                                <p class="mb-0">
                                    Hello, John Doe! Here’s a brief overview of your profile. You’ve been a member since
                                    2020 and have actively participated in various forums and discussions. Your recent
                                    activities include posting in the tech forum and commenting on the latest industry
                                    trends. Update your profile picture, manage your personal information, or review your
                                    recent activity logs to stay on top of things.
                                </p>
                            </div>
                            <div class="tab-pane" id="demo-tab-10_messages" role="tabpanel">
                                <h6 class="mt-1 mb-3">Messages</h6>
                                <p class="mb-0">
                                    You have 3 new messages in your inbox. Check them out to stay updated with the latest
                                    communications from your team and friends. Don’t forget to review your message threads
                                    for any important announcements or updates. If you need to send a new message or reply
                                    to existing conversations, use the messaging tools provided here.
                                </p>
                            </div>
                            <div class="tab-pane active show" id="demo-tab-10_settings" role="tabpanel">
                                <h6 class="mt-1 mb-3">Settings</h6>
                                <p class="mb-0">
                                    Customize your account settings here. Update your email address, change your password,
                                    or adjust your notification preferences. You can also configure privacy settings to
                                    control who can see your information. Make sure to review your settings periodically to
                                    ensure everything is tailored to your needs and preferences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')


    <script type="module" src="assets/js/app.js"></script>
@endsection
