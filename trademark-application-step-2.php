<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Get Started on </title>
    <meta name="description"
        content="Looking to secure your brand. Look no further than Trademark Fortress. Reach out to us today to get started on .">
    <link rel="stylesheet" href="css/layout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body class="nav-dark">
    <div class="container">
        <form id="stepForm" data-step="2">
            <section class="py-5 steps-section">
                <div class="container">
                    <div class="row align-items-center flex-column">
                        <div class="col-md-12 text-center">
                            <h1 class="h1 fw-700 pb-2">Registering Your Trademark in the United States</h1>
                            <p>Complete your application in <span class="orange">7 minutes.</span> </p>
                        </div>
                    </div>
                    <div class="row my-5 justify-content-center">
                        <ul class="steps-progress">
                            <li><span class="completed"></span></li>
                            <li><span class=""></span></li>
                            <li><span class=""></span></li>
                            <li><span class=""></span></li>
                            <li><span class=""></span></li>
                            <li><span class=""></span></li>
                        </ul>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="step-content">
                                <h3>Trademark Application Process <span>- Step 2</span></h3>
                            </div>
                            <div class="form_wrap">
                                <div class="bgform">
                                    <div class=" w-100">
                                        <h3>Trademark Application Process
                                            <span>
                                                Step-2
                                            </span>
                                        </h3>
                                        <span class="heading fw-600 my-3">Please provide the ownership details
                                            affiliated with your trademark application.<span></span></span>
                                        <div class="form-check form-chk-ind-org">
                                            <label>
                                                <input type="radio" name="quote[ownership_details]" checked=""
                                                    value="individual" class="individual">
                                                Individual
                                            </label>
                                            <label>
                                                <input type="radio" name="quote[ownership_details]" value="organization"
                                                    class="organization">
                                                Organization
                                            </label>
                                        </div>
                                        <div id="individualSec">
                                            <div class="form-group ind_own_fld">
                                                <a href="javascript:;" class="add_owner"> Add Owner</a>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* First Name:</label>
                                                <input type="text" class="form-control required" id="first_name"
                                                    name="quote[owner_name]" placeholder="First Name" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Last Name:</label>
                                                <input type="text" class="form-control required" id="last_name"
                                                    name="quote[owner_name_last]" placeholder="Last Name" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Country of Citizenship:</label>
                                                <select name="quote[tm_indv_country]"
                                                    class="form-control required select_country" required>
                                                    <option value="">Choose Country of Citizenship</option>
                                                </select>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* State/Province/Region:</label>
                                                <select name="quote[tm_indv_state]"
                                                    class="form-control required select_state" required>
                                                    <option value="">Select State/Province/Region</option>
                                                </select>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Address:</label>
                                                <input type="text" class="form-control required" id="address"
                                                    name="quote[tm_indv_address]" placeholder="Address" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* City:</label>
                                                <input type="text" class="form-control required" id="city"
                                                    name="quote[tm_indv_city]" placeholder="City" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Zip/Postal Code:</label>
                                                <input type="text" class="form-control required" id="postal_code"
                                                    name="quote[tm_indv_zip]" placeholder="12345" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Phone:</label>
                                                <input type="number" class="form-control required" id="phone"
                                                    name="quote[tm_indv_phone]" placeholder="Phone" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="form-group ind_own_fld">
                                                <label>* Email:</label>
                                                <input type="email" class="form-control required" id="email"
                                                    name="quote[tm_indv_email]" placeholder="me@example.com" required>
                                                <p class="error-message"></p>
                                            </div>
                                            <div class="submits-wrapper">
                                                <p>
                                                    <i class="fa fa-lock"></i>
                                                    Click on "Continue" to save your application.
                                                </p>
                                                <button class="theme-btn" type="button" id="continueBtn">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/step-form.js"></script>

</body>

</html>