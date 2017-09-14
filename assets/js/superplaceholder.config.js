document.addEventListener("DOMContentLoaded", function(event) {
    superplaceholder({
        el: document.getElementById("i-am"),
        sentences: [ 'Hacker'
            ,'Front-End Developer'
            ,'Back-End Developer'
            ,'Web-Designer'
            ,'Project-Manager'
            ,'Solopreneur'
            ,'Student'
            ,'und so weiter ...'],
        options: {
            // delay between letters (in milliseconds)
            letterDelay: 100, // milliseconds
            // delay between sentences (in milliseconds)
            sentenceDelay: 1000,
            // should start on input focus. Set false to autostart
            startOnFocus: false,
            // loop through passed sentences
            loop: true,
            // Initially shuffle the passed sentences
            shuffle: true,
            // Show cursor or not. Shows by default
            showCursor: true,
            // String to show as cursor
            cursor: '|'
        }
    });
});