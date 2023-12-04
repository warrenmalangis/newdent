<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home/css/get-started.css">
    <title>Get-Started</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <style>
        @media (max-width: 810px) {
    .box-1 {
        width: 100%;
    }

    .box-2 {
        display: none;
    }
}
    </style>
</head>
<body>
    <div class="image-container">
        <img src="images/get-started background.jpg" alt="get-started background-image">
    </div>
    <div class="container">
        
    </div>
    <div class="box-1">
        <div class="white-box">
            <img src="images/logo-without-text.png" title="Dent-Click">
        </div>
        <p class="heading">Making brighter smiles a few <span class="sub-heading">clicks away</span></p>
        <form class="submitForm" onsubmit="return onSubmit()">
            <div class="reg-buttons">
                <div class="button-link">
                    <button type="button" class="button" id="patient" onclick="selectButton(this)">
                        <span class="btn-icon">
                            <ion-icon name="person" style="width: 30px; height:30px; color: #1B8EC1; margin-bottom: 10px;"></ion-icon>
                        </span>
                        <span class="btn-text" id="patient-text">Patient</span>
                    </button>
                </div>
                <div class="button-link">
                    <button type="button" class="button" id="dentist" onclick="selectButton(this)">
                        <img style="width: 50px; height: 50px;" src="images/dentist-icon.png">
                        <span class="btn-text">Dental Professional</span>
                    </button>
                </div>
                <button type="submit" class="submit-btn" id="submit-btn" disabled>Submit</button>
            </div>
        </form>
        <p class="call-to-action">Already registered? <a href="#" class="cta-link"><span>Log In</span></a></p>
    </div>
    <div class="box-2">
        <div class="layer-box">
            <div class="quotation-box">
                <p class="quotation-text">
                “Severe periodontal (gum) disease affects approximately
                10% of the global population.”<br/><br/><span class="quotation-source">-World Health Organization (WHO)</span>
                </p>
            </div>
            <img src="images/clinic-vector.png" class="box-2__vector">
            <div class="logo">
                <img src="images/logo-dental 2.png" style="width: 200px; height: 55px;">
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Selecting elements
    var patientButton = document.getElementById('patient');
    var dentistButton = document.getElementById('dentist');
    var submitButton = document.getElementById('submit-btn');

    // Function to handle button clicks
    function selectButton(button) {
      // Reset styles
      patientButton.style.backgroundColor = '';
      dentistButton.style.backgroundColor = '';

      // Highlight the selected button
      button.style.backgroundColor = 'white';

      // Enable the submit button
      submitButton.disabled = false;
    }

    // Adding click event listeners to the buttons
    patientButton.addEventListener('click', function () {
      selectButton(this);
    });

    dentistButton.addEventListener('click', function () {
      selectButton(this);
    });

    // Disable submit button initially
    submitButton.disabled = true;
  });
</script>


</body>
</html>
