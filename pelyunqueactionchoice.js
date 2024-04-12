function submitForm() {
    const selectedOption = document.querySelector('input[name="action_choice"]:checked');
    if (selectedOption) {
        const optionValue = selectedOption.value;

        // Create an explanation paragraph
        const explanation = document.createElement('p');

        // Check which option was selected and set the explanation text and class accordingly
        if (optionValue === "walkedaway") {
            explanation.classList.add('success-text');
            explanation.textContent = 'You survived. By walking away, the creature did not take you as a malicous presence, and therefore did not attack.';
        } else if (optionValue === "fightit") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'You were killed violently by choosing to fight the chupacabra.';
        } else if (optionValue === "scareaway") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'You were killed attempting to intimidate the creature, and ended up being its next big meal.';
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