const links = []; // Array to hold the link data

// Fetch the links from the JSON file
fetch('assets/config/links.json')
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        if (Array.isArray(data)) {
            createButtons(data);
        } else {
            console.error('Invalid JSON format in links.json');
        }
    })
    .catch(error => console.error('Error loading links:', error));

// Function to create buttons dynamically
function createButtons(links) {
    const buttonContainer = document.querySelector('.button-container');

    links.forEach(link => {
        const button = document.createElement('a');
        button.href = link.url;
        button.className = 'button';

        // Set the hover color dynamically
        if (link.gradient) {
            button.style.setProperty('--hover-color', `linear-gradient(${link.gradient})`);
        } else {
            button.style.setProperty('--hover-color', link.color);
        }

        // Add the icon
        if (link.icon) {
            if (link.icon.endsWith('.svg') || link.icon.endsWith('.png')) {
                const img = document.createElement('img');
                img.src = link.icon;
                img.alt = `${link.label} Icon`;
                img.className = 'button-icon';
                button.appendChild(img);
            } else {
                const icon = document.createElement('i');
                icon.className = link.icon; // Use the icon class from links.json
                button.appendChild(icon);
            }
        }

        // Add the label
        const label = document.createElement('span');
        label.textContent = link.label;
        button.appendChild(label);

        buttonContainer.appendChild(button);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const logo = document.querySelector('.logo');
    if (logo) {
        logo.setAttribute('draggable', 'false');
    }
});