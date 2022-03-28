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
                    <h5 class="mb-4">Standard / Add new Standard</h5>
                    <div class="mb-4">
                        <!-- multistep form -->
                            <!-- progressbar -->
                            <div class="row multi_step_form">
                                <div class="col-lg-4 col-md-4 col-sm-12 tab_sections">
                                    <ul id="progressbar" class="card-body card">
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Standard General Information</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Types Of Audit</li>
                                        <li><span class="glyph-icon simple-icon-check mr-2 icon"></span> Audit Related Questions</li>
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
                                        <div class="card-body pt-0" id="standard_info">
                                            <h5 class="mb-4">Standard General Information</h5>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Name Of Standard</span>
                                                    </label>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <p class="mb-2">Type of Audit Cycle : </p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="smeta" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="smeta">1 year</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="ctpat" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="ctpat">2 year</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p class="mb-2">What kind of audit announcements can be done in this standard?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Announced" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Announced">Announced</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Un-announced" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Un-announced">Un-announced</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Semi-Un-announced" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="Semi-Un-announced">Semi-Un-announced</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Announced</th>
                                                                <th scope="col">Un-announced</th>
                                                                <th scope="col">Semi-Un-announced</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <!-- <td contenteditable="true">Service Tax</td> -->
                                                                <td>Food Testing</td>
                                                                <td>People</td>
                                                                <td>Main</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Food Testing</td>
                                                                <td>People</td>
                                                                <td>Main</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p class="mb-2">Is this Standard similar to any other standard which was previously defined in the system? IF yes, do you wish to clone its settings into this standard?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="yes" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="No" name="office_scope"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="No">No</label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="card-body pt-0" id="types_of_audit">
                                            <h5 class="mb-4">Types Of Audit</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" />
                                                        <span>Enter Audit type name</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label select_dropdown">
                                                    <select required class="form-control select2-single"
                                                        data-width="100%">
                                                        <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                            Zone</option>
                                                        <option value="TPZ" selected>The Panic Zone</option>
                                                        <option value="TTZ">The Twilight Zone</option>
                                                    </select>
                                                    <span>Select Audit Announcement Type</span>
                                                </label>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Audit</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Audit Type</th>
                                                                <th scope="col">Audit Announcement</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Full Initial Audit</td>
                                                                <td>Announced/ Semi-unannounced/Unannounced</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Periodic Audit</td>
                                                                <td>Announced/ Semi-unannounced/Unannounced</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Desktop Follow up Audit </td>
                                                                <td>Announced</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Full Follow-up Audit </td>
                                                                <td>Announced/ Semi-unannounced/Unannounced</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Partial Follow-up Audit </td>
                                                                <td>Announced/ Semi-unannounced/Unannounced</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="tab">
                                        <div class="card-body pt-0" id="audit_related_questions">
                                            <h5 class="mb-4">Audit Related Questions</h5>
                                            <div class="form-group">
                                                <p class="mb-2">Type of SMETA Audit requested</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="2-pillar" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="2-pillar">2-pillar</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="4-pillar" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="4-pillar">4-pillar</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="full_initial" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="full_initial">Full Initial</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Periodic" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="Periodic">Periodic</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Full Follow–up" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="Full Follow–up">Full Follow–up</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Partial Follow–U" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="Partial Follow–U">Partial Follow–Up</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="Partial Other – Define:" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2" for="Partial Other – Define:">Partial Other – Define:</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <p class="mb-2">Is facility already registered with SMETA?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="audit_related_questions_yes" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="audit_related_questions_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" id="audit_related_questions_no" name="audit_related_questions"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="audit_related_questions_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <p class="mb-2">SEDEX Registration details (if already registered)</p>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="number" required />
                                                        <span>SEDEX Registration Number</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control required" type="text" required />
                                                        <span>SEDEX ID & Password (Optional)</span>
                                                    </label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab">
                                    <div class="card-body pt-0" id="pre_requise">
                                            <h5 class="mb-4">Pre-Requisites</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Pre-requisite</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                               <p class="mb-2">Is there a need to upload a document against this pre-requisite?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="pre_requise_yes" name="pre_requise"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="pre_requise_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="pre_requise_no" name="pre_requise"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="pre_requise_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Pre-Requise</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Pre-Requisite</th>
                                                                <th scope="col">Action against pre-requisite</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>SAQ (SEDEX Self-Assessment Questionnaire)</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                            <tr>
                                                                <td>SAQ (SEDEX Self-Assessment Questionnaire)</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                    <div class="card-body pt-0" id="documents_required_at_audit">
                                            <h5 class="mb-4">Documents required at Audit (To be prepared by Customer)</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Document Name:</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                               <p class="mb-2">Is there a need to upload a document against this entry?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="documents_required_at_audit_yes" name="documents_required_at_audit"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="documents_required_at_audit_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="documents_required_at_audit_no" name="documents_required_at_audit"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="documents_required_at_audit_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Documents required at Audit (To be prepared by Customer)</th>
                                                                <th scope="col">Action against document</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Facility Floor Plans</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Facility Floor Plans</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                    <div class="card-body pt-0" id="documents_for_company_audit">
                                            <h5 class="mb-4">Documents for Company to review before Audit</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Document Name:</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                               <p class="mb-2">Is there a need to upload a document against this entry?</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="documents_for_company_audit_yes" name="documents_for_company_audit"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="documents_for_company_audit_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="documents_for_company_audit_no" name="documents_for_company_audit"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="documents_for_company_audit_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Documents for Company to review before Audit</th>
                                                                <th scope="col">Action against the document</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Standard/Code</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Standard/Code</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                    <div class="card-body pt-0" id="opening_meeting_checklist">
                                            <h5 class="mb-4">Opening meeting Checklist</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Checkpoint:</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                               <p class="mb-2">Create Section :</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="opening_meeting_checklist_yes" name="opening_meeting_checklist"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="opening_meeting_checklist_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="opening_meeting_checklist_no" name="opening_meeting_checklist"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="opening_meeting_checklist_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Documents for Company to review before Audit</th>
                                                                <th scope="col">Action against the document</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Standard/Code</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Standard/Code</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                    <div class="card-body pt-0" id="closing_meeting_checklist">
                                            <h5 class="mb-4">Closing meeting Checklist </h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Checkpoint:</span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                               <p class="mb-2">Create Section :</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="closing_meeting_checklist_yes" name="closing_meeting_checklist"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="closing_meeting_checklist_yes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="closing_meeting_checklist_no" name="closing_meeting_checklist"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label mr-2"
                                                            for="closing_meeting_checklist_no">No</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Document</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Closing Meeting Checklist</th>
                                                                <th scope="col">Checklist</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thank the management for their time and contribution.</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thank the management for their time and contribution.</td>
                                                                <td>Checklist/ Upload Document</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab">
                                    <div class="card-body pt-0" id="risk_table">
                                            <h5 class="mb-4">Risk Table</h5>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-group has-float-label">
                                                        <input class="form-control" type="text" name="company_name"
                                                            required />
                                                        <span>Enter Risk</span>
                                                    </label>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label class="form-group has-float-label select_dropdown">
                                                    <select required class="form-control select2-single"
                                                        data-width="100%">
                                                        <option value="TNOGZ" disabled="disabled">The No Optgroup
                                                            Zone</option>
                                                        <option value="TPZ" selected>The Panic Zone</option>
                                                        <option value="TTZ">The Twilight Zone</option>
                                                    </select>
                                                    <span>Select Audit Announcement Type</span>
                                                </label>
                                                </div>
                                            </div>


                                            <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <button class="btn action-button float-left ml-0 mt-0">Add Risk</button>
                                                </div>
                                               
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Risk</th>
                                                                <th scope="col">Risk Level</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>lorem</td>
                                                                <td>lorem</td>
                                                            </tr>
                                                            <tr>
                                                                <td>lorem</td>
                                                                <td>lorem</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
                                    </div>
							<div class="add_padding">
								<div>
									<button type="button" class="next action-button">Next</button>
									<button type="button" class="submit action-button">Submit</button>
									<button type="button" class="previous action-button">Previous</button>
								</div>
							</div>
						</form>

                                </div>
                            </div>
                        


                    </div>
                </div>

            </div>
        </div>
    </main>

<?php include('footer.php') ?>