<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Get Started on </title>
    <meta name="description"
        content="Looking to secure your brand. Look no further than Trademark Fortress. Reach out to us today to get started on .">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/registration-form.css">

</head>

<body>
    <div class="registration-wrapper">
        <h2 class="text-center mb-3">Register your Trademark</h2>
        <p class="text-center text-muted mb-4">What specific titles, logos, or creative works are you considering for
            trademark or copyright protection?</p>

        <form id="registrationForm">
            <div class="option-section text-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="chkBrand" value="brand">
                    <label class="form-check-label" for="chkBrand">Brand Name or Tag Line</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="chkLogo" value="logo">
                    <label class="form-check-label" for="chkLogo">Logo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="chkLater" value="later">
                    <label class="form-check-label" for="chkLater">I will provide the details later</label>
                </div>
            </div>

            <div id="brandField" class="form-section d-none">
                <label for="brandName" class="form-label">Brand Name or Tag Line</label>
                <input type="text" class="form-control" id="brandName" placeholder="Enter your brand or tagline">
            </div>

            <div id="logoField" class="form-section d-none">
                <label for="logoFile" class="form-label">Upload Logo</label>
                <input type="file" class="form-control" id="logoFile">
            </div>

            <div class="form-section">
                <label class="form-label">Owner Name</label>
                <input type="text" class="form-control" placeholder="e.g. John Doe" required>
            </div>

            <div class="form-section">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="e.g. john@example.com" required>
            </div>

            <div class="form-section">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="e.g. (555) 555-5555" required>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="agree" required>
                <label class="form-check-label" for="agree">
                    I agree to the <a href="#">privacy policy</a>.
                </label>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
            </div>
        </form>
    </div>

    <form action="https://filingdesks.com/pay-secure/index.php" method="POST">
    <div class="container">
        <div class="form-row my-4">
            <div class="row my-2">
                <h2 class="hd-primary">Trademark Info</h2>
            </div>
            <div class="row my-2">
                <p class="phara-bold">What Do You Want To Trademark or Copyright?</p>
                <div class="row mb-3">
                    <div class="col-12 mb-3 d-flex align-items-center gap-2">
                        <div class="form-check form-check-type input_group ps-0 d-flex align-items-center flex-wrap gap-3">
                            <div class="brand-checked get-label">
                                <input onchange="updateHiddenValues()" class="radio-fields brand-showwalle get-value"
                                       type="radio" id="Tagline"
                                       name="trademark" value="Brand Name or Tag line" checked>
                                <label class="radio-label" for="Tagline">Brand Name or Tag line</label>
                            </div>
                            <div class="logo-checked get-label">
                                <input onchange="updateHiddenValues()" class="radio-fields logo-checked get-value"
                                       type="radio" id="Logo"
                                       name="trademark" value="Logo">
                                <label class="radio-label ms-3" for="Logo">Logo</label>
                            </div>
                            <div class="provide-checked get-label">
                                <input onchange="updateHiddenValues()" class="radio-fields i-will-provide get-value"
                                       type="radio" id="details"
                                       name="trademark" value="I will provide the details later">
                                <label class="radio-label ms-3 get-value" for="details">
                                    I will provide the details later
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row logo-check-hide active">
                        <div class="col-12 mb-4">
                            <label class="phara-bold mb-3 w-100">
                                Which Logo do you want to trademark?*
                            </label>
                            <div class="set">
                                <div class="position-relative">
                                    <span class="position-relative input-fields d-flex">
                                        Drag your logo here or click to upload
                                    </span>
                                    <input type="file" class="w-100 uploadimage" accept="image/*">
                                </div>
                                <div class="show-images w-100 mt-3">
                                    <!-- Uploaded images will be displayed here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row i-will-hidden brand-value">
                        <div class="col-12 mb-4 logo-checked-fields active">
                            <label for="protect_name" class="phara-bold mb-3">
                                Which Brand Name or Tagline do you want to trademark?
                            </label>
                            <input type="text" id="protect_name" name="protect_name"
                                   class="w-100 input-fields get-value" placeholder="Product / Service / Company Name">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="protect_services" class="phara-bold mb-3">
                                What Products and Services do you want your trademark to cover?
                            </label>
                            <textarea id="protect_services" name="protect_services" onkeyup="updateTable()"
                                      class="textarea-fields w-100 get-value"></textarea>
                            <p class="field-text">
                                *The information you provide here is just for us to get the
                                process started. We’ll be in touch shortly to go over the
                                details, and you’ll have ample opportunity to review and
                                revise everything.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row my-5">
            <div class="row my-2">
                <h2 class="hd-primary">Trademark Owners Information</h2>
                <p class="phara-bold">Enter Owner Of Trademark Information</p>
                <div class="row mb-3">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <input type="text" class="w-100 input-fields" name="first_name" placeholder="First Name"
                               required/>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <input type="text" class="w-100 input-fields" name="last_name" placeholder="Last Name"
                               required/>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <input type="email" class="w-100 input-fields" name="email" placeholder="Email" required/>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <input type="tel" id="phone" class="w-100 input-fields" placeholder="Phone Number"
                               name="phone" required/>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="d-flex gap-2">
                            <input type="radio" id="this-statement-short" name="privacy-agreement" required/>
                            <label for="this-statement-short" class="input-container small internal-label"
                                   style="margin-bottom: 0; padding-left: 0">
                                <strong>YES</strong>,
                                I agree to
                                <a href="https://filingdesks.com/privacy-policy/" target="_blank" id="this-statement-short-link">
                                    this statement
                                </a>
                                about my privacy.
                                <div id="tldr">
                                    (TLDR: what you share is strictly confidential and secure
                                    with us.)
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row my-5">
            <div class="row my-2">
                <h2 class="hd-primary">Select Your Package</h2>
                <div class="packages position-relative">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-6">
                                <div class="pack-main pack-1 text-center py-5 px-3 rounded-3" id="index-1">
                                    <div class="pack-head-div">
                                        <h2 class="fw-bold fs22 text-uppercase mb-3">
                                            Basic Package
                                            <span class="d-block fw-regular fs14">
                                                + USPTO FILING FEE
                                            </span>
                                        </h2>
                                        <h3 class="price-div fs35 fw-bold mb-0">
                                            <!-- <span class="d-block fs15 fw-regular">Started At</span> -->
                                            $35.00 <strike>$98.00</strike>
                                        </h3>
                                    </div>
                                    <div class="pack-detail-div">
                                        <ul class="my-3 py-3 text-start">
                                            <li><i class="fa-solid fa-check"></i> Direct-Hit Search of the Federal
                                                database which will include misspellings for live and pending
                                                applications.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Professional Preparation of your
                                                federal trademark application.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pack-btn">
                                        <a href="javascript:" onchange="updateTable()"
                                           class="d-inline-block normal-btn basic-package-lbl"
                                           title="Starters Pack For Only $35" data-bs-toggle="modal"
                                           data-bs-target="#staticBackdrop">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pack-main pack-1 text-center py-5 px-3 rounded-3" id="index-2">
                                    <div class="pack-head-div">
                                        <h2 class="fw-bold fs22 text-uppercase mb-3">
                                            Standard Package
                                            <span class="d-block fw-regular fs14">
                                                + USPTO FILING FEE
                                            </span>
                                        </h2>
                                        <h3 class="price-div fs35 fw-bold mb-0">
                                            <!-- <span class="d-block fs15 fw-regular">Started At</span> -->
                                            $149.00 <strike>$298.00</strike>
                                        </h3>
                                    </div>
                                    <div class="pack-detail-div">
                                        <ul class="my-3 py-3 text-start">
                                            <li><i class="fa-solid fa-check"></i> Direct-Hit Search of the Federal
                                                database which will include misspellings
                                                for live and pending applications.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Professional Preparation of your
                                                federal trademark application.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Digitalization and Formatting of your
                                                trademark specimens and designs.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> <i class="fa-solid fa-check"></i>Electronic
                                                Delivery of your trademark application with no need to wait for
                                                mail or dealing with paper files. This will qualify you the reduced
                                                government filing fee.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Secure Online Account with calendar of
                                                important dates. Your status,
                                                documents, and important deadlines will be available to you 24/7 through
                                                your online account.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Assessment of Application by our team
                                                to avoid any loopholes that might
                                                cause rejection at the government's office.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Cease and Desist Letter A customized
                                                form that can be used if someone
                                                infringing on your mark.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Transfer and Assignment Letter If you
                                                need to sell or otherwise convey your
                                                mark, you have access to your template that you can further customize to
                                                your needs.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> 1 Month of Trademark Monitoring
                                                service to notify you of possible infringers
                                                of your trademark ($88 value).
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pack-btn">
                                        <a href="javascript:" onchange="updateTable()"
                                           class="d-inline-block normal-btn standard-package-lbl"
                                           title="Starters Pack For Only $135" data-bs-toggle="modal"
                                           data-bs-target="#staticBackdrop">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pack-main pack-1 text-center py-5 px-3 rounded-3" id="index-3">
                                    <div class="pack-head-div">
                                        <h2 class="fw-bold fs22 text-uppercase mb-3">
                                            Deluxe Package
                                            <span class="d-block fw-regular fs14">
                                                + USPTO FILING FEE
                                            </span>
                                        </h2>
                                        <h3 class="price-div fs35 fw-bold mb-0">
                                            <!-- <span class="d-block fs15 fw-regular">Started At</span> -->
                                            $199.00 <strike>$398.00</strike>
                                        </h3>
                                    </div>
                                    <div class="pack-detail-div">
                                        <ul class="my-3 py-3 text-start">
                                            <li><i class="fa-solid fa-check"></i> Direct-Hit Search of the Federal
                                                database which will include misspellings
                                                for live and pending applications.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Professional Preparation of your
                                                federal trademark application.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Digitalization and Formatting of your
                                                trademark specimens and designs.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Electronic Delivery of your trademark
                                                application with no need to wait for
                                                mail or dealing with paper files. This will qualify you the reduced
                                                government filing fee.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Secure Online Account with calendar of
                                                important dates. Your status,
                                                documents, and important deadlines will be available to you 24/7 through
                                                your online account.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Assessment of Application by our team
                                                to avoid any loopholes that might
                                                cause rejection at the government's office.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Cease and Desist Letter A customized
                                                form that can be used if someone
                                                infringing on your mark.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Transfer and Assignment Letter If you
                                                need to sell or otherwise convey your
                                                mark, you have access to your template that you can further customize to
                                                your needs.
                                            </li>
                                            <!--<li>6 Months of Trademark Monitoring service to notify you of possible infringers of your trademark ($88 value).</li>-->
                                            <li><i class="fa-solid fa-check"></i> 1 Year of Trademark Monitoring service
                                                to notify you of possible infringers.
                                                The normal price for our monitoring service is $175. You receive a full
                                                year
                                                for free when choosing our Deluxe package.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> 24-hour Expedited Processing of the
                                                preparation of your trademark
                                                application. Normal processing time is 5 business days in our Basic and
                                                Standard packages.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> 100% Money Back Guarantee Our customer
                                                service team is made up of dedicated
                                                trademark representatives with one goal - to meet each client's needs in
                                                a
                                                friendly, caring, and efficient manner. If you do not think we have met
                                                this
                                                goal, let us know and we will be happy to make every effort to resolve
                                                the
                                                issue(s).
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pack-btn">
                                        <a href="javascript:" onchange="updateTable()"
                                           class="d-inline-block normal-btn deluxe-package-lbl"
                                           title="Starters Pack For Only $235" data-bs-toggle="modal"
                                           data-bs-target="#staticBackdrop">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="pack-main pack-1 text-center py-5 px-3 rounded-3" id="index-4">
                                    <div class="pack-head-div">
                                        <h2 class="fw-bold fs22 text-uppercase mb-3">
                                            Platinum Package
                                            <span class="d-block fw-regular fs14">
                                                + USPTO FILING FEE
                                            </span>
                                        </h2>
                                        <h3 class="price-div fs35 fw-bold mb-0">
                                            <!-- <span class="d-block fs15 fw-regular">Started At</span> -->
                                            $700.00 <strike>$1400.00</strike>
                                        </h3>
                                    </div>
                                    <div class="pack-detail-div">
                                        <ul class="my-3 py-3 text-start">
                                            <li><i class="fa-solid fa-check"></i> Comprehensive Search: A search for
                                                existing trademarks to ensure your proposed mark doesn't conflict with
                                                existing ones. Local, Federal & WWW (World Wide Web) Search. Likelihood
                                                of Approval: Estimation of whether the trademark will likely be approved
                                                by the trademark office.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Preparation of Application: Drafting
                                                the necessary paperwork, including descriptions of the trademark, its
                                                use, and the goods/services it covers. Submission: Filing the
                                                application with the relevant trademark office (e.g., USPTO in the
                                                U.S.).
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Responding to Office Actions:
                                                Addressing any questions, rejections, or requests for additional
                                                information from the trademark office.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Monitoring: Keeping an eye on new
                                                trademark applications that could conflict with yours. Enforcement:
                                                Assisting in taking legal action if another party infringes upon your
                                                trademark.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Secure Online Account with calendar of
                                                important dates. Your status,
                                                documents, and important deadlines will be available to you 24/7 through
                                                your online account.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i> Assessment of Application by our team
                                                to avoid any loopholes that might
                                                cause rejection at the government's office.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Cease and Desist Letter A customized
                                                form that can be used if someone
                                                infringing on your mark.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>Transfer and Assignment Letter If you
                                                need to sell or otherwise convey your
                                                mark, you have access to your template that you can further customize to
                                                your needs.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>1 Year of Trademark Monitoring service
                                                to notify you of possible infringers.
                                                The normal price for our monitoring service is $175. You receive a full
                                                year
                                                for free when choosing our Deluxe package.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>24-hour Expedited Processing of the
                                                preparation of your trademark
                                                application. Normal processing time is 5 business days in our Basic and
                                                Standard packages.
                                            </li>
                                            <li><i class="fa-solid fa-check"></i>100% Money Back Guarantee Our customer
                                                service team is made up of dedicated
                                                trademark representatives with one goal - to meet each client's needs in
                                                a
                                                friendly, caring, and efficient manner. If you do not think we have met
                                                this
                                                goal, let us know and we will be happy to make every effort to resolve
                                                the
                                                issue(s).
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pack-btn">
                                        <a href="javascript:" onchange="updateTable()"
                                           class="d-inline-block normal-btn t-c-package-lbl"
                                           title="Starters Pack For Only $700" data-bs-toggle="modal"
                                           data-bs-target="#staticBackdrop">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row my-5">
            <div class="row my-2">
                <h2 class="hd-primary">
                    You are almost done! Now just pick the processing speed that is right for you.
                </h2>
                <div class="expedited-box">
                    <h6>
                        RUSH PRIORITY PROCESSING. NEXT DAY PROCESSING WHEN YOU NEED YOUR MARK FILED QUICKLY.
                    </h6>
                    <p>
                        Since you ordered a paid search, we will send you your search results before the end of
                        the next business day (as long as you have sent us your specimen)
                        and file your application as soon you confirm your order after you receive your results
                        and provide us with any additional necessary information.
                    </p>
                    <div class="form-check ps-0">
                        <label for="ch24hour">
                            <input onchange="updateTable()" type="checkbox" name="exp_term" value="49.00"
                                   data-uspto="49" id="ch24hour">
                            <em style="color: #ff4a00;font-size:14px;vertical-align:top;">*</em>
                            24-hour Expedited Processing (Next Business Day):
                            <span style="color: #022267;" class="fw-bold addprice">
                                <span class="getLabel-amount">$49.00</span>USD
                            </span>
                        </label>
                    </div>
                    <span class="expedited-info">OPTIONAL</span>
                </div>
            </div>
        </div>
        <div class="form-row my-5">
            <div class="row my-2">
                <h2 class="hd-primary">Your Order Summary:</h2>
                <p class="phara-bold">
                    We will conduct a comprehensive trademark search and provide you
                    with our registrable assessment.
                </p>
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="hidden" name="selected-package-name" value="No package selected">
                        <input type="hidden" name="selected-package-price" value="$0.00">
                        <table id="createtd" class="w-100 mt-2">
                            <tbody id="">
                            <tr class="default-row">
                                <td style="width: 40%" class="border-1 p-2">Brand Name or Tag Line</td>
                                <td style="width: 60%" class="border-1 p-2">
                                    <span class="package-title"></span>
                                    <span class="popup_amount"></span>
                                </td>
                            </tr>
                            <tr>
                                <td id="selected-package-name">No package selected</td>
                                <td id="selected-package-price">$0.00</td>
                            </tr>
                            <tr class="default-row">
                                <td style="width: 40%">Expedited Processing</td>
                                <td style="width: 60%" class="addvalue-checked">$0.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row my-5">
            <div class="row my-2">
                <h2 class="hd-primary">Agreement & Checkout</h2>
                <p class="phara-bold">Agreement:</p>
                <div class="col-12 mb-4">
                    <div class="d-flex gap-2">
                        <input type="checkbox" id="Agreement" name="Agreement-Checkout" required/>
                        <label for="Agreement">
                            Yes, I agree with FilingDesks<sup>®</sup>
                            <a href="https://filingdesks.com/terms-and-conditions" target="_blank" rel="noopener noreferrer">
                                Terms of Service
                            </a>
                        </label>
                    </div>
                </div>
                <input type="hidden" name="amount" id="amount" value="">
                <input type="hidden" name="key" value="ae5361473c0038d7f8c4b4236c50b2da">
                <input type="hidden" name="lead_id" value="">
                <input type="hidden" name="lead_hash" value="">
                <input type="hidden" name="step" value="2">
                <input type="hidden" name="form_name" value="One Step Form">
                <input type="hidden" class="loccity" name="loccity"/>
                <input type="hidden" class="loccountry" name="loccountry"/>
                <input type="hidden" class="locip" name="locip"/>
                <input type="hidden" class="locloc" name="locloc"/>
                <input type="hidden" class="locorg" name="locorg"/>
                <input type="hidden" class="locpostal" name="locpostal"/>
                <input type="hidden" class="locregion" name="locregion"/>
                <input type="hidden" class="loctimezone" name="loctimezone"/>
                <input type="hidden" class="locerr" name="locerr"/>
                <input type="hidden" name="current_url" value="http://filingdesks.com/onestep-form/index.php">
                
                <input type="hidden" name="next" value="https://filingdesks.com/pay-secure/index.php">
                
                <h4>Total Due Now: <span class="totaldue_amount">$0.00</span></h4>
                <button class="submit-btn" type="submit">Pay Secure <span class="gate-totalamount">$0.00</span></button>
                <div class="img-secure text-center mt-5">
                    <img src="https://filingdesks.com/assets/img/secure-image.png" alt="Secure Image" class="img-fluid"/>
                </div>
            </div>
        </div>
    </div>
</form>

    <script>
        const chkBrand = document.getElementById('chkBrand');
        const chkLogo = document.getElementById('chkLogo');
        const chkLater = document.getElementById('chkLater');

        const brandField = document.getElementById('brandField');
        const logoField = document.getElementById('logoField');

        function toggleFields() {
            brandField.classList.toggle('d-none', !chkBrand.checked);
            logoField.classList.toggle('d-none', !chkLogo.checked);
        }

        chkBrand.addEventListener('change', toggleFields);
        chkLogo.addEventListener('change', toggleFields);
        chkLater.addEventListener('change', function () {
            if (chkLater.checked) {
                chkBrand.checked = false;
                chkLogo.checked = false;
                toggleFields();
            }
        });
    </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
<script src="js/registration-form.js"></script>
<script>
    fetch('https://ipinfo.io/', {
        headers: {
            'Accept': 'application/json'
        }
    })
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var region = data.region;
            $('.loccity').val(data.city);
            $('.loccountry').val(data.country);
            $('.locip').val(data.ip);
            $('.locloc').val(data.loc);
            $('.locorg').val(data.org);
            $('.locpostal').val(data.postal);
            $('.locregion').val(data.region);
            $('.loctimezone').val(data.timezone);
        })
        .catch(function (error) {
            $('.locerr').val(data.error);
        });
</script>

<script>
    function updateHiddenValues() {
        let val = $("input[name='trademark']:checked").val();

        if (val === "I will provide the details later") {
            $(".i-will-hidden").addClass("d-none");
            $(".logo-check-hide").addClass("d-none");
        } else if (val === "Logo") {
            $(".i-will-hidden").addClass("d-none");
            $(".logo-check-hide").removeClass("active");
            $(".logo-check-hide").removeClass("d-none");
        } else if (val === "Brand Name or Tag line") {
            $(".i-will-hidden").removeClass("d-none");
            $(".logo-check-hide").addClass("d-none");
        }
        updateTable();
    }


    // Summary Table Value
    function updateTable() {
        let tableBody = document.getElementById('createtd').getElementsByTagName('tbody')[0];

        // Clear the table except for the default rows
        tableBody.innerHTML = `
            <tr>
                <td style="width: 40%" class="border-1 p-2">Brand Name or Tag Line</td>
                <td style="width: 60%" class="border-1 p-2"></td>
            </tr>
            <tr>
                <td id="selected-package-name">No package selected</td>
                <td id="selected-package-price">$0.00</td>
            </tr>
            <tr>
                <td style="width: 40%">Expedited Processing</td>
                <td style="width: 60%" class="addvalue-checked">0</td>
            </tr>
        `;

        // Get the selected trademark value
        let selectedTrademark = document.querySelector('input[name="trademark"]:checked');
        if (selectedTrademark) {
            let trademarkValue = selectedTrademark.value;

            // Update the first row with the selected trademark value
            let firstRow = tableBody.rows[0];
            firstRow.cells[0].innerText = trademarkValue;
            if (trademarkValue === "I will provide the details later") {
                firstRow.cells[1].innerText = '';
            } else if (trademarkValue === "Logo") {
                firstRow.cells[1].innerText = '';
            } else if (trademarkValue === "Brand Name or Tag line") {
                let protect_name = $("input[name='protect_name'").val();
                let protect_services = $("textarea[name='protect_services'").val();
                firstRow.cells[1].innerHTML = `<p>Protect Name: ${protect_name}</p><p>Protect Services : ${protect_services}</p>`;
            }
        }

        // Update the second row with expedited processing value
        let secondRow = tableBody.rows[1];
        let packageName = $("input[name='selected-package-name'").val()
        let packagePrice = $("input[name='selected-package-price'").val()
        secondRow.cells[0].innerText = packageName;
        secondRow.cells[1].innerText = packagePrice;


        // Handle expedited processing
        let expeditedCheckbox = document.getElementById('ch24hour');
        let expeditedPrice = expeditedCheckbox.checked ? 49.00 : 0.00;

        let thirdRow = tableBody.rows[2];
        thirdRow.cells[1].innerText = `$${expeditedPrice.toFixed(2)}`;


        const popupAmountElement = document.querySelector('.totaldue_amount');
        const gateTotalAmount = document.querySelector('.gate-totalamount');
        // let popupAmountValue = parseFloat(popupAmountElement.innerHTML.replace('$', '').trim());

        let totalAmount = parseFloat(packagePrice.replace('$', '').trim()) + expeditedPrice;

        popupAmountElement.innerHTML = `$${totalAmount.toFixed(2)}`;
        gateTotalAmount.innerHTML = `$${totalAmount.toFixed(2)}`;
        $('#amount').val(totalAmount.toFixed(2));
    }

    function selectPackage(packageName, packagePrice) {
        $("input[name='selected-package-name'").val(packageName)
        $("input[name='selected-package-price'").val(packagePrice)
        updateTable();
    }

    // Add event listeners for each package button
    document.getElementById('index-1').addEventListener('click', function () {
        selectPackage('Basic Package', '$35.00');
    });

    document.getElementById('index-2').addEventListener('click', function () {
        selectPackage('Standard Package', '$149.00');
    });

    document.getElementById('index-3').addEventListener('click', function () {
        selectPackage('Deluxe Package', '$199.00');
    });

    document.getElementById('index-4').addEventListener('click', function () {
        selectPackage('Platinum Package', '$700.00');
    });

    document.querySelector('.brand-value input').addEventListener('input', updateTable);
    document.querySelector('.brand-value textarea').addEventListener('input', updateTable);
    document.querySelector('.uploadimage').addEventListener('change', updateTable);


    const fileInput = document.querySelector('.uploadimage');
    const showImagesDiv = document.querySelector('.show-images');

    fileInput.addEventListener('change', function (event) {
        const file = event.target.files[0]; // Ensure single file selection
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const imageWrapper = document.createElement('div');
                imageWrapper.classList.add('image-wrapper');
                const img = document.createElement('img');
                img.src = e.target.result;
                const deleteBtn = document.createElement('button');
                deleteBtn.classList.add('delete-btn');
                deleteBtn.innerHTML = '×';

                // Add event listener to delete button
                deleteBtn.addEventListener('click', function () {
                    imageWrapper.remove();
                    removeLogoFromTable(); // Call the function to remove the corresponding row from the table
                });

                imageWrapper.appendChild(img);
                imageWrapper.appendChild(deleteBtn);
                showImagesDiv.innerHTML = ''; // Clear previous images
                showImagesDiv.appendChild(imageWrapper); // Show only the new image
            };
            reader.readAsDataURL(file);
        }
        fileInput.value = '';
    });

    // Function to remove the row with the logo from the table
    function removeLogoFromTable() {
        let tableBody = document.getElementById('createtd').getElementsByTagName('tbody')[0];
        let logoRow = tableBody.querySelector('td.has-logo'); // Find the cell containing the logo

        if (logoRow) {
            let rowToDelete = logoRow.parentNode; // Get the row containing the logo
            rowToDelete.remove(); // Remove the row from the table
        }
    }

    $("#phone").intlTelInput({
        initialCountry: "us",
        separateDialCode: true,
    });

    $(document).ready(function () {
        $("#phone").inputmask({
            mask: "(999) 999-9999",  // Mask format for +1 (XXX) XXX-XXXX
            placeholder: " ",           // Keeps the placeholder while typing
            showMaskOnHover: false,      // Don't show mask on hover
            showMaskOnFocus: true        // Show mask when field is focused
        });
    });
</script>

<script>
    $('.basic-package-lbl').click(function () {
        enteramount('35', '.basic-package-lbl', 'Basic Package');
    });
    $('.standard-package-lbl').click(function () {
        enteramount('149', '.standard-package-lbl', 'Standard Package');
    });
    $('.deluxe-package-lbl').click(function () {
        enteramount('199', '.deluxe-package-lbl', 'Deluxe Package');
    });
    $('.t-c-package-lbl').click(function () {
        enteramount('700', '.t-c-package-lbl', 'Trademark & Copyright Package');
    });

    function enteramount(amount, elclass, pkg_title) {
        $('.amount').val(amount);

        $('.basic-package-lbl').removeClass('selected-package');
        $('.standard-package-lbl').removeClass('selected-package');
        $('.deluxe-package-lbl').removeClass('selected-package');
        $('.t-c-package-lbl').removeClass('selected-package');
        $(elclass).addClass('selected-package');
        $("input[name='amount']").val(amount);
        $("input[name='package_name']").val(pkg_title);
        console.log('amount' + amount + ', ' + 'elclass: ' + elclass + ', pkg_title: ' + pkg_title);

    }
</script>
<script>
    const packageButtons = document.querySelectorAll(".pack-main .pack-btn a");

    // Button click event listener
    packageButtons.forEach(button => {
        button.addEventListener("click", function () {
            packageButtons.forEach(btn => {
                btn.classList.remove("selected");
                btn.textContent = "Get Started";
            });
            this.classList.add("selected");
            this.textContent = "Selected!";
        });
    });
</script>
</body>

</html>