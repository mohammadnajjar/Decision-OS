@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')
@section('title-sub', 'Invoice')
@section('pagetitle', 'Details')
@section('content')


    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row justify-content-between mb-10">
                            <div class="col-2">
                                <img src="assets/images/logo-dark.png" alt="Logo Dark" height="30">
                            </div>
                            <div class="col-5 col-md-3 text-end">
                                <span class="badge bg-success mb-4">Paid</span>
                                <h5 class="mb-0">Invoice #INV12345</h5>
                            </div>
                        </div>
                        <div class="row g-5 border-bottom border-dashed py-4">
                            <div class="col-md-4">
                                <h5 class="mb-4">Customer Information:</h5>
                                <p><span class="fw-semibold">Name:</span> John Doe</p>
                                <p><span class="fw-semibold">Address:</span> 123 Main Street, Suite 4B, New York, NY 10001
                                </p>
                                <p><span class="fw-semibold">Email:</span> john.doe@example.com</p>
                                <p><span class="fw-semibold">Phone:</span> (123) 456-7890</p>
                            </div>
                            <div class="col-md-4 offset-md-1">
                                <h5 class="mb-4">Payment Information:</h5>
                                <p><span class="fw-semibold">Payment Method:</span> Credit Card</p>
                                <p><span class="fw-semibold">Payment Status:</span> Paid</p>
                                <p><span class="fw-semibold">Transaction ID:</span> TXN1234567890</p>
                                <p><span class="fw-semibold">Date Paid:</span> February 11, 2025</p>
                            </div>
                            <div class="col-md-3 text-end">
                                <p class="mb-3"><span class="fw-semibold">Invoice Date:</span> 12 Apr 2024</p>
                                <p class="mb-3"><span class="fw-semibold">Due Date:</span> 28 Apr 2024</p>
                                <img src="assets/images/apps/qr-code.svg" alt="QR Code" class="h-144px w-144px">
                            </div>
                        </div>
                        <div class="py-4">
                            <div class="mt-4">
                                <h5>Order Summary</h5>
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-borderless">
                                        <thead>
                                            <tr>
                                                <th class="w-50px">No.</th>
                                                <th>Description</th>
                                                <th class="w-256px">Quantity</th>
                                                <th class="w-256px">Unit Price</th>
                                                <th class="w-256px">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td class="fw-semibold">Website Design Service</td>
                                                <td>2</td>
                                                <td>$400.00</td>
                                                <td>$400.00</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td class="fw-semibold">Hosting Subscription (12 months)</td>
                                                <td>1</td>
                                                <td>$80.00</td>
                                                <td>$80.00</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td class="fw-semibold">SSL Certificate</td>
                                                <td>3</td>
                                                <td>$20.00</td>
                                                <td>$20.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Subtotal</td>
                                                <td class="fw-semibold">$500.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Tax <span
                                                        class="text-muted fw-normal fs-12">(8.5%)</span></td>
                                                <td class="fw-semibold">$42.50</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Discount <span
                                                        class="text-muted fw-normal fs-12">(7%)</span></td>
                                                <td class="fw-semibold">-$25.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Shipping<span
                                                        class="text-muted fw-normal fs-12">(Standard%)</span></td>
                                                <td class="fw-semibold">$10.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="fw-semibold">Total Amount Due</td>
                                                <td class="fw-semibold">$527.50</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="pt-8">
                            <img src="assets/images/apps/signature.png" alt="Signature" class="h-50px">
                            <p class="fw-semibold mb-5">Authorized Sign</p>
                            <div class="p-4 bg-light-subtle rounded text-center">
                                <p class="mb-1">Thank you for your business! If you have any questions regarding this
                                    invoice, please contact us at <span class="fw-semibold">info@example.com</span>.</p>
                                <p class="mb-0">This invoice is due in 30 days. A late fee of 1.5% per month will be
                                    charged if not paid by the due date.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-8 d-flex justify-content-end gap-3">
                    <button class="btn btn-light-primary">Print</button>
                    <button class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection

@section('js')
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
