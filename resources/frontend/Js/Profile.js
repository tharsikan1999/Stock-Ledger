/* pre loader  */


const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
});

/* ---- logut ---- */



const logOutUrl = document.querySelector(".logout-user-profile");


logOutUrl.addEventListener("click",()=>{
    window.location = "http://localhost/Stock-Ledger/index.php/";
});


const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click",()=>{
    window.location = "http://localhost/Stock-Ledger/index.php/";
});



/* ---- Profile page turnig --- */

const profilePage = document.querySelector(".user-profile");

profilePage.addEventListener("click",()=>{
    window.location = "http://localhost/Stock-Ledger/index.php/Welcome/profileView"
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





const changePassword = document.querySelector(".change-password-manage");

const passwordPopUp = document.querySelector(".password-popup");

const pInformation = document.querySelector(".p-Information");

var closeButtonP = document.querySelector(".close-button-popup");


changePassword.addEventListener("click",()=>{
    pInformation.style.display = "none";
    changePassword.style.display = "none";
    passwordPopUp.style.display = "flex";

});

closeButtonP.addEventListener("click",()=>{
    pInformation.style.display = "flex";
    changePassword.style.display = "none";
    changePassword.style.display = "flex";
    passwordPopUp.style.display = "none";


});




/* set Show password */

const oldPasswordEye = document.querySelector("#password-show-eye");

const oldPassword = document.querySelector("#old-Password");

const oldPasswordHideEye = document.querySelector("#password-hide-eye");



oldPasswordEye.addEventListener("click",()=>{

    const oldPassword = document.querySelector("#old-Password");


    const type = oldPassword.getAttribute("type");

    if (type === "text"){
        oldPassword.type = "password";
    }
    else{
        oldPassword.type = "text";
    }


    oldPasswordEye.style.display = "none";
    oldPasswordHideEye.style.display = "inline";
    

});

oldPasswordHideEye.addEventListener("click",()=>{

    const oldPassword = document.querySelector("#old-Password");


    const type = oldPassword.getAttribute("type");

    if (type === "text"){
        oldPassword.type = "password";
    }
    else{
        oldPassword.type = "text";
    }


    oldPasswordEye.style.display = "inline";
    oldPasswordHideEye.style.display = "none";

    

});


const oldPasswordEye2 = document.querySelector("#password-show-eye2");

const newPassword = document.querySelector("#new-Password");

const oldPasswordHideEye2 = document.querySelector("#password-hide-eye2");



oldPasswordEye2.addEventListener("click",()=>{

    const newPassword = document.querySelector("#new-Password");


    const type = newPassword.getAttribute("type");

    if (type === "text"){
        newPassword.type = "password";
    }
    else{
        newPassword.type = "text";
    }


    oldPasswordEye2.style.display = "none";
    oldPasswordHideEye2.style.display = "inline";
    

});

oldPasswordHideEye2.addEventListener("click",()=>{

    const newPassword = document.querySelector("#new-Password");


    const type = newPassword.getAttribute("type");

    if (type === "text"){
        newPassword.type = "password";
    }
    else{
        newPassword.type = "text";
    }


    oldPasswordEye2.style.display = "inline";
    oldPasswordHideEye2.style.display = "none";

    

});



const oldPasswordEye3 = document.querySelector("#password-show-eye3");


const oldPasswordHideEye3 = document.querySelector("#password-hide-eye3");



oldPasswordEye3.addEventListener("click",()=>{

    const newPassword = document.querySelector("#new-Password1");


    const type = newPassword.getAttribute("type");

    if (type === "text"){
        newPassword.type = "password";
    }
    else{
        newPassword.type = "text";
    }


    oldPasswordEye3.style.display = "none";
    oldPasswordHideEye3.style.display = "inline";
    

});

oldPasswordHideEye3.addEventListener("click",()=>{

    const newPassword = document.querySelector("#new-Password1");


    const type = newPassword.getAttribute("type");

    if (type === "text"){
        newPassword.type = "password";
    }
    else{
        newPassword.type = "text";
    }


    oldPasswordEye3.style.display = "inline";
    oldPasswordHideEye3.style.display = "none";

    

});



/* Notification bar */


const iconNotification = document.querySelector("#notification-icon");

const notificationBar = document.querySelector(".notifications-box");

iconNotification.addEventListener("click",()=>{

    notificationBar.classList.toggle("notification-display");

});


/* set the function for check passwords */


 

 

 var passwordChangedBtn  = document.querySelector("#change-password-btn");

 passwordChangedBtn.addEventListener("click",()=>{

    var oldPasswordInput = document.querySelector("#old-Password");

    var oldPasswordInputValue =  oldPasswordInput.value;

    var newPasswordInput = document.querySelector("#new-Password");

    var newPasswordInputValue =   newPasswordInput.value;

    var newPasswordInput1 = document.querySelector("#new-Password1");

    var newPasswordInputValue1 =   newPasswordInput1.value;


    if(newPasswordInputValue === newPasswordInputValue1){
        
        window.alert("You can Change Password successfully");

    }
    else{
        window.alert("Password Didn't")
    }


    
 })



     





   


