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
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form action="pay-secure.php" method="POST">
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
                                <input class="radio-fields brand-showwalle get-value" type="checkbox" id="Tagline"
                                    name="trademark" value="Brand Name or Tag line">
                                <label class="radio-label" for="Tagline">Brand Name or Tag line</label>
                            </div>
                            <div class="logo-checked get-label">
                                <input class="radio-fields logo-checked get-value" type="checkbox" id="Logo"
                                    name="trademark" value="Logo">
                                <label class="radio-label ms-3" for="Logo">Logo</label>
                            </div>
                            <div class="provide-checked get-label">
                                <input class="radio-fields slogan-checked get-value" type="checkbox" id="slogan"
                                    name="trademark" value="Slogan">
                                <label class="radio-label ms-3 get-value" for="slogan">Slogan</label>
                            </div>
                        </div>
                    </div>

                    <div class="row i-will-hidden brand-value d-none">
                        <div class="col-12 mb-4 logo-checked-fields">
                            <label for="protect_name" class="phara-bold mb-3">Which Brand Name or Tagline do you want to trademark?</label>
                            <input type="text" id="protect_name" name="protect_name" class="w-100 input-fields get-value" placeholder="Product / Service / Company Name">
                        </div>
                        <div class="col-12 mb-4">
                            <label for="protect_services" class="phara-bold mb-3">What Products and Services do you want your trademark to cover?</label>
                            <textarea id="protect_services" name="protect_services" onkeyup="updateTable()" class="textarea-fields w-100 get-value"></textarea>
                            <p class="field-text">
                                *The information you provide here is just for us to get the process started. We’ll be in touch shortly to go over the details, and you’ll have ample opportunity to review and revise everything.
                            </p>
                        </div>
                    </div>

                    <div class="row logo-check-hide d-none">
                        <div class="col-12 mb-4">
                            <label class="phara-bold mb-3 w-100">Which Logo do you want to trademark?*</label>
                            <div class="set">
                                <div class="position-relative">
                                    <span class="position-relative input-fields d-flex">
                                        Drag your logo here or click to upload
                                    </span>
                                    <input type="file" class="w-100 uploadimage" accept="image/*">
                                </div>
                                <div class="show-images w-100 mt-3"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4 d-none" id="sloganInputWrapper">
                        <label for="sloganText" class="phara-bold mb-3">Enter Slogan</label>
                        <input type="text" id="sloganText" name="slogan_text" class="w-100 input-fields get-value" placeholder="Enter your slogan here">
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
                                required />
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <input type="text" class="w-100 input-fields" name="last_name" placeholder="Last Name"
                                required />
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <input type="email" class="w-100 input-fields" name="email" placeholder="Email" required />
                        </div>
                        <div class="col-md-6 col-lg-3 mb-4">
                            <input type="tel" id="phone" class="w-100 input-fields" placeholder="Phone Number"
                                name="phone" required />
                        </div>
                        <div class="col-12 mb-4">
                            <div class="d-flex gap-2">
                                <input type="checkbox" id="this-statement-short" name="privacy-agreement" required />
                                <label for="this-statement-short" class="input-container small internal-label"
                                    style="margin-bottom: 0; padding-left: 0">
                                    <strong>YES</strong>,
                                    I agree to
                                    <a href="privacy-policy" target="_blank" id="this-statement-short-link">
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
            <section class="pricing_form_sec" id="pricing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="common-heading">
                                <h2>Affordable Trademark Packages</h2>
                                <p>Protect your brand identity with cost-effective trademark registration plans tailored
                                    to your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="pakg2">
                                <div class="pckg-list" id="gold">
                                    <div class="pckg-box pckg pckg-box2 text-left">
                                        <div class="upper">
                                            <h3> <span class="pck-hdng">TRADEMARK GOLD PACKAGE</span>
                                            </h3>
                                            <h6>For Just
                                            </h6>
                                            <div>
                                                <h4>$35<span class="pck-price">+ USPTO Fee $350/Class*</span></h4>
                                            </div>
                                            <h5>Trademark logo and name with expert registration service.</h5>
                                        </div>
                                        <div class="lower border-left">
                                            <ul>
                                                <li>
                                                    <h2>Direct-Hit Search of the Federal USPTO</h2>
                                                    <p>database which will include exact matches only for live and
                                                        pending
                                                        applications.
                                                    </p>
                                                </li>
                                                <li>
                                                    <h2>Professional Preparation</h2>
                                                    <p>of your federal trademark application.</p>
                                                </li>
                                                <li>
                                                    <h2>Digitalization and Formatting</h2>
                                                    <p>of your trademark specimens and designs.</p>
                                                </li>
                                                <li>
                                                    <h2>Electronic Delivery</h2>
                                                    <p>of your trademark application with no need to wait for mail or
                                                        dealing
                                                        with
                                                        paper files. This will qualify you the reduced government filing
                                                        fee.
                                                    </p>
                                                </li>
                                                <li>
                                                    <h2>Secure Online Account</h2>
                                                    <p>with calendar of important dates. Your status, documents, and
                                                        important
                                                        deadlines will be available to you 24/7 through your online
                                                        account.
                                                    </p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrap column">
                                                <a href="javascript:;"
                                                    class="theme-btn2 blackbg popbtn gold-package-btn" rel="">Select
                                                    Package</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pckg-list" id="platinum">
                                <div class="pckg-box pckg pckg-box2 text-left active">
                                    <div class="most-po">
                                        <h6>Most Popular</h6>
                                    </div>
                                    <div class="upper">
                                        <h3><span class="pck-hdng">TRADEMARK PLATINUM PACKAGE</span>
                                            <!-- <span class="pck-hdng"><span class="pck-hdng">TRADEMARK GOLD PACKAGE</span>
                                                </span> -->
                                        </h3>
                                        <h6>For Just
                                        </h6>
                                        <div>
                                            <h4>$149 <span class="pck-price">+ USPTO Fee $350/Class*</span></h4>

                                        </div>
                                        <h5>Trademark logo and name with expert registration service.</h5>
                                    </div>
                                    <div class="lower border-left">
                                        <ul>
                                            <li>
                                                <h2>Direct-Hit Search of the Federal USPTO</h2>
                                                <p>database which will include exact matches only for live and pending
                                                    applications.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Professional Preparation</h2>
                                                <p>of your federal trademark application.</p>
                                            </li>
                                            <li>
                                                <h2>Digitalization and Formatting</h2>
                                                <p>of your trademark specimens and designs.</p>
                                            </li>
                                            <li>
                                                <h2>Electronic Delivery</h2>
                                                <p>of your trademark application with no need to wait for mail or
                                                    dealing with
                                                    paper files. This will qualify you the reduced government filing
                                                    fee.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Secure Online Account</h2>
                                                <p>with calendar of important dates. Your status, documents, and
                                                    important
                                                    deadlines will be available to you 24/7 through your online account.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Trademark Monitoring</h2>
                                                <p>
                                                    A 6 month service that notifies you of possible infringers of your
                                                    mark to
                                                    help
                                                    protect you from knock-offs and impersonators. After a 10-day free
                                                    trial,
                                                    your
                                                    Trademark Monitoring subscription will automatically renew for $199
                                                    semi-annually.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Transfer and Assignment Letter</h2>
                                                <p>
                                                    In the event that you intend to sell or transfer your trademark, we
                                                    provide
                                                    you
                                                    with a customizable template. This template grants you the
                                                    flexibility to
                                                    tailor
                                                    it according to your specific requirements.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Refusal Risk Meter</h2>
                                                <p>
                                                    Refusal Risk Meter will be conducted by the team of experts before
                                                    filing to
                                                    avoid any kind of loopholes that might cause rejections at the
                                                    government's
                                                    office.
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="btn-wrap column">
                                            <a href="javascript:;"
                                                class="theme-btn2 blackbg popbtn platinum-package-btn">Select
                                                Package</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="pckg-list" id="elite">
                                <div class="pckg-box pckg pckg-box2 text-left ">
                                    <div class="upper">
                                        <h3><span class="pck-hdng">TRADEMARK ELITE PACKAGE</span>
                                            <!-- <span class="pck-hdng"><span class="pck-hdng">TRADEMARK GOLD PACKAGE</span>
                                                </span> -->
                                        </h3>
                                        <h6>For Just
                                        </h6>
                                        <div>
                                            <h4>$299<span class="pck-price">+ USPTO Fee $350/Class*</span></h4>
                                        </div>
                                        <h5>Trademark logo and name with expert registration service.</h5>
                                    </div>
                                    <div class="lower border-left">
                                        <ul>
                                            <li>
                                                <h2>Direct-Hit Search of the Federal USPTO</h2>
                                                <p>database which will include exact matches only for live and pending
                                                    applications.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Professional Preparation</h2>
                                                <p>of your federal trademark application.</p>
                                            </li>
                                            <li>
                                                <h2>Digitalization and Formatting</h2>
                                                <p>of your trademark specimens and designs.</p>
                                            </li>
                                            <li>
                                                <h2>Electronic Delivery</h2>
                                                <p>of your trademark application with no need to wait for mail or
                                                    dealing with
                                                    paper files. This will qualify you the reduced government filing
                                                    fee.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Secure Online Account</h2>
                                                <p>with calendar of important dates. Your status, documents, and
                                                    important
                                                    deadlines will be available to you 24/7 through your online account.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Trademark Monitoring</h2>
                                                <p>
                                                    An yearly service that notifies you of possible infringers of your
                                                    mark to
                                                    help
                                                    protect you from knock-offs and impersonators. After a 10-day free
                                                    trial,
                                                    your
                                                    Trademark Monitoring subscription will automatically renew for $345
                                                    annually.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Free Domain Name</h2>
                                                <p>
                                                    We've partnered with Squarespace to offer you a free domain (.com,
                                                    .net,
                                                    .biz
                                                    etc.) subscription for one year, plus resources and support for
                                                    getting
                                                    started
                                                    with your website and online presence.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Transfer and Assignment Letter:</h2>
                                                <p>
                                                    In the event that you intend to sell or transfer your trademark, we
                                                    provide
                                                    you
                                                    with a customizable template. This template grants you the
                                                    flexibility to
                                                    tailor
                                                    it according to your specific requirements.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Private Registration:</h2>
                                                <p>
                                                    Protect yourself from unwanted spam and sales calls by refraining
                                                    from
                                                    sharing
                                                    your email address and phone number with scammers. Trademark
                                                    Intellectual
                                                    ensures that your personal contact information remains private and
                                                    is not
                                                    included in the public record through the USPTO online database.
                                                    This
                                                    service
                                                    holds a value of $60.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>24-hour Expedited Processing</h2>
                                                <p>
                                                    Choose our expedited processing option to have your copyright
                                                    application
                                                    prepared within 24 hours. In the Basic package, the normal
                                                    processing time
                                                    is 5
                                                    business days.
                                                </p>
                                            </li>
                                            <li>
                                                <h2>Cease and Desist Letter</h2>
                                                <p>
                                                    Cease and Desist is the official letter/legal notice provided by our
                                                    firm
                                                    which
                                                    states that, you are the owner of the mark for the next 10 years and
                                                    if you
                                                    find
                                                    someone using a name/logo/slogan which is similar/same as yours, we
                                                    can
                                                    issue
                                                    this letter to the opposing party.
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="btn-wrap column">
                                            <a href="javascript:;"
                                                class="theme-btn2 blackbg popbtn elite-package-btn">Select Package</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                            <input type="checkbox" id="Agreement" name="Agreement-Checkout" required />
                            <label for="Agreement">
                                Yes, I agree with US Trademark Registry<sup>®</sup>
                                <a href="terms-and-conditions" target="_blank" rel="noopener noreferrer">
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
                    <input type="hidden" class="loccity" name="loccity" />
                    <input type="hidden" class="loccountry" name="loccountry" />
                    <input type="hidden" class="locip" name="locip" />
                    <input type="hidden" class="locloc" name="locloc" />
                    <input type="hidden" class="locorg" name="locorg" />
                    <input type="hidden" class="locpostal" name="locpostal" />
                    <input type="hidden" class="locregion" name="locregion" />
                    <input type="hidden" class="loctimezone" name="loctimezone" />
                    <input type="hidden" class="locerr" name="locerr" />

                    <input type="hidden" name="next" value="pay-secure.php">

                    <h4>Total Due Now: <span class="totaldue_amount">$0.00</span></h4>
                    <button class="submit-btn" type="submit">Pay Secure <span
                            class="gate-totalamount">$0.00</span></button>
                    <div class="img-secure text-center mt-5">
                        <img src="https://filingdesks.com/assets/img/secure-image.png" alt="Secure Image"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </form>
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
     document.addEventListener("DOMContentLoaded", function () {
        function updateHiddenValues() {
            const brandCheckbox = document.getElementById("Tagline");
            const logoCheckbox = document.getElementById("Logo");
            const sloganCheckbox = document.getElementById("slogan");

            const brandField = document.querySelector(".i-will-hidden");
            const logoField = document.querySelector(".logo-check-hide");
            const sloganInput = document.getElementById("sloganText");

            if (brandCheckbox.checked) {
                brandField.classList.remove("d-none");
                document.getElementById("protect_name").setAttribute("required", "required");
                document.getElementById("protect_services").setAttribute("required", "required");
            } else {
                brandField.classList.add("d-none");
                document.getElementById("protect_name").removeAttribute("required");
                document.getElementById("protect_services").removeAttribute("required");
            }

            if (logoCheckbox.checked) {
                logoField.classList.remove("d-none");
            } else {
                logoField.classList.add("d-none");
            }

            if (sloganCheckbox.checked) {
                sloganInputWrapper.classList.remove("d-none");
                sloganInput.setAttribute("required", "required");
            } else {
                sloganInputWrapper.classList.add("d-none");
                sloganInput.removeAttribute("required");
            }

            updateTable();
        }

        document.getElementById("Tagline").addEventListener("change", updateHiddenValues);
        document.getElementById("Logo").addEventListener("change", updateHiddenValues);
        document.getElementById("slogan").addEventListener("change", updateHiddenValues);

        updateHiddenValues();
    });


    // Summary Table Value
  function updateTable() {
    let tableBody = document.getElementById('createtd').getElementsByTagName('tbody')[0];

    // Clear the table except for the default rows
    tableBody.innerHTML = '';

    // Get all selected trademarks (checkboxes)
    const selectedTrademarks = document.querySelectorAll('input[name="trademark"]:checked');

    selectedTrademarks.forEach((el) => {
        let label = el.labels[0]?.innerText || el.value;
        let value = '';

        if (el.value === "Brand Name or Tag line") {
            let protect_name = $("input[name='protect_name']").val();
            let protect_services = $("textarea[name='protect_services']").val();
            value = `<strong>Brand:</strong> ${protect_name || ''}<br><strong>Services:</strong> ${protect_services || ''}`;
        } else if (el.value === "Logo") {
            const fileInput = document.querySelector("input[type='file'].uploadimage");
            const fileName = fileInput?.files?.[0]?.name;
            value = fileName ? `<strong>Logo:</strong> ${fileName}` : '<strong>Logo:</strong> Will be uploaded';
        } else if (el.value === "Slogan") {
            let slogan = document.getElementById("sloganText")?.value || '';
            value = `<strong>Slogan:</strong> ${slogan}`;
        }

        tableBody.innerHTML += `
            <tr>
                <td style="width: 40%" class="border-1 p-2">${label}</td>
                <td style="width: 60%" class="border-1 p-2">${value}</td>
            </tr>
        `;
    });

    // Package name/price row
    let packageName = $("input[name='selected-package-name']").val();
    let packagePrice = $("input[name='selected-package-price']").val();
    tableBody.innerHTML += `
        <tr>
            <td id="selected-package-name">${packageName}</td>
            <td id="selected-package-price">${packagePrice}</td>
        </tr>
    `;

    // Expedited processing row
    let expeditedCheckbox = document.getElementById('ch24hour');
    let expeditedPrice = expeditedCheckbox?.checked ? 49.00 : 0.00;
    tableBody.innerHTML += `
        <tr>
            <td style="width: 40%">Expedited Processing</td>
            <td style="width: 60%" class="addvalue-checked">$${expeditedPrice.toFixed(2)}</td>
        </tr>
    `;

    // Total calculation
    const popupAmountElement = document.querySelector('.totaldue_amount');
    const gateTotalAmount = document.querySelector('.gate-totalamount');
    let totalAmount = parseFloat(packagePrice.replace('$', '').trim()) + expeditedPrice;

    if (popupAmountElement) popupAmountElement.innerHTML = `$${totalAmount.toFixed(2)}`;
    if (gateTotalAmount) gateTotalAmount.innerHTML = `$${totalAmount.toFixed(2)}`;
    $('#amount').val(totalAmount.toFixed(2));
}

    function selectPackage(packageName, packagePrice) {
        $("input[name='selected-package-name']").val(packageName)
        $("input[name='selected-package-price']").val(packagePrice)
        updateTable();
    }

    // Add event listeners for each package button
    document.getElementById('gold').addEventListener('click', function () {
        selectPackage('TRADEMARK GOLD PACKAGE', '$35.00');
    });

    document.getElementById('platinum').addEventListener('click', function () {
        selectPackage('TRADEMARK PLATINUM PACKAGE', '$149.00');
    });

    document.getElementById('elite').addEventListener('click', function () {
        selectPackage('TRADEMARK ELITE PACKAGE', '$299.00');
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
                    removeLogoFromTable
                        (); // Call the function to remove the corresponding row from the table
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
            mask: "(999) 999-9999", // Mask format for +1 (XXX) XXX-XXXX
            placeholder: " ", // Keeps the placeholder while typing
            showMaskOnHover: false, // Don't show mask on hover
            showMaskOnFocus: true // Show mask when field is focused
        });
    });
</script>

<script>
    $('.gold-package-btn').click(function () {
        enteramount('35', '.gold-package-btn', 'TRADEMARK GOLD PACKAGE');
    });
    $('.platinum-package-btn').click(function () {
        enteramount('149', '.platinum-package-btn', 'TRADEMARK PLATINUM PACKAGE');
    });
    $('.elite-package-btn').click(function () {
        enteramount('299', '.elite-package-btn', 'TRADEMARK ELITE PACKAGE');
    });

    function enteramount(amount, elclass, pkg_title) {
        $('.amount').val(amount);

        $('.gold-package-btn').removeClass('selected-package');
        $('.platinum-package-btn').removeClass('selected-package');
        $('.elite-package-btn').removeClass('selected-package');
        $('.t-c-package-lbl').removeClass('selected-package');
        $(elclass).addClass('selected-package');
        $("input[name='amount']").val(amount);
        $("input[name='package_name']").val(pkg_title);
        console.log('amount' + amount + ', ' + 'elclass: ' + elclass + ', pkg_title: ' + pkg_title);

    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const packageButtons = document.querySelectorAll(".theme-btn2");

        packageButtons.forEach(button => {
            button.addEventListener("click", function () {
                packageButtons.forEach(btn => {
                    btn.classList.remove("selected");
                    btn.textContent = "Select Package";
                });
                this.classList.add("selected");
                this.textContent = "Selected!";
                updateTable(); // if you want to call this on click
            });
        });
    });
</script>
</body>

</html>