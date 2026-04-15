function showLoading(btn) {
    btn.innerHTML = "Processing...";
}

// LOGIN VALIDATION
function validateForm() {
    let phone = document.getElementById("phone").value;
    let password = document.getElementById("password").value;

    let phonePattern = /^(\+251)(9|7)\d{8}$/;
    let passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

    if (!phonePattern.test(phone)) {
        alert("Invalid phone!");
        return false;
    }

    if (!passwordPattern.test(password)) {
        alert("Weak password!");
        return false;
    }

    return true;
}

// REGISTER VALIDATION
function validateRegisterForm() {
    let phone = document.getElementById("regPhone").value;
    let password = document.getElementById("regPassword").value;

    let phonePattern = /^(\+251)(9|7)\d{8}$/;
    let passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

    if (!phonePattern.test(phone)) {
        alert("Invalid phone!");
        return false;
    }

    if (!passwordPattern.test(password)) {
        alert("Weak password!");
        return false;
    }

    return true;
}