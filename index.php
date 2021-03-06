<?php include('header.php') ?>
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Form Wizard</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Library</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-12 mb-4">
                    <h5 class="mb-4">Validation</h5>
                    <div class="mb-4">
                        <!-- multistep form -->
                            <!-- progressbar -->
                            <div class="row multi_step_form">
                                <div class="col-lg-4 col-md-4 col-sm-12 tab_sections">
                                    <ul id="progressbar" class="card-body card">
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Company
                                            Information</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Company
                                            Document</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Contact Person
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Banking Detail
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Tax Detail</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Office Scope
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Fee Charges
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Finish</li>
                                    </ul>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
									<form id="msform" action="#" method="POST" class="card-body card">

                                    <div class="tab">
                                        <div class="card-body pt-0" id="head_office">
                                            <h5 class="mb-4">Head Office Information</h5>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Company Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" placeholder=""
                                                            name="company_address" required />
                                                        <span>Address</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Country</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select required class="form-control select2-single" name="company_state" data-width="100%">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>State</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select required class="form-control select2-single"
                                                            data-width="100%" name="company_city">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>City</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required id="phone"
                                                            name="company_contact" type="tel">
                                                        <span>Contact No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required type="tel"
                                                            name="company_telephone">
                                                        <span>Telephone No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required type="number"
                                                            name="company_registeration_number">
                                                        <span>Company Registeration No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required type="number"
                                                            name="company_license_number">
                                                        <span>Business Licence No</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h3>Type Of Office : </h3>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Properitorship" name="typeofoffice"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Properitorship">Properitorship</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="LimitedCompany" name="typeofoffice"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="LimitedCompany">Limited Company</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Corporation" name="typeofoffice"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Corporation">Corporation</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="PartnerShip" name="typeofoffice"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="PartnerShip">PartnerShip</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Others" name="typeofoffice"
                                                            class="other_radio custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Others">Others</label>
                                                    </div>
                                                    <input class="form-control w-50 mt-2 other_text_box" type="text"
                                                        placeholder="Your Type Of Office">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="card-body pt-0" id="company_info">
                                            <h5 class="mb-4">Company Information</h5>

                                            <div class="select-from-library-container mb-1">
                                                <div class="col-sm-12 col-md-12 col-xl-12">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3 file_input_main">
                                                            <label class="mb-0 file_uploader"
                                                                for="company_registeration_certificate">Company
                                                                Registeration Certificate</label>
                                                            <input type="file" class="d-none file_input_val"
                                                                name="company_info_certificate" required
                                                                id="company_registeration_certificate">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader"
                                                                for="business_agreement">Business Agrement</label>
                                                            <input type="file" class="d-none file_input_val" name=""
                                                                id="business_agreement">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader"
                                                                for="partnership_agreement">Partnership Agrement</label>
                                                            <input type="file" class="d-none file_input_val" name=""
                                                                id="partnership_agreement">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader" for="trade_licence">Trade
                                                                Licence</label>
                                                            <input type="file" class="d-none file_input_val" name=""
                                                                id="trade_licence">
                                                        </div>
                                                    </div>
                                                    <p class="mb-2">Upload Other Documents</p>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <input type="text" class="file_uploader_input"
                                                                placeholder="Enter Document Name" name="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                            <label class="mb-0 file_uploader"
                                                                for="other_document">Upload Document</label>
                                                            <input type="file" class="d-none file_input_val" name=""
                                                                id="other_document">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="card-body pt-0" id="contact_person">
                                            <h5 class="mb-4">Contact Person</h5>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>First Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Middle Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Last Name</span>
                                                    </label>
                                                </div>


                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" placeholder=""
                                                            required />
                                                        <span>Salution</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Country</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" placeholder=""
                                                            required />
                                                        <span>Designation</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 file_input_main">
                                                    <label class="mb-0 file_uploader" for="upload_cv">Upload CV</label>
                                                    <input type="file" class="d-none file_input_val" name=""
                                                        id="upload_cv">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 file_input_main">
                                                    <label class="mb-0 file_uploader" for="upload_certificate">Education
                                                        Certificate</label>
                                                    <input type="file" class="d-none file_input_val" name=""
                                                        id="upload_certificate">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 file_input_main">
                                                    <label class="mb-0 file_uploader"
                                                        for="confidential_agreement">Confidential Agreement</label>
                                                    <input type="file" class="d-none file_input_val" name=""
                                                        id="confidential_agreement">
                                                </div>
                                            </div>
                                            <p class="mb-2">Upload Other Documents</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <input type="text" class="file_uploader_input"
                                                        placeholder="Enter Document Name" name="">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                                    <label class="mb-0 file_uploader" for="other_document1">Upload
                                                        Document</label>
                                                    <input type="file" class="d-none file_input_val" name=""
                                                        id="other_document1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <div class="card-body pt-0" id="banking_detail">
                                            <h5 class="mb-4">Banking Detail</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Account Title</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Account No.</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Bank Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Bank Address</span>
                                                    </label>
                                                </div>
                                                <!-- </div> -->

                                                <!-- <div class="d-flex"> -->
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Country</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-12 px-0">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select required class="form-control select2-single"
                                                            data-width="100%">
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>State</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12 ">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select required class="form-control select2-single"
                                                            data-width="100%">
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>City</span>
                                                    </label>
                                                </div>
                                                <!-- </div> -->

                                                <!-- <div class="row"> -->
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>SWIFT Code</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>IBAN Code</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Local Wire Transfer Detail</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>International Wire Transfer Detail</span>
                                                    </label>
                                                </div>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <div class="card-body pt-0" id="tax_detail">
                                            <h5 class="mb-4">Tax Detail</h5>
                                            <div class="form-group">
                                                <p class="mb-2">Type Of Office : </p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="tax-service" checked name="tax_detail"
                                                            value="tax-service" class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="tax-service">Tax
                                                            Service</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="area-wise-tax" name="tax_detail"
                                                            value="area-wise-tax" class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="area-wise-tax">Area Wise Tax</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 tax_service">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Tax Service</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 area_wise_tax">
                                                    <label class="form-group has-float-label px-0">
                                                        <select class="form-control select2-single select_dropdown" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Area Wise Tax</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Tax Name</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <p class="mb-2">Tax Calculation Formula</p>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Enter No.</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-12 text-center m-auto">
                                                    <p>% of</p>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Select</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add
                                                        Tax</button>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Tax Name</th>
                                                                <th scope="col">Tax Type</th>
                                                                <th scope="col">Tax Formula</th>
                                                                <th scope="col">Status Applicable</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td contenteditable="true">Service Tax</td> -->
                                                                <td>Service Tax</td>
                                                                <td>Service</td>
                                                                <td>15% of Audit Fee</td>
                                                                <th>Sindh Punjab</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Service Tax</td>
                                                                <td>Service</td>
                                                                <td>15% of Audit Fee</td>
                                                                <th>Sindh Punjab</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <div class="card-body pt-0" id="office_scope">
                                            <h5 class="mb-4">Office Scope</h5>
                                            <div class="form-group">
                                                <p class="mb-2">Services Offered : </p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="smeta" checked name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="smeta">SMETA</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="ctpat" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="ctpat">CTPAT</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="iso" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="iso">ISO</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="wrap" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="wrap">WRAP</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Training</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Special Services</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Country Of Operation</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add
                                                        Data</button>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Training Courses</th>
                                                                <th scope="col">Special Services</th>
                                                                <th scope="col">Country Of Operation</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Lorem Ipsom</td>
                                                                <td>Service</td>
                                                                <td>United States</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                        <div class="card-body pt-0" id="fee_charges">
                                            <h5 class="mb-4">Fee Charges for Clients</h5>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="card mb-4 toggle_card">
                                                    <div id="smartWizardClickable">
                                                        <ul class="card-header">
                                                            <li><a href="#clickable1">Office Fee Charges<br /><small>Fee
                                                                        Charges For Clients Office</small></a></li>
                                                            <li><a href="#clickable2">Training Fee
                                                                    Charges<br /><small>Fee Charges For Clients
                                                                        Trainings</small></a></li>
                                                            <li><a href="#clickable3">Special
                                                                    Services<br /><small>Special Services</small></a>
                                                            </li>
                                                        </ul>

                                                        <div class="card-body">
                                                            <div id="clickable1">
                                                                <h4 class="pb-2">Fee Charges For Clients Other Than
                                                                    Local Office Audits</h4>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Standard</th>
                                                                            <th scope="col">Audit Type</th>
                                                                            <th scope="col">Amount/Percentage</th>
                                                                            <th scope="col" colspan="3">Fee</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Wrap</td>
                                                                            <td>Initial</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Wrap</td>
                                                                            <td>Initial</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div id="clickable2">
                                                                <h4 class="pb-2">Fee Charges For Clients Trainings</h4>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Course</th>
                                                                            <th scope="col">Amount/Percentage</th>
                                                                            <th scope="col" colspan="3">Fee</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Courses Title 1</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Courses Title 1</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div id="clickable3">
                                                                <h4 class="pb-2">Special Services</h4>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Service</th>
                                                                            <th scope="col">Amount/Percentage</th>
                                                                            <th scope="col" colspan="3">Fee</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Service 1</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Service 1</td>
                                                                            <td>Amount</td>
                                                                            <td>US$</td>
                                                                            <td>100</td>
                                                                            <td>Per Auditor Day</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-2">Bank Charges to be added when remitting funds from clients
                                                to Head Office Account</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Charge Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Currency</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <p class="mb-2">Charge Calculation Formula</p>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>Enter No.</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-12 text-center m-auto">
                                                    <p>%</p>
                                                </div>
                                                <div class="col-lg-5 col-md-5 col-sm-12">
                                                    <label class="form-group has-float-label px-0 select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required>
                                                            <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                                Zone</option>
                                                            <option value="TPZ" selected>The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Select</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add
                                                        Charges</button>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Charge Name</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Charge Formula</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Bank Charges For Wire Transfer</td>
                                                                <td>US$</td>
                                                                <td>40 per Invoice</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="tab">
                                        <div class="card-body text-center text-main" id="finish">
                                            <p>Finish Setup</p>
                                            <span class="glyph-icon simple-icon-check mr-2 icon"></span>
                                        </div>
                                        <!-- <input type="submit" name="submit" class="submit action-button" value="Submit">
        <input type="button" name="previous" class="previous action-button" value="Previous" /> -->
                                    </div>
							<div class="add_padding">
								<div>
									<button type="button" class="next action-button">Next</button>
									<button type="button" class="submit action-button">Submit</button>
									<button type="button" class="previous action-button">Previous</button>
								</div>
							</div>
							<!-- <div style="overflow:auto;">
								<div style="float:right; margin-top: 5px;">
									<button type="button" class="next action-button">Next</button>
									<button type="button" class="submit action-button">Submit</button>
									<button type="button" class="previous action-button">Previous</button>
								</div>
							  </div> -->
						</form>

                                </div>
                            </div>
                        


                    </div>
                </div>

            </div>
        </div>
    </main>

<?php include('footer.php') ?>

<script> 

    $('.other_text_box').hide();

    $(document).ready(function () {
        $('.tax_service').show();
        $('.area_wise_tax').hide();
        $("input[name='tax_detail']").click(function () {
            if ($("#tax-service").is(":checked")) {
                $(".tax_service").show();
                $(".area_wise_tax").hide();
            }
            else if ($("#area-wise-tax").is(":checked")) {
                $(".area_wise_tax").show();
                $(".tax_service").hide();
            }
        });
    });

    // $('.file_input_main').on('change' ,'file_input_val',function(){
    //     var file_name = $(this).val();
    //     console.log(file_name);
    //     $(this,'.file_uploader').text(file_name);
    //     console.log($('.file_uploader',this).text(file_name));
    //     console.log($(this).text(file_name));
    // });
    $('.file_input_val').change(function () {
        var file_name = $(this).val();
        console.log(file_name);
        $(this).parent().find('.file_uploader').text(file_name);
        // console.log($('.file_uploader',this).text(file_name));
    });
</script>