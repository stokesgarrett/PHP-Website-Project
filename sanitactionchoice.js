function submitForm() {
    const selectedOption = document.querySelector('input[name="action_choice"]:checked');
    if (selectedOption) {
        const optionValue = selectedOption.value;

        // Create an explanation paragraph
        const explanation = document.createElement('p');

        // Check which option was selected and set the explanation text and class accordingly
        if (optionValue === "wieldchainsawasweapon") {
            explanation.classList.add('success-text');
            explanation.textContent = 'You survived because you wielded the chainsaw as a weapon. Congratulations!';
        } else if (optionValue === "run") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'You ran away, but it wasn\'t enough to survive.';
        } else if (optionValue === "hideinfreezer") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'You hid in the freezer, but it didn\'t save you.';
        } else if (optionValue === "playdead") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'Playing dead was not a successful strategy.';
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
