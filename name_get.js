// Function to get query parameters from the URL
  function getQueryParameter(name) {
      const urlSearchParams = new URLSearchParams(window.location.search);
      return urlSearchParams.get(name);
  }

  // Get the name and age from query parameters
  const name = getQueryParameter("name");
  const age = parseInt(getQueryParameter("age"));

  // Display a greeting based on age
  if (name) {
      if (age >= 0 && age <= 35) {
          document.write(`<h1 class="fade-in3">hello youngblood ${name}.</h1>`);
      } else if (age >= 36 && age <= 99) {
          document.write(`<h1 class="fade-in3">hello ${name}, you are quite old.</h1>`);
      } else {
          document.write(`<h1 class="fade-in3">hello ${name}.</h1>`);
      }
  } else {
      document.write("<h1>hello Guest.</h1>");
  }