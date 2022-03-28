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
                    <h5 class="mb-4">Client Office / Add new Client</h5>
                    <div class="mb-4">
                        <!-- multistep form -->
                            <!-- progressbar -->
                            <div class="row multi_step_form">
                                <div class="col-lg-4 col-md-4 col-sm-12 tab_sections">
                                    <ul id="progressbar" class="card-body card">
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Head Office Information</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Business Activities</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Main Site Details
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Client Office Setup
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Contact Person</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Client Audits
                                        </li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Clients Detail
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
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Company Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" placeholder=""
                                                            name="company_address" required />
                                                        <span>Address</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="email">
                                                        <span>Email</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="number">
                                                        <span>Contact No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>Website</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>VAT / Tax No.</span>
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
                                        <div class="card-body pt-0" id="business_activities">
                                            <h5 class="mb-4">Business Activities</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" />
                                                        <span>Product / Services</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" />
                                                        <span>Buyers</span>
                                                    </label>
                                                </div>
                                                </div>
                                                <h5 class="mb-4">Activities of Organization</h5>
                                            <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" />
                                                        <span>Primary</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" />
                                                        <span>Secondary</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <h5 class="mb-4">Language Spoken In Organization</h5>
                                            <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label select_dropdown">
                                                    <select required class="form-control select2-single"
                                                        data-width="100%">
                                                        <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                            Zone</option>
                                                        <option value="TPZ" selected>The Panic Zone</option>
                                                        <option value="TTZ">The Twilight Zone</option>
                                                    </select>
                                                    <span>Language</span>
                                                </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add
                                                        Info</button>
                                                </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Product / Services</th>
                                                                <th scope="col">Buyer</th>
                                                                <th scope="col">Primary</th>
                                                                <th scope="col">Secondary</th>
                                                                <th scope="col">Language</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td contenteditable="true">Service Tax</td> -->
                                                                <td>Food Testing</td>
                                                                <td>People</td>
                                                                <td>Main</td>
                                                                <td>Activity</td>
                                                                <th>English</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Food Testing</td>
                                                                <td>People</td>
                                                                <td>Main</td>
                                                                <td>Activity</td>
                                                                <th>English</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="card-body pt-0" id="main_site">
                                            <h5 class="mb-4">Main Site Detail</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Main Site Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" placeholder=""
                                                            name="company_address" required />
                                                        <span>Address</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="email">
                                                        <span>Email</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="number">
                                                        <span>Contact No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>Website</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>VAT / Tax No.</span>
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
                                            </div>

                                            <div class="form-group">
                                                <h3>Type Of Office : </h3>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="main_siteProperitorship" name="main_site"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="main_siteProperitorship">Properitorship</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="main_siteLimitedCompany" name="main_site"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="main_siteLimitedCompany">Limited Company</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="main_siteCorporation" name="main_site"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="main_siteCorporation">Corporation</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="main_sitePartnerShip" name="main_site"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="main_sitePartnerShip">PartnerShip</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="main_siteOthers" name="main_site"
                                                            class="other_radio custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="main_siteOthers">Others</label>
                                                    </div>
                                                    <input class="form-control w-50 mt-2 other_text_box" type="text"
                                                        placeholder="Your Type Of Office">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                    <div class="card-body pt-0" id="client_office">
                                            <h5 class="mb-4">Client Office Setup</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Site Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" placeholder=""
                                                            name="company_address" required />
                                                        <span>Address</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="email">
                                                        <span>Email</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="number">
                                                        <span>Contact No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>Website</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>VAT / Tax No.</span>
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
                                            </div>

                                            <div class="form-group">
                                                <h3>Type Of Office : </h3>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="client_Properitorship" name="client_office"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="client_Properitorship">Permanent</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="client_LimitedCompany" name="client_office"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="client_LimitedCompany">Temperary</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="client_Corporation" name="client_office"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="client_Corporation">Exclusive Supplier</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="client_PartnerShip" name="client_office"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="client_PartnerShip">Remote</label>
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
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" placeholder=""
                                                            name="company_address" required />
                                                        <span>Salution</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <label class="form-group has-float-label select_dropdown">
                                                        <select class="form-control select2-single" data-width="100%"
                                                            required name="company_country">
                                                            <option value="select" disabled="disabled" selected>Select</option>
                                                            <option value="TPZ">The Panic Zone</option>
                                                            <option value="TTZ">The Twilight Zone</option>
                                                        </select>
                                                        <span>Site Type</span>
                                                    </label>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                <h3>Category : </h3>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="contact_Properitorship" name="contact_person"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="contact_Properitorship">Financial Contact</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="contact_LimitedCompany" name="contact_person"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="contact_LimitedCompany">Accrediation Office</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="contact_Corporation" name="contact_person"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="contact_Corporation">Auditor</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="contact_Others" name="contact_person"
                                                            class="other_radio custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="contact_Others">Others</label>
                                                    </div>
                                                    <input class="form-control w-50 mt-2 other_text_box" type="text"
                                                        placeholder="Your Type Of Office">

                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="text">
                                                        <span>Designation</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="email">
                                                        <span>Email</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="number">
                                                        <span>Cell No</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <!-- <input type="text"> -->
                                                        <input class="form-control required" required
                                                            name="company_contact" type="number">
                                                        <span>Phone No</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add
                                                        Info</button>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>
                                                                <th scope="col">Salution</th>
                                                                <th scope="col">Site Type</th>
                                                                <th scope="col">Contact Person</th>
                                                                <th scope="col">Designation</th>
                                                                <th scope="col">Email</th>
                                                                <th scope="col">Cell No</th>
                                                                <th scope="col">Phone No</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Lorem</td>
                                                                <td>XYZ</td>
                                                                <td>Dummy</td>
                                                                <td>No-one</td>
                                                                <th>Tester</th>
                                                                <th>info@gmail.com</th>
                                                                <th>123456789</th>
                                                                <th>789456123</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Lorem</td>
                                                                <td>XYZ</td>
                                                                <td>Dummy</td>
                                                                <td>No-one</td>
                                                                <th>Tester</th>
                                                                <th>info@gmail.com</th>
                                                                <th>123456789</th>
                                                                <th>789456123</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                        </div>

                                   

                                    <div class="tab">
                                        <div class="card-body pt-0" id="fee_charges">
                                            <h5 class="mb-4">Clients Detail</h5>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="card mb-4 toggle_card">
                                                    <div id="smartWizardClickable">
                                                        <ul class="card-header">
                                                            <li><a href="#clickable1">Client Audits<br /><small>Client Audits Detail</small></a></li>
                                                            <li><a href="#clickable2">Payment Detail<br /><small>Payment Detail</small></a></li>
                                                        </ul>

                                                        <div class="card-body">
                                                            <div id="clickable1">
                                                                <h4 class="pb-2">Client Audits Detail</h4>
                                                                <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Application</th>
                                                                <th scope="col">Standard</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td contenteditable="true">Service Tax</td> -->
                                                                <td>1</td>
                                                                <td>ABC</td>
                                                                <td>Audit</td>
                                                                <th>Pending</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tr>
                                                            <td>1</td>
                                                                <td>ABC</td>
                                                                <td>Audit</td>
                                                                <th>Pending</th>
                                                                <th>View</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                            </div>
                                                            <div id="clickable2">
                                                                <h4 class="pb-2">Fee Charges For Clients Trainings</h4>
                                                                <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Client Company</th>
                                                                <th scope="col">Customer Type</th>
                                                                <th scope="col">No Of Open Application</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td contenteditable="true">Service Tax</td> -->
                                                                <td>1</td>
                                                                <td>Food Testing</td>
                                                                <td>Audit</td>
                                                                <th>50</th>
                                                                <th>View</th>
                                                            </tr>
                                                            <tr>
                                                            <td>1</td>
                                                                <td>Food Testing</td>
                                                                <td>Audit</td>
                                                                <th>50</th>
                                                                <th>View</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                            </div>
                                                        </div>
                                                    </div>
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