// <!----------------------------------------------- Validation of Contact-us -------------------------------------------
$(document).ready(function () {
    $("#maasForm").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            fullname: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true,
            },
            service: {
                required: true,
            },
            country: {
                required: true,
            },
            Pnum: {
                required: true,
                number: true,
                min: 10
            },
            fnum: {
                required: true,
                minlength: 10
            },
            msg: {
                required: true,
            },
            address: {
                required: true,
            },
        },
        messages: {
            fullname: {
                required: "Please enter your name",
                minlength: "Name should be at least 3 characters"
            },
            email: {
                required: "Please enter your email",
                email: "The email should be in the format: abc@domain.com"
            },
            service: {
                required: "Please select your service",
            },
            country: {
                required: "Please select your country",
            },
            Pnum: {
                required: "Please enter your mobile number",
                number: "Please enter a numerical value",
                min: "Mobile number must be 10 digit"
            },
            fnum: {
                required: "Please enter your Fax No.",
                minlength: "Number  should be at least 10 digit"
            },
            msg: {
                required: "Please enter Message."
            },
            address: {
                required: "Please enter your Address.",
            },
        },
    });
});

// Form Validation of Contact-Form

$(document).ready(function () {
    $("#maasContactForm").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            Username: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true,
            },
            PhoneNum: {
                required: true,
                number: true,
                min: 10
            },
            CName: {
                required: true,
                minlength: 3
            },
            Subject: {
                required: true,
                minlength: 3
            },
            radio: {
                required: true,

            },
            msgs: {
                required: true,
            }
        },
        messages: {
            fullname: {
                required: "Please enter your name",
                minlength: "Name should be at least 3 characters"
            },
            email: {
                required: "Please enter your email",
                email: "The email should be in the format: abc@domain.com"
            },
            PhoneNum: {
                required: "Please enter your mobile number",
                number: "Please enter a numerical value",
                min: "Mobile number must be 10 digit"
            },
            CName: {
                required: "Please enter your company name.",
                minlength: "Name should be at least 3 characters"
            },
            Subject: {
                required: "Please enter subject.",
                minlength: "Name should be at least 3 characters"
            },
            radio: {
                required: "Choose option.",

            },

        },

    });
});


// Form Validation of job-apply


$(document).ready(function () {


    // Block future DOB and age less than/equal 18
    let today = new Date();

    today.setFullYear(today.getFullYear() - 18);
    today.setDate(today.getDate() - 1);

    $("#DOB").attr("max", today.toISOString().split("T")[0]);

    // Age validation
    $.validator.addMethod("age18plus", function (value, element) {

        let dob = new Date(value);
        let currentDate = new Date();

        let age = currentDate.getFullYear() - dob.getFullYear();

        let monthDiff = currentDate.getMonth() - dob.getMonth();

        if (
            monthDiff < 0 ||
            (monthDiff === 0 && currentDate.getDate() < dob.getDate())
        ) {
            age--;
        }

        return age > 18;

    }, "Candidate must be older than 18 years");



    $("#CandidateApplyForm").validate({

        errorClass: "error fail-alert",
        validClass: "valid success-alert",


        rules: {


            fname: {
                required: true,
                minlength: 3
            },


            lname: {
                minlength: 3
            },


            email: {
                required: true,
                email: true
            },


            ContactNum: {

                required: true,
                number: true,
                minlength: 10,
                maxlength: 10

            },


            DOB: {

                required: true,
                age18plus: true

            },


            gender: {

                required: true

            },


            address: {

                required: true

            },


            country: {

                required: true

            },


            state: {

                required: true

            },


            city: {

                required: true

            },


            Zip: {

                required: true

            },


            PrimarySkills: {

                required: true

            },


            SecondarySkills: {

                required: true

            },


            experience: {

                required: true

            },


            CurrentEmployer: {

                required: true

            },


            qualification: {

                required: true,
                maxlength: 255

            },


            resume: {

                required: true,
                extension: "doc|docx|pdf",

            }


        },


        messages: {


            fname: {

                required: "Please enter your first name",
                minlength: "Name should be at least 3 characters"

            },


            lname: {

                minlength: "Name should be at least 3 characters"

            },


            email: {

                required: "Please enter your email",
                email: "Enter valid email address"

            },


            ContactNum: {

                required: "Please enter your mobile number",
                number: "Only numbers allowed",
                minlength: "Mobile number must be 10 digits",
                maxlength: "Mobile number must be 10 digits"

            },


            DOB: {

                required: "Please specify your Date of Birth",
                age18plus: "Candidate must be older than 18 years"

            },


            gender: {

                required: "Choose your gender"

            },


            address: {

                required: "Address is required"

            },


            country: {

                required: "Select your country"

            },


            state: {

                required: "Select your state"

            },


            city: {

                required: "Select your city"

            },


            Zip: {

                required: "Zip is required"

            },


            PrimarySkills: {

                required: "Primary skills required"

            },


            SecondarySkills: {

                required: "Secondary skills required"

            },


            experience: {

                required: "Please specify your experience"

            },


            CurrentEmployer: {

                required: "Please enter current employer"

            },


            qualification: {

                required: "Qualification details required",
                maxlength: "Maximum 255 characters allowed"

            },


            resume: {

                required: "Please upload your resume",
                extension: "Only doc, docx, pdf files allowed",

            }


        }


    });


});
