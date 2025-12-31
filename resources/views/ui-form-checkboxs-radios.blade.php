@extends('partials.layouts.master')

@section('title', 'UI Checkbox & Radio | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Checkbox & Radio')
@section('css')
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">

            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Checkbox</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-checkbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-checkbox" type="button" role="tab"
                                    aria-controls="html-default-checkbox" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-checkbox" type="button" role="tab"
                                    aria-controls="preview-default-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="default-checkbox">
                            <div class="tab-pane fade show active" id="html-default-checkbox" role="tabpanel"
                                aria-labelledby="html-default-checkbox-tab" tabindex="0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="flexCheckDefault"
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="flexCheckChecked"
                                        id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Checked checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-checkbox" role="tabpanel"
                                aria-labelledby="preview-default-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDefault&quot;&gt;
        Default checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckChecked&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckChecked&quot;&gt;
        Checked checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Checkbox</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-checkbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-checkbox" type="button" role="tab"
                                    aria-controls="html-disabled-checkbox" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-checkbox" type="button" role="tab"
                                    aria-controls="preview-disabled-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add the <code>disabled</code> attribute and the associated
                            <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help
                            indicate the input’s state.</p>
                        <div class="tab-content" id="disabled-checkbox">
                            <div class="tab-pane fade show active" id="html-disabled-checkbox" role="tabpanel"
                                aria-labelledby="html-disabled-checkbox-tab" tabindex="0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="flexCheckDisabled"
                                        id="flexCheckDisabled" disabled>
                                    <label class="form-check-label" for="flexCheckDisabled">
                                        Disabled checkbox
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="flexCheckCheckedDisabled"
                                        id="flexCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                                        Disabled checked checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-checkbox" role="tabpanel"
                                aria-labelledby="preview-disabled-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDisabled&quot; disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckDisabled&quot;&gt;
        Disabled checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckCheckedDisabled&quot; checked disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckCheckedDisabled&quot;&gt;
        Disabled checked checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizes Checkbox</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-checkbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-checkbox" type="button" role="tab"
                                    aria-controls="html-sizes-checkbox" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-checkbox" type="button" role="tab"
                                    aria-controls="preview-sizes-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="sizes-checkbox">
                            <div class="tab-pane fade show active" id="html-sizes-checkbox" role="tabpanel"
                                aria-labelledby="html-sizes-checkbox-tab" tabindex="0">
                                <div class="form-check form-check-sm mb-3">
                                    <input class="form-check-input" type="checkbox" value="flexCheckSmall"
                                        id="flexCheckSmall" checked>
                                    <label class="form-check-label" for="flexCheckSmall">
                                        Small Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-lg">
                                    <input class="form-check-input" type="checkbox" value="flexCheckLarge"
                                        id="flexCheckLarge" checked>
                                    <label class="form-check-label" for="flexCheckLarge">
                                        Large Checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-checkbox" role="tabpanel"
                                aria-labelledby="preview-sizes-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-sm mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckSmall&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckSmall&quot;&gt;
        Small Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-lg&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckLarge&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckLarge&quot;&gt;
        Large Checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Radio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-radio" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-radio" type="button" role="tab"
                                    aria-controls="html-default-radio" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-radio" type="button" role="tab"
                                    aria-controls="preview-default-radio" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="default-radio">
                            <div class="tab-pane fade show active" id="html-default-radio" role="tabpanel"
                                aria-labelledby="html-default-radio-tab" tabindex="0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Default radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Default checked radio
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-radio" role="tabpanel"
                                aria-labelledby="preview-default-radio-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault1&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault1&quot;&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault2&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault2&quot;&gt;
        Default checked radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Radio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-radio" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-radio" type="button" role="tab"
                                    aria-controls="html-disabled-radio" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-radio" type="button" role="tab"
                                    aria-controls="preview-disabled-radio" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Add the <code>disabled</code> attribute and the associated
                            <code>&lt;label&gt;</code>s are automatically styled to match with a lighter color to help
                            indicate the input’s state.</p>
                        <div class="tab-content" id="disabled-radio">
                            <div class="tab-pane fade show active" id="html-disabled-radio" role="tabpanel"
                                aria-labelledby="html-disabled-radio-tab" tabindex="0">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                        id="flexRadioDisabled" disabled>
                                    <label class="form-check-label" for="flexRadioDisabled">
                                        Disabled radio
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                        id="flexRadioCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                                        Disabled checked radio
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-radio" role="tabpanel"
                                aria-labelledby="preview-disabled-radio-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioDisabled&quot; disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDisabled&quot;&gt;
        Disabled radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDisabled&quot; id=&quot;flexRadioCheckedDisabled&quot; checked disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioCheckedDisabled&quot;&gt;
        Disabled checked radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizes Radio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-radio" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-radio" type="button" role="tab"
                                    aria-controls="html-sizes-radio" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-radio" type="button" role="tab"
                                    aria-controls="preview-sizes-radio" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="sizes-radio">
                            <div class="tab-pane fade show active" id="html-sizes-radio" role="tabpanel"
                                aria-labelledby="html-sizes-radio-tab" tabindex="0">
                                <div class="form-check form-check-sm mb-3">
                                    <input class="form-check-input" type="radio" name="flexRadioSize"
                                        id="flexRadioSmall">
                                    <label class="form-check-label" for="flexRadioSmall">
                                        Small radio
                                    </label>
                                </div>
                                <div class="form-check form-check-lg">
                                    <input class="form-check-input" type="radio" name="flexRadioSize"
                                        id="flexRadioLarge">
                                    <label class="form-check-label" for="flexRadioLarge">
                                        Large radio
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-radio" role="tabpanel"
                                aria-labelledby="preview-sizes-radio-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-sm mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioSize&quot; id=&quot;flexRadioSmall&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioSmall&quot;&gt;
        Small radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-lg&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioSize&quot; id=&quot;flexRadioLarge&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioLarge&quot;&gt;
        Large radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Indeterminate</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="indeterminate-checkbox"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-indeterminate-checkbox-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-indeterminate-checkbox" type="button"
                                    role="tab" aria-controls="html-indeterminate-checkbox"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-indeterminate-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-indeterminate-checkbox" type="button" role="tab"
                                    aria-controls="preview-indeterminate-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Checkboxes can utilize the :indeterminate pseudo class when manually set via
                            JavaScript (there is no available HTML attribute for specifying it).</p>
                        <div class="tab-content" id="indeterminate-checkbox">
                            <div class="tab-pane fade show active" id="html-indeterminate-checkbox" role="tabpanel"
                                aria-labelledby="html-indeterminate-checkbox-tab" tabindex="0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="flexCheckIndeterminate"
                                        id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Indeterminate checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-indeterminate-checkbox" role="tabpanel"
                                aria-labelledby="preview-indeterminate-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckIndeterminate&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexCheckIndeterminate&quot;&gt;
        Indeterminate checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors Checkbox</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-checkbox" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-checkbox" type="button" role="tab"
                                    aria-controls="html-colors-checkbox" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-checkbox-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-checkbox" type="button" role="tab"
                                    aria-controls="preview-colors-checkbox" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="colors-checkbox">
                            <div class="tab-pane fade show active" id="html-colors-checkbox" role="tabpanel"
                                aria-labelledby="html-colors-checkbox-tab" tabindex="0">
                                <div class="form-check form-check-primary mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck01"
                                        id="CustomflexCheck01" checked>
                                    <label class="form-check-label" for="CustomflexCheck01">
                                        Primary Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-secondary mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck02"
                                        id="CustomflexCheck02" checked>
                                    <label class="form-check-label" for="CustomflexCheck02">
                                        Secondary Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-success mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck03"
                                        id="CustomflexCheck03" checked>
                                    <label class="form-check-label" for="CustomflexCheck03">
                                        Success Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-info mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck04"
                                        id="CustomflexCheck04" checked>
                                    <label class="form-check-label" for="CustomflexCheck04">
                                        Info Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-warning mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck05"
                                        id="CustomflexCheck05" checked>
                                    <label class="form-check-label" for="CustomflexCheck05">
                                        Warning Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-danger mb-3">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck06"
                                        id="CustomflexCheck06" checked>
                                    <label class="form-check-label" for="CustomflexCheck06">
                                        Danger Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-dark">
                                    <input class="form-check-input" type="checkbox" value="CustomflexCheck07"
                                        id="CustomflexCheck07" checked>
                                    <label class="form-check-label" for="CustomflexCheck07">
                                        Dark Checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colors-checkbox" role="tabpanel"
                                aria-labelledby="preview-colors-checkbox-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-primary mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck01&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck01&quot;&gt;
        Primary Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-secondary mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck02&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck02&quot;&gt;
        Secondary Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-success mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck03&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck03&quot;&gt;
        Success Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-info mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck04&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck04&quot;&gt;
        Info Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-warning mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck05&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck05&quot;&gt;
        Warning Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-danger mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck06&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck06&quot;&gt;
        Danger Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-dark&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;CustomflexCheck07&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexCheck07&quot;&gt;
        Dark Checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors Radio</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-radio" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-radio" type="button" role="tab"
                                    aria-controls="html-colors-radio" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-radio-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-radio" type="button" role="tab"
                                    aria-controls="preview-colors-radio" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="colors-radio">
                            <div class="tab-pane fade show active" id="html-colors-radio" role="tabpanel"
                                aria-labelledby="html-colors-radio-tab" tabindex="0">
                                <div class="form-check form-check-primary mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio01"
                                        id="CustomflexRadio01" checked>
                                    <label class="form-check-label" for="CustomflexRadio01">
                                        Primary Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-secondary mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio02"
                                        id="CustomflexRadio02" checked>
                                    <label class="form-check-label" for="CustomflexRadio02">
                                        Secondary Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-success mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio03"
                                        id="CustomflexRadio03" checked>
                                    <label class="form-check-label" for="CustomflexRadio03">
                                        Success Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-info mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio04"
                                        id="CustomflexRadio04" checked>
                                    <label class="form-check-label" for="CustomflexRadio04">
                                        Info Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-warning mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio05"
                                        id="CustomflexRadio05" checked>
                                    <label class="form-check-label" for="CustomflexRadio05">
                                        Warning Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-danger mb-3">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio06"
                                        id="CustomflexRadio06" checked>
                                    <label class="form-check-label" for="CustomflexRadio06">
                                        Danger Checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-dark">
                                    <input class="form-check-input" type="radio" value="CustomflexRadio07"
                                        id="CustomflexRadio07" checked>
                                    <label class="form-check-label" for="CustomflexRadio07">
                                        Dark Checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colors-radio" role="tabpanel"
                                aria-labelledby="preview-colors-radio-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-primary mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio01&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio01&quot;&gt;
        Primary Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-secondary mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio02&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio02&quot;&gt;
        Secondary Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-success mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio03&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio03&quot;&gt;
        Success Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-info mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio04&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio04&quot;&gt;
        Info Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-warning mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio05&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio05&quot;&gt;
        Warning Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-danger mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio06&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio06&quot;&gt;
        Danger Checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-dark&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; value=&quot;&quot; id=&quot;CustomflexRadio07&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;CustomflexRadio07&quot;&gt;
        Dark Checkbox
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Default Switches</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="default-switches" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-default-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-default-switches" type="button" role="tab"
                                    aria-controls="html-default-switches" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-default-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-default-switches" type="button" role="tab"
                                    aria-controls="preview-default-switches" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">A switch has the markup of a custom checkbox but uses the
                            <code>.form-switch</code> class to render a toggle switch. Consider using
                            <code>role="switch"</code> to more accurately convey the nature of the control to assistive
                            technologies that support this role.</p>
                        <div class="tab-content" id="default-switches">
                            <div class="tab-pane fade show active" id="html-default-switches" role="tabpanel"
                                aria-labelledby="html-default-switches-tab" tabindex="0">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                        input</label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-default-switches" role="tabpanel"
                                aria-labelledby="preview-default-switches-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-switch mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDefault&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckChecked&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Disabled Switches</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="disabled-switches" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-disabled-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-disabled-switches" type="button" role="tab"
                                    aria-controls="html-disabled-switches" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-disabled-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-disabled-switches" type="button" role="tab"
                                    aria-controls="preview-disabled-switches" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">By default, any number of checkboxes and radios that are immediate sibling
                            will be vertically stacked and appropriately spaced with <code>.form-check</code>.</p>
                        <div class="tab-content" id="disabled-switches">
                            <div class="tab-pane fade show active" id="html-disabled-switches" role="tabpanel"
                                aria-labelledby="html-disabled-switches-tab" tabindex="0">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDisabled" disabled>
                                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckCheckedDisabled" checked disabled>
                                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                        switch checkbox input</label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-disabled-switches" role="tabpanel"
                                aria-labelledby="preview-disabled-switches-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-switch mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckDisabled&quot; disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; checked disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6 col-xxl-4">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Sizes Switches</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="sizes-switches" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-sizes-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-sizes-switches" type="button" role="tab"
                                    aria-controls="html-sizes-switches" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-sizes-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-sizes-switches" type="button" role="tab"
                                    aria-controls="preview-sizes-switches" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="sizes-switches">
                            <div class="tab-pane fade show active" id="html-sizes-switches" role="tabpanel"
                                aria-labelledby="html-sizes-switches-tab" tabindex="0">
                                <div class="form-check form-check-sm form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckSmall" checked>
                                    <label class="form-check-label" for="flexSwitchCheckSmall">Small Form switch</label>
                                </div>
                                <div class="form-check form-check-lg form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckCheckedLarge" checked>
                                    <label class="form-check-label" for="flexSwitchCheckCheckedLarge">Large Form
                                        Switch</label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-sizes-switches" role="tabpanel"
                                aria-labelledby="preview-sizes-switches-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-sm form-switch mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckSmall&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckSmall&quot;&gt;Small Form switch&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-lg form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;flexSwitchCheckCheckedLarge&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedLarge&quot;&gt;Large Form Switch&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Colors Switches</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="colors-switches" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-colors-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-colors-switches" type="button" role="tab"
                                    aria-controls="html-colors-switches" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-colors-switches-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-colors-switches" type="button" role="tab"
                                    aria-controls="preview-colors-switches" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="colors-switches">
                            <div class="tab-pane fade show active" id="html-colors-switches" role="tabpanel"
                                aria-labelledby="html-colors-switches-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6">
                                        <div class="form-check form-switch form-switch-primary mb-3">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck01" checked>
                                            <label class="form-check-label" for="SwitchCheck01">Switch Primary</label>
                                        </div>
                                        <div class="form-check form-switch form-switch-secondary mb-3">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck02" checked>
                                            <label class="form-check-label" for="SwitchCheck02">Switch Secondary</label>
                                        </div>
                                        <div class="form-check form-switch form-switch-success mb-3">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck03" checked>
                                            <label class="form-check-label" for="SwitchCheck03">Switch Success</label>
                                        </div>
                                        <div class="form-check form-switch form-switch-info">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck04" checked>
                                            <label class="form-check-label" for="SwitchCheck04">Switch Info</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6">
                                        <div class="form-check form-switch form-switch-warning mb-3">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck05" checked>
                                            <label class="form-check-label" for="SwitchCheck05">Switch Warning</label>
                                        </div>
                                        <div class="form-check form-switch form-switch-danger mb-3">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck06" checked>
                                            <label class="form-check-label" for="SwitchCheck06">Switch Danger</label>
                                        </div>
                                        <div class="form-check form-switch form-switch-dark">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="SwitchCheck07" checked>
                                            <label class="form-check-label" for="SwitchCheck07">Switch Dark</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-colors-switches" role="tabpanel"
                                aria-labelledby="preview-colors-switches-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;form-check form-switch form-switch-primary mb-3&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck01&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck01&quot;&gt;Switch Primary&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-switch-secondary mb-3&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck02&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck02&quot;&gt;Switch Secondary&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-switch-success mb-3&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck03&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck03&quot;&gt;Switch Success&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-switch-info&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck04&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck04&quot;&gt;Switch Info&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6&quot;&gt;
        &lt;div class=&quot;form-check form-switch form-switch-warning mb-3&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck05&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck05&quot;&gt;Switch Warning&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-switch-danger mb-3&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck06&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck06&quot;&gt;Switch Danger&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-switch-dark&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; role=&quot;switch&quot; id=&quot;SwitchCheck07&quot; checked&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;SwitchCheck07&quot;&gt;Switch Dark&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Inline</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="inline-check-label" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-inline-check-label-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-inline-check-label" type="button" role="tab"
                                    aria-controls="html-inline-check-label" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-inline-check-label-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-inline-check-label" type="button" role="tab"
                                    aria-controls="preview-inline-check-label" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Group checkboxes or radios on the same horizontal row by adding
                            <code>.form-check-inline</code> to any <code>.form-check</code>.</p>
                        <div class="tab-content" id="inline-check-label">
                            <div class="tab-pane fade show active" id="html-inline-check-label" role="tabpanel"
                                aria-labelledby="html-inline-check-label-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                value="option2">
                                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                value="option3" disabled>
                                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                id="inlineRadio3" value="option3" disabled>
                                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-xxl-4">
                                        <div class="form-check form-switch form-check-inline" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="inlineswitch5">
                                            <label class="form-check-label" for="inlineswitch5">1</label>
                                        </div>
                                        <div class="form-check form-switch form-check-inline" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="inlineswitch6">
                                            <label class="form-check-label" for="inlineswitch6">2</label>
                                        </div>
                                        <div class="form-check form-switch form-check-inline" dir="ltr">
                                            <input type="checkbox" class="form-check-input" id="inlineswitchdisabled2"
                                                disabled>
                                            <label class="form-check-label" for="inlineswitchdisabled2">2</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-inline-check-label" role="tabpanel"
                                aria-labelledby="preview-inline-check-label-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;row&quot;&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox1&quot; value=&quot;option1&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox1&quot;&gt;1&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox2&quot; value=&quot;option2&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox2&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;inlineCheckbox3&quot; value=&quot;option3&quot; disabled&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineCheckbox3&quot;&gt;3 (disabled)&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio1&quot; value=&quot;option1&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio1&quot;&gt;1&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio2&quot; value=&quot;option2&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio2&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-check-inline&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;inlineRadioOptions&quot; id=&quot;inlineRadio3&quot; value=&quot;option3&quot; disabled&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineRadio3&quot;&gt;3 (disabled)&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;col-12 col-xl-6 col-xxl-4&quot;&gt;
        &lt;div class=&quot;form-check form-switch form-check-inline&quot; dir=&quot;ltr&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;inlineswitch5&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineswitch5&quot;&gt;1&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-check-inline&quot; dir=&quot;ltr&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;inlineswitch6&quot;&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineswitch6&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class=&quot;form-check form-switch form-check-inline&quot; dir=&quot;ltr&quot;&gt;
            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;inlineswitchdisabled2&quot; disabled&gt;
            &lt;label class=&quot;form-check-label&quot; for=&quot;inlineswitchdisabled2&quot;&gt;2&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Reverse</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="reverse-group" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-reverse-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-reverse-group" type="button" role="tab"
                                    aria-controls="html-reverse-group" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-reverse-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-reverse-group" type="button" role="tab"
                                    aria-controls="preview-reverse-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Put your checkboxes, radios, and switches on the opposite side with the
                            <code>.form-check-reverse</code> modifier class.</p>
                        <div class="tab-content" id="reverse-group">
                            <div class="tab-pane fade show active" id="html-reverse-group" role="tabpanel"
                                aria-labelledby="html-reverse-group-tab" tabindex="0">
                                <div class="form-check form-check-reverse mb-3">
                                    <input class="form-check-input" type="checkbox" value="reverseCheck1"
                                        id="reverseCheck1">
                                    <label class="form-check-label" for="reverseCheck1">
                                        Reverse checkbox
                                    </label>
                                </div>
                                <div class="form-check form-check-reverse mb-3">
                                    <input class="form-check-input" type="checkbox" value="reverseCheck2"
                                        id="reverseCheck2" disabled>
                                    <label class="form-check-label" for="reverseCheck2">
                                        Disabled reverse checkbox
                                    </label>
                                </div>

                                <div class="form-check form-switch form-check-reverse">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckReverse">
                                    <label class="form-check-label" for="flexSwitchCheckReverse">Reverse switch checkbox
                                        input</label>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-reverse-group" role="tabpanel"
                                aria-labelledby="preview-reverse-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;form-check form-check-reverse mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;reverseCheck1&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;reverseCheck1&quot;&gt;
        Reverse checkbox
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-check-reverse mb-3&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;reverseCheck2&quot; disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;reverseCheck2&quot;&gt;
        Disabled reverse checkbox
    &lt;/label&gt;
&lt;/div&gt;

&lt;div class=&quot;form-check form-switch form-check-reverse&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckReverse&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckReverse&quot;&gt;Reverse switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Without labels</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="without-labels" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-without-labels-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-without-labels" type="button" role="tab"
                                    aria-controls="html-without-labels" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-without-labels-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-without-labels" type="button" role="tab"
                                    aria-controls="preview-without-labels" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Omit the wrapping <code>.form-check</code> for checkboxes and radios that
                            have no label text. Remember to still provide some form of accessible name for assistive
                            technologies (for instance, using <code>aria-label</code>). See the <a
                                href="https://getbootstrap.com/docs/5.3/forms/overview/#accessibility"
                                target="_blank">forms overview accessibility section for details</a>.</p>
                        <div class="tab-content" id="without-labels">
                            <div class="tab-pane fade show active" id="html-without-labels" role="tabpanel"
                                aria-labelledby="html-without-labels-tab" tabindex="0">
                                <div>
                                    <input class="form-check-input mb-3" type="checkbox" id="checkboxNoLabel"
                                        value="checkboxNoLabel" aria-label="Select option 1">
                                </div>

                                <div>
                                    <input class="form-check-input" type="radio" name="radioNoLabel"
                                        id="radioNoLabel1" value="radioNoLabel1" aria-label="Select option 2">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-without-labels" role="tabpanel"
                                aria-labelledby="preview-without-labels-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div&gt;
    &lt;input class=&quot;form-check-input mb-3&quot; type=&quot;checkbox&quot; id=&quot;checkboxNoLabel&quot; value=&quot;&quot; aria-label=&quot;Select option 1&quot;&gt;
&lt;/div&gt;

&lt;div&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;radioNoLabel&quot; id=&quot;radioNoLabel1&quot; value=&quot;&quot; aria-label=&quot;Select option 2&quot;&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Checkbox Toggle Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="checkbox-toggle-buttons"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-checkbox-toggle-buttons-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-checkbox-toggle-buttons"
                                    type="button" role="tab" aria-controls="html-checkbox-toggle-buttons"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-checkbox-toggle-buttons-tab"
                                    data-bs-toggle="pill" data-bs-target="#preview-checkbox-toggle-buttons"
                                    type="button" role="tab" aria-controls="preview-checkbox-toggle-buttons"
                                    aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="checkbox-toggle-buttons">
                            <div class="tab-pane fade show active" id="html-checkbox-toggle-buttons" role="tabpanel"
                                aria-labelledby="html-checkbox-toggle-buttons-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check" autocomplete="off">
                                        <label class="btn btn-light-primary" for="btn-check">Single toggle</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check-2" checked
                                            autocomplete="off">
                                        <label class="btn btn-light-primary" for="btn-check-2">Checked</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check-3" autocomplete="off"
                                            disabled>
                                        <label class="btn btn-light-primary" for="btn-check-3">Disabled</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-checkbox-toggle-buttons" role="tabpanel"
                                aria-labelledby="preview-checkbox-toggle-buttons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-light-primary&quot; for=&quot;btn-check&quot;&gt;Single toggle&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-2&quot; checked autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-light-primary&quot; for=&quot;btn-check-2&quot;&gt;Checked&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check-3&quot; autocomplete=&quot;off&quot; disabled&gt;
        &lt;label class=&quot;btn btn-light-primary&quot; for=&quot;btn-check-3&quot;&gt;Disabled&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Radio Toggle Buttons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="radio-toggle-buttons"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-radio-toggle-buttons-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-radio-toggle-buttons" type="button"
                                    role="tab" aria-controls="html-radio-toggle-buttons"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-radio-toggle-buttons-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-radio-toggle-buttons" type="button" role="tab"
                                    aria-controls="preview-radio-toggle-buttons" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="radio-toggle-buttons">
                            <div class="tab-pane fade show active" id="html-radio-toggle-buttons" role="tabpanel"
                                aria-labelledby="html-radio-toggle-buttons-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input type="radio" class="btn-check" name="options" id="option1"
                                            autocomplete="off" checked>
                                        <label class="btn btn-light-info" for="option1">Checked</label>
                                    </div>
                                    <div>
                                        <input type="radio" class="btn-check" name="options" id="option2"
                                            autocomplete="off">
                                        <label class="btn btn-light-info" for="option2">Radio</label>
                                    </div>
                                    <div>
                                        <input type="radio" class="btn-check" name="options" id="option3"
                                            autocomplete="off" disabled>
                                        <label class="btn btn-light-info" for="option3">Disabled</label>
                                    </div>
                                    <div>
                                        <input type="radio" class="btn-check" name="options" id="option4"
                                            autocomplete="off">
                                        <label class="btn btn-light-info" for="option4">Radio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-radio-toggle-buttons" role="tabpanel"
                                aria-labelledby="preview-radio-toggle-buttons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option1&quot; autocomplete=&quot;off&quot; checked&gt;
        &lt;label class=&quot;btn btn-light-info&quot; for=&quot;option1&quot;&gt;Checked&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option2&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-light-info&quot; for=&quot;option2&quot;&gt;Radio&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option3&quot; autocomplete=&quot;off&quot; disabled&gt;
        &lt;label class=&quot;btn btn-light-info&quot; for=&quot;option3&quot;&gt;Disabled&lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; class=&quot;btn-check&quot; name=&quot;options&quot; id=&quot;option4&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-light-info&quot; for=&quot;option4&quot;&gt;Radio&lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Checkbox With Icons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="checkbox-with-icons"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-checkbox-with-icons-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-checkbox-with-icons" type="button"
                                    role="tab" aria-controls="html-checkbox-with-icons"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-checkbox-with-icons-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-checkbox-with-icons" type="button" role="tab"
                                    aria-controls="preview-checkbox-with-icons" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="checkbox-with-icons">
                            <div class="tab-pane fade show active" id="html-checkbox-with-icons" role="tabpanel"
                                aria-labelledby="html-checkbox-with-icons-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check001"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btn-check001">
                                            <i class="ri-instagram-line"></i> Instagram
                                        </label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check002"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btn-check002">
                                            <i class="ri-twitter-line"></i> Twitter
                                        </label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check003"
                                            autocomplete="off">
                                        <label class="btn btn-outline-primary" for="btn-check003">
                                            <i class="ri-facebook-line"></i> Facebook
                                        </label>
                                    </div>
                                    <div>
                                        <input type="checkbox" class="btn-check" id="btn-check004"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-primary" for="btn-check004">
                                            <i class="ri-linkedin-box-fill"></i> LinkedIn
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-checkbox-with-icons" role="tabpanel"
                                aria-labelledby="preview-checkbox-with-icons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check001&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btn-check001&quot;&gt;
            &lt;i class=&quot;ri-instagram-line&quot;&gt;&lt;/i&gt; Instagram
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check002&quot; autocomplete=&quot;off&quot; checked&gt;
        &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btn-check002&quot;&gt;
            &lt;i class=&quot;ri-twitter-line&quot;&gt;&lt;/i&gt; Twitter
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check003&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btn-check003&quot;&gt;
            &lt;i class=&quot;ri-facebook-line&quot;&gt;&lt;/i&gt; Facebook
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;checkbox&quot; class=&quot;btn-check&quot; id=&quot;btn-check004&quot; autocomplete=&quot;off&quot; checked&gt;
        &lt;label class=&quot;btn btn-outline-primary&quot; for=&quot;btn-check004&quot;&gt;
            &lt;i class=&quot;ri-linkedin-box-fill&quot;&gt;&lt;/i&gt; LinkedIn
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12 col-xl-6">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Radio With Icons</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="radio-with-icons" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-radio-with-icons-tab" data-bs-toggle="pill"
                                    data-bs-target="#html-radio-with-icons" type="button" role="tab"
                                    aria-controls="html-radio-with-icons" aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-radio-with-icons-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-radio-with-icons" type="button" role="tab"
                                    aria-controls="preview-radio-with-icons" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">No <code>props</code> are required when using the default style.</p>
                        <div class="tab-content" id="radio-with-icons">
                            <div class="tab-pane fade show active" id="html-radio-with-icons" role="tabpanel"
                                aria-labelledby="html-radio-with-icons-tab" tabindex="0">
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input type="radio" name="radioIcons" class="btn-check" id="btn-check011"
                                            autocomplete="off">
                                        <label class="btn btn-outline-info" for="btn-check011">
                                            <i class="ri-instagram-line"></i> Instagram
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="radioIcons" class="btn-check" id="btn-check012"
                                            autocomplete="off">
                                        <label class="btn btn-outline-info" for="btn-check012">
                                            <i class="ri-twitter-line"></i> Twitter
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="radioIcons" class="btn-check" id="btn-check013"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-info" for="btn-check013">
                                            <i class="ri-facebook-line"></i> Facebook
                                        </label>
                                    </div>
                                    <div>
                                        <input type="radio" name="radioIcons" class="btn-check" id="btn-check014"
                                            autocomplete="off">
                                        <label class="btn btn-outline-info" for="btn-check014">
                                            <i class="ri-linkedin-box-fill"></i> LinkedIn
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-radio-with-icons" role="tabpanel"
                                aria-labelledby="preview-radio-with-icons-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;d-flex flex-wrap gap-2&quot;&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; name=&quot;radioIcons&quot; class=&quot;btn-check&quot; id=&quot;btn-check011&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-info&quot; for=&quot;btn-check011&quot;&gt;
            &lt;i class=&quot;ri-instagram-line&quot;&gt;&lt;/i&gt; Instagram
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; name=&quot;radioIcons&quot; class=&quot;btn-check&quot; id=&quot;btn-check012&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-info&quot; for=&quot;btn-check012&quot;&gt;
            &lt;i class=&quot;ri-twitter-line&quot;&gt;&lt;/i&gt; Twitter
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; name=&quot;radioIcons&quot; class=&quot;btn-check&quot; id=&quot;btn-check013&quot; autocomplete=&quot;off&quot; checked&gt;
        &lt;label class=&quot;btn btn-outline-info&quot; for=&quot;btn-check013&quot;&gt;
            &lt;i class=&quot;ri-facebook-line&quot;&gt;&lt;/i&gt; Facebook
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;input type=&quot;radio&quot; name=&quot;radioIcons&quot; class=&quot;btn-check&quot; id=&quot;btn-check014&quot; autocomplete=&quot;off&quot;&gt;
        &lt;label class=&quot;btn btn-outline-info&quot; for=&quot;btn-check014&quot;&gt;
            &lt;i class=&quot;ri-linkedin-box-fill&quot;&gt;&lt;/i&gt; LinkedIn
        &lt;/label&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Payment Method Group</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="payment-method-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-payment-method-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-payment-method-group" type="button"
                                    role="tab" aria-controls="html-payment-method-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-payment-method-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-payment-method-group" type="button" role="tab"
                                    aria-controls="preview-payment-method-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="payment-method-group">
                            <div class="tab-pane fade show active" id="html-payment-method-group" role="tabpanel"
                                aria-labelledby="html-payment-method-group-tab" tabindex="0">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action d-flex align-items-center gap-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="payment-check1" value="visa">
                                        <label class="form-check-label" for="payment-check1">
                                            <span class="d-flex align-items-center">
                                                <img src="assets/images/cards/img-01.png" height="28"
                                                    alt="Visa">
                                                <span class="ms-2">
                                                    <span class="fs-6 fw-bold">Visa Card</span>
                                                    <span class="d-block text-muted">Fast and secure transactions with
                                                        your Visa card.</span>
                                                </span>
                                            </span>
                                        </label>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex align-items-center gap-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="payment-check2" value="mastercard">
                                        <label class="form-check-label" for="payment-check2">
                                            <span class="d-flex align-items-center">
                                                <img src="assets/images/cards/img-05.png" height="28"
                                                    alt="Visa">
                                                <span class="ms-2">
                                                    <span class="fs-6 fw-bold">MasterCard</span>
                                                    <span class="d-block text-muted">Enjoy flexibility with your
                                                        MasterCard for easy payments.</span>
                                                </span>
                                            </span>
                                        </label>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex align-items-center gap-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="payment-check3" value="paypal" checked>
                                        <label class="form-check-label" for="payment-check3">
                                            <span class="d-flex align-items-center">
                                                <img src="assets/images/cards/img-03.png" height="28"
                                                    alt="Visa">
                                                <span class="ms-2">
                                                    <span class="fs-6 fw-bold">PayPal</span>
                                                    <span class="d-block text-muted">Secure and convenient payments with
                                                        your PayPal account.</span>
                                                </span>
                                            </span>
                                        </label>
                                    </li>
                                    <li class="list-group-item list-group-item-action d-flex align-items-center gap-3">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="payment-check4" value="bitcoin">
                                        <label class="form-check-label" for="payment-check4">
                                            <span class="d-flex align-items-center">
                                                <img src="assets/images/cards/img-04.png" height="28"
                                                    alt="Visa">
                                                <span class="ms-2">
                                                    <span class="fs-6 fw-bold">Bitcoin</span>
                                                    <span class="d-block text-muted">Utilize your Bitcoin wallet for
                                                        secure transactions.</span>
                                                </span>
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="preview-payment-method-group" role="tabpanel"
                                aria-labelledby="preview-payment-method-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;ul class=&quot;list-group&quot;&gt;
    &lt;li class=&quot;list-group-item list-group-item-action d-flex align-items-center gap-3&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;payment-check1&quot; value=&quot;visa&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;payment-check1&quot;&gt;
            &lt;span class=&quot;d-flex align-items-center&quot;&gt;
                &lt;img src=&quot;assets/images/cards/img-01.png&quot; height=&quot;28&quot; alt=&quot;Visa&quot;&gt;
                &lt;span class=&quot;ms-2&quot;&gt;
                    &lt;span class=&quot;fs-6 fw-bold&quot;&gt;Visa Card&lt;/span&gt;
                    &lt;span class=&quot;d-block text-muted&quot;&gt;Fast and secure transactions with your Visa card.&lt;/span&gt;
                &lt;/span&gt;
            &lt;/span&gt;
        &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-action d-flex align-items-center gap-3&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;payment-check2&quot; value=&quot;mastercard&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;payment-check2&quot;&gt;
            &lt;span class=&quot;d-flex align-items-center&quot;&gt;
                &lt;img src=&quot;assets/images/cards/img-05.png&quot; height=&quot;28&quot; alt=&quot;Visa&quot;&gt;
                &lt;span class=&quot;ms-2&quot;&gt;
                    &lt;span class=&quot;fs-6 fw-bold&quot;&gt;MasterCard&lt;/span&gt;
                    &lt;span class=&quot;d-block text-muted&quot;&gt;Enjoy flexibility with your MasterCard for easy payments.&lt;/span&gt;
                &lt;/span&gt;
            &lt;/span&gt;
        &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-action d-flex align-items-center gap-3&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;payment-check3&quot; value=&quot;paypal&quot; checked&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;payment-check3&quot;&gt;
            &lt;span class=&quot;d-flex align-items-center&quot;&gt;
                &lt;img src=&quot;assets/images/cards/img-03.png&quot; height=&quot;28&quot; alt=&quot;Visa&quot;&gt;
                &lt;span class=&quot;ms-2&quot;&gt;
                    &lt;span class=&quot;fs-6 fw-bold&quot;&gt;PayPal&lt;/span&gt;
                    &lt;span class=&quot;d-block text-muted&quot;&gt;Secure and convenient payments with your PayPal account.&lt;/span&gt;
                &lt;/span&gt;
            &lt;/span&gt;
        &lt;/label&gt;
    &lt;/li&gt;
    &lt;li class=&quot;list-group-item list-group-item-action d-flex align-items-center gap-3&quot;&gt;
        &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;paymentMethod&quot; id=&quot;payment-check4&quot; value=&quot;bitcoin&quot;&gt;
        &lt;label class=&quot;form-check-label&quot; for=&quot;payment-check4&quot;&gt;
            &lt;span class=&quot;d-flex align-items-center&quot;&gt;
                &lt;img src=&quot;assets/images/cards/img-04.png&quot; height=&quot;28&quot; alt=&quot;Visa&quot;&gt;
                &lt;span class=&quot;ms-2&quot;&gt;
                    &lt;span class=&quot;fs-6 fw-bold&quot;&gt;Bitcoin&lt;/span&gt;
                    &lt;span class=&quot;d-block text-muted&quot;&gt;Utilize your Bitcoin wallet for secure transactions.&lt;/span&gt;
                &lt;/span&gt;
            &lt;/span&gt;
        &lt;/label&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->
            <div class="col-12">
                <div class="card card-h-100">
                    <div class="card-header d-flex align-items-center gap-3">
                        <h5 class="card-title mb-0 flex-grow-1">Images Checkbox Group</h5>
                        <ul class="nav nav-pills nav-preview nav-secondary mb-0" id="images-checkbox-group"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="html-images-checkbox-group-tab"
                                    data-bs-toggle="pill" data-bs-target="#html-images-checkbox-group" type="button"
                                    role="tab" aria-controls="html-images-checkbox-group"
                                    aria-selected="true">HTML</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="preview-images-checkbox-group-tab" data-bs-toggle="pill"
                                    data-bs-target="#preview-images-checkbox-group" type="button" role="tab"
                                    aria-controls="preview-images-checkbox-group" aria-selected="false">Preview</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="images-checkbox-group">
                            <div class="tab-pane fade show active" id="html-images-checkbox-group" role="tabpanel"
                                aria-labelledby="html-images-checkbox-group-tab" tabindex="0">
                                <div class="main-img-checkbox">
                                    <div class="row g-4">
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card-wrapper overflow-hidden">
                                                <div class="img-checkbox">
                                                    <input class="main-img-cover form-check-input" id="img-check-1"
                                                        type="checkbox">
                                                    <label class="form-check-label mb-0" for="img-check-1">
                                                        <img class="h-224px" src="assets/images/small/img-5.jpg"
                                                            alt="coffee-beans">
                                                    </label>
                                                </div>
                                            </div>
                                            <h6 class="sub-title text-center m-3 mb-0">Custom</h6>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card-wrapper overflow-hidden">
                                                <div class="img-checkbox">
                                                    <input class="main-img-cover form-check-input" id="img-check-2"
                                                        type="checkbox" checked>
                                                    <label class="form-check-label mb-0" for="img-check-2">
                                                        <img class="h-224px" src="assets/images/small/img-5.jpg"
                                                            alt="tree">
                                                    </label>
                                                </div>
                                            </div>
                                            <h6 class="sub-title text-center m-3 mb-0">Checked Image</h6>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card-wrapper overflow-hidden">
                                                <div class="img-checkbox">
                                                    <input class="main-img-cover form-check-input" id="img-check-3"
                                                        type="checkbox" disabled>
                                                    <label class="form-check-label mb-0" for="img-check-3">
                                                        <img class="h-224px" src="assets/images/small/img-5.jpg"
                                                            alt="flowers">
                                                    </label>
                                                </div>
                                            </div>
                                            <h6 class="sub-title text-center m-3 mb-0">Disabled Image</h6>
                                        </div>
                                        <div class="col-xxl-3 col-sm-6">
                                            <div class="card-wrapper overflow-hidden">
                                                <div class="img-checkbox">
                                                    <input class="main-img-cover form-check-input" id="img-check-4"
                                                        type="checkbox" disabled checked>
                                                    <label class="form-check-label mb-0" for="img-check-4">
                                                        <img class="h-224px" src="assets/images/small/img-5.jpg"
                                                            alt="rose-tea">
                                                    </label>
                                                </div>
                                            </div>
                                            <h6 class="sub-title text-center m-3 mb-0">Disabled Checked Image</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="preview-images-checkbox-group" role="tabpanel"
                                aria-labelledby="preview-images-checkbox-group-tab" tabindex="0">
                                <pre class="language-html"><code>&lt;div class=&quot;main-img-checkbox&quot;&gt;
    &lt;div class=&quot;row g-4&quot;&gt;
        &lt;div class=&quot;col-xxl-3 col-sm-6&quot;&gt;
            &lt;div class=&quot;card-wrapper overflow-hidden&quot;&gt;
                &lt;div class=&quot;img-checkbox&quot;&gt;
                    &lt;input class=&quot;main-img-cover form-check-input&quot; id=&quot;img-check-1&quot; type=&quot;checkbox&quot;&gt;
                    &lt;label class=&quot;form-check-label mb-0&quot; for=&quot;img-check-1&quot;&gt;
                        &lt;img class=&quot;h-224px&quot; src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;coffee-beans&quot;&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;h6 class=&quot;sub-title text-center m-3 mb-0&quot;&gt;Custom&lt;/h6&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xxl-3 col-sm-6&quot;&gt;
            &lt;div class=&quot;card-wrapper overflow-hidden&quot;&gt;
                &lt;div class=&quot;img-checkbox&quot;&gt;
                    &lt;input class=&quot;main-img-cover form-check-input&quot; id=&quot;img-check-2&quot; type=&quot;checkbox&quot; checked&gt;
                    &lt;label class=&quot;form-check-label mb-0&quot; for=&quot;img-check-2&quot;&gt;
                        &lt;img class=&quot;h-224px&quot; src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;tree&quot;&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;h6 class=&quot;sub-title text-center m-3 mb-0&quot;&gt;Checked Image&lt;/h6&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xxl-3 col-sm-6&quot;&gt;
            &lt;div class=&quot;card-wrapper overflow-hidden&quot;&gt;
                &lt;div class=&quot;img-checkbox&quot;&gt;
                    &lt;input class=&quot;main-img-cover form-check-input&quot; id=&quot;img-check-3&quot; type=&quot;checkbox&quot; disabled&gt;
                    &lt;label class=&quot;form-check-label mb-0&quot; for=&quot;img-check-3&quot;&gt;
                        &lt;img class=&quot;h-224px&quot; src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;flowers&quot;&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;h6 class=&quot;sub-title text-center m-3 mb-0&quot;&gt;Disabled Image&lt;/h6&gt;
        &lt;/div&gt;
        &lt;div class=&quot;col-xxl-3 col-sm-6&quot;&gt;
            &lt;div class=&quot;card-wrapper overflow-hidden&quot;&gt;
                &lt;div class=&quot;img-checkbox&quot;&gt;
                    &lt;input class=&quot;main-img-cover form-check-input&quot; id=&quot;img-check-4&quot; type=&quot;checkbox&quot; disabled checked&gt;
                    &lt;label class=&quot;form-check-label mb-0&quot; for=&quot;img-check-4&quot;&gt;
                        &lt;img class=&quot;h-224px&quot; src=&quot;assets/images/small/img-5.jpg&quot; alt=&quot;rose-tea&quot;&gt;
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;h6 class=&quot;sub-title text-center m-3 mb-0&quot;&gt;Disabled Checked Image&lt;/h6&gt;
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

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
