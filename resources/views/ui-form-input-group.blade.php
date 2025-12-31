@extends('partials.layouts.master')

@section('title', 'UI Input Group | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Input Group')
@section('css')
    <link rel="stylesheet" href="assets/libs/prismjs/themes/prism-coy.min.css">
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Basic Example</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="basic-input-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-basic-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-basic-input-group" type="button" role="tab"
                                    aria-controls="html-basic-input-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-basic-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-basic-input-group" type="button" role="tab"
                                    aria-controls="preview-basic-input-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Place one add-on or button on either side of an input. You may also place one
                            on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the input
                            group.</p>
                        <div class="tab-content" id="basic-input-group">
                            <div class="tab-pane fade show active" id="html-basic-input-group" role="tabpanel"
                                aria-labelledby="html-basic-input-group-tab" tabindex="0">
                                <div class="row g-5">
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect02">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <select class="form-select" id="inputGroupSelect03"
                                                aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect04"
                                                aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                            <input type="text" id="basic-addon1" name="basic-addon1" class="form-control"
                                                placeholder="Username" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="basic-addon2" name="basic-addon2"
                                                placeholder="Recipient's username" aria-label="Recipient's username"
                                                aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="text" id="basic-addon3" name="basic-addon3"
                                                class="form-control" aria-label="Amount (to the nearest dollar)">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="basic-addon4"
                                                name="basic-addon4" placeholder="Username" aria-label="Username">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="basic-addon5"
                                                name="basic-addon5" placeholder="Server" aria-label="Server">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">With textarea</span>
                                            <textarea class="form-control" id="basic-addon6" name="basic-addon6" aria-label="With textarea" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-basic-input-group" role="tabpanel"
                                aria-labelledby="preview-basic-input-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-5&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect02&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect02&quot;&gt;Options&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect03&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect04&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
            &lt;input type=&quot;text&quot; id=&quot;basic-addon1&quot; name=&quot;basic-addon1&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-addon2&quot; name=&quot;basic-addon2&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
            &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
            &lt;input type=&quot;text&quot; id=&quot;basic-addon3&quot; name=&quot;basic-addon3&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-addon4&quot; name=&quot;basic-addon4&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;@&lt;/span&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-addon5&quot; name=&quot;basic-addon5&quot; placeholder=&quot;Server&quot; aria-label=&quot;Server&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
            &lt;textarea class=&quot;form-control&quot; id=&quot;basic-addon6&quot; name=&quot;basic-addon6&quot; aria-label=&quot;With textarea&quot; spellcheck=&quot;false&quot;&gt;&lt;/textarea&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizing</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizing-input-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizing-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizing-input-group" type="button" role="tab"
                                    aria-controls="html-sizing-input-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizing-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizing-input-group" type="button" role="tab"
                                    aria-controls="preview-sizing-input-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add the relative form sizing classes to the <code>.input-group</code> itself
                            and contents within will automatically resize—no need for repeating the form control size
                            classes on each element.</p>
                        <div class="tab-content" id="sizing-input-group">
                            <div class="tab-pane fade show active" id="html-sizing-input-group" role="tabpanel"
                                aria-labelledby="html-sizing-input-group-tab" tabindex="0">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>

                                <div class="input-group input-group-lg">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-lg">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizing-input-group" role="tabpanel"
                                aria-labelledby="preview-sizing-input-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group input-group-lg&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Sizing example input&quot; aria-describedby=&quot;inputGroup-sizing-lg&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Wrapping</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="wrapping-input-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-wrapping-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-wrapping-input-group" type="button" role="tab"
                                    aria-controls="html-wrapping-input-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-wrapping-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-wrapping-input-group" type="button" role="tab"
                                    aria-controls="preview-wrapping-input-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Input groups wrap by default via <code>flex-wrap: wrap</code> in order to
                            accommodate custom form field validation within an input group. You may disable this with
                            <code>.flex-nowrap</code>.</p>
                        <div class="tab-content" id="wrapping-input-group">
                            <div class="tab-pane fade show active" id="html-wrapping-input-group" role="tabpanel"
                                aria-labelledby="html-wrapping-input-group-tab" tabindex="0">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-wrapping">@</span>
                                    <input type="text" class="form-control" placeholder="Username"
                                        aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-wrapping-input-group" role="tabpanel"
                                aria-labelledby="preview-wrapping-input-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;input-group flex-nowrap&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;addon-wrapping&quot;&gt;@&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;addon-wrapping&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Multiple Inputs</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="multiple-input-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-multiple-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-multiple-input-group" type="button" role="tab"
                                    aria-controls="html-multiple-input-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-multiple-input-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-multiple-input-group" type="button" role="tab"
                                    aria-controls="preview-multiple-input-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">While multiple <code>&lt;input&gt;</code>s are supported visually, validation
                            styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
                        <div class="tab-content" id="multiple-input-group">
                            <div class="tab-pane fade show active" id="html-multiple-input-group" role="tabpanel"
                                aria-labelledby="html-multiple-input-group-tab" tabindex="0">
                                <div class="input-group">
                                    <span class="input-group-text">First and last name</span>
                                    <input type="text" aria-label="First name" class="form-control">
                                    <input type="text" aria-label="Last name" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-multiple-input-group" role="tabpanel"
                                aria-labelledby="preview-multiple-input-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;input-group&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;First and last name&lt;/span&gt;
    &lt;input type=&quot;text&quot; aria-label=&quot;First name&quot; class=&quot;form-control&quot;&gt;
    &lt;input type=&quot;text&quot; aria-label=&quot;Last name&quot; class=&quot;form-control&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Multiple Addons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="multiple-addons" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-multiple-addons-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-multiple-addons" type="button" role="tab"
                                    aria-controls="html-multiple-addons" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-multiple-addons-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-multiple-addons" type="button" role="tab"
                                    aria-controls="preview-multiple-addons" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Multiple add-ons are supported and can be mixed with checkbox and radio input
                            versions.</p>
                        <div class="tab-content" id="multiple-addons">
                            <div class="tab-pane fade show active" id="html-multiple-addons" role="tabpanel"
                                aria-labelledby="html-multiple-addons-tab" tabindex="0">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                    <input type="text" class="form-control"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                </div>

                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Dollar amount (with dot and two decimal places)">
                                    <span class="input-group-text">$</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-multiple-addons" role="tabpanel"
                                aria-labelledby="preview-multiple-addons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Dollar amount (with dot and two decimal places)&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Segmented Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="segmented-buttons" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-segmented-buttons-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-segmented-buttons" type="button" role="tab"
                                    aria-controls="html-segmented-buttons" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-segmented-buttons-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-segmented-buttons" type="button" role="tab"
                                    aria-controls="preview-segmented-buttons" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Here content</p>
                        <div class="tab-content" id="segmented-buttons">
                            <div class="tab-pane fade show active" id="html-segmented-buttons" role="tabpanel"
                                aria-labelledby="html-segmented-buttons-tab" tabindex="0">
                                <div class="input-group mb-3">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with segmented dropdown button">
                                </div>

                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with segmented dropdown button">
                                    <button type="button" class="btn btn-outline-secondary">Action</button>
                                    <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-segmented-buttons" role="tabpanel"
                                aria-labelledby="preview-segmented-buttons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;input-group mb-3&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Action&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class=&quot;dropdown-divider&quot;&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Action&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
        &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropdown&lt;/span&gt;
    &lt;/button&gt;
    &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
            &lt;hr class=&quot;dropdown-divider&quot;&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Buttons, Checkbox and Radios Group</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="buttons-checkbox-radios-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-buttons-checkbox-radios-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-buttons-checkbox-radios-group"
                                    type="button" role="tab" aria-controls="html-buttons-checkbox-radios-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-buttons-checkbox-radios-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-buttons-checkbox-radios-group"
                                    type="button" role="tab" aria-controls="preview-buttons-checkbox-radios-group"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Place any checkbox or radio option within an input group’s addon instead of
                            text. We recommend adding <code>.mt-0</code> to the <code>.form-check-input</code> when there’s
                            no visible text next to the input.</p>
                        <div class="tab-content" id="buttons-checkbox-radios-group">
                            <div class="tab-pane fade show active" id="html-buttons-checkbox-radios-group"
                                role="tabpanel" aria-labelledby="html-buttons-checkbox-radios-group-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="checkbox" id="form-input11"
                                                    name="form-input11" value="form-input11"
                                                    aria-label="Checkbox for following text input">
                                            </div>
                                            <input type="text" class="form-control" id="form-input01"
                                                name="form-input01" aria-label="Text input with checkbox">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" value="form-input12"
                                                    id="form-input12" name="form-input12"
                                                    aria-label="Radio button for following text input">
                                            </div>
                                            <input type="text" class="form-control" id="form-input02"
                                                name="form-input02" aria-label="Text input with radio button">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-secondary" type="button"
                                                id="button-addon1">Button</button>
                                            <input type="text" class="form-control" id="form-input03"
                                                name="form-input03" placeholder="form-input03"
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Recipient's username"
                                                id="form-input13" name="form-input13" aria-label="Recipient's username"
                                                aria-describedby="button-addon2">
                                            <button class="btn btn-secondary" type="button" id="button-addon2"
                                                name="button-addon2">Button</button>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-secondary" type="button">Button</button>
                                            <input type="text" class="form-control" id="form-input04"
                                                name="form-input04" placeholder="form-input04"
                                                aria-label="Example text with two button addons">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="form-input05"
                                                name="form-input05" placeholder="Recipient's username"
                                                aria-label="Recipient's username with two button addons">
                                            <button class="btn btn-primary" type="button">Button</button>
                                            <button class="btn btn-secondary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-buttons-checkbox-radios-group" role="tabpanel"
                                aria-labelledby="preview-buttons-checkbox-radios-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;
                &lt;input class=&quot;form-check-input mt-0&quot; type=&quot;checkbox&quot; id=&quot;form-input11&quot; name=&quot;form-input11&quot; value=&quot;&quot; aria-label=&quot;Checkbox for following text input&quot;&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input01&quot; name=&quot;form-input01&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-text&quot;&gt;
                &lt;input class=&quot;form-check-input mt-0&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;form-input12&quot; name=&quot;form-input12&quot; aria-label=&quot;Radio button for following text input&quot;&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input02&quot; name=&quot;form-input02&quot; aria-label=&quot;Text input with radio button&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot; id=&quot;button-addon1&quot;&gt;Button&lt;/button&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input03&quot; name=&quot;form-input03&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with button addon&quot; aria-describedby=&quot;button-addon1&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; id=&quot;form-input13&quot; name=&quot;form-input13&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;button-addon2&quot;&gt;
            &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot; id=&quot;button-addon2&quot; name=&quot;button-addon2&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input04&quot; name=&quot;form-input04&quot; placeholder=&quot;&quot; aria-label=&quot;Example text with two button addons&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input05&quot; name=&quot;form-input05&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username with two button addons&quot;&gt;
            &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;button class=&quot;btn btn-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Buttons with Dropdowns</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="buttons-dropdowns-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-buttons-dropdowns-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-buttons-dropdowns-group" type="button"
                                    role="tab" aria-controls="html-buttons-dropdowns-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-buttons-dropdowns-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-buttons-dropdowns-group" type="button" role="tab"
                                    aria-controls="preview-buttons-dropdowns-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="buttons-dropdowns-group">
                            <div class="tab-pane fade show active" id="html-buttons-dropdowns-group" role="tabpanel"
                                aria-labelledby="html-buttons-dropdowns-group-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </li>
                                            </ul>
                                            <input type="text" class="form-control" id="form-input15"
                                                name="form-input15" aria-label="Text input with dropdown button">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="form-input17"
                                                name="form-input17" aria-label="Text input with dropdown button">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action before</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action
                                                        before</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </li>
                                            </ul>
                                            <input type="text" class="form-control" id="form-input16"
                                                name="form-input16" aria-label="Text input with 2 dropdown buttons">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Something else
                                                        here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-buttons-dropdowns-group" role="tabpanel"
                                aria-labelledby="preview-buttons-dropdowns-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;
                    &lt;hr class=&quot;dropdown-divider&quot;&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input15&quot; name=&quot;form-input15&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input17&quot; name=&quot;form-input17&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;
                    &lt;hr class=&quot;dropdown-divider&quot;&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;ul class=&quot;dropdown-menu&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action before&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action before&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;
                    &lt;hr class=&quot;dropdown-divider&quot;&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;form-input16&quot; name=&quot;form-input16&quot; aria-label=&quot;Text input with 2 dropdown buttons&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
            &lt;ul class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;
                    &lt;hr class=&quot;dropdown-divider&quot;&gt;
                &lt;/li&gt;
                &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom Select</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="custom-select" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-custom-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-custom-select" type="button" role="tab"
                                    aria-controls="html-custom-select" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-custom-select-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-custom-select" type="button" role="tab"
                                    aria-controls="preview-custom-select" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Input groups include support for custom selects and custom file inputs.
                            Browser default versions of these are not supported.</p>
                        <div class="tab-content" id="custom-select">
                            <div class="tab-pane fade show active" id="html-custom-select" role="tabpanel"
                                aria-labelledby="html-custom-select-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <label class="input-group-text" for="inputGroupSelect05">Options</label>
                                            <select class="form-select" id="inputGroupSelect05">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect06">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label class="input-group-text" for="inputGroupSelect06">Options</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button">Button</button>
                                            <select class="form-select" id="inputGroupSelect07"
                                                aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <select class="form-select" id="inputGroupSelect08"
                                                aria-label="Example select with button addon">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button class="btn btn-outline-secondary" type="button">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-custom-select" role="tabpanel"
                                aria-labelledby="preview-custom-select-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect05&quot;&gt;Options&lt;/label&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect05&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect06&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect06&quot;&gt;Options&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect07&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;select class=&quot;form-select&quot; id=&quot;inputGroupSelect08&quot; aria-label=&quot;Example select with button addon&quot;&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
            &lt;/select&gt;
            &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Custom file input</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="custom-file-input" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-custom-file-input-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-custom-file-input" type="button" role="tab"
                                    aria-controls="html-custom-file-input" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-custom-file-input-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-custom-file-input" type="button" role="tab"
                                    aria-controls="preview-custom-file-input" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Input groups include support for custom selects and custom file inputs.
                            Browser default versions of these are not supported.</p>
                        <div class="tab-content" id="custom-file-input">
                            <div class="tab-pane fade show active" id="html-custom-file-input" role="tabpanel"
                                aria-labelledby="html-custom-file-input-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="inputGroupFileAddon03">Button</button>
                                            <input type="file" class="form-control" id="inputGroupFile03"
                                                aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="inputGroupFileAddon04">Button</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-custom-file-input" role="tabpanel"
                                aria-labelledby="preview-custom-file-input-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row g-4&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupFile01&quot;&gt;Upload&lt;/label&gt;
            &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile01&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile02&quot;&gt;
            &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupFile02&quot;&gt;Upload&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;inputGroupFileAddon03&quot;&gt;Button&lt;/button&gt;
            &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile03&quot; aria-describedby=&quot;inputGroupFileAddon03&quot; aria-label=&quot;Upload&quot;&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;input-group&quot;&gt;
            &lt;input type=&quot;file&quot; class=&quot;form-control&quot; id=&quot;inputGroupFile04&quot; aria-describedby=&quot;inputGroupFileAddon04&quot; aria-label=&quot;Upload&quot;&gt;
            &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot; id=&quot;inputGroupFileAddon04&quot;&gt;Button&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
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

    <script src="assets/libs/prismjs/prism.js"></script>

    <script type="module" src="assets/js/app.js"></script>
@endsection
