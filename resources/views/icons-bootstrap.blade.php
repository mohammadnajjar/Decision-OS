@extends('partials.layouts.master')

@section('title', 'Bootstrap Icons | FabKin Admin & Dashboards Template')
@section('title-sub', 'Base UI')
@section('pagetitle', 'Bootstrap Icons')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="carbon">
                            <div class="red"></div>
                            <div class="yellow"></div>
                            <div class="green"></div>
                        </div>
                        <pre><deckgo-highlight-code lang="js">
                                <code slot="code">npm i bootstrap-icons --save</code>
                            </deckgo-highlight-code></pre>
                        <p class="mb-0">import CSS to your icons.scss</p>
                        <pre><deckgo-highlight-code lang="js">
                                <code slot="code">@import 'bootstrap-icons/fonts/bootstrap-icons.css';</code>
                            </deckgo-highlight-code></pre>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Color Icons</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-2">
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-0-circle"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-align-center text-muted"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-award-fill text-primary"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-bootstrap-fill btn-text-danger"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-clipboard2-pulse text-warning"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-emoji-sunglasses text-secondary"></i></div>
                            <div class="avatar-md border rounded d-flex align-items-center justify-content-center"><i
                                    class="bi bi-person-standing text-info"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Using SVG Code</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-5">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-bounding-box-circles fs-6 text-primary" viewBox="0 0 16 16">
                                    <path
                                        d="M2 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2M0 2a2 2 0 0 1 3.937-.5h8.126A2 2 0 1 1 14.5 3.937v8.126a2 2 0 1 1-2.437 2.437H3.937A2 2 0 1 1 1.5 12.063V3.937A2 2 0 0 1 0 2m2.5 1.937v8.126c.703.18 1.256.734 1.437 1.437h8.126a2 2 0 0 1 1.437-1.437V3.937A2 2 0 0 1 12.063 2.5H3.937A2 2 0 0 1 2.5 3.937M14 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2M2 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-building-dash fs-6 text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1" />
                                    <path
                                        d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1z" />
                                    <path
                                        d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calendar2-check fs-6 text-secondary" viewBox="0 0 16 16">
                                    <path
                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                                    <path
                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-cloud-upload fs-6 text-danger" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383" />
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Using SVG Code</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-5">
                            <div>
                                <i class="bi bi-slack fs-10"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-12"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-14"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-16"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-18"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-20"></i>
                            </div>
                            <div>
                                <i class="bi bi-slack fs-22"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script type="module"
        src="https://unpkg.com/@deckdeckgo/highlight-code@latest/dist/deckdeckgo-highlight-code/deckdeckgo-highlight-code.esm.js">
    </script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
