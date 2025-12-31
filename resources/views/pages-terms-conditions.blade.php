@extends('partials.layouts.master')

@section('title', 'Blog Details | FabKin Admin & Dashboards Template')
@section('title-sub', 'Page')
@section('pagetitle', 'Terms & Condition')

@section('content')


    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Terms & Condition</h6>
                    </div>
                    <div class="card-body">
                        <p>Welcome to <span>[Your Company Name]</span> (“we,” “our,” “us”). By using our platform, services,
                            and any related tools or resources provided, you agree to comply with and be bound by the
                            following Terms and Conditions. Please read these terms carefully before accessing or using our
                            services.</p>
                        <h6 class="mb-1">User Accounts:</h6>
                        <ul class="list-group list-borderless mb-3">
                            <li class="list-group-item"> <span class="bullet me-2"></span>You must create an account to
                                access certain features within the admin panel.</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>You are responsible for
                                maintaining the confidentiality of your account credentials, including your username and
                                password.</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>You agree to notify us immediately
                                of any unauthorized use of your account.</li>
                        </ul>
                        <h6 class="mb-1">Content Management:</h6>
                        <ul class="list-group list-borderless mb-3">
                            <li class="list-group-item"> <span class="bullet me-2"></span>You are responsible for all
                                content you upload, manage, or distribute via the admin panel.</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>We reserve the right to monitor,
                                remove, or modify any content that violates these Terms or is deemed inappropriate,
                                offensive, or unlawful.</li>
                        </ul>
                        <h6 class="mb-1">Privacy and Data Security:</h6>
                        <ul class="list-group list-borderless mb-3">
                            <li class="list-group-item"> <span class="bullet me-2"></span>We collect and process your data
                                in accordance with our [Privacy Policy].</li>
                            <li class="list-group-item"> <span class="bullet me-2"></span>You are responsible for ensuring
                                that the data you manage and store through the admin panel complies with all applicable laws
                                and regulations.</li>
                        </ul>
                        <p class="text-muted"><span class="fw-semibold">Acceptance of Terms: </span>By accessing or using
                            our admin panel, you agree to these Terms and Conditions. If you do not agree to these terms,
                            you must not use the services.</p>
                        <p class="text-muted"><span class="fw-semibold">Eligibility: </span>You must be at least 18 years
                            old or the age of majority in your jurisdiction to use our admin panel and services. By using
                            this platform, you represent that you meet these age requirements.</p>
                        <p class="text-muted"><span class="fw-semibold">Termination: </span>We may suspend or terminate your
                            access to the admin panel at any time for violating these Terms or for any other reason at our
                            sole discretion. Upon termination, your account and any associated data may be deleted.</p>
                        <p class="text-muted"><span class="fw-semibold">Limitation of Liability: </span>To the fullest
                            extent permitted by law, [Your Company Name] will not be liable for any damages arising from the
                            use or inability to use the admin panel, including but not limited to data loss, interruptions,
                            or security breaches.</p>
                        <p class="text-muted"><span class="fw-semibold">Modifications: </span>We reserve the right to modify
                            these Terms and Conditions at any time. Any changes will be effective immediately upon posting
                            to this page, and your continued use of the admin panel will be deemed acceptance of those
                            changes.</p>
                        <p class="text-muted"><span class="fw-semibold">Governing Law: </span>These Terms and Conditions
                            shall be governed by and construed in accordance with the laws of [your country/state].</p>
                        <p class="text-muted"><span class="fw-semibold">Contact Us: </span>If you have any questions or
                            concerns about these Terms, please contact us at [your contact information].</p>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </main>
@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
