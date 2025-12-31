@extends('partials.layouts.master')

@section('title', 'Datatable Tables | FabKin Admin & Dashboards Template')

@section('title-sub', 'Base UI')
@section('pagetitle', 'Datatable')
@section('css')
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
@endsection
@section('content')

    <!--begin::App-->
    <div id="layout-wrapper">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!--start::card-->
                    <div class="card-header">
                        <h5 class="card-title mb-0"> Basic Datatable </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                            <code>.modal-content</code> to structure the modal, and trigger it with buttons or links using
                            <code>data-bs-toggle="modal"</code>.</p>
                        <!-- start:: Basic Datatable -->
                        <table id="default_datatable" class="table table-nowrap table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011-04-25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008-11-28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010-03-17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012-11-27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010-06-09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009-04-10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012-10-13</td>
                                    <td>$132,000</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end:: Basic Datatable -->
                    </div>
                </div>
                <!--end::card-->
                <div class="col-12">
                    <div class="card">
                        <!--start::card-->
                        <div class="card-header">
                            <h5 class="card-title mb-0"> Vertical Scroll Datatable </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                    class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                                <code>.modal-content</code> to structure the modal, and trigger it with buttons or links
                                using <code>data-bs-toggle="modal"</code>.</p>
                            <!-- start:: Vertical Scroll Datatable -->
                            <table id="scroll-vertical" class="table table-nowrap table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Sample Data -->
                                    <tr>
                                        <td>1</td>
                                        <td>Apple</td>
                                        <td>Fruit</td>
                                        <td>$1.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Banana</td>
                                        <td>Fruit</td>
                                        <td>$0.50</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Carrot</td>
                                        <td>Vegetable</td>
                                        <td>$0.30</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Dairy Milk</td>
                                        <td>Dairy</td>
                                        <td>$1.50</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Eggs</td>
                                        <td>Protein</td>
                                        <td>$2.00</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Fish</td>
                                        <td>Protein</td>
                                        <td>$5.00</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Bread</td>
                                        <td>Bakery</td>
                                        <td>$1.20</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Rice</td>
                                        <td>Grain</td>
                                        <td>$0.80</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Cheese</td>
                                        <td>Dairy</td>
                                        <td>$3.00</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Orange</td>
                                        <td>Fruit</td>
                                        <td>$1.20</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- end:: Vertical Scroll Datatable -->
                        </div>
                    </div>
                    <!--end::card-->
                </div>
                <div class="col-12">
                    <div class="card">
                        <!--start::card-->
                        <div class="card-header">
                            <h5 class="card-title mb-0"> Horizontal Scroll Datatable </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                    class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                                <code>.modal-content</code> to structure the modal, and trigger it with buttons or links
                                using <code>data-bs-toggle="modal"</code>.</p>
                            <!-- start:: Horizontal Scroll Datatable -->
                            <table id="scroll-horizontal" class="table table-nowrap table-striped table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Attendance Status</th>
                                        <th>Date</th>
                                        <th>Grade</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Guardian Name</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Alice</td>
                                        <td>Math 101</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 123-4567</td>
                                        <td>alice@example.com</td>
                                        <td>Mary</td>
                                        <td>On time</td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Bob</td>
                                        <td>Math 101</td>
                                        <td>Absent</td>
                                        <td>2023-10-01</td>
                                        <td>B</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>(555) 234-5678</td>
                                        <td>bob@example.com</td>
                                        <td>John</td>
                                        <td>Illness</td>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>Charlie</td>
                                        <td>Biology 202</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A-</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 345-6789</td>
                                        <td>charlie@example.com</td>
                                        <td>Sarah</td>
                                        <td>Participated actively</td>
                                    </tr>
                                    <tr>
                                        <td>104</td>
                                        <td>Dana</td>
                                        <td>History 101</td>
                                        <td>Late</td>
                                        <td>2023-10-01</td>
                                        <td>B+</td>
                                        <td>08:40 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 456-7890</td>
                                        <td>dana@example.com</td>
                                        <td>Michael</td>
                                        <td>10 minutes late</td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>Edward</td>
                                        <td>Chemistry 303</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 567-8901</td>
                                        <td>edward@example.com</td>
                                        <td>Linda</td>
                                        <td>Completed assignment</td>
                                    </tr>
                                    <tr>
                                        <td>106</td>
                                        <td>Fiona</td>
                                        <td>History 101</td>
                                        <td>Absent</td>
                                        <td>2023-10-01</td>
                                        <td>B</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>(555) 678-9012</td>
                                        <td>fiona@example.com</td>
                                        <td>Robert</td>
                                        <td>Family emergency</td>
                                    </tr>
                                    <tr>
                                        <td>107</td>
                                        <td>George</td>
                                        <td>Math 101</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>B+</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 789-0123</td>
                                        <td>george@example.com</td>
                                        <td>Anna</td>
                                        <td>Participated in group work</td>
                                    </tr>
                                    <tr>
                                        <td>108</td>
                                        <td>Hannah</td>
                                        <td>Biology 202</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A-</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 890-1234</td>
                                        <td>hannah@example.com</td>
                                        <td>Paul</td>
                                        <td>Asked questions</td>
                                    </tr>
                                    <tr>
                                        <td>109</td>
                                        <td>Ian</td>
                                        <td>Chemistry 303</td>
                                        <td>Absent</td>
                                        <td>2023-10-01</td>
                                        <td>B-</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>(555) 901-2345</td>
                                        <td>ian@example.com</td>
                                        <td>Grace</td>
                                        <td>On vacation</td>
                                    </tr>
                                    <tr>
                                        <td>110</td>
                                        <td>Jack</td>
                                        <td>History 101</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 012-3456</td>
                                        <td>jack@example.com</td>
                                        <td>Lisa</td>
                                        <td>Great participation</td>
                                    </tr>
                                    <tr>
                                        <td>111</td>
                                        <td>Kelly</td>
                                        <td>Math 101</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>A+</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 123-4568</td>
                                        <td>kelly@example.com</td>
                                        <td>David</td>
                                        <td>Outstanding work</td>
                                    </tr>
                                    <tr>
                                        <td>112</td>
                                        <td>Michael</td>
                                        <td>Biology 202</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>B+</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 234-5679</td>
                                        <td>michael@example.com</td>
                                        <td>Rachel</td>
                                        <td>Active in discussions</td>
                                    </tr>
                                    <tr>
                                        <td>113</td>
                                        <td>Linda</td>
                                        <td>Chemistry 303</td>
                                        <td>Absent</td>
                                        <td>2023-10-01</td>
                                        <td>C</td>
                                        <td>N/A</td>
                                        <td>N/A</td>
                                        <td>(555) 345-6780</td>
                                        <td>linda@example.com</td>
                                        <td>Tom</td>
                                        <td>Missed class for competition</td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>Oliver</td>
                                        <td>History 101</td>
                                        <td>Present</td>
                                        <td>2023-10-01</td>
                                        <td>B</td>
                                        <td>08:30 AM</td>
                                        <td>03:00 PM</td>
                                        <td>(555) 456-7891</td>
                                        <td>oliver@example.com</td>
                                        <td>Susan</td>
                                        <td>Excellent engagement</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end:: Horizontal Scroll Datatable -->
                        </div>
                    </div>
                    <!--end::card-->
                </div>
                <div class="col-12">
                    <div class="card">
                        <!--start::card-->
                        <div class="card-header">
                            <h5 class="card-title mb-0"> Alternative Pagination Datatable </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                    class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                                <code>.modal-content</code> to structure the modal, and trigger it with buttons or links
                                using <code>data-bs-toggle="modal"</code>.</p>
                            <!-- start:: Alternative Pagination Datatable -->
                            <table id="alternative-pagination"
                                class="table table-nowrap table-striped table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>John Doe</td>
                                        <td>Marketing</td>
                                        <td>$50,000</td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Jane Smith</td>
                                        <td>Finance</td>
                                        <td>$60,000</td>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>Mike Johnson</td>
                                        <td>IT</td>
                                        <td>$70,000</td>
                                    </tr>
                                    <tr>
                                        <td>104</td>
                                        <td>Emily Davis</td>
                                        <td>HR</td>
                                        <td>$55,000</td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>Robert Brown</td>
                                        <td>Sales</td>
                                        <td>$65,000</td>
                                    </tr>
                                    <tr>
                                        <td>106</td>
                                        <td>Linda Wilson</td>
                                        <td>Marketing</td>
                                        <td>$52,000</td>
                                    </tr>
                                    <tr>
                                        <td>107</td>
                                        <td>David Martinez</td>
                                        <td>IT</td>
                                        <td>$75,000</td>
                                    </tr>
                                    <tr>
                                        <td>108</td>
                                        <td>Sarah Garcia</td>
                                        <td>Finance</td>
                                        <td>$68,000</td>
                                    </tr>
                                    <tr>
                                        <td>109</td>
                                        <td>James Rodriguez</td>
                                        <td>HR</td>
                                        <td>$58,000</td>
                                    </tr>
                                    <tr>
                                        <td>110</td>
                                        <td>Mary Wilson</td>
                                        <td>Sales</td>
                                        <td>$63,000</td>
                                    </tr>
                                    <tr>
                                        <td>111</td>
                                        <td>Alice Taylor</td>
                                        <td>Marketing</td>
                                        <td>$54,000</td>
                                    </tr>
                                    <tr>
                                        <td>112</td>
                                        <td>Tom Harris</td>
                                        <td>Finance</td>
                                        <td>$62,000</td>
                                    </tr>
                                    <tr>
                                        <td>113</td>
                                        <td>Susan Clark</td>
                                        <td>IT</td>
                                        <td>$72,000</td>
                                    </tr>
                                    <tr>
                                        <td>114</td>
                                        <td>Brian Lee</td>
                                        <td>HR</td>
                                        <td>$57,000</td>
                                    </tr>
                                    <tr>
                                        <td>115</td>
                                        <td>Jennifer Walker</td>
                                        <td>Sales</td>
                                        <td>$66,000</td>
                                    </tr>
                                    <tr>
                                        <td>116</td>
                                        <td>Michael Hall</td>
                                        <td>Marketing</td>
                                        <td>$51,000</td>
                                    </tr>
                                    <tr>
                                        <td>117</td>
                                        <td>Laura Young</td>
                                        <td>Finance</td>
                                        <td>$69,000</td>
                                    </tr>
                                    <tr>
                                        <td>118</td>
                                        <td>Kevin Hernandez</td>
                                        <td>IT</td>
                                        <td>$74,000</td>
                                    </tr>
                                    <tr>
                                        <td>119</td>
                                        <td>Rachel King</td>
                                        <td>HR</td>
                                        <td>$59,000</td>
                                    </tr>
                                    <tr>
                                        <td>120</td>
                                        <td>Daniel Wright</td>
                                        <td>Sales</td>
                                        <td>$67,000</td>
                                    </tr>
                                    <tr>
                                        <td>121</td>
                                        <td>Steve Johnson</td>
                                        <td>Marketing</td>
                                        <td>$53,000</td>
                                    </tr>
                                    <tr>
                                        <td>122</td>
                                        <td>Barbara Lewis</td>
                                        <td>Finance</td>
                                        <td>$61,000</td>
                                    </tr>
                                    <tr>
                                        <td>123</td>
                                        <td>Mark Robinson</td>
                                        <td>IT</td>
                                        <td>$78,000</td>
                                    </tr>
                                    <tr>
                                        <td>124</td>
                                        <td>Patricia Clark</td>
                                        <td>HR</td>
                                        <td>$56,000</td>
                                    </tr>
                                    <tr>
                                        <td>125</td>
                                        <td>George Hall</td>
                                        <td>Sales</td>
                                        <td>$64,000</td>
                                    </tr>
                                    <tr>
                                        <td>126</td>
                                        <td>Emma Allen</td>
                                        <td>Marketing</td>
                                        <td>$55,000</td>
                                    </tr>
                                    <tr>
                                        <td>127</td>
                                        <td>David Taylor</td>
                                        <td>Finance</td>
                                        <td>$63,000</td>
                                    </tr>
                                    <tr>
                                        <td>128</td>
                                        <td>Olivia Martin</td>
                                        <td>IT</td>
                                        <td>$76,000</td>
                                    </tr>
                                    <tr>
                                        <td>129</td>
                                        <td>James Lee</td>
                                        <td>HR</td>
                                        <td>$58,000</td>
                                    </tr>
                                    <tr>
                                        <td>130</td>
                                        <td>Maria Scott</td>
                                        <td>Sales</td>
                                        <td>$69,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end:: Alternative Pagination Datatable -->
                        </div>
                    </div>
                    <!--end::card-->
                </div>
                <div class="col-12">
                    <div class="card">
                        <!--start::card-->
                        <div class="card-header">
                            <h5 class="card-title mb-0"> Buttons Datatables </h5>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-4">Create a modal view using Bootstrap by adding a <code>&lt;div
                                    class="modal"&gt;</code> container. Use <code>.modal-dialog</code> and
                                <code>.modal-content</code> to structure the modal, and trigger it with buttons or links
                                using <code>data-bs-toggle="modal"</code>.</p>
                            <!-- start:: Buttons Datatables -->
                            <table id="buttons-datatables" class="table table-nowrap table-striped table-bordered w-100">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>301</td>
                                        <td>Laura</td>
                                        <td>laura@example.com</td>
                                        <td>(123) 456-7890</td>
                                    </tr>
                                    <tr>
                                        <td>302</td>
                                        <td>Tom</td>
                                        <td>tom@example.com</td>
                                        <td>(234) 567-8901</td>
                                    </tr>
                                    <tr>
                                        <td>303</td>
                                        <td>Lisa</td>
                                        <td>lisa@example.com</td>
                                        <td>(345) 678-9012</td>
                                    </tr>
                                    <tr>
                                        <td>304</td>
                                        <td>Mark</td>
                                        <td>mark@example.com</td>
                                        <td>(456) 789-0123</td>
                                    </tr>
                                    <tr>
                                        <td>305</td>
                                        <td>Sara</td>
                                        <td>sara@example.com</td>
                                        <td>(567) 890-1234</td>
                                    </tr>
                                    <tr>
                                        <td>306</td>
                                        <td>Kevin</td>
                                        <td>kevin@example.com</td>
                                        <td>(678) 901-2345</td>
                                    </tr>
                                    <tr>
                                        <td>307</td>
                                        <td>Olivia</td>
                                        <td>olivia@example.com</td>
                                        <td>(789) 012-3456</td>
                                    </tr>
                                    <tr>
                                        <td>308</td>
                                        <td>David</td>
                                        <td>david@example.com</td>
                                        <td>(890) 123-4567</td>
                                    </tr>
                                    <tr>
                                        <td>309</td>
                                        <td>Anna</td>
                                        <td>anna@example.com</td>
                                        <td>(901) 234-5678</td>
                                    </tr>
                                    <tr>
                                        <td>310</td>
                                        <td>Brian</td>
                                        <td>brian@example.com</td>
                                        <td>(012) 345-6789</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end:: Buttons Datatables -->
                        </div>
                    </div>
                    <!--end::card-->
                </div>
            </div>

        </div><!--End row-->
    </div><!--End container-fluid-->
    </main><!--End app-wrapper-->

@endsection

@section('js')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script src="assets/js/table/datatable.init.js"></script>
    <script type="module" src="assets/js/app.js"></script>
@endsection
