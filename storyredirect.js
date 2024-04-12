document.addEventListener("DOMContentLoaded", function () {
    const storyForm = document.getElementById("story-form");
  
    storyForm.addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent the default form submission
  
      const selectedOption = storyForm.story_choice.value;
      switch (selectedOption) {
        case "Haddonfield, Illinois":
          window.location.href = "haddonfield.php";
          break;
        case "Cunningham County, New Jersey":
          window.location.href = "cunningham.php";
          break;
        case "Granger, Texas":
          window.location.href = "granger.php";
          break;
        case "Puerto Rico":
          window.location.href = "puerto-rico.php";
          break;
        default:
          alert("Please select a valid location.");
      }
    });
  });