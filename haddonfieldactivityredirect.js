document.addEventListener("DOMContentLoaded", function () {
    const activityForm = document.getElementById("activity-form");
  
    activityForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission
  
      const selectedOption = activityForm.activity_choice.value;
      switch (selectedOption) {
        case "Smith's Grove Sanitarium tour":
          window.location.href = "hsanitariumtour.php";
          break;
        default:
          alert("Please select a valid activity.");
      }
    });
  });