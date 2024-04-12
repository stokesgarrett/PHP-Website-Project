function submitForm() {
    const selectedOption = document.querySelector('input[name="action_choice"]:checked');
    if (selectedOption) {
        const optionValue = selectedOption.value;

        // Create an explanation paragraph
        const explanation = document.createElement('p');

        // Check which option was selected and set the explanation text and class accordingly
        if (optionValue === "hideinfreezer") {
            explanation.classList.add('success-text');
            explanation.textContent = 'Luckily, you quickly broke line of sight, and were able to succesfully hide in freezer until Leatherface left the area in search of you.';
        } else if (optionValue === "carescape") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'Before you could start the car, leatherface chainsawed through your window.. and you know the rest.';
        } else if (optionValue === "hideontop") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'While attempting to get on the roof, you made too much noise and got a chainsaw to the heart right through the wall.';
        }

        // Clear the gameContainer and h2 and h1 text
        const gameContainer = document.querySelector('.game-container');
        gameContainer.innerHTML = '';
        const h2Text = document.querySelector('.fade-in3 h2');
        const h1Text = document.querySelector('.fade-in15 h1');
        h2Text.textContent = '';
        h1Text.textContent = '';

        // Create a button to redirect to the index page
        const redirectButton = document.createElement('button');
        redirectButton.classList.add('button-center');
        redirectButton.textContent = 'HOME';
        redirectButton.onclick = function() {
            window.location.href = 'index.php'; // Replace with your index page URL
        }

        // Append the explanation and redirect button to the gameContainer
        gameContainer.appendChild(explanation);
        gameContainer.appendChild(redirectButton);
    } else {
        alert('Please select an option.');
    }
}
