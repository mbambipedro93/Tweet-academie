window.onload = function () {
    var toggle_btn = document.getElementById('theme-btn');

    var body = document.getElementsByTagName('body')[0];

    var white_theme_class = 'white';
    toggle_btn.addEventListener('click', function(){

        if(body.classList.contains(white_theme_class)){
            body.classList.remove(white_theme_class);
        }
        else{
            body.classList.add(white_theme_class);
        }
    });
}
    