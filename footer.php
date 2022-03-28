
    <div class="modal fade modal-right select-from-library multi_step_form" id="libraryModal" tabindex="-1"
        role="dialog" aria-labelledby="libraryModal" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select from Library</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body scroll pt-0 pb-0 mt-4 mb-4">
                    <div class="mb-2">
                        <div class="list disable-text-selection">
                            <div class="row">

                                <div class="col-6 mb-1 sfl-item-container"
                                    data-preview-path="img/products/chocolate-cake-thumb.jpg"
                                    data-path="img/products/chocolate-cake-thumb.jpg"
                                    data-label="chocolate-cake-thumb.jpg">
                                    <div class="card d-flex mb-2 p-0 media-thumb-container h-auto p-2">
                                        <div class="d-flex align-self-stretch" id="output">
                                            <img src="img/products/chocolate-cake-thumb.jpg" alt="uploaded image"
                                                class="list-media-thumbnail responsive border-0" />
                                        </div>
                                        <div class="d-none flex-grow-1 min-width-zero">
                                            <div class="custom-control custom-checkbox pl-1 pr-1 align-self-center">
                                                <label class="custom-control custom-checkbox mb-0">
                                                    <input type="checkbox" class="custom-control-input">
                                                    <span class="custom-control-label"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <label class="btn btn-outline-primary mb-0">
                        <input type="file" class="d-none uploaded_image" onchange="loadFile(event)" value="Upload">
                        Upload Files
                    </label>
                    <!-- <button type="button" class="btn btn-outline-primary">Upload</button> -->
                    <button type="button" class="btn btn-primary sfl-submit">Select</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">ColoredStrategies 2019</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Review</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Purchase</a>
                            </li>
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <!-- <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"
        type="text/javascript"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/bootstrap-tagsinput.min.js"></script>
    <script src="js/vendor/jquery.smartWizard.min.js"></script>
    <script src="js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="js/vendor/jquery.validate/additional-methods.min.js"></script>
    <script src="js/dore-plugins/select.from.library.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/vendor/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="js/vendor/select2.full.js"></script>
    <script src="aaintlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>


</body>

</html>


<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script> -->
<script type="text/javascript" src="./multi-form.js"></script>
<script type="text/javascript">
    $(".select2-single").select2({
        // your options here
    }).on('change', function () {
        $(this).valid();
    });
    $(document).ready(function () {
        // $.validator.addMethod('date', function (value, element, param) {
        //     return (value != 0) && (value <= 31) && (value == parseInt(value, 10));
        // }, 'Please enter a valid date!');
        // $.validator.addMethod('month', function (value, element, param) {
        //     return (value != 0) && (value <= 12) && (value == parseInt(value, 10));
        // }, 'Please enter a valid month!');
        // $.validator.addMethod('year', function (value, element, param) {
        //     return (value != 0) && (value >= 1900) && (value == parseInt(value, 10));
        // }, 'Please enter a valid year not less than 1900!');
        // $.validator.addMethod('username', function (value, element, param) {
        //     var nameRegex = /^[a-zA-Z0-9]+$/;
        //     return value.match(nameRegex);
        // }, 'Only a-z, A-Z, 0-9 characters are allowed');
        // $.validator.setDefaults({
        //     debug: true,
        //     success: "valid"
        // });
        // $.validator.setDefaults('company_info_certificate', function(value, element, param) {
        // 	return (value == null);
        // }, 'Registeration Certificate is required!');
        // var val = {
        //     rules: {
        //         company_name: "required",
        //         company_address: "required",
        //         company_registeration_number: "required",
        //         company_license_number: "required",
        //         typeofoffice: "required",
        //         email: {
        //             required: true,
        //             email: true
        //         },
        //         // company_info_certificate: {
        //         //     required: true
        //         //  },
        //         company_contact: {
        //             required: true,
        //             minlength: 10,
        //             digits: true
        //         },
        //         company_telephone: {
        //             required: true,
        //             minlength: 10,
        //             digits: true
        //         },
        //         company_country: {
        //             required: true
        //         },
        //         date: {
        //             date: true,
        //             required: true,
        //             minlength: 2,
        //             maxlength: 2,
        //             digits: true
        //         },
        //         month: {
        //             month: true,
        //             required: true,
        //             minlength: 2,
        //             maxlength: 2,
        //             digits: true
        //         },
        //         year: {
        //             year: true,
        //             required: true,
        //             minlength: 4,
        //             maxlength: 4,
        //             digits: true
        //         },
        //         username: {
        //             username: true,
        //             required: true,
        //             minlength: 4,
        //             maxlength: 16,
        //         },
        //         password: {
        //             required: true,
        //             minlength: 8,
        //             maxlength: 16,
        //         }
        //     },
        //     // Specify validation error messages
        //     messages: {
        //         company_name: "Company name is required",
        //         company_address: "Company name is required",
        //         // company_info_certificate:  "Registeration Certificate is required",
        //         typeofoffice:  "Please Select A Type Of Office",
        //         email: {
        //             required: "Email is required",
        //             email: "Please enter a valid e-mail",
        //         },
        //         company_contact: {
        //             required: "Phone number is requied",
        //             minlength: "Please enter min 10 digit mobile number",
        //             digits: "Only numbers are allowed in this field"
        //         },
        //         company_telephone: {
        //             required: "Phone number is requied",
        //             minlength: "Please enter min 10 digit mobile number",
        //             digits: "Only numbers are allowed in this field"
        //         },
        //         company_registeration_number: {
        //             required: "Registeration number is requied",
        //             minlength: "Please enter min 10 digit mobile number",
        //             digits: "Only numbers are allowed in this field"
        //         },
        //         company_license_number: {
        //             required: "License number is requied",
        //             minlength: "Please enter min 10 digit mobile number",
        //             digits: "Only numbers are allowed in this field"
        //         },

        //         company_country: {
        //             required: "Please Select A Country",
        //         },
        //         date: {
        //             required: "Date is required",
        //             minlength: "Date should be a 2 digit number, e.i., 01 or 20",
        //             maxlength: "Date should be a 2 digit number, e.i., 01 or 20",
        //             digits: "Date should be a number"
        //         },
        //         month: {
        //             required: "Month is required",
        //             minlength: "Month should be a 2 digit number, e.i., 01 or 12",
        //             maxlength: "Month should be a 2 digit number, e.i., 01 or 12",
        //             digits: "Only numbers are allowed in this field"
        //         },
        //         year: {
        //             required: "Year is required",
        //             minlength: "Year should be a 4 digit number, e.i., 2018 or 1990",
        //             maxlength: "Year should be a 4 digit number, e.i., 2018 or 1990",
        //             digits: "Only numbers are allowed in this field"
        //         },
        //         username: {
        //             required: "Username is required",
        //             minlength: "Username should be minimum 4 characters",
        //             maxlength: "Username should be maximum 16 characters",
        //         },
        //         password: {
        //             required: "Password is required",
        //             minlength: "Password should be minimum 8 characters",
        //             maxlength: "Password should be maximum 16 characters",
        //         }
        //     }
        // }
        $("#msform").multiStepForm(
            {
                // defaultStep:0,
                beforeSubmit: function (form, submit) {
                    console.log("called before submiting the form");
                    console.log(form);
                    console.log(submit);
                },
                // validations: val,
            }
        ).navigateTo(0);
    });

    $('.other_text_box').hide();
    $("input[type='radio']").click(function () {
        if ($(".other_radio").is(":checked")) {
            $(this).parent().parent().find('.other_text_box').fadeIn();
        } 
        else {
            $(".other_text_box").hide();
        }
    });


    function callcode(element_id) {
        var telInput = $("#" + element_id),

            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "us",
            geoIpLookup: function (callback) {
                $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function () {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function () {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);




    } callcode("phone");
</script>
