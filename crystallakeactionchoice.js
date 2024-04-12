function submitForm() {
    const selectedOption = document.querySelector('input[name="action_choice"]:checked');
    if (selectedOption) {
        const optionValue = selectedOption.value;

        // Create an explanation paragraph
        const explanation = document.createElement('p');

        // Check which option was selected and set the explanation text and class accordingly
        if (optionValue === "flaregunforhelp") {
            explanation.classList.add('success-text');
            explanation.textContent = 'You survived Jason Vorhees. Luckily the flare gun caught the attention of an armed forced chopper passing nearby, which quickly alerted Jason to get out of the area, and rescued your group.';
        } else if (optionValue === "sacrificefriend") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'Sacrificing your friend is a cowardly move, and Jason quickly hunted you and your friends down and made you pay';
        } else if (optionValue === "radiostation") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'The radio station was in operable, and in this wasted time Jason broke in and ended it';
        } else if (optionValue === "waititout") {
            explanation.classList.add('explanation-text');
            explanation.textContent = 'Waiting it out turned out to be a quick way to have a funeral.';
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
