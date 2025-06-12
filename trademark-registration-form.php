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
</body>

</html>