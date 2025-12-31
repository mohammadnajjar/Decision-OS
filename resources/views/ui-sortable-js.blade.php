@extends('partials.layouts.master')

@section('title', 'UI Sortable JS | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Sortable JS')
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Simple list example </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Sortable.js offers simple list options like <code>animation</code> for
                            duration, <code>onEnd</code> for a callback after sorting, and <code>draggable</code> to define
                            draggable elements, making sortable lists interactive and user-friendly.</p>
                        <div id="js-sortable" class="list-group">
                            <div class="list-group-item">Item 1</div>
                            <div class="list-group-item">Item 2</div>
                            <div class="list-group-item">Item 3</div>
                            <div class="list-group-item">Item 4</div>
                            <div class="list-group-item">Item 5</div>
                            <div class="list-group-item">Item 6</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Filter </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The filter <code>'.sortablejs-custom-disabled'</code> in Sortable.js
                            prevents specific elements from being dragged. This keeps certain items in place while allowing
                            users to move others, improving control and user experience.</p>
                        <div id="js-sortable-7" class="list-group">
                            <div class="list-group-item">Item 1</div>
                            <div class="list-group-item sortablejs-custom-disabled bg-primary-subtle text-primary">Filtered
                            </div>
                            <div class="list-group-item">Item 3</div>
                            <div class="list-group-item">Item 4</div>
                            <div class="list-group-item">Item 5</div>
                            <div class="list-group-item">Item 6</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Shared lists </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The option <code>group: 'shared'</code> in Sortable.js enables
                            drag-and-drop sorting between multiple lists. By using the same group name, users can easily
                            move items between lists, enhancing interaction and organization.</p>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div id="js-sortable-2" class="list-group">
                                    <div class="list-group-item">Item 1</div>
                                    <div class="list-group-item">Item 2</div>
                                    <div class="list-group-item">Item 3</div>
                                    <div class="list-group-item">Item 4</div>
                                    <div class="list-group-item">Item 5</div>
                                    <div class="list-group-item">Item 6</div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div id="js-sortable-3" class="list-group">
                                    <div class="list-group-item bg-light-subtle">Item 1</div>
                                    <div class="list-group-item bg-light-subtle">Item 2</div>
                                    <div class="list-group-item bg-light-subtle">Item 3</div>
                                    <div class="list-group-item bg-light-subtle">Item 4</div>
                                    <div class="list-group-item bg-light-subtle">Item 5</div>
                                    <div class="list-group-item bg-light-subtle">Item 6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Disable & Clone sorting </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">in Sortable.js allows items to be cloned when dragged, letting users
                            duplicate items in another list. The <code>draggable="false"</code> attribute keeps specific
                            elements fixed, preventing them from being moved. These options enhance user control and
                            interaction.</p>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div id="js-sortable-4" class="list-group">
                                    <div class="list-group-item">Item 1</div>
                                    <div class="list-group-item">Item 2</div>
                                    <div class="list-group-item">Item 3</div>
                                    <div class="list-group-item">Item 4</div>
                                    <div class="list-group-item">Item 5</div>
                                    <div class="list-group-item">Item 6</div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div id="js-sortable-5" class="list-group">
                                    <div class="list-group-item bg-light-subtle">Item 1</div>
                                    <div class="list-group-item bg-light-subtle">Item 2</div>
                                    <div class="list-group-item" draggable="false">Item 3</div>
                                    <div class="list-group-item bg-light-subtle">Item 4</div>
                                    <div class="list-group-item bg-light-subtle">Item 5</div>
                                    <div class="list-group-item" draggable="false">Item 6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Handle </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The class <code>sortablejs-custom-handle</code> in Sortable.js designates
                            a specific icon or element as the drag handle for items. This improves usability by allowing
                            users to easily grab and move items, enhancing the overall user experience.</p>
                        <div id="js-sortable-6" class="list-group">
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 1
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 2
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 3
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 4
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 5
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 6
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 7
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 8
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 9
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="sortablejs-custom-handle me-2 cursor-pointer ri-drag-move-fill"></i>
                                Item 10
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Nested </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">A nested Sortable.js example lets users drag and drop items within
                            lists, allowing for hierarchical organization. This is ideal for task management, enabling
                            intuitive reordering of main tasks and subtasks.</p>
                        <!-- List Group -->
                        <div id="js-sortable-9" class="list-group">
                            <div class="list-group-item">Item 1</div>
                            <div class="list-group-item">Item 2</div>
                            <div class="list-group-item">
                                <h4 class="h5 mb-3">Item 3</h4>
                                <div id="js-sortable-10" class="list-group">
                                    <div class="list-group-item">Item 3.1</div>
                                    <div class="list-group-item">Item 3.2</div>
                                    <div class="list-group-item">Item 3.3</div>
                                    <div class="list-group-item">Item 3.4</div>
                                </div>
                            </div>
                            <div class="list-group-item">Item 4</div>
                            <div class="list-group-item">Item 5</div>
                            <div class="list-group-item">Item 6</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Filter </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The group element in Sortable.js enables users to drag and drop items
                            between sortable lists. Using the same group name allows easy movement of items, improving
                            organization in applications like project management.</p>
                        <div id="js-sortable-8" class="row">
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">1</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">2</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">3</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">4</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">5</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">6</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">7</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">8</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">9</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">10</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">11</div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">12</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">13</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">14</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">15</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">16</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">17</div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card border">
                                    <div class="card-body text-center">18</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Multiple Drag </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The option <code>multiDrag: true</code> in Sortable.js lets users select
                            and drag multiple items simultaneously. The <code>selectedClass: "active"</code> option
                            highlights selected items, enhancing user experience and feedback during interactions.</p>
                        <div id="js-sortable-11" class="list-group">
                            <div class="list-group-item">Item 1</div>
                            <div class="list-group-item">Item 2</div>
                            <div class="list-group-item">Item 3</div>
                            <div class="list-group-item">Item 4</div>
                            <div class="list-group-item">Item 5</div>
                            <div class="list-group-item">Item 6</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Swap </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The option <code>swap: true</code> in Sortable.js enables users to swap
                            two items during drag-and-drop. The <code>swapClass: "active"</code> highlights the items being
                            swapped, improving user feedback and making rearranging intuitive.</p>
                        <div id="js-sortable-12" class="list-group">
                            <div class="list-group-item">Item 1</div>
                            <div class="list-group-item">Item 2</div>
                            <div class="list-group-item">Item 3</div>
                            <div class="list-group-item">Item 4</div>
                            <div class="list-group-item">Item 5</div>
                            <div class="list-group-item">Item 6</div>
                        </div>
                    </div>
                </div>
            </div><!--End col-->

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Swap </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">The option <code>swap: true</code> in Sortable.js enables users to swap
                            two items during drag-and-drop. The <code>swapClass: "active"</code> highlights the items being
                            swapped, improving user feedback and making rearranging intuitive.</p>
                        <div id="nested-sortable-1" class="sortable-container list-group">
                            <div class="list-group-item">
                                <i class="ri-file-text-fill me-2"></i> Document 1
                            </div>
                            <div class="list-group-item">
                                <i class="ri-folder-fill me-2"></i> Project Files
                                <div id="nested-sortable-1-1" class="nested-sortable list-group mt-3">
                                    <div class="list-group-item">
                                        <i class="ri-image-fill me-2"></i> Image Assets
                                    </div>
                                    <div class="list-group-item">
                                        <i class="ri-code-s-slash-fill me-2"></i> Source Code
                                    </div>
                                    <div class="list-group-item">
                                        <i class="ri-pencil-fill me-2"></i> Documentation
                                    </div>
                                    <div class="list-group-item">
                                        <i class="ri-video-on-line me-2"></i> Video Clips
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <i class="ri-bar-chart-fill me-2"></i> Analytics Report
                            </div>
                            <div class="list-group-item">
                                <i class="ri-settings-fill me-2"></i> Settings
                            </div>
                        </div>

                        <div id="nested-sortable-2" class="sortable-container list-group mt-3">
                            <div class="list-group-item">
                                <i class="ri-user-fill me-2"></i> User Profiles
                            </div>
                            <div class="list-group-item">
                                <i class="ri-shopping-cart-fill me-2"></i> Shopping List
                            </div>
                            <div class="list-group-item">
                                <i class="ri-calendar-fill me-2"></i> Event Schedule
                            </div>
                            <div class="list-group-item">
                                <i class="ri-mail-fill me-2"></i> Inbox
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


    <script src="assets/libs/sortablejs/Sortable.min.js"></script>
    <script src="assets/js/ui/sortablejs.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>

@endsection
