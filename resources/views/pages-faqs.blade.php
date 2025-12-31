@extends('partials.layouts.master')

@section('title', 'FAQs | FabKin Admin & Dashboards Template')
@section('title-sub', 'Pages')
@section('pagetitle', 'FAQs')
@section('content')


    <!-- begin::App -->
    <div id="layout-wrapper">

        <div class="card">
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="sticky-widgets">
                            <div class="form-icon">
                                <input type="email" class="form-control form-control-icon" id="inputExample26"
                                    placeholder="Search for ...">
                                <i class="bi bi-search"></i>
                            </div>
                            <ul class="mt-4 faqs-menu-list list-unstyled" id="faqsMenu">
                                <li>
                                    <a href="#gettingStartedFaqSection" class="active">Getting Started</a>
                                </li>
                                <li>
                                    <a href="#accountFaqSection">Account</a>
                                </li>
                                <li>
                                    <a href="#configurationFaqSection">Configuration</a>
                                </li>
                                <li>
                                    <a href="#processesFaqSection">Processes</a>
                                </li>
                                <li>
                                    <a href="#casesFaqSection">Cases</a>
                                </li>
                                <li>
                                    <a href="#employeeFaqSection">Employee</a>
                                </li>
                            </ul>
                            <div class="card bg-primary-subtle border-0">
                                <div class="card-body p-3 p-xl-5">
                                    <div class="avatar-lg fs-18 avatar-item text-primary bg-primary border-0 bg-opacity-20">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <h5 class="mt-3 mb-1">Still need a support?</h5>
                                    <p class="text-muted">Reach out to us anytime for assistance, we're here to help!</p>
                                    <div class="support-widgets-link">
                                        <a href="javascript:void(0)"><i class="bi bi-envelope me-1"></i>
                                            support@fabkin.com</a>
                                        <a href="javascript:void(0)"><i class="bi bi-telephone me-1"></i> +(415) 9874
                                            5621</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->
                    <div class="col-12 col-md-8 col-xl-9">
                        <div data-bs-spy="scroll" data-bs-target="#faqsMenu" data-bs-root-margin="0px 0px -10%"
                            data-bs-smooth-scroll="true">
                            <div id="gettingStartedFaqSection">
                                <h5 class="mb-3">Getting Started:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="gettingStartedFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq1"
                                                aria-expanded="true" aria-controls="gettingStartedFaq1">
                                                How do I sign up for an account?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                To sign up, visit the registration page, fill in your details such as name,
                                                email, and password, and click "Sign Up." You'll receive a confirmation
                                                email to verify your account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq2"
                                                aria-expanded="false" aria-controls="gettingStartedFaq2">
                                                What information is required to create an account?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                To create an account, you'll need to provide your full name, email address,
                                                and create a secure password. You may also need to verify your email
                                                address.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq3"
                                                aria-expanded="false" aria-controls="gettingStartedFaq3">
                                                How do I activate my account?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                After signing up, you'll receive a confirmation email. Click on the
                                                verification link in that email to activate your account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq4"
                                                aria-expanded="false" aria-controls="gettingStartedFaq4">
                                                What should I do if I don’t receive the confirmation email?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                Check your spam/junk folder. If you still don't receive the email, try
                                                resending the confirmation link from the login page or contact support.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq5"
                                                aria-expanded="false" aria-controls="gettingStartedFaq5">
                                                Can I use social media to sign up?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                Yes, you can sign up using your Google or Facebook account by selecting the
                                                respective option during registration.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq6"
                                                aria-expanded="false" aria-controls="gettingStartedFaq6">
                                                How do I get started once my account is activated?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                After logging in, you’ll be directed to your dashboard, where you can start
                                                exploring the platform, set up your profile, and customize your preferences.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq7"
                                                aria-expanded="false" aria-controls="gettingStartedFaq7">
                                                Is there a tutorial or guide for new users?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                Yes, once you log in, you’ll be provided with an introductory tutorial that
                                                explains how to use the platform's key features.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#gettingStartedFaq8"
                                                aria-expanded="false" aria-controls="gettingStartedFaq8">
                                                How do I change my language or region settings?
                                            </button>
                                        </h2>
                                        <div id="gettingStartedFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#gettingStartedFaq">
                                            <div class="accordion-body">
                                                Go to your account settings, where you can change the language and region
                                                preferences under the "Preferences" tab.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="accountFaqSection" class="mt-4">
                                <h5 class="mb-3">Account:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="accountFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq1"
                                                aria-expanded="true" aria-controls="accountFaq1">
                                                How can I reset my password?
                                            </button>
                                        </h2>
                                        <div id="accountFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                Go to the login page and click on "Forgot Password." Enter your registered
                                                email address, and we’ll send you a link to reset your password.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq2"
                                                aria-expanded="false" aria-controls="accountFaq2">
                                                How can I change my email address?
                                            </button>
                                        </h2>
                                        <div id="accountFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                To change your email, go to the account settings, enter your new email, and
                                                verify the change through a confirmation email sent to the new address.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq3"
                                                aria-expanded="false" aria-controls="accountFaq3">
                                                Can I delete my account?
                                            </button>
                                        </h2>
                                        <div id="accountFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                Yes, you can request account deletion by contacting our support team. Once
                                                deleted, your data cannot be recovered.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq4"
                                                aria-expanded="false" aria-controls="accountFaq4">
                                                How do I update my account information?
                                            </button>
                                        </h2>
                                        <div id="accountFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                To update your details, go to your profile page and click on "Edit Profile"
                                                to change your name, email, password, or other personal information.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq5"
                                                aria-expanded="false" aria-controls="accountFaq5">
                                                How do I verify my email address?
                                            </button>
                                        </h2>
                                        <div id="accountFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                You’ll receive a verification email after registering. Click on the
                                                verification link to confirm your email address.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq6"
                                                aria-expanded="false" aria-controls="accountFaq6">
                                                Can I have multiple accounts?
                                            </button>
                                        </h2>
                                        <div id="accountFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                We recommend using only one account per person. If you need multiple
                                                accounts, please contact support for assistance.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq7"
                                                aria-expanded="false" aria-controls="accountFaq7">
                                                How do I deactivate my account temporarily?
                                            </button>
                                        </h2>
                                        <div id="accountFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                Temporarily deactivate your account by contacting customer support. We can
                                                help you suspend your account while keeping your data intact.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#accountFaq8"
                                                aria-expanded="false" aria-controls="accountFaq8">
                                                How can I link my account with other services?
                                            </button>
                                        </h2>
                                        <div id="accountFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#accountFaq">
                                            <div class="accordion-body">
                                                You can link your account to other services like Google or LinkedIn by going
                                                to the "Integrations" section in the settings.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="configurationFaqSection" class="mt-4">
                                <h5 class="mb-3">Configuration:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="configurationFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq1"
                                                aria-expanded="true" aria-controls="configurationFaq1">
                                                How do I configure system settings?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                Log in to your account, go to the "Settings" section, and adjust settings
                                                such as language, time zone, and privacy preferences according to your
                                                needs.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq2"
                                                aria-expanded="false" aria-controls="configurationFaq2">
                                                How do I change my display preferences?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                Under the "Display Settings" section, you can modify themes, fonts, layout,
                                                and other visual preferences for your account interface.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq3"
                                                aria-expanded="false" aria-controls="configurationFaq3">
                                                Can I integrate with other tools or systems?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                Yes, you can integrate with third-party tools such as CRM, email marketing,
                                                or project management systems. Go to "Integrations" in settings and follow
                                                the instructions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq4"
                                                aria-expanded="false" aria-controls="configurationFaq4">
                                                How do I set up automatic data backups?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                To ensure your data is backed up regularly, go to "Backup Settings," enable
                                                the auto-backup option, and specify the frequency (daily, weekly, etc.).
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq5"
                                                aria-expanded="false" aria-controls="configurationFaq5">
                                                How do I set user roles and permissions?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                In the "Roles & Permissions" section, create and assign different roles
                                                (e.g., Admin, Manager, User) with specific permissions to control access to
                                                various features.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq6"
                                                aria-expanded="false" aria-controls="configurationFaq6">
                                                Can I configure multiple workspaces?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                Yes, you can create multiple workspaces for different teams or projects by
                                                going to "Workspace Management" under settings and following the prompts.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq7"
                                                aria-expanded="false" aria-controls="configurationFaq7">
                                                How do I manage notifications for specific activities?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                In the "Notification Settings" area, you can configure which activities
                                                trigger notifications, such as task assignments, updates, or reminders.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#configurationFaq8"
                                                aria-expanded="false" aria-controls="configurationFaq8">
                                                How do I set up payment methods for subscriptions?
                                            </button>
                                        </h2>
                                        <div id="configurationFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#configurationFaq">
                                            <div class="accordion-body">
                                                Under the "Payment Settings" section, you can add or update your credit
                                                card, PayPal, or other payment methods for smooth subscription payments.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="processesFaqSection" class="mt-4">
                                <h5 class="mb-3">Processes:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="processesFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq1"
                                                aria-expanded="true" aria-controls="processesFaq1">
                                                How do I create a new workflow?
                                            </button>
                                        </h2>
                                        <div id="processesFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                Go to the "Workflows" section, click "Create New Workflow," and define the
                                                steps, triggers, and conditions for your process.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq2"
                                                aria-expanded="false" aria-controls="processesFaq2">
                                                How do I automate tasks in my process?
                                            </button>
                                        </h2>
                                        <div id="processesFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                In the "Automation" section, you can set up rules to trigger automatic
                                                actions, such as sending notifications, moving tasks, or updating statuses.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq3"
                                                aria-expanded="false" aria-controls="processesFaq3">
                                                Can I track the progress of ongoing processes?
                                            </button>
                                        </h2>
                                        <div id="processesFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                Yes, the system provides a dashboard to track process completion, stages,
                                                and any pending actions for all ongoing workflows.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq4"
                                                aria-expanded="false" aria-controls="processesFaq4">
                                                How do I update or modify a running process?
                                            </button>
                                        </h2>
                                        <div id="processesFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                Go to the "Process Management" area, select the active process, and make
                                                changes to the steps or conditions. Ensure to save your updates.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq5"
                                                aria-expanded="false" aria-controls="processesFaq5">
                                                How do I handle process failures?
                                            </button>
                                        </h2>
                                        <div id="processesFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                If a process fails, the system will notify you. You can review the error
                                                logs and retry or adjust the process as needed to resolve the issue.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq6"
                                                aria-expanded="false" aria-controls="processesFaq6">
                                                Can I set up approval processes for specific tasks?
                                            </button>
                                        </h2>
                                        <div id="processesFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                Yes, in the "Approval Workflow" section, you can create approval stages for
                                                tasks or documents that need review before proceeding.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq7"
                                                aria-expanded="false" aria-controls="processesFaq7">
                                                How do I assign tasks within a process?
                                            </button>
                                        </h2>
                                        <div id="processesFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                You can assign tasks by selecting the "Assign" option in the process editor
                                                and choosing team members or roles responsible for each task.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#processesFaq8"
                                                aria-expanded="false" aria-controls="processesFaq8">
                                                How do I monitor the efficiency of my processes?
                                            </button>
                                        </h2>
                                        <div id="processesFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#processesFaq">
                                            <div class="accordion-body">
                                                Use the analytics tools available in the "Reports" section to track KPIs,
                                                completion rates, and bottlenecks within your processes.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="casesFaqSection" class="mt-4">
                                <h5 class="mb-3">Cases:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="casesFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq1"
                                                aria-expanded="true" aria-controls="casesFaq1">
                                                How do I create a new case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                To create a new case, go to the "Cases" section, click "New Case," and fill
                                                in the details such as case type, description, and priority.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq2"
                                                aria-expanded="false" aria-controls="casesFaq2">
                                                How do I assign cases to team members?
                                            </button>
                                        </h2>
                                        <div id="casesFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                After creating a case, you can assign it to team members by selecting their
                                                names from the "Assign" dropdown menu within the case details.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq3"
                                                aria-expanded="false" aria-controls="casesFaq3">
                                                How can I track the status of a case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                Each case has a status field (e.g., Open, In Progress, Closed). You can
                                                update the status as the case progresses, and track it from your dashboard.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq4"
                                                aria-expanded="false" aria-controls="casesFaq4">
                                                Can I link a case to a project or process?
                                            </button>
                                        </h2>
                                        <div id="casesFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                Yes, cases can be linked to specific projects or workflows. In the case
                                                details, select the related project or process from the "Link" option.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq5"
                                                aria-expanded="false" aria-controls="casesFaq5">
                                                How do I resolve a case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                Once the issue is resolved, change the case status to "Closed" and add any
                                                final notes or solutions to the case details before completing it.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq6"
                                                aria-expanded="false" aria-controls="casesFaq6">
                                                How do I escalate a case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                If a case requires immediate attention, you can escalate it by changing its
                                                priority level and notifying a manager or senior team member for action.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq7"
                                                aria-expanded="false" aria-controls="casesFaq7">
                                                Can I add documents or attachments to a case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                Yes, you can attach relevant documents or files to a case by selecting the
                                                "Attach File" option within the case interface.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#casesFaq8"
                                                aria-expanded="false" aria-controls="casesFaq8">
                                                How do I generate a report for a case?
                                            </button>
                                        </h2>
                                        <div id="casesFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#casesFaq">
                                            <div class="accordion-body">
                                                Go to the "Reports" section, select the "Case Report," and filter based on
                                                case types, status, or date range to generate detailed case reports.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="employeeFaqSection" class="mt-4">
                                <h5 class="mb-3">Employee:</h5>
                                <div class="accordion accordion-primary accordion-border-box" id="employeeFaq">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq1"
                                                aria-expanded="true" aria-controls="employeeFaq1">
                                                How do I add a new employee to the system?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq1" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                Go to the "Employee Management" section, click "Add Employee," and fill in
                                                the necessary details such as name, job title, and contact information.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq2"
                                                aria-expanded="false" aria-controls="employeeFaq2">
                                                Can I assign roles and permissions to employees?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq2" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                Yes, you can assign specific roles and permissions from the "Roles &
                                                Permissions" section, adjusting access levels for each employee.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq3"
                                                aria-expanded="false" aria-controls="employeeFaq3">
                                                How can I view employee performance reports?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq3" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                Performance reports are available under the "Employee Reports" section,
                                                where you can filter by date, department, or specific performance metrics.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq4"
                                                aria-expanded="false" aria-controls="employeeFaq4">
                                                How do I update an employee's information?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq4" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                Go to the "Employee Management" section, select the employee whose details
                                                you wish to edit, and update their personal or professional information.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq5"
                                                aria-expanded="false" aria-controls="employeeFaq5">
                                                How do I track employee attendance?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq5" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                You can track attendance in the "Time & Attendance" section, where you can
                                                view clock-in/out times, leave requests, and overtime hours.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq6"
                                                aria-expanded="false" aria-controls="employeeFaq6">
                                                How do I onboard a new employee?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq6" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                For onboarding, go to the "Onboarding" section, assign the necessary
                                                training materials, and monitor their progress through tasks and
                                                evaluations.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq7"
                                                aria-expanded="false" aria-controls="employeeFaq7">
                                                Can I create employee schedules?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq7" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                Yes, you can create work schedules for employees in the "Scheduling"
                                                section, assigning shifts and hours for each employee.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#employeeFaq8"
                                                aria-expanded="false" aria-controls="employeeFaq8">
                                                How can I terminate or deactivate an employee’s account?
                                            </button>
                                        </h2>
                                        <div id="employeeFaq8" class="accordion-collapse collapse"
                                            data-bs-parent="#employeeFaq">
                                            <div class="accordion-body">
                                                To deactivate an employee, go to "Employee Management," select the employee,
                                                and choose the option to terminate or deactivate their account.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End col-->
                </div><!--End row-->
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
