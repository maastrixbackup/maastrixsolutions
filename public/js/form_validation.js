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
                email: true,
            },
            ContactNum: {
                required: true,
                number: true,
                minlength: 10,

            },
            DOB: {
                required: true
            },
            gender: {
                required: true,
            },
            address: {
                required: true,

            },
            country: {
                required: true,

            },
            state: {
                required: true,

            },
            city: {
                required: true,
            },
            Zip: {
                required: true,
            },
            PrimarySkills: {
                required: true,
            },
            SecondarySkills: {
                required: true,
            },
            experience: {
                required: true,
            },
            CurrentEmployer: {
                required: true,

            },
            qualification: {
                required: true,
                maxlength: 255
            },
            resume: {
                required: true,
                extension: "docx|doc|pdf"
            },
        },
        messages: {
            fname: {
                required: "Please enter your name",
                minlength: "Name should be at least 3 characters"
            },
            lname: {
                required: "Please enter your name",
                minlength: "Name should be at least 3 characters"
            },
            email: {
                required: "Please enter your email",
                email: "The email should be in the format: abc@domain.com"
            },
            ContactNum: {
                required: "Please enter your mobile number",
                number: "Please enter a numerical value",
                min: "Mobile number must be 10 digit"
            },
            DOB: {
                required: "Please specify your Date of Birth",

            },
            gender: {
                required: "Choose your gender.",

            },
            address: {
                required: "Address is required",
            },
            country: {
                required: "Select Your Country",
            },
            state: {
                required: "Select Your State",
            },
            city: {
                required: "Select Your City",
            },
            Zip: {
                required: "this field is required",

            },
            PrimarySkills: {
                required: "This field is required"
            },
            SecondarySkills: {
                required: "This field is required"
            },
            experience: {
                required: "Please Specify your experience"
            },
            CurrentEmployer: {
                required: "Please enter your Current Employer",

            },
            qualification: {
                required: "the qualifications details are required",
                maxlength: "maxlengh is upto 255 only"
            },
            resume: {
                required: "Please upload your resume(size should not bigger than 1MB.",
                extension: "select valied input file format"
            },


        },

    });
});
