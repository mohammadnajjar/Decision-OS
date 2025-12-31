@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Invoice')
@section('pagetitle', 'Create')

@section('css')
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/dropzone/dropzone.css">
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="card-title mb-0 fw-semibold">New Invoice</h6>
                        <div class="d-flex gap-3">
                            <button class="btn btn-light-light text-body icon-btn"><i
                                    class="bi bi-arrow-clockwise"></i></button>
                            <button class="btn btn-light-light text-body icon-btn"><i class="bi bi-printer"></i></button>
                            <button class="btn btn-light-light text-body icon-btn"><i class="bi bi-save"></i></button>
                            <button class="btn btn-light-light text-body icon-btn"><i class="bi bi-download"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between mb-10">
                            <div class="col-md-5 col-xl-3 col-xxl-2">
                                <label for="my-dropzone" class="form-label">Company Logo :</label>
                                <div class="file-upload dropzone" id="my-dropzone"></div>
                            </div>
                            <div class="col-md-5 col-xl-3">
                                <div class="mb-4">
                                    <label for="status" class="form-label">Status :</label>
                                    <select id="status">
                                        <option value="javascript">Paid</option>
                                        <option value="python">Unpaid</option>
                                        <option value="java">Cancelled</option>
                                        <option value="csharp">Refunded</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="invoice" class="form-label">Invoice No :</label>
                                    <input type="text" class="form-control" id="invoice" placeholder="00012345"
                                        name="invoice" required>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4 border-bottom border-dashed py-4">
                            <div class="col-md-6 col-xl-4">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name :</label>
                                        <input type="text" class="form-control" id="name" placeholder="Full Name"
                                            name="name" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address :</label>
                                        <textarea name="address" class="form-control" id="address" rows="3" placeholder="Address"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email :</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email"
                                            name="email" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="phoneNumber" class="form-label">Phone :</label>
                                        <input type="text" class="form-control" id="phoneNumber"
                                            placeholder="+1 (000) 000 0000" name="phoneNumber" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="row g-4">
                                    <div class="col-12">
                                        <label for="paymentMethod" class="form-label">Payment Method:</label>
                                        <input type="text" class="form-control" id="paymentMethod"
                                            placeholder="Payment method (e.g., Credit Card)">
                                    </div>
                                    <div class="col-12">
                                        <label for="paymentStatus" class="form-label">Payment Status:</label>
                                        <select id="paymentStatus">
                                            <option value="javascript">Paid</option>
                                            <option value="python">Unpaid</option>
                                            <option value="java">Cancelled</option>
                                            <option value="csharp">Refunded</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="transactionId" class="form-label">Transaction ID:</label>
                                        <input type="text" class="form-control" id="transactionId"
                                            placeholder="Transaction ID">
                                    </div>
                                    <div class="col-12">
                                        <label for="human-friendly-picker1" class="form-label">Date Paid:</label>
                                        <input type="text" class="form-control" id="human-friendly-picker1"
                                            placeholder="Select a date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="human-friendly-picker2" class="form-label">Invoice Date:</label>
                                        <input type="text" class="form-control" id="human-friendly-picker2"
                                            placeholder="Select a date">
                                    </div>
                                    <div class="col-12">
                                        <label for="human-friendly-picker3" class="form-label">Due Date:</label>
                                        <input type="text" class="form-control" id="human-friendly-picker3"
                                            placeholder="Select a date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table text-nowrap align-middle table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="w-50px">No.</th>
                                                <th>Description</th>
                                                <th class="w-256px">Quantity</th>
                                                <th class="w-256px">Unit Price</th>
                                                <th class="w-256px">Amount</th>
                                                <th class="w-50px"><i class="bi bi-three-dots"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>
                                                    <input type="text" class="form-control mb-3" id="name"
                                                        placeholder="Item description" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="name"
                                                        placeholder="Quantity" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Price" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                                <td>
                                                    <button class="btn btn-text-danger icon-btn"><i
                                                            class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>
                                                    <input type="text" class="form-control mb-3" id="name"
                                                        placeholder="Item description" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" id="name"
                                                        placeholder="Quantity" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Price" name="name" required>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                                <td>
                                                    <button class="btn btn-text-danger icon-btn"><i
                                                            class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="border-bottom-0">
                                                    <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Add
                                                        Item</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Subtotal</td>
                                                <td colspan="2" class="fw-semibold">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Tax <span
                                                        class="text-muted fw-normal fs-12">(8.5%)</span></td>
                                                <td colspan="2" class="fw-semibold">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Discount <span
                                                        class="text-muted fw-normal fs-12">(7%)</span></td>
                                                <td colspan="2" class="fw-semibold">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Shipping <span
                                                        class="text-muted fw-normal fs-12">(Standard)</span></td>
                                                <td colspan="2" class="fw-semibold">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Total Amount Due</td>
                                                <td colspan="2" class="fw-semibold">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="$0.00" name="name" required>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="pt-8">
                            <img src="assets/images/apps/signature.png" alt="Signature Image" class="h-50px">
                            <p class="fw-semibold mb-5">Authorized Sign</p>
                            <textarea name="address" class="form-control" id="address" rows="4" placeholder="Note..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-8 d-flex justify-content-end gap-3">
                    <button class="btn btn-light-primary">Cancel</button>
                    <button class="btn btn-primary"><i class="bi bi-plus-lg me-1"></i>Create Invoice</button>
                </div>
            </div>
        </div>

    </div>
    </main>

@endsection

@section('js')

    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>

    <script src="assets/libs/dropzone/dropzone-min.js"></script>

    <script src="assets/js/app/invoice-create.init.js"></script>

    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
