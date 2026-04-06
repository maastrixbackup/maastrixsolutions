<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Mail</title>

</head>

<body>

    <div class="card text-center">
        <div class="card-header">
            <h1>Applied for Job</h1>
        </div>
        <div class="card-body">
            <h2 class="card-title">Subject: APPLYING FOR JOB</h2>


            <p class="card-text" style="color:green">First Name: {{ $fname_data }}</p>
            <p class="card-text" style="color:green">Last Name: {{ $lname_data }}</p>
            <p class="card-text" style="color:green">Email: {{ $email_data }}</p>
            <p class="card-text" style="color:green">Contact Number: {{ $ContactNum_data }}</p>
            <p class="card-text" style="color:green">Date of Birth: {{ $DOB_data }}</p>
            <p class="card-text" style="color:green">Gender: {{ $gender_data }}</p>
            <p class="card-text" style="color:green">address: {{ $address_data }}</p>
            <p class="card-text" style="color:green">Country: {{ $country_data }}</p>
            <p class="card-text" style="color:green">State: {{ $state_data }}</p>
            <p class="card-text" style="color:green">City: {{ $city_data }}</p>
            <p class="card-text" style="color:green">Subject: {{ $Zip_data }}</p>
            <p class="card-text" style="color:green">
                primary skills: {{ $PrimarySkills_data }}</p>
            <p class="card-text" style="color:green">
                Sencondary Skills: {{ $SecondarySkills_data }}</p>
            <p class="card-text" style="color:green">
                Experience: {{ $experience_data }}</p>
            <p class="card-text" style="color:green">Courrent company: {{ $CurrentEmployer_data }}</p>
            <p class="card-text" style="color:green">
                Qualification: {{ $qualification_data }}</p>
            <p class="card-text" style="color:green">
                resume: {{ $resume_data }}</p>


        </div>
        <div class="card-footer text-muted">
            Thanks for contact
        </div>
    </div>
</body>

</html>
