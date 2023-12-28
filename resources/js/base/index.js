document.addEventListener('DOMContentLoaded', function() {    
    const mobileMenu = document.querySelectorAll('.hide-menu');
    const body = document.body;
    const openMenuButton = document.getElementById('openMenuButton');
    const closeMenuButton = document.getElementById('closeMenuButton');

    if(openMenuButton){
        openMenuButton.addEventListener('click', function() {
            if (mobileMenu.length > 0) {  
                mobileMenu[0].classList.toggle('active');
                body.classList.toggle('scroll');
            }
        });
    }
    if(closeMenuButton){
        closeMenuButton.addEventListener('click', function(){
            if (mobileMenu.length > 0) {  
                mobileMenu[0].classList.toggle('active');
                body.classList.toggle('scroll');
            }
        });
    }
});