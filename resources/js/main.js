/* eslint-disable spaced-comment */
/* eslint-disable no-multi-spaces */
/* eslint-disable no-trailing-spaces */
/* eslint-disable no-undef */

// * Apertura/Chiusura modale
window.onload = () => {
    const LOGINBUTTON = document.querySelector('#login');
    const MODALLOGIN = document.querySelector('#modalLogIn');
    const CLOSELOGIN = document.querySelector('#closeLogIn');
    const SIGNUPBUTTON = document.querySelector('#signup');
    const MODALSIGNUP = document.querySelector('#modalSignup');
    const CLOSESIGNUP = document.querySelector('#closeSignup');
    LOGINBUTTON.addEventListener('click', () => {
        MODALLOGIN.style.display = 'block';
    });
    CLOSELOGIN.addEventListener('click', () => {
        MODALLOGIN.style.display = 'none';
    });
    SIGNUPBUTTON.addEventListener('click', () => {
        MODALSIGNUP.style.display = 'block';
    });
    CLOSESIGNUP.addEventListener('click', () => {
        MODALSIGNUP.style.display = 'none';
    });
}; 

// * Scroll to top
const SCROLLTOP = document.querySelector('#scrollTop');
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        SCROLLTOP.style.display = 'block';
    } else {
        SCROLLTOP.style.display = 'none';
    }
}
window.onscroll = () => { 
    scrollFunction(); 
};
SCROLLTOP.addEventListener('click', () => {
    document.body.scrollTop = 0; // Safari
    document.documentElement.scrollTop = 0;
});

// ! ↓↓ Logout (TENERE PER ULTIMO!!!) ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
const LOGOUTANCHOR = document.querySelector('#log-out-anchor'); //!←  
const FORMLOGOUT = document.querySelector('#form-logout');      //!←    
LOGOUTANCHOR.addEventListener('click', (event) => {             //!←    
    event.preventDefault();                                     //!←    
    FORMLOGOUT.submit();                                        //!←    
});                                                             //!←    
// ! ↑↑ Logout (TENERE PER ULTIMO!!!) ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
