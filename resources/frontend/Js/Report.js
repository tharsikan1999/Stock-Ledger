/* pre loader  */


const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
});

/* ---- logut ---- */



const logOutUrl = document.querySelector(".logout-user-profile");


logOutUrl.addEventListener("click",()=>{
    window.location =  "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});


const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click",()=>{
    window.location =  "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});


/* Notification bar */


const iconNotification = document.querySelector("#notification-icon");

const notificationBar = document.querySelector(".notifications-box");

iconNotification.addEventListener("click",()=>{

    notificationBar.classList.toggle("notification-display");

});


/* ---- Profile page turnig --- */

const profilePage = document.querySelector(".user-profile");

profilePage.addEventListener("click",()=>{
    window.location = "http://localhost/Stock-Ledger/index.php/Admin/profileView"
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


userLogo.addEventListener("click",function(){
    userMenu.classList.toggle("user-Display");
});

