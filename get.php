<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap" rel="stylesheet">
  <style>
    body{
      margin: 0;
      padding: 0;
      font-family: 'Raleway', sans-serif;
    }
    .background-container {
      background: url('images/get-started background.jpg') center/cover no-repeat fixed;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .logo-container{
     margin: 0 auto;
  width: 73px;
  height: 69px;
  flex-shrink: 0;
  border-radius: 16px;
  border: 1.5px solid #F1F1F1;
  background: #FFF;
  box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }
    .heading {
  font-family: 'Bitter', serif;
  font-size: 32px;
  font-weight: 500;
  line-height: 50px;
  text-align: center;
   margin: 0 20px;
}
.sub-heading {
  color: #146C94;
}
/* Add this to your existing styles or in a separate style tag or file */

.button-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 370px;
  margin: auto;
}

.user-button {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: white;
  padding: 15px;
  border: 2px solid #9E9E9E;
  border-radius: 5px;
  width: 48%; 
}
.user-button:hover {
  background: rgba(27, 142, 193, 0.06);
  border: 2px solid #1B8EC1;
}

.user-button.selected {
  background-color: white;
  border: 2px solid #1B8EC1;
  cursor: pointer;
  color: black;
  font-weight: 600;
}

.user-button img {
  margin-bottom: 5px;
}
.btn-text{
  font-size: 18px;
  font-family: 'Raleway', sans-serif;
  font-weight: 500;
  color: #393939;
}
#patient-text {
  padding-top: 5px;
}
.submit-btn {
  background-color: #28a745; /* Adjust the color as needed */
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  width: 100%;
}
/*.left-col{
  margin: 0 50px;
}*/
.submit-btn{
  height: 42px;
  font-family: 'Raleway', sans-serif;
  font-size: 18px;
  font-weight: 500;
  color: white;
  background-color: #146C94;
  box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.25);
  border-radius: 5px;
  margin-top: 30px;
  transition: 0.3s;
}
.submit-btn:hover {
  background-color: #16566e;
  cursor: pointer;
}

/* Add this to your existing styles */
.submit-btn:disabled:hover {
    cursor: not-allowed;
    background-color: initial; /* You can set it to the default background color or any other color you prefer */
    color: initial; /* You can set it to the default text color or any other color you prefer */
    border-color: initial; /* You can set it to the default border color or any other color you prefer */
    box-shadow: none; /* You can set it to the default box shadow or any other box shadow you prefer */
}
.call-to-action {
  text-align: center;
  font-size: 17px;
  font-weight: 600;
  margin-top: 20px;
}

.cta-link {
  color: #1B8EC1;
  text-decoration: none;
}
.container-with-border {
  background-color: #A1CCD1;
  border-radius: 30px 0 0 30px;
  padding: 20px; /* Add padding as needed */
  height: 80vh; /* Ensure the container takes the full height of the parent */
}
.right-col{
  padding: 0;
}
.quotation-text {
  font-family: 'Bitter', serif;
  font-weight: 600;
}
.quotation-source {
  color: #146C94;
  font-weight: 700;
}
}


/* Media query for responsiveness */
@media (max-width: 768px) {
  .user-button {
    width: 100%; /* Make the buttons full-width on smaller screens */
    margin-bottom: 10px;
  }
}

@media (max-width: 768px) {
  .heading {
    font-size: 24px; /* Adjust font size for smaller screens 
  }
}*/
  </style>
  <title>Your Web Page</title>
</head>
<body>

  <div class="background-container">
    <div class="container-fluid content-container">
      <div class="row">
        <!-- Left Column Content -->
        <div class="col-md-6 left-col">
  <!-- Left Column Content -->
  <div class="logo-container text-center bg-white">
    <!-- Your Logo Here -->
    <img src="images/logo-without-text.png" alt="Your Logo" class="img-fluid">
  </div>
  
  <div class="text-center mt-4">
    <p class="heading">Making brighter smiles a few <span class="sub-heading">clicks away</span></p>
  </div>

  <form class="submitForm" onsubmit="return onSubmit()">
    <!-- Your existing form content -->

    <!-- New form content for the buttons -->
    <div class="button-container mt-4">
      <button type="button" class="user-button" id="patient" onclick="selectButton(this)">
        <ion-icon name="person" style="width: 30px; height:30px; color: #1B8EC1; margin-top: 10px; margin-bottom: 10px;"></ion-icon>
        <span class="btn-text">Patient</span>
      </button>

      <button type="button" class="user-button" id="dentist" onclick="selectButton(this)">
        <img style="width: 50px; height: 50px;" src="images/dentist-icon.png" alt="Dental Icon">
        <span class="btn-text">Dental Professional</span>
      </button>
    

    <button type="submit" class="submit-btn mt-4" id="submit-btn" disabled>Submit</button>
    </div>
  </form>


  <div class="text-center mt-4">
    <p class="call-to-action">Already registered? <a href="#" class="cta-link"><span>Log In</span></a></p>
  </div>
</div>

        <div class="col-md-6 right-col">
          <!-- Content for the second column goes here -->
          <div class="container-with-border">
            <p class="quotation-text">
                “Severe periodontal (gum) disease affects approximately
                10% of the global population.”<br/><br/><span class="quotation-source">-World Health Organization (WHO)</span>
                </p>
                <img src="images/clinic-vector.png" class="box-2__vector">
  </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    let selectedOption = null;

    function selectButton(button) {
        if (selectedOption) {
            // Remove highlight from the previously selected button
            document.getElementById(selectedOption).classList.remove('selected');
        }

        selectedOption = button.id;

        // Highlight the selected button
        button.classList.add('selected');

        // Enable or disable the submit button based on the selected option
        const submitButton = document.getElementById('submit-btn');
        submitButton.disabled = !(selectedOption === 'patient' || selectedOption === 'dentist');
    }

    function onSubmit() {
        if (selectedOption === 'patient') {
            // Redirect to patient.php
            window.location.href = 'signup-pat.php';
        } else if (selectedOption === 'dentist') {
            // Redirect to dentist.php
            window.location.href = 'signup-dent-prof.php';
        }
        // Prevent form submission for other cases
        return false;
    }
</script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
