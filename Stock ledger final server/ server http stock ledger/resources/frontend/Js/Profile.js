/* pre loader  */


const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
});

/* ---- logut ---- */



const logOutUrl = document.querySelector(".logout-user-profile");


logOutUrl.addEventListener("click",()=>{
    window.location =  "http://tharsikan.live/index.php/Welcome/logout";
});


const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click",()=>{
    window.location =  "http://tharsikan.live/index.php/Welcome/logout";
});



/* ---- Profile page turnig --- */

const profilePage = document.querySelector(".user-profile");

profilePage.addEventListener("click",()=>{
    window.location = "http://tharsikan.live/index.php/Admin/profileView"
});




/* Slider bar animations */

const hangBurgar = document.querySelector(".hanburgar");

const slideBar = document.querySelector(".slide-bar");


hangBurgar.addEventListener("click",function(){
    slideBar.classList.toggle("Display");
    hangBurgar.children[0].classList.toggle("Display1");
    hangBurgar.children[1].classList.toggle("Display2");
    hangBurgar.children[2].classList.toggle("Display3");
})


/* user profile animations */

const userLogo = document.querySelector(".admin-avatar");

const userMenu = document.querySelector(".user-dashboard");


userLogo.addEventListener("mousemove",function(){
    userMenu.classList.add("user-Display");
});


userMenu.addEventListener("mouseleave",function(){
    userMenu.classList.remove("user-Display");

    
});





//const changePassword = document.querySelector(".change-password-manage");

const passwordPopUp = document.querySelector(".password-popup");

const pInformation = document.querySelector(".p-Information");

var closeButtonP = document.querySelector(".close-button-popup");








