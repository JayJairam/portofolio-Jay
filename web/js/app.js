function changeLanguage(language) {
    // This is where you'd load the content in the selected language.
    // For demonstration, we'll just display an alert.
    if (language === 'en') {
        document.documentElement.lang = 'en'; // Set the lang attribute
        alert("Website language changed to English!");
    } else if (language === 'es') {
        document.documentElement.lang = 'es';
        alert("El idioma del sitio web ha cambiado a Español!");
    } else if (language === 'fr') {
        document.documentElement.lang = 'fr';
        alert("La langue du site a été changée en Français!");
    }
}