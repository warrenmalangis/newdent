
    let selectedButton = null;

    function selectButton(button) {
        if (selectedButton) {
            selectedButton.classList.remove("selected");
            selectedButton.classList.add("disabled");
        }

        button.classList.remove("disabled");
        button.classList.add("selected");
        selectedButton = button;
    }

    // Handle form submission
    document.getElementById("myForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Check which button is selected
        if (selectedButton) {
            if (selectedButton.id === "patient") {
                // Redirect to patient.php for the "Patient" selection
                window.location.href = "patient.php";
            } else if (selectedButton.id === "dentist") {
                // Redirect to dental-professional.php for the "Dental Professional" selection
                window.location.href = "dental-professional.php";
            }
            // Add more conditions for handling other button selections if needed
        }
        
        // If none of the conditions match, you can display an error message or take other actions.
    });

