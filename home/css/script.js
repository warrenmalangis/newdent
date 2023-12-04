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

