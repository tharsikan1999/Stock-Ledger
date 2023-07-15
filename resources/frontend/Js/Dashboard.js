
/* pre loader  */


const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
});

/* ---- logut ---- */



const logOutUrl = document.querySelector(".logout-user-profile");


logOutUrl.addEventListener("click",()=>{
    window.location = "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});


const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click",()=>{
    window.location =  "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});



/* ---- Profile page turning --- */

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




       /*    tbale cdn for boostrap  */

new DataTable('#example');


                  /* add Item*/




const cancelBtnForAdd = document.querySelector(".close-button");


const cancelBtnForDelete = document.querySelector(".close-button-df");

const mainAddBtn = document.querySelector(".add-button");

const mainDeleteBtn = document.querySelector(".delete-button");

const addForm = document.querySelector("#add-form");

const deleteForm = document.querySelector(".deleteForm")

const chart = document.querySelector(".total-circle-box");


mainAddBtn.addEventListener("click",()=>{
    addForm.style.display = "block";

    chart.style.display = "none";
    mainDeleteBtn.style.display = "none";
});

cancelBtnForAdd.addEventListener("click",()=>{
    addForm.style.display = "none";

    chart.style.display = "flex";

    mainDeleteBtn.style.display = "flex";
});



                    /* Delete Item */


mainDeleteBtn.addEventListener("click",()=>{
    deleteForm.style.display = "block"

    chart.style.display = "none";
    mainAddBtn.style.display = "none";

});


cancelBtnForDelete.addEventListener("click",()=>{
    deleteForm.style.display = "none";

    chart.style.display = "flex";

    mainAddBtn.style.display = "flex";

});