@extends('partials.layouts.master')

@section('title', 'Index | FabKin Admin & Dashboards Template')

@section('title-sub', 'Logistics')
@section('pagetitle', 'Create')
@section('css')
    <!-- Picker CSS -->
    <link rel="stylesheet" href="assets/libs/air-datepicker/air-datepicker.css">
    <!-- Choices css -->
    <link rel="stylesheet" href="assets/libs/choices.js/public/assets/styles/choices.min.css">
    <link rel="stylesheet" href="assets/libs/leaflet/leaflet.css">
@endsection
@section('content')

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="row">
            <div class="col-xl-8 col-xxl-9">
                <form>
                    <div>
                        <div class="card">
                            <span></span>
                            <!-- Logistics Details Section -->
                            <div class="card-header">
                                <h5 class="mb-0">Where are you sending to?</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-xl-4">
                                        <label for="logisticsName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="logisticsName"
                                            placeholder="Enter name" required>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="pickupLocation" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="pickupLocation"
                                            placeholder="Enter email" required>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="logisticsType" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="logisticsType"
                                            placeholder="Enter Company Name" required>

                                    </div>
                                    <div class="col-xl-4">
                                        <label for="dropOffLocation" class="form-label">Pincode</label>
                                        <input type="number" class="form-control" id="dropOffLocation"
                                            placeholder="Pincode" required>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="state" class="form-label">State</label>
                                        <select id="state" class="form-select" required>
                                            <option value="tn">Tamil Nadu</option>
                                            <option value="mh">Maharashtra</option>
                                            <option value="ka">Karnataka</option>
                                            <option value="up">Uttar Pradesh</option>
                                            <option value="dl">Delhi</option>
                                            <option value="wb">West Bengal</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="city" class="form-label">City</label>
                                        <select id="city" class="form-select" required>
                                            <option value="chennai">Chennai</option>
                                            <option value="coimbatore">Coimbatore</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="pune">Pune</option>
                                            <option value="bangalore">Bangalore</option>
                                            <option value="mysore">Mysore</option>
                                            <option value="lucknow">Lucknow</option>
                                            <option value="kanpur">Kanpur</option>
                                            <option value="delhi">Delhi</option>
                                            <option value="gurugram">Gurugram</option>
                                            <option value="kolkata">Kolkata</option>
                                            <option value="howrah">Howrah</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="phoneNumber" class="form-label">Phone No.</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-secondary-200"
                                                id="formatted-contact">+91</span>
                                            <input type="text" class="form-control" id="phoneNumber"
                                                name="formatted-contact" placeholder="(123) (456) (7890)">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="phoneNumber1" class="form-label">Alternative No.</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-secondary-200"
                                                id="formatted-contact">+91</span>
                                            <input type="text" class="form-control" id="phoneNumber1"
                                                name="formatted-contact" placeholder="(123) (456) (7890)">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" value="address"
                                                id="flexCheckDisabled">
                                            <label class="form-check-label" for="flexCheckDisabled">
                                                Billing address same as delivery address
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card">
                            <span></span>
                            <!-- Order Details Section -->
                            <div class="card-header">
                                <h5 class="mb-0">Order Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-xl-4">
                                        <label for="orderNumber" class="form-label">Order Number</label>
                                        <input type="text" class="form-control" id="orderNumber"
                                            placeholder="Enter order number" required>
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="human-friendly-picker1" class="form-label">Order Date</label>
                                        <input type="text" class="form-control" id="human-friendly-picker1"
                                            placeholder="Select a date">
                                    </div>
                                    <div class="col-xl-4">
                                        <label for="human-friendly-picker2" class="form-label">Expected Delivery
                                            Date</label>
                                        <input type="text" class="form-control" id="human-friendly-picker2"
                                            placeholder="Select a date">
                                    </div>
                                    <div class="col-12">
                                        <label for="cargoDetails" class="form-label">Cargo Details</label>
                                        <textarea class="form-control" id="cargoDetails" rows="4"
                                            placeholder="Provide cargo details like weight, type, and description"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="specialInstructions" class="form-label">Special
                                            Instructions</label>
                                        <textarea class="form-control" id="specialInstructions" rows="3"
                                            placeholder="Enter any special instructions for handling or delivery"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <span></span>
                            <!-- Contact Information Section -->
                            <div class="card-header">
                                <h5 class="mb-0">Contact Information</h5>
                            </div>
                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-xl-6">
                                        <label for="contactName" class="form-label">Contact Person
                                            Name</label>
                                        <input type="text" class="form-control" id="contactName"
                                            placeholder="Enter contact person's name" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="contactPhone" class="form-label">Contact Phone</label>
                                        <input type="tel" class="form-control" id="contactPhone"
                                            placeholder="Enter contact phone number" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="contactEmail" class="form-label">Contact Email</label>
                                        <input type="email" class="form-control" id="contactEmail"
                                            placeholder="Enter contact email address" required>
                                    </div>
                                    <div class="col-xl-6">
                                        <label for="contactFax" class="form-label">Fax Number
                                            (Optional)</label>
                                        <input type="text" class="form-control" id="contactFax"
                                            placeholder="Enter fax number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-3 my-5">
                        <button type="submit" class="btn btn-light-light text-muted">Cancel</button>
                        <button type="submit" class="btn btn-primary">Create Logistics Entry</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-4 col-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h-256px rounded-2 bg-light w-100">
                            <div class="w-100 h-100" id="leaflet_map_popup"></div>
                        </div>
                        <div class="pt-5">
                            <div class="d-flex justify-content-between align-items-center mb-6">
                                <h5 class="mb-0">Logistic</h5>
                                <button class="btn btn-outline-light text-muted rounded-pill btn-sm">Sort
                                    By</button>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 logistics-service">
                                <div class="d-flex align-items-center gap-4">
                                    <h6 class="mb-0">BlueDart</h6>
                                </div>
                                <div class="fw-medium"><i class="bi bi-star-fill text-warning me-1"></i>4.1</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 logistics-service">
                                <div class="d-flex align-items-center gap-4">
                                    <h6 class="mb-0">Ekart</h6>
                                </div>
                                <div class="fw-medium"><i class="bi bi-star-fill text-warning me-1"></i>3.9</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-2 p-2 logistics-service">
                                <div class="d-flex align-items-center gap-4">
                                    <h6 class="mb-0">Fedex</h6>
                                </div>
                                <div class="fw-medium"><i class="bi bi-star-fill text-warning p-2 me-1"></i>4.5</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center logistics-service p-2">
                                <div class="d-flex align-items-center gap-4">
                                    <h6 class="mb-0">Delivery</h6>
                                </div>
                                <div class="fw-medium"><i class="bi bi-star-fill text-warning me-1"></i>4.0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Submit Section -->
    </div>
    </main>

@endsection

@section('js')

    <!-- Leaf js -->
    <script src="assets/libs/leaflet/leaflet.js"></script>
    <!-- Select js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Datepicker Js -->
    <script src="assets/libs/air-datepicker/air-datepicker.js"></script>
    <!-- File js -->
    <script src="assets/js/app/logistic-create.init.js"></script>
    <!-- App js -->
    <script type="module" src="assets/js/app.js"></script>
@endsection
