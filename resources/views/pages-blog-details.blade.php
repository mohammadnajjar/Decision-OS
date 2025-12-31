@extends('partials.layouts.master')

@section('title', 'Page | FabKin Admin & Dashboards Template')

@section('title-sub', 'Page')
@section('pagetitle', 'Blog Details')
@section('content')

    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="position-relative">
                            <img src="assets/images/small/img-2.jpg"
                                class="img-fluid w-full h-320px object-fit-cover overflow-hidden rounded-3" alt="Image">
                            <div class="position-absolute top-0 start-0 mt-4 ms-4 cursor-pointer">
                                <span class="badge bg-secondary" data-bs-custom-class="tooltip-white"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Like"><i
                                        class="bi bi-hand-thumbs-up me-1"></i>Like</span>
                                <span class="badge bg-primary" data-bs-custom-class="tooltip-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Share"><i
                                        class="bi bi-share me-1"></i>Share</span>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="d-flex justify-content-between align-items-center mb-6">
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill shadow">
                                    <div>
                                        <h6 class="mb-0 fs-16">Karen Carter</h6>
                                        <p class="text-muted mb-0 fs-12">1 day ago</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-0 fs-12 gap-4">
                                    <div>
                                        <i class="ri-time-line fs-14"></i>
                                        <span class="ps-1">Mar 2, 2024</span>
                                    </div>
                                    <div>
                                        <i class="ri-eye-line fs-14"></i>
                                        <span class="ps-1">62</span>
                                    </div>
                                    <div>
                                        <i class="bi bi-chat-dots fs-14"></i>
                                        <span class="ps-1">15</span>
                                    </div>
                                </div>
                            </div>

                            <!-- <h4 class="text-truncate mb-3">The Evolution of Minimalism in Design</h4> -->
                            <p class="mb-4 text-muted fs-15">
                                Minimalism is a design philosophy that emphasizes simplicity, clarity, and efficiency. It
                                removes unnecessary elements and focuses on core functions, making it one of the most
                                influential styles in modern design.
                            </p>

                            <h5 class="mb-3">A Brief History of Minimalism</h5>
                            <p class="mb-4 text-muted fs-15">
                                The minimalist movement has its roots in the early 20th century, heavily influenced by the
                                Bauhaus school of design. Over the decades, it has evolved into a mainstream approach across
                                various disciplines, from architecture to web design.
                            </p>

                            <ul class="list-group-numbered mb-5 ps-0">
                                <li class="list-group-item mb-2"><strong class="text-body">1920s-1950s:</strong> The Bauhaus
                                    movement introduced functional simplicity.</li>
                                <li class="list-group-item mb-2"><strong class="text-body">1960s-1980s:</strong> Artists and
                                    architects embraced minimalism as a formal aesthetic.</li>
                                <li class="list-group-item mb-2"><strong class="text-body">1990s-Present:</strong> Tech
                                    companies like Apple popularized minimalist UI/UX design.</li>
                            </ul>

                            <h5 class="mb-3">Why Minimalism is Still Relevant</h5>
                            <p class="mb-4 text-muted fs-15">
                                The principles of minimalism remain significant in today's digital world. Websites and
                                applications use minimalist design for better user experience, increased speed, and improved
                                accessibility. A minimalist approach enhances clarity and readability by removing
                                unnecessary elements, allowing users to focus on what truly matters. This design philosophy
                                is particularly beneficial for mobile applications, where screen space is limited, and
                                efficiency is key.
                            </p>

                            <p class="mb-5 text-muted fs-15">
                                Minimalist design is not just about aesthetics; it is about creating meaningful and
                                user-friendly experiences. It focuses on:
                            </p>

                            <ul class="list-group-numbered mb-8 ps-0">
                                <li class="list-group-item mb-2"><strong class="text-body">Clarity:</strong> Eliminating
                                    distractions and unnecessary elements.</li>
                                <li class="list-group-item mb-2"><strong class="text-body">Efficiency:</strong> Faster load
                                    times and better responsiveness.</li>
                                <li class="list-group-item mb-2"><strong class="text-body">Focus:</strong> Highlighting the
                                    most important aspects of the design.</li>
                            </ul>

                            <div
                                class="p-5 border-start border-4 shadow-sm w-full text-muted rounded-2 text-center position-relative">
                                <i
                                    class="bi bi-quote fs-20 position-absolute top-0 start-0 fs-55 text-opacity-30 mt-n10"></i>
                                <p class="mb-1 fw-semibold fs-15">
                                    “When you give joy to other people, you get more joy in return. You should give a good
                                    thought to the happiness that you can give out.”
                                </p>
                                <i class="text-opacity-70 fs-12">— Norman Vincent Peale</i>
                            </div>

                            <h5 class="mt-5 mb-3">Conclusion</h5>
                            <p class="mb-4 text-muted fs-15">
                                Minimalism in design continues to evolve, shaping the way we interact with technology and
                                art. As the world becomes more digital, the need for clarity and simplicity grows stronger.
                                Whether in branding, architecture, or digital experiences, minimalism remains a guiding
                                principle for innovation and functionality.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Comments</h6>
                    </div>
                    <div class="card-body">
                        <div class="px-5 mx-n5" data-simplebar style="height: 380px;">
                            <div class="p-5 bg-light-subtle rounded-2 mb-4">
                                <div class="d-flex flex-wrap gap-4">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h5 class="mb-1 mt-1">Don Russell</h5>
                                        <p class="fs-12 mb-0 text-muted">Jan 21, 2024 at 11:25 pm</p>
                                        <p class="mt-2 mb-5 fw-medium fs-15">Huwso jewzehgu julriw niwgazep lewbob isujirmuz
                                            hemto pahop cewa zuhucze rinitba etdebluj. Obdevo bo fa siztes laobeir agoemugo
                                            rut sapaviw mulati do re dabelul wo tumnik wih mu.</p>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-light-secondary btn-sm rounded-2">Reply<i
                                                    class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                                            <button type="button" class="btn btn-light-primary btn-sm rounded-2">Like<i
                                                    class="bi bi-heart ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-light-subtle rounded-2 mb-4 ms-5 ms-md-20">
                                <div class="d-flex flex-wrap gap-4">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h5 class="mb-1 mt-1">Don Russell</h5>
                                        <p class="fs-12 mb-0 text-muted">Jan 21, 2024 at 11:25 pm</p>
                                        <p class="mt-2 mb-5 fw-medium fs-15">Huwso jewzehgu julriw niwgazep lewbob isujirmuz
                                            hemto pahop cewa zuhucze rinitba etdebluj. Obdevo bo fa siztes laobeir agoemugo
                                            rut sapaviw mulati do re dabelul wo tumnik wih mu.</p>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="btn btn-light-secondary btn-sm rounded-2">Reply<i
                                                    class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                                            <button type="button" class="btn btn-light-primary btn-sm rounded-2">Like<i
                                                    class="bi bi-heart ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-light-subtle rounded-2 mb-4">
                                <div class="d-flex flex-wrap gap-4">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h5 class="mb-1 mt-1">Don Russell</h5>
                                        <p class="fs-12 mb-0 text-muted">Jan 21, 2024 at 11:25 pm</p>
                                        <p class="mt-2 mb-5 fw-medium fs-15">Huwso jewzehgu julriw niwgazep lewbob
                                            isujirmuz hemto pahop cewa zuhucze rinitba etdebluj. Obdevo bo fa siztes laobeir
                                            agoemugo rut sapaviw mulati do re dabelul wo tumnik wih mu.</p>
                                        <div class="d-flex gap-2">
                                            <button type="button"
                                                class="btn btn-light-secondary btn-sm rounded-2">Reply<i
                                                    class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                                            <button type="button" class="btn btn-light-primary btn-sm rounded-2">Like<i
                                                    class="bi bi-heart ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-light-subtle rounded-2 ms-5 ms-md-20">
                                <div class="d-flex flex-wrap gap-4">
                                    <img src="assets/images/avatar/avatar-3.jpg" alt="Avatar Image"
                                        class="avatar-lg rounded-pill">
                                    <div>
                                        <h5 class="mb-1 mt-1">Don Russell</h5>
                                        <p class="fs-12 mb-0 text-muted">Jan 21, 2024 at 11:25 pm</p>
                                        <p class="mt-2 mb-5 fw-medium fs-15">Huwso jewzehgu julriw niwgazep lewbob
                                            isujirmuz hemto pahop cewa zuhucze rinitba etdebluj. Obdevo bo fa siztes laobeir
                                            agoemugo rut sapaviw mulati do re dabelul wo tumnik wih mu.</p>
                                        <div class="d-flex gap-2">
                                            <button type="button"
                                                class="btn btn-light-secondary btn-sm rounded-2">Reply<i
                                                    class="bi bi-reply-all-fill fs-14 ms-1"></i></button>
                                            <button type="button" class="btn btn-light-primary btn-sm rounded-2">Like<i
                                                    class="bi bi-heart ms-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="blog-details-list mb-6">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="card-title">Recent Posts</h5>
                        </div>
                        <div class="card-body">
                            <div class="border-bottom py-3">
                                <div class="d-flex gap-4 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/small/img-6.jpg"
                                            class="rounded object-fit-cover h-80px w-80px" alt="Blog Image">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="text-muted d-block small">06 Nov 2025</span>
                                        <a href="javascript:void(0)"
                                            class="fw-semibold text-body text-decoration-none d-block">What is Tailwind
                                            CSS?</a>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <span class="text-muted">2 min read</span>
                                            <div>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-three-dots"></i></button>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-bookmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <div class="d-flex gap-4 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/small/img-5.jpg"
                                            class="rounded object-fit-cover h-80px w-80px" alt="Blog Image">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="text-muted d-block small">13 Oct 2025</span>
                                        <a href="javascript:void(0)"
                                            class="fw-semibold text-body text-decoration-none d-block">Top Design
                                            Systems</a>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <span class="text-muted">5 min read</span>
                                            <div>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-three-dots"></i></button>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-bookmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <div class="d-flex gap-4 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/small/img-4.jpg"
                                            class="rounded object-fit-cover h-80px w-80px" alt="Blog Image">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="text-muted d-block small">22 Oct 2025</span>
                                        <a href="javascript:void(0)"
                                            class="fw-semibold text-body text-decoration-none d-block">10 Tips for Making a
                                            Good Camera Even Better</a>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <span class="text-muted">7 min read</span>
                                            <div>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-three-dots"></i></button>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-bookmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom py-3">
                                <div class="d-flex gap-4 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/small/img-3.jpg"
                                            class="rounded object-fit-cover h-80px w-80px" alt="Blog Image">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="text-muted d-block small">01 Nov 2025</span>
                                        <a href="javascript:void(0)"
                                            class="fw-semibold text-body text-decoration-none d-block">25 Surprising Facts
                                            About Architecture</a>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <span class="text-muted">4 min read</span>
                                            <div>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-three-dots"></i></button>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-bookmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-3">
                                <div class="d-flex gap-4 justify-content-between align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/small/img-2.jpg"
                                            class="rounded object-fit-cover h-80px w-80px" alt="Blog Image">
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="text-muted d-block small">10 Sep 2025</span>
                                        <a href="javascript:void(0)"
                                            class="fw-semibold text-body text-decoration-none d-block">How Innovation is
                                            Changing the Tech Industry</a>
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <span class="text-muted">6 min read</span>
                                            <div>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-three-dots"></i></button>
                                                <button class="btn btn-text-light text-muted icon-btn-sm"><i
                                                        class="bi bi-bookmark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0 fw-semibold">Popular Post</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-flex flex-wrap gap-4">
                                <a href="javascript:void(0)"><img src="assets/images/small/img-10.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-12.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-11.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-13.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-14.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-4.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-2.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                                <a href="javascript:void(0)"><img src="assets/images/small/img-3.jpg" alt="Image"
                                        class="img-fluid avatar-3xl object-fit-cover rounded-2"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <label class="text-muted mb-4 px-5 py-3 bg-light-subtle rounded"> Subscribe to get updates
                                    about latest <span class="fw-bold"> News & Posts</span> </label>
                                <div class="position-relative">
                                    <input class="form-control" id="composeCc" type="email" placeholder="Email Here">
                                    <button type="button"
                                        class="btn btn-primary btn-sm position-absolute top-0 end-0 rounded-start-0 h-full px-3">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title mb-0 fw-semibold">Leave a Comment</h6>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="row g-4">
                                <div class="col-12 col-xl-6">
                                    <label for="firstName" class="form-label">Full Name<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" placeholder="Enter First Name" class="form-control"
                                        id="firstName" required>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="lastName" class="form-label">Username<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="text" placeholder="Enter Your Username" class="form-control"
                                        id="lastName" required>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="inputExample26" class="form-label">Email<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="email" class="form-control" id="inputExample26"
                                        placeholder="example@gmail.com">
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label for="Role" class="form-label">Role<span
                                            class="text-danger ms-1">*</span></label>
                                    <input type="email" class="form-control" id="Role" placeholder="Role">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="textarea">Write Comment<span
                                            class="text-danger ms-1">*</span></label>
                                    <textarea name="forComment" id="textarea" rows="5" class="form-control" placeholder="Type Comment Here"></textarea>
                                </div>
                                <div class="col-12 justify-content-end d-flex mt-6">
                                    <button class="btn btn-primary">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>

    <script src="assets/libs/simplebar/simplebar.min.js"></script>
@endsection
