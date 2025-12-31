@extends('partials.layouts.master')

@section('title', 'UI Form Selector | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Form Selector')

@section('css')
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')


    <!--begin::App-->
    <div id="layout-wrapper">


        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Select</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-select" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-select" type="button" role="tab"
                                    aria-controls="html-default-select" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-select" type="button" role="tab"
                                    aria-controls="preview-default-select" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Custom <code>&lt;select&gt;</code> menus need only a custom class,
                            <code>.form-select</code> to trigger the custom styles. Custom styles are limited to the
                            <code>&lt;select&gt;</code>’s initial appearance and cannot modify the
                            <code>&lt;option&gt;</code>s due to browser limitations.</p>
                        <div class="tab-content" id="default-select">
                            <div class="tab-pane fade show active" id="html-default-select" role="tabpanel"
                                aria-labelledby="html-default-select-tab" tabindex="0">
                                <select class="form-select mb-4" id="form-select-01" name="form-select-01"
                                    aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" id="form-select-02" name="form-select-02"
                                    aria-label="Disabled select example" disabled>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="tab-pane fade" id="preview-default-select" role="tabpanel"
                                aria-labelledby="preview-default-select-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;select class=&quot;form-select mb-4&quot; id=&quot;form-select-01&quot; name=&quot;form-select-01&quot; aria-label=&quot;Default select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select&quot; id=&quot;form-select-02&quot; name=&quot;form-select-02&quot; aria-label=&quot;Disabled select example&quot; disabled&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizing</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-select" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-select" type="button" role="tab"
                                    aria-controls="html-sizes-select" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-select" type="button" role="tab"
                                    aria-controls="preview-sizes-select" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">You may also choose from small and large custom selects to match our similarly
                            sized text inputs.</p>
                        <div class="tab-content" id="sizes-select">
                            <div class="tab-pane fade show active" id="html-sizes-select" role="tabpanel"
                                aria-labelledby="html-sizes-select-tab" tabindex="0">
                                <select class="form-select form-select-lg mb-4" id="form-select-03" name="form-select-03"
                                    aria-label="Large select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select form-select-sm" id="form-select-04" name="form-select-04"
                                    aria-label="Small select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-select" role="tabpanel"
                                aria-labelledby="preview-sizes-select-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;select class=&quot;form-select form-select-lg mb-4&quot; id=&quot;form-select-03&quot; name=&quot;form-select-03&quot; aria-label=&quot;Large select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;form-select form-select-sm&quot; id=&quot;form-select-04&quot; name=&quot;form-select-04&quot; aria-label=&quot;Small select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

        <h6 class="mb-3 fs-15 text-decoration-underline">Select Plugins:</h6>
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Single Select </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Select your preferred programming language for development projects.</p>
                        <select id="default-choice">
                            <option value="language">Select a language</option>
                            <option value="javascript">JavaScript</option>
                            <option value="python">Python</option>
                            <option value="java">Java</option>
                            <option value="csharp">C#</option>
                            <option value="ruby">Ruby</option>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Option Groups </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Choose a project management tool based on your team's workflow.</p>
                        <select class="form-control" name="choices-groups" id="choices-groups">
                            <optgroup label="Agile">
                                <option value="jira">Jira</option>
                                <option value="trello">Trello</option>
                            </optgroup>
                            <optgroup label="Waterfall">
                                <option value="ms_project">Microsoft Project</option>
                            </optgroup>
                            <optgroup label="Hybrid" disabled>
                                <option value="asana">Asana</option>
                                <option value="clickup">ClickUp</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Default Multiple Select </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Select multiple frontend frameworks you are familiar with.</p>
                        <select id="choices-default-multiple" multiple>
                            <option value="frameworks">Select frameworks</option>
                            <option value="react">React</option>
                            <option value="vue">Vue.js</option>
                            <option value="angular">Angular</option>
                            <option value="svelte">Svelte</option>
                            <option value="ember">Ember.js</option>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Multiple Select With Close Icon </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Select the database technologies you have worked with.</p>
                        <select id="choices-multiple-close-icon" multiple>
                            <option value="databases">Select databases</option>
                            <option value="mysql">MySQL</option>
                            <option value="postgresql">PostgreSQL</option>
                            <option value="mongodb">MongoDB</option>
                            <option value="sqlite">SQLite</option>
                            <option value="oracle">Oracle</option>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Multiple Select With Limit </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Select up to 3 cloud platforms you have experience with.</p>
                        <select id="choices-multiple-limit" multiple>
                            <option value="platforms">Select cloud platforms</option>
                            <option value="aws">AWS</option>
                            <option value="azure">Microsoft Azure</option>
                            <option value="gcp">Google Cloud Platform</option>
                            <option value="digitalocean">DigitalOcean</option>
                            <option value="heroku">Heroku</option>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Multiple Select With Option Groups </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Select the development methodologies you are familiar with.</p>
                        <select id="choices-multiple-option-group" multiple>
                            <optgroup label="Agile">
                                <option value="scrum">Scrum</option>
                                <option value="kanban">Kanban</option>
                            </optgroup>
                            <optgroup label="Waterfall">
                                <option value="classic">Classic Waterfall</option>
                            </optgroup>
                            <optgroup label="DevOps">
                                <option value="devops">DevOps</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Text Inputs </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Enter your favorite development tools, separated by commas.</p>

                        <input type="text" value="VSCode, Git, Docker" name="choices-text-inputs"
                            id="choices-text-inputs">
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Unique Values Only, No Pasting </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Enter your skills, ensuring unique values only.</p>

                        <input type="text" value="JavaScript, Python" name="choices-unique-text-inputs"
                            id="choices-unique-text-inputs">
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Email Address Only </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Enter email addresses for team members, separated by commas.</p>

                        <input type="text" value="example@gmail.com" name="choices-text-email-filter"
                            id="choices-text-email-filter" multiple>
                    </div>
                </div>
            </div><!--End col-->
        </div><!--End row-->

    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->
@endsection

@section('js')

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="assets/libs/prismjs/prism.js"></script>
    <script src="assets/js/form/forms-select.init.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
