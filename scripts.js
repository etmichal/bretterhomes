function sendEmail() {

    var firstName = $("#firstName");
    var lastName = $("#lastName");
    var email = $("#email");
    var message = $("#message");
    var tele = $("#tele");
    console.log("variables logged");

    var invalid = [];
    var emptyField = [];

    //resets errors each time the button is clicked
    document.getElementById("printErrors").innerHTML = "";


    //checks if fields are empty
    if (isNotEmpty(firstName) && isNotEmpty(lastName) && isNotEmpty(email) && isNotEmpty(tele) && isNotEmpty(message)) {

        //checks if fields are valid, prints results
        if (!validateField(firstName, lastName, email, tele)) {
            var invalidInput = `<small class="text-danger">`;
            invalid.forEach(function (error) {
                invalidInput += error + "<br>";
            })
            invalidInput += "<small>";
            document.getElementById("printErrors").innerHTML += invalidInput;
        } else {
            //else send the email
            $.ajax({
                url: "sendEmail.php",
                method: "POST",
                dataType: "json",
                data: {
                    firstName: firstName.val(),
                    lastName: lastName.val(),
                    email: email.val(),
                    message: message.val(),
                    tele: tele.val()
                }, success: function (response) {
                    console.log(response);
                }, error: function (response, error, exception) {
                    console.log("You've encountered an error: " + error + " " + exception);
                    console.log(response);
                }
            })

        }

        //if fields are empty, prints queues for empty fields
    } else {
        var emptyFields = '<small class="text-danger">';
        if (!isNotEmpty(firstName)) {
            emptyField.push("You must provide a first name.");
        }
        if (!isNotEmpty(lastName)) {
            emptyField.push("You must provide a last name.");
        }
        if (!isNotEmpty(email)) {
            emptyField.push("You must provide an email");
        }
        if (!isNotEmpty(tele)) {
            emptyField.push("You must provide a phone number");
        }
        if (!isNotEmpty(message)) {
            emptyField.push("Please tell us why you're contacting us.")
        }
        emptyField.forEach(function (error) {
            emptyFields += error + "<br>";
        });
        emptyFields += "</small>"
        document.getElementById("printErrors").innerHTML = emptyFields;
    }

    //CHECKS IF FIELDS ARE EMPTY
    function isNotEmpty(field) {
        if (field.val() == "") {
            if (field.val().includes("@")) {
                return true;
            }
            field.css("border-bottom", "4px solid red");
            return false;
        } else {
            field.css("border-bottom", "4px solid green");
        }
        return true;
    }

    //CHECKS IF FIELDS ARE VALID
    function validateField(firstName, lastName, email, tele) {

        var isValid = true;
        if (!nameValidator(firstName)) {
            firstName.css("border-bottom", "4px solid red");
            isValid = false;
        }
        if (!nameValidator(lastName)) {
            lastName.css("border-bottom", "4px solid red");
            isValid = false;
        }
        if (!emailValidator(email)) {
            isValid = false;
        }
        if (!teleValidator(tele)) {
            isValid = false;
        }
        if (isValid == false) {
            return false;
        } else {
            return true;
        }

    }

    //CHECKS IF NAME IS VALID
    function nameValidator(name) {
        const nameParam = /^[a-zA-Z]{2,}$/;
        if (!nameParam.test(name.val())) {
            invalid.push("Invalid name, must be letters only");
            return false;
        } return true;

    }

    //CHECKS IF EMAIL IS VALID
    function emailValidator(email) {
        const emailParam = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailParam.test(email.val())) {
            console.log(emailParam.test(email.val()));
            invalid.push("Please enter a valid email");
            email.css("border-bottom", "4px solid red");
            return false;
        } return true;
    }

    //CHECKS IF PHONE NUMBER IS VALID
    function teleValidator(tele) {

        //will accept 15551234567 OR 5551234567 OR 1-555-123-4567 or 555-123-4567
        const teleParam = /^[0-9]{10}$|^[0-9]{3}-[0-9]{3}-[0-9]{4}$|^1[0-9]{10}$|^1-[0-9]{3}-[0-9]{3}-[0-9]{4}$/
        if (!teleParam.test(tele.val())) {
            invalid.push("Please enter a valid phone number");
            tele.css("border-bottom", "4px solid red");
            return false;
        } return true;
    }

}

//INVOKE GALLERY SORT
const gallery = $("#gallery")[0];

$("#gallery-filter").click(function (e) {

    e.preventDefault();
    var filter = e.target;
    filter = filter.innerText.toLowerCase();

    //see gallery.js
    filterGallery(filter);

});


//EXPANDS GALLERY SELECTION
document.getElementById("gallery").addEventListener("click", e => {
    e.preventDefault();

    //see gallery.js
    expandTarget(e);
})
