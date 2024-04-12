document.addEventListener("DOMContentLoaded", function () {
    const activityForm = document.getElementById("activity-form");
  
    activityForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission
  
      const selectedOption = activityForm.activity_choice.value;
      switch (selectedOption) {
        case "Fill Up at Gas Station":
          window.location.href = "gasstation.php";
          break;
        default:
          alert("Please select a valid activity.");
      }
    });
  });