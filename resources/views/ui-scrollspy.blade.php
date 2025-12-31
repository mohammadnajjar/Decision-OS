@extends('partials.layouts.master')

@section('title', 'UI Scrollspy | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Scrollspy')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Navbar Scrollspy </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <nav class="navbar bg-light-subtle px-3 mb-3" id="navbar-example2">
                            <a class="navbar-brand" href="javascript:void(0)">
                                <img src="assets/images/logo-dark.png" height="24" alt="logo">
                            </a>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#scrollspyHeading1">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#scrollspyHeading2">Benefits</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0)"
                                        role="button" aria-expanded="false">Explore More</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#scrollspyHeading3">User Experience</a></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Success Stories</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Get Started</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="card card-body max-h-384px overflow-auto" data-bs-spy="scroll"
                            data-bs-target="#navbar-example2" data-bs-offset="8">
                            <h4 id="scrollspyHeading1">Features</h4>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the
                                page, the appropriate navigation link is highlighted. It's repeated throughout the component
                                example. We keep adding some more example copy here to emphasize the scrolling and
                                highlighting.</p>
                            <h4 id="scrollspyHeading2">Benefits</h4>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the
                                page, the appropriate navigation link is highlighted. It's repeated throughout the component
                                example. We keep adding some more example copy here to emphasize the scrolling and
                                highlighting.</p>
                            <h4 id="scrollspyHeading3">User Experience</h4>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the
                                page, the appropriate navigation link is highlighted. It's repeated throughout the component
                                example. We keep adding some more example copy here to emphasize the scrolling and
                                highlighting.</p>
                            <h4 id="scrollspyHeading4">Success Stories</h4>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the
                                page, the appropriate navigation link is highlighted. It's repeated throughout the component
                                example. We keep adding some more example copy here to emphasize the scrolling and
                                highlighting.</p>
                            <h4 id="scrollspyHeading5">Get Started</h4>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                            <p class="mb-0">This is some placeholder content for the scrollspy page. Note that as you
                                scroll down the page, the appropriate navigation link is highlighted. It's repeated
                                throughout the component example. We keep adding some more example copy here to emphasize
                                the scrolling and highlighting.</p>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Nested Scrollspy </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <div class="row gy-4">
                            <div class="col-xxl-3">
                                <nav id="navbar-examplenested" class="h-100 d-flex bg-light-subtle p-4 rounded flex-column">
                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link fs-16" href="#item-1">Experience</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-1-1">Web Development</a>
                                            <a class="nav-link ms-3 my-1" href="#item-1-2">Cyber Security</a>
                                        </nav>
                                        <a class="nav-link f-16 txt-dark" href="#item-2">Get in Touch</a>
                                        <a class="nav-link f-16 txt-dark" href="#item-3">Projects</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-3-1">Group Projects</a>
                                            <a class="nav-link ms-3 my-1" href="#item-3-2">Individual Projects</a>
                                        </nav>
                                    </nav>
                                </nav>
                            </div>
                            <!-- end col -->
                            <div class="col-xxl-9">
                                <div data-bs-spy="scroll" data-bs-target="#navbar-examplenested" data-bs-offset="0"
                                    class="scrollspy-example-2 overflow-auto h-320px">
                                    <div id="item-1">
                                        <h6 class="fs-18">Experience</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <p>Welcome to my experience section! Here, you'll find insights into my
                                                professional journey. As you scroll, the navigation links will dynamically
                                                highlight the corresponding sections. This feature enhances the user
                                                experience by providing clear navigation cues.</p>
                                        </div>
                                    </div>
                                    <div id="item-1-1">
                                        <h6>Experience / Web Development</h6>
                                        <p>
                                            In the field of web development, I've honed my skills to create dynamic and
                                            responsive websites. This section offers detailed insights into the technologies
                                            and methodologies I've employed. As you scroll, you'll notice the navigation
                                            reflecting your position on the page, ensuring easy access to relevant
                                            information.
                                        </p>
                                    </div>
                                    <div id="item-1-2">
                                        <h6>Experience / Cyber Security</h6>
                                        <p>
                                            Cyber security is vital in today’s digital landscape. This section provides an
                                            overview of my experiences and the strategies I implement to safeguard
                                            information. Remember, the scrollspy feature helps highlight the active section
                                            as you navigate, making it easier to track your reading.
                                        </p>
                                        <p>Overall, effectively utilizing Scrollspy can enhance user engagement, making for
                                            a seamless browsing experience on your website.</p>
                                    </div>
                                    <div id="item-2">
                                        <h6 class="fs-18">Get in Touch</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <p>
                                                I welcome your inquiries! This section outlines how you can connect with me.
                                                As you navigate, the scrollspy will indicate your position, ensuring you can
                                                find the contact information easily. Good organization and clarity in layout
                                                contribute significantly to usability.
                                            </p>
                                            <p>Utilizing Scrollspy effectively can lead to a better user experience and
                                                improved navigation across your site.</p>
                                        </div>
                                    </div>
                                    <div id="item-3">
                                        <h6 class="fs-18">Projects</h6>
                                        <div class="common-align gap-lg-3 gap-1">
                                            <p>Here, you’ll find a selection of my projects. The scrolling functionality
                                                allows you to explore various works easily, with the navigation highlighting
                                                the relevant sections.</p>
                                        </div>
                                    </div>
                                    <div id="item-3-1">
                                        <h6>Projects / Group Projects</h6>
                                        <p>
                                            Collaboration is key in group projects. In this section, I highlight the various
                                            team efforts I’ve participated in. As you scroll, keep an eye on the navigation
                                            to see which project you’re viewing.
                                        </p>
                                    </div>
                                    <div id="item-3-2">
                                        <h6>Projects / Individual Projects</h6>
                                        <p>
                                            My individual projects reflect my personal approach and creativity. This section
                                            showcases my solo endeavors. Remember, the scrollspy feature will keep you
                                            oriented as you explore these works.
                                        </p>
                                        <p class="mb-0">In conclusion, effective use of Scrollspy can significantly
                                            enhance the navigation and overall user experience of your website.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> List Group Scrollspy </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: List Group Scrollspy -->
                        <div class="row gy-4">
                            <div class="col-xxl-3">
                                <div id="list-example" class="list-group">
                                    <a class="list-group-item list-group-item-action" href="#list-item-1"><i
                                            class="ri-code-line"></i> Web Development</a>
                                    <a class="list-group-item list-group-item-action active" href="#list-item-2"><i
                                            class="ri-smartphone-line"></i> Mobile Development</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-3"><i
                                            class="ri-server-line"></i> Backend Development</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-4"><i
                                            class="ri-brush-line"></i> UI/UX Design</a>
                                </div>
                            </div>
                            <div class="col-xxl-9">
                                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                                    class="fs-14 mt-0 overflow-auto h-200px">
                                    <div>
                                        <h5 class="mb-3" id="list-item-1">Web Development</h5>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">HTML:</span> The
                                            standard markup language for creating web pages.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">CSS:</span> A style
                                            sheet language used for describing the presentation of a document written in
                                            HTML.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">JavaScript:</span> A
                                            programming language that enables interactive web pages.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">Frameworks:</span>
                                            Popular frameworks like React, Angular, and Vue.js enhance development
                                            efficiency.</p>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="mb-3" id="list-item-2">Mobile Development</h5>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">iOS
                                                Development:</span> Uses Swift or Objective-C to build applications for
                                            Apple devices.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">Android
                                                Development:</span> Involves Java or Kotlin for creating apps on the Android
                                            platform.</p>
                                        <p class="mb-2 ms-3"><span
                                                class="text-body fw-semibold me-2">Cross-Platform:</span> Tools like
                                            Flutter and React Native allow for development on multiple platforms.</p>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="mb-3" id="list-item-3">Backend Development</h5>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">Node.js:</span> A
                                            JavaScript runtime built on Chrome's V8 JavaScript engine for server-side
                                            development.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">Databases:</span>
                                            Understanding SQL and NoSQL databases (e.g., MySQL, MongoDB) is essential.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">APIs:</span> RESTful
                                            APIs and GraphQL are key for enabling communication between frontend and
                                            backend.</p>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="mb-3" id="list-item-4">UI/UX Design</h5>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">User Interface
                                                Design:</span> Focuses on designing the visual layout of applications.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">User
                                                Experience:</span> Enhances the overall experience users have when
                                            interacting with a product.</p>
                                        <p class="mb-2 ms-3"><span class="text-body fw-semibold me-2">Prototyping
                                                Tools:</span> Tools like Figma and Adobe XD are essential for creating
                                            design prototypes.</p>
                                    </div>
                                </div>
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
