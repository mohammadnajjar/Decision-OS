@extends('partials.layouts.master')

@section('title', 'UI Utilities | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Utilities')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Borders</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <h5 class="fs-13 mb-3">Border Placement</h5>
                            <p class="text-muted">Apply borders in Bootstrap using classes like <code>.border</code> for a
                                full border, <code>.border-top</code> for a top border, <code>.border-bottom</code> for a
                                bottom border, and similar classes for left and right. These classes help enhance the layout
                                and separation of elements.</p>
                            <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                <div
                                    class="border border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border</code></div>
                                <div
                                    class="border-top border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-top</code></div>
                                <div
                                    class="border-start border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-start</code></div>
                                <div
                                    class="border-bottom border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-bottom</code></div>
                                <div
                                    class="border-end border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-end</code></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 mb-3">Border Width</h5>
                            <p class="text-muted">Control border thickness in Bootstrap using classes like
                                <code>.border</code> for a default border and <code>.border-2</code> for a thicker border.
                                You can also use <code>.border-0</code> to remove borders entirely. These classes help you
                                adjust the visual weight of elements easily.</p>
                            <div class="d-flex align-items-start flex-wrap gap-4 text-center">
                                <div
                                    class="border border-0 border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-0</code></div>
                                <div
                                    class="border border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border</code></div>
                                <div
                                    class="border border-2 border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-2</code></div>
                                <div
                                    class="border border-3 border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-3</code></div>
                                <div
                                    class="border border-4 border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-4</code></div>
                                <div
                                    class="border border-5 border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-5</code></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 mb-3">Border Style</h5>
                            <p class="text-muted">Customize border styles in Bootstrap using classes like
                                <code>.border</code> for a solid border, <code>.border-dashed</code> for a dashed border,
                                and <code>.border-dotted</code> for a dotted border. These styles help add visual interest
                                to your components.</p>
                            <div class="d-flex align-items-start flex-wrap gap-4 text-center">
                                <div
                                    class="border border-solid border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-solid</code></div>
                                <div
                                    class="border border-dashed border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-dashed</code></div>
                                <div
                                    class="border border-dotted border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-dotted</code></div>
                                <div
                                    class="border border-outset border-secondary-subtle w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-outset</code></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 mb-3">Border Color</h5>
                            <p class="text-muted">Change border colors in Bootstrap using classes like
                                <code>.border-primary</code>, <code>.border-secondary</code>, and
                                <code>.border-danger</code>. You can also use custom color classes to match your design.
                                These classes allow you to easily style the borders of your components.</p>
                            <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                <div class="border border-primary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-primary</code></div>
                                <div class="border border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-secondary</code></div>
                                <div class="border border-success w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-success</code></div>
                                <div class="border border-info w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-info</code></div>
                                <div class="border border-warning w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-warning</code></div>
                                <div class="border border-danger w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-danger</code></div>
                                <div class="border border-dark w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-dark</code></div>
                                <div class="border border-light w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-light</code></div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5 class="fs-13 mb-3">Border Opacity</h5>
                            <p class="text-muted">Adjust border opacity in Bootstrap using classes like
                                <code>.border-opacity-10</code> to <code>.border-opacity-100</code>. These classes let you
                                control the transparency of borders, enhancing the visual style of your components while
                                maintaining readability.</p>
                            <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                <div
                                    class="border border-opacity-10 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-10</code></div>
                                <div
                                    class="border border-opacity-20 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-20</code></div>
                                <div
                                    class="border border-opacity-30 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-30</code></div>
                                <div
                                    class="border border-opacity-40 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-40</code></div>
                                <div
                                    class="border border-opacity-50 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-50</code></div>
                                <div
                                    class="border border-opacity-60 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-60</code></div>
                                <div
                                    class="border border-opacity-70 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-70</code></div>
                                <div
                                    class="border border-opacity-80 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-80</code></div>
                                <div
                                    class="border border-opacity-90 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-90</code></div>
                                <div
                                    class="border border-opacity-100 border-secondary w-96px h-96px d-flex flex-center bg-light-subtle p-1">
                                    <code>.border-opacity-100</code></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Border Radius</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Control border radius in Bootstrap using the <code>.rounded</code> class for
                            default rounding, <code>.rounded-top</code>, <code>.rounded-bottom</code> classes for specific
                            directions, <code>.rounded-circle</code> for circular elements, and <code>.rounded-0-5</code>
                            for a specific radius value. These classes enhance the visual appeal of your components.</p>
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="fs-13 mb-3">Border Radius Placement</h5>
                                <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                    <div
                                        class="border rounded border-primary w-96px h-96px d-flex flex-center bg-primary-subtle p-1">
                                        <code>.rounded</code></div>
                                    <div
                                        class="border rounded-top border-secondary w-96px h-96px d-flex flex-center bg-secondary-subtle p-1">
                                        <code>.rounded-top</code></div>
                                    <div
                                        class="border rounded-end border-success w-96px h-96px d-flex flex-center bg-success-subtle p-1">
                                        <code>.rounded-end</code></div>
                                    <div
                                        class="border rounded-bottom border-info w-96px h-96px d-flex flex-center bg-info-subtle p-1">
                                        <code>.rounded-bottom</code></div>
                                    <div
                                        class="border rounded-start border-warning w-96px h-96px d-flex flex-center bg-warning-subtle p-1">
                                        <code>.rounded-start</code></div>
                                    <div
                                        class="border rounded-circle border-danger w-96px h-96px d-flex flex-center bg-danger-subtle p-1">
                                        <code>.rounded-circle</code></div>
                                    <div
                                        class="border rounded-pill border-dark w-200px h-96px d-flex flex-center bg-dark-subtle p-1">
                                        <code>.rounded-pill</code></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <h5 class="fs-13 mb-3">Border Radius Size</h5>
                                <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                    <div
                                        class="border rounded-0 border-primary w-96px h-96px d-flex flex-center bg-primary-subtle p-1">
                                        <code>.rounded-0</code></div>
                                    <div
                                        class="border rounded-1 border-secondary w-96px h-96px d-flex flex-center bg-secondary-subtle p-1">
                                        <code>.rounded-1</code></div>
                                    <div
                                        class="border rounded-2 border-success w-96px h-96px d-flex flex-center bg-success-subtle p-1">
                                        <code>.rounded-2</code></div>
                                    <div
                                        class="border rounded-3 border-info w-96px h-96px d-flex flex-center bg-info-subtle p-1">
                                        <code>.rounded-3</code></div>
                                    <div
                                        class="border rounded-4 border-warning w-96px h-96px d-flex flex-center bg-warning-subtle p-1">
                                        <code>.rounded-4</code></div>
                                    <div
                                        class="border rounded-5 border-danger w-96px h-96px d-flex flex-center bg-danger-subtle p-1">
                                        <code>.rounded-5</code></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Breakpoints</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Bootstrap's breakpoints allow you to create responsive layouts by applying
                            classes like <code>.col-sm-*</code>, <code>.col-md-*</code>, and <code>.col-lg-*</code>. These
                            classes adjust column sizes at different screen widths, ensuring your design looks great on all
                            devices.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Breakpoint</th>
                                        <th>class infix</th>
                                        <th>Dimensions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Extra small</td>
                                        <td>None</td>
                                        <td>576px</td>
                                    </tr>
                                    <tr>
                                        <td>Small</td>
                                        <td><code>sm</code></td>
                                        <td>≥576px</td>
                                    </tr>
                                    <tr>
                                        <td>Medium</td>
                                        <td><code>md</code></td>
                                        <td>≥768px</td>
                                    </tr>
                                    <tr>
                                        <td>Large</td>
                                        <td><code>lg</code></td>
                                        <td>≥992px</td>
                                    </tr>
                                    <tr>
                                        <td>Extra large</td>
                                        <td><code>xl</code></td>
                                        <td>≥1200px</td>
                                    </tr>
                                    <tr>
                                        <td>Extra extra large</td>
                                        <td><code>xxl</code></td>
                                        <td>≥1400px</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Containers</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use Bootstrap's container classes to create responsive fixed-width or fluid
                            containers. Classes like <code>.container</code> provide a fixed width, while
                            <code>.container-fluid</code> stretches to the full width of the viewport, adapting to screen
                            size.</p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Content</th>
                                        <th>Extra small<div class="fw-normal">&lt;576px</div>
                                        </th>
                                        <th>Small<div class="fw-normal">≥576px</div>
                                        </th>
                                        <th>Medium<div class="fw-normal">≥768px</div>
                                        </th>
                                        <th>Large<div class="fw-normal">≥992px</div>
                                        </th>
                                        <th>X-Large<div class="fw-normal">≥1200px</div>
                                        </th>
                                        <th>XX-Large<div class="fw-normal">≥1400px</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.container</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-sm</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>540px</td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-md</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>720px</td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-lg</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>960px</td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-xl</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>1140px</td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-xxl</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td>1320px</td>
                                    </tr>
                                    <tr>
                                        <td><code>.container-fluid</code></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                        <td><span class="text-muted">100%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Theme colors</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Utilize Bootstrap's theme colors by applying classes like
                            <code>.text-primary</code> and <code>.bg-secondary</code> to elements. These classes enable you
                            to easily incorporate the predefined color palette, ensuring a consistent design throughout your
                            project.</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="p-3 text-bg-primary rounded-3">Primary</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-secondary rounded-3">Secondary</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-success rounded-3">Success</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-danger rounded-3">Danger</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-warning rounded-3">Warning</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-info rounded-3">Info</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-light rounded-3">Light</div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 text-bg-dark rounded-3">Dark</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Text colors</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="fs-13 mb-3">Text Theme Color</h5>
                                <p class="text-muted">Change text colors in Bootstrap using classes like
                                    <code>.text-primary</code>, <code>.text-secondary</code>, and others. These classes
                                    apply different colors to text based on the Bootstrap theme palette.</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-white bg-gray-500">.text-white</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-primary">.text-primary</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-secondary">.text-secondary</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-light bg-gray-500">.text-light</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-success">.text-success</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-info">.text-info</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-warning">.text-warning</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-danger">.text-danger</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-dark">.text-dark</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-muted">.text-muted</p>
                            </div>

                            <div class="col-xl-6">

                                <h5 class="fs-13 mb-3">Text Gray Color</h5>

                                <p class="text-muted">Use the <code>.text-gray-*</code> classes in Bootstrap to apply
                                    various shades of gray to text. The asterisk (*) represents different shades, allowing
                                    you to adjust the text color for a softer appearance.</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-100 bg-gray-500">.text-gray-100
                                </p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-200 bg-gray-500">.text-gray-200
                                </p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-300">.text-gray-300</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-400">.text-gray-400</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-500">.text-gray-500</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-600">.text-gray-600</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-700">.text-gray-700</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-800">.text-gray-800</p>
                                <p class="p-3 mb-3 rounded bg-light bg-opacity-40 text-gray-900">.text-gray-900</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Background</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <h5 class="fs-13 mb-3">Background Theme Color</h5>

                                <p class="text-muted">Apply background theme colors in Bootstrap using classes like
                                    <code>.bg-primary</code>, <code>.bg-secondary</code>, and others. These classes add
                                    color to the background based on the Bootstrap theme palette.</p>
                                <p class="rounded text-bg-light p-3 mb-3">.bg-light </p>
                                <p class="rounded text-bg-primary p-3 mb-3">.bg-primary </p>
                                <p class="rounded text-bg-secondary p-3 mb-3">.bg-secondary </p>
                                <p class="rounded text-bg-success p-3 mb-3">.bg-success </p>
                                <p class="rounded text-bg-info p-3 mb-3">.bg-info </p>
                                <p class="rounded text-bg-warning p-3 mb-3">.bg-warning </p>
                                <p class="rounded text-bg-danger p-3 mb-3">.bg-danger </p>
                                <p class="rounded text-bg-dark p-3 mb-3">.bg-dark </p>
                                <p class="rounded bg-body p-3 mb-3">.bg-body </p>
                            </div>

                            <div class="col-xl-6">
                                <h5 class="fs-13 mb-3">Background Light Color</h5>

                                <p class="text-muted">Use the <code>.bg-*-subtle</code> classes in Bootstrap to apply light
                                    background colors. The asterisk (*) represents any color from the Bootstrap color
                                    palette, providing a subtle and gentle tone to your elements.</p>
                                <p class="rounded bg-light-subtle text-light-emphasis p-3 mb-3">.bg-light-subtle </p>
                                <p class="rounded bg-primary-subtle text-primary-emphasis p-3 mb-3">.bg-primary-subtle </p>
                                <p class="rounded bg-secondary-subtle text-secondary-emphasis p-3 mb-3">
                                    .bg-secondary-subtle </p>
                                <p class="rounded bg-success-subtle text-success-emphasis p-3 mb-3">.bg-success-subtle </p>
                                <p class="rounded bg-info-subtle text-info-emphasis p-3 mb-3">.bg-info-subtle </p>
                                <p class="rounded bg-warning-subtle text-warning-emphasis p-3 mb-3">.bg-warning-subtle </p>
                                <p class="rounded bg-danger-subtle text-danger-emphasis p-3 mb-3">.bg-danger-subtle </p>
                                <p class="rounded bg-dark-subtle text-dark-emphasis p-3 mb-3">.bg-dark-subtle </p>
                            </div>

                            <div class="col-lg-12">
                                <h5 class="fs-13 my-3">Background Opacity</h5>
                                <p class="text-muted">Adjust background opacity in Bootstrap using the
                                    <code>.bg-opacity-*</code> classes, where * can be a value from 0 to 100. This controls
                                    the transparency of the background color, allowing for layered effects.</p>
                                <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                                    <div class="text-bg-primary bg-opacity-10 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-10</div>
                                    <div class="text-bg-primary bg-opacity-20 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-20</div>
                                    <div class="text-bg-primary bg-opacity-30 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-30</div>
                                    <div class="text-bg-primary bg-opacity-40 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-40</div>
                                    <div class="text-bg-primary bg-opacity-50 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-50</div>
                                    <div class="text-bg-primary bg-opacity-60 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-60</div>
                                    <div class="text-bg-primary bg-opacity-70 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-70</div>
                                    <div class="text-bg-primary bg-opacity-80 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-80</div>
                                    <div class="text-bg-primary bg-opacity-90 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-90</div>
                                    <div class="text-bg-primary bg-opacity-100 w-96px h-96px d-flex flex-center p-1">
                                        .bg-opacity-100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Text Selection</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Manage text selection in Bootstrap using classes like
                            <code>.user-select-all</code> to select all text, <code>.user-select-none</code> to disable
                            selection, and <code>.user-select-auto</code> for default behavior.</p>
                        <p class="user-select-all">This paragraph will be entirely selected when clicked by the user.</p>
                        <p class="user-select-auto">This paragraph has default select behavior.</p>
                        <p class="user-select-none mb-0">This paragraph will not be selectable when clicked by the user.
                        </p>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pointer Events</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Control pointer events in Bootstrap using <code>.pe-none</code> to
                            disable interactions and <code>.pe-auto</code> to enable them. These classes manage whether
                            elements can be clicked or hovered.</p>
                        <p><a href="javascript:void(0)" class="text-primary pe-none" tabindex="-1">This link</a> can not
                            be clicked.</p>
                        <p><a href="javascript:void(0)" class="text-primary pe-auto">This link</a> can be clicked (this is
                            default behavior).</p>
                        <p class="pe-none mb-0"><a href="javascript:void(0)" class="text-primary" tabindex="-1">This
                                link</a> can not be clicked because the <code>pointer-events</code> property is inherited
                            from its parent. However, <a href="javascript:void(0)" class="pe-auto">this link</a> has a
                            <code>pe-auto</code> class and can be clicked.</p>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Shadows</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Add shadow effects to elements in Bootstrap using classes like
                            <code>.shadow-sm</code> for small shadows, <code>.shadow</code> for regular shadows, and
                            <code>.shadow-lg</code> for larger shadows.</p>
                        <div class="d-flex align-items-start flex-wrap gap-4 text-center pb-4">
                            <div class="d-flex flex-center w-96px h-96px shadow-none p-3 bg-light rounded p-1">
                                <code>.shadow-none</code></div>
                            <div class="d-flex flex-center w-96px h-96px shadow-sm p-3 bg-light rounded p-1">
                                <code>.shadow-sm</code></div>
                            <div class="d-flex flex-center w-96px h-96px shadow p-3 bg-light rounded p-1">
                                <code>.shadow</code></div>
                            <div class="d-flex flex-center w-96px h-96px shadow-lg p-3 bg-light rounded p-1">
                                <code>.shadow-lg</code></div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Stacks - Vertical</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use the <code>.vstack</code> class in Bootstrap to stack elements
                            vertically, aligning them in a single column with spacing between items.</p>
                        <div class="vstack gap-3">
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">First item</div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">Second item</div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">Third item</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Stacks - Horizontal</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use the <code>.hstack</code> class in Bootstrap to stack elements
                            vertically with simple spacing.</p>
                        <div class="hstack gap-3">
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">First item</div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">Second item</div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">Third item</div>
                        </div>
                        <p class="text-muted my-3">The <code>.ms-auto</code> class in Bootstrap applies an automatic left
                            margin, pushing the element to the right.</p>
                        <div class="hstack gap-3">
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">First item</div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3 ms-auto">Second item
                            </div>
                            <div class="bg-primary-subtle border-primary-subtle rounded border p-3">Third item</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Text truncation</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use the <code>.text-truncate</code> class in Bootstrap to truncate text
                            with an ellipsis. Combine it with the <code>.max-w-200px</code> class to limit the text to a
                            maximum width of 200px, ensuring it fits within the container.</p>
                        <!-- Block level -->
                        <div class="row">
                            <div class="col-2 text-truncate">
                                This text is quite long, and will be truncated once displayed.
                            </div>
                        </div>
                        <!-- Inline level -->
                        <span class="d-inline-block text-truncate max-w-200px">
                            Use the <code>.text-truncate</code> class in Bootstrap to truncate text with an ellipsis.
                            Combine it with the <code>.max-w-200px</code> class to limit the text to a maximum width of
                            200px, ensuring it fits within the container.
                        </span>
                        <hr>
                        <!-- Inline level -->
                        <span class="text-truncate-2">
                            Use the <code>.text-truncate-2</code> class in Bootstrap to limit text to two lines and add an
                            ellipsis if the content exceeds this limit. This ensures the text remains concise and fits
                            within the designated space.
                        </span>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Float</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Use the <code>.text-truncate</code> class in Bootstrap to truncate text
                            with an ellipsis. Combine it with the <code>.max-w-200px</code> class to limit the text to a
                            maximum width of 200px, ensuring it fits within the container.</p>
                        <!-- Float start -->
                        <div class="float-start bg-primary-subtle border-primary-subtle rounded border p-3 me-2">Float
                            start</div>
                        <!-- Float end -->
                        <div class="float-end bg-primary-subtle border-primary-subtle rounded border p-3">Float end</div>
                        <div class="clearfix"></div>
                        <!-- Float none -->
                        <div class="float-none bg-primary-subtle border-primary-subtle rounded border p-3 mt-3">Float none
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Overflow</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">Adjust the <code>overflow</code> property on the fly with four default
                            values and classes. These classes are not responsive by default.</p>
                        <div class="d-md-flex flex-wrap gap-5">
                            <div
                                class="bg-light-subtle rounded overflow-auto p-3 mb-3 mb-md-0 me-md-3 text-muted max-h-100px max-w-256px">
                                This is an example of using <code>.overflow-auto</code> on an element with set width and
                                height dimensions. By design, this content will vertically scroll.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-hidden p-3 mb-3 mb-md-0 me-md-3 text-muted max-h-100px max-w-256px">
                                This is an example of using <code>.overflow-hidden</code> on an element with set width and
                                height dimensions.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-visible p-3 mb-3 mb-md-0 me-md-3 text-muted max-h-100px max-w-256px">
                                This is an example of using <code>.overflow-visible</code> on an element with set width and
                                height dimensions.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="bg-light-subtle rounded overflow-scroll p-3 text-muted max-h-100px max-w-256px">
                                This is an example of using <code>.overflow-scroll</code> on an element with set width and
                                height dimensions.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-x-auto p-3 mb-3 mb-md-0 me-md-3 w-100 max-h-100px max-w-256px text-nowrap">
                                <div><code>.overflow-x-auto</code> example on an element</div>
                                <div> with set width and height dimensions.</div>
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-x-hidden p-3 mb-3 mb-md-0 me-md-3 w-100 max-h-100px max-w-256px text-nowrap">
                                <div><code>.overflow-x-hidden</code> example</div>
                                <div>on an element with set width and height dimensions.</div>
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-x-visible p-3 mb-3 mb-md-0 me-md-3 w-100 max-h-100px max-w-256px text-nowrap">
                                <div><code>.overflow-x-visible</code> example </div>
                                <div>on an element with set width and height dimensions.</div>
                            </div>
                            <div
                                class="bg-light-subtle rounded overflow-x-scroll p-3 w-100 max-h-100px max-w-256px text-nowrap">
                                <div><code>.overflow-x-scroll</code> example on an element</div>
                                <div> with set width and height dimensions.</div>
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
