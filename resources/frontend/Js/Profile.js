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

