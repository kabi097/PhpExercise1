function validate() {
    document.querySelectorAll(".error").forEach(element => {
        element.innerHTML = "";
    });
    let result = true;
    if (document.form.firstname.value == "") {
        document.getElementById("firstname_error").innerHTML = "Pole nie może być puste";
        document.form.firstname.focus();
        result = false;
    }
    if (document.form.lastname.value == "") {
        document.getElementById("lastname_error").innerHTML = "Pole nie może być puste";
        document.form.lastname.focus();
        result = false;
    }
    if (document.form.email.value == "" || !validateEmail(document.form.email.value)) {
        document.getElementById("email_error").innerHTML = "Pole musi zawierać poprawny adres email";
        document.form.email.focus();
        result = false;
    }
    if (!(document.form.gender.options[document.form.gender.selectedIndex].value == "man" || document.form.gender.options[document.form.gender.selectedIndex].value == "woman")) {
        document.getElementById("gender_error").innerHTML = "Pole musi zawierać poprawną wartość";
        document.form.gender.focus();
        result = false;
    }
    if (isNaN(parseInt(document.form.age.value)) || parseInt(document.form.age.value) < 18 || parseInt(document.form.age.value) > 99) {
        document.getElementById("age_error").innerHTML = "Wybierz wiek od 18 do 99";
        document.form.age.focus();
        result = false;
    }
    if (!document.form.policy.checked) {
        document.getElementById("policy_error").innerHTML = "Pole musi być zaznaczone";
        document.form.policy.focus();
        result = false;
    }
    return result;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}