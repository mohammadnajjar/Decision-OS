@extends('partials.layouts.master')

@section('title', 'UI Cookies | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Cookies')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">


        <div class="row">

            <div class="col-12">
                <div class="card min-h-300px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Simple Cookie Alert Example </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Creates a simple notification for users about cookie usage, ensuring
                            compliance with cookie laws while maintaining a user-friendly experience.</p>
                        <div class="position-absolute bottom-0 end-0 w-100">
                            <div
                                class="d-flex align-items-center rounded p-3 border border-primary-subtle bg-primary-subtle mx-4 mb-4">
                                <i class="ri-error-warning-line lh-1 fs-20 text-primary me-2"></i>
                                <div class="fs-6">
                                    The cookie alert element can include all of Bootstrap 5 classes, along with our own
                                    extended Boostrap 5 CSS classes to make it look and feel exactly as required.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookie Notification Example </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This cookie notification creates a user-friendly alert about cookie
                            usage, informing visitors while allowing them to customize their preferences or agree to the
                            policy. It enhances user experience without interrupting site navigation.</p>
                        <div class="position-absolute bottom-0 end-0 w-100 max-w-384px">
                            <div class="card border card-body mx-6">
                                <span class="card-title h5 fw-semibold mb-3">🍪 Cookie Notification</span>
                                <p class="card-text">To provide you with the best browsing experience, we use cookies on our
                                    website. <a href="javascript:void(0)">Learn more about our cookie policy</a>.</p>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <a href="javascript:void(0)" class="link-dark">
                                        Customize your preferences
                                    </a>
                                    <button class="btn btn-dark">
                                        Agree
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookie Usage Notification </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This cookie usage notification provides a clear message to users about
                            cookie usage, ensuring they have the best experience on the website. It includes a link to learn
                            more and a prominent button to acknowledge the message.</p>
                        <div class="position-absolute bottom-0 end-0 w-100 max-w-384px">
                            <div class="card card-body text-bg-dark mx-6">
                                <p class="card-text mb-2">This website uses cookies to ensure you get the best experience on
                                    our website.</p>
                                <a href="javascript:void(0)"
                                    class="text-decoration-underline mb-5 link-light link-offset-1 link-opacity-75-hover">Learn
                                    more</a>
                                <div class="d-flex align-items-center justify-content-between gap-2">
                                    <button class="btn btn-warning w-full">
                                        Got it!
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookies Consent Message </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This example presents a cookies consent message that informs users about
                            the website's use of cookies to enhance their browsing experience. It includes a clear message,
                            a link for more information, and buttons for users to accept or decline cookie usage.</p>
                        <div class="position-absolute bottom-0 end-0 w-100 max-w-384px">
                            <div class="card border card-body mx-6">
                                <span class="card-title h5 fw-semibold mb-3">🍪 Cookies Consent</span>
                                <p class="card-text mb-2">This website use cookies to help you have a superior and more
                                    relevant browsing experience on the website.</p>
                                <a href="javascript:void(0)"
                                    class="text-decoration-underline mb-5 link-primary link-offset-1 link-opacity-75-hover">Read
                                    more</a>
                                <div class="d-flex align-items-center justify-content-between gap-5">
                                    <button class="btn btn-primary w-100">
                                        Accept
                                    </button>
                                    <button class="btn btn-outline-primary w-100">
                                        Decline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookie Usage Box </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This cookie notification informs users about cookie usage for
                            personalization, social media, and analytics. Users can accept or decline for transparency and
                            choice.</p>
                        <div class="position-absolute bottom-0 end-0 w-100">
                            <div class="card border card-body mx-6">
                                <h5 class="card-title mb-3 text-uppercase fw-semibold">THIS WEBSITE USES COOKIES</h5>
                                <p class="mb-3">
                                    We use cookies to personalize content and ads, to provide social media features and to
                                    analyze our traffic. We also share information about your use of our site with our
                                    social media, advertising and analytics partners who may combine it collected from your
                                    use of their services.
                                </p>
                                <div class="d-flex align-items-center gap-5 mt-5">
                                    <button class="btn btn-primary rounded-0 w-144px">
                                        Accept
                                    </button>
                                    <button class="btn btn-outline-primary rounded-0 w-144px">
                                        Decline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookie Policy Reminder </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This example presents a cookie policy reminder that notifies users about
                            the use of cookies on the website. It offers a short message with a link to the cookie policy
                            for more details. Users can confirm their acknowledgment by clicking the "Okay" button,
                            promoting transparency while ensuring a smooth browsing experience.</p>
                        <div class="position-absolute bottom-0 end-0 w-100">
                            <div class="card card-body text-bg-dark rounded-0 mx-6">
                                <div class="d-flex align-items-center gap-2 justify-content-between flex-wrap">
                                    <p class="d-flex align-items-center gap-1 flex-wrap m-0"><span class="fs-20">🍪</span>
                                        We are using Cookies! For more information visit this page<a
                                            href="javascript:void(0)"
                                            class="text-decoration-underline link-primary link-offset-2 link-opacity-75-hover">Cookie
                                            policy.</a></p>
                                    <button class="btn btn-sm btn-light rounded-0">
                                        Okay
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>
            <div class="col-12">
                <div class="card min-h-500px">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Cookie Experience Notification </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">This example features a cookie experience notification that informs users
                            about the use of cookies to personalize their experience on the website. It includes a brief
                            message and a link to the cookie policy for further details. Users can accept the notification
                            by clicking the "Accept" button, fostering transparency while enhancing user engagement.</p>
                        <div class="position-absolute bottom-0 end-0 w-100 d-flex justify-content-center">
                            <div class="card card-body text-bg-dark fs-12 p-4 mx-6 max-w-620px">
                                <div class="d-flex align-items-center gap-2 justify-content-between">
                                    <p class="m-0">
                                        MyApp uses cookies to personalize your experience on our website. By continuing to
                                        use this site, you agree to our
                                        <a href="javascript:void(0)"
                                            class="text-decoration-underline link-primary link-offset-2 link-opacity-75-hover">Cookie
                                            policy</a>.
                                    </p>
                                    <button class="btn btn-sm btn-light">
                                        Accept
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::card-->
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')
    <script type="module" src="assets/js/app.js"></script>
@endsection
