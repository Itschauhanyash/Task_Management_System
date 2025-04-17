function getVals(formControl, controlType) {
    var name = /^[a-zA-Z]+$/gm;
    // var email = /[a-z0-9]{6}+@[a-z]+\.[a-z]{2,3}/;
    var num = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/gm;
    var num2 = /^[0-9]+$/gm;
    switch (controlType) {

        case 'fName':
            // Get the value for input
            var value = $(formControl).val();
            if (name.test(value) == true) {
                document.getElementById("iname").innerHTML = "";
                document.getElementById("forward").disabled = false;
                // document.getElementById("forward").removeClass("disabledBtn");
            } else {
                document.getElementById("iname").innerHTML = "Fill User name";
                document.getElementById("forward").disabled = true;
                // document.getElementById("forward").addClass("disabledBtn");
            }
            // if(name.length>255)
            // alert(value);
            break;




        case 'email':
            // Get the value for input
            var value = $(formControl).val();
            if (value.length >= 16) {
                document.getElementById("iemail").innerHTML = "";
                document.getElementById("forward").disabled = false;
            } else {
                document.getElementById("iemail").innerHTML = "Invalid email length";
                document.getElementById("forward").disabled = true;
            }
            break;

        case 'phone':
            // Get the value for input
            var value = $(formControl).val();
            if (value.length == 10) {
                if (num.test(value)) {
                    document.getElementById("iphone").innerHTML = "";
                    document.getElementById("forward").disabled = false;
                } else {
                    document.getElementById("iphone").innerHTML = "Invalid phone no";
                    document.getElementById("forward").disabled = true;
                }
            } else {
                document.getElementById("iphone").innerHTML = "Invalid phone no length";
                document.getElementById("forward").disabled = true;
            }
            // alert(value);
            break;

        case 'bdate':
            var value = $(formControl).val();
            var dob = new Date(value);
            //calculate month difference from current date in time  
            var month_diff = Date.now() - dob.getTime();
            //convert the calculated difference in date format  
            var age_dt = new Date(month_diff);
            //extract year from date      
            var year = age_dt.getUTCFullYear();
            //now calculate the age of the user  
            var age = Math.abs(year - 1970);
            // alert(age);
            if (age >= 12) {
                document.getElementById("ibdate").innerHTML = "";
                document.getElementById("forward").disabled = false;
            } else {
                document.getElementById("ibdate").innerHTML = "Max age is 12+ for registration";
                document.getElementById("forward").disabled = true;
            }
            // alert(value);
            break;
    }
}

$(document).ready(function() {
    "use strict";
    var password1 = $('#password1'); //id of first password field
    var password2 = $('#password2'); //id of second password field
    var passwordsInfo = $('#pass-info'); //id of indicator element

    passwordStrengthCheck(password1, password2, passwordsInfo); //call password check function

});

function passwordStrengthCheck(password1, password2, passwordsInfo) {
    //Must contain 5 characters or more
    var WeakPass = /(?=.{5,}).*/;
    //Must contain lower case letters and at least one digit.
    var MediumPass = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/;
    //Must contain at least one upper case letter, one lower case letter and one digit.
    var StrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])\S{5,}$/;
    //Must contain at least one upper case letter, one lower case letter and one digit.
    var VryStrongPass = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{5,}$/;

    $(password1).on('keyup', function(e) {
        if (VryStrongPass.test(password1.val())) {
            passwordsInfo.removeClass().addClass('vrystrongpass').html("Very Strong! (Awesome, please don't forget your pass now!)");
        } else if (StrongPass.test(password1.val())) {
            passwordsInfo.removeClass().addClass('strongpass').html("Strong! (Enter special chars to make even stronger");
        } else if (MediumPass.test(password1.val())) {
            passwordsInfo.removeClass().addClass('goodpass').html("Good! (Enter uppercase letter to make strong)");
        } else if (WeakPass.test(password1.val())) {
            passwordsInfo.removeClass().addClass('stillweakpass').html("Still Weak! (Enter digits to make good password)");
        } else {
            passwordsInfo.removeClass().addClass('weakpass').html("Very Weak! (Must be 5 or more chars)");
        }
    });

    $(password2).on('keyup', function(e) {
        if (password1.val() !== password2.val()) {
            passwordsInfo.removeClass().addClass('weakpass').html("Passwords do not match!");
        } else {
            passwordsInfo.removeClass().addClass('goodpass').html("Passwords match!");
        }

    });
}