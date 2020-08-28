var hamburger = document.querySelector('.hamburger-content');
var button = document.querySelector('.hamburger-open');
var close = document.querySelector('.close');

if(button){
    button.addEventListener('click', function(e){
        e.preventDefault();
        // hamburger.style.display = 'block';
        hamburger.style.transform = "translateX(0)";
    });
};
if(close){
    close.addEventListener('click', function(e){
        e.preventDefault();
        hamburger.style.transform = "translateX(200%)";
        // hamburger.style.display = 'none';
    });
};