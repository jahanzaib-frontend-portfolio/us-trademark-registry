document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("#stepForm");
    const continueBtn = document.getElementById("continueBtn");

    if (!form || !continueBtn) return;

    continueBtn.addEventListener("click", function () {
        const formData = {};
        const inputs = form.querySelectorAll('input, select, textarea');

        inputs.forEach(input => {
            if (input.type === 'checkbox') {
                if (!formData[input.name]) formData[input.name] = [];
                if (input.checked) formData[input.name].push(input.value);
            } else if (input.type === 'radio') {
                if (input.checked) formData[input.name] = input.value;
            } else {
                formData[input.name] = input.value;
            }
        });

        // ✅ Get selected package name from .packge-box
        const selectedPackageRadio = form.querySelector('input[name="quote[packagebtn]"]:checked');
        if (selectedPackageRadio) {
            const packageBox = selectedPackageRadio.closest(".packge-box");
            const packageName = packageBox?.getAttribute("data-package") || "Unknown Package";
            formData["quote[package_name]"] = packageName;
        }

        // Save current step
        const currentStep = form.getAttribute("data-step");
        localStorage.setItem("step" + currentStep, JSON.stringify(formData));

        // Merge previous
        let allData = {};
        for (let i = 1; i <= currentStep; i++) {
            const stepData = JSON.parse(localStorage.getItem("step" + i) || "{}");
            allData = {
                ...allData,
                ...stepData
            };
        }

        // Send to PHP
        fetch("send-email.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(allData)
            })
            .then(res => res.text())
            .then(result => {
                console.log("Server:", result);
                window.location.href = "trademark-application-step-" + (parseInt(currentStep) + 1);
            })
            .catch(err => {
                console.error("Error:", err);
                alert("Email send failed.");
            });
    });
});