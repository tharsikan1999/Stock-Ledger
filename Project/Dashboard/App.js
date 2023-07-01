
/* pre loader  */


const preloader = document.querySelector(".center");

window.addEventListener("load",function(){
    preloader.style.display = "none";
})




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



/* get and set the value tables stocks for avilable options */


 (
    function GetCellValues() {
        var table = document.getElementById('tables');
        for (var r = 0, n = table.rows.length; r < n; r++) {
            for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {

                const avilableCircle = document.querySelectorAll(".product-avilable-marker");

                const makeArray = Array.apply(null,avilableCircle);

                let stocksCounts = table.rows[r].cells[6].innerText;

                if(stocksCounts< 1){
                    makeArray[r].style.background = " #FF5274";
                }
                else if(stocksCounts<11){
                    makeArray[r].style.background = "#FFC107";
                }
                else  {
                    makeArray[r].style.background = " #71D875";
                } 
                

            }
        }
    }
)(); 
 

 

/* --- Add ,Edit,Delete --- */

const addButton = document.querySelector(".add-button");

const mainAddButton = document.querySelector(".add-button-box");

const editButton = document.querySelector(".edit-button");

const mainEditButton = document.querySelector(".edit-button-box");


const deleteButton = document.querySelector(".delete-button");

const mainDeleteButton = document.querySelector(".delete-button-box");




const chartCircle = document.querySelector(".total-circle-box");

const addEditBox = document.querySelector(".add-edit-delete-manage-box");

const closeButton = document.querySelector("#close-button");




addButton.addEventListener("click",function(){
    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    addButton.classList.add("Add-Display");

    mainEditButton.style.display = "none";

    mainDeleteButton.style.display = "none";


    editButton.style.display = "none";

    deleteButton.style.display = "none";

});


   
editButton.addEventListener("click",function(){
    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    editButton.classList.add("Add-Display");


    mainDeleteButton.style.display = "none";

    mainAddButton.style.display = "none";

    addButton.style.display = "none";


    deleteButton.style.display = "none";


});

deleteButton.addEventListener("click",function(){

    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    deleteButton.classList.add("Add-Display");


    mainAddButton.style.display = "none";

    mainEditButton.style.display = "none";

    addButton.style.display = "none";

    editButton.style.display = "none";




});


closeButton.addEventListener("click",function(){

    chartCircle.style.display = "flex";
    
    addEditBox.style.display = "none";

    addButton.classList.remove("Add-Display");

    editButton.classList.remove("Add-Display");

    deleteButton.classList.remove("Add-Display");


    mainEditButton.style.display = "flex";

    mainDeleteButton.style.display = "flex";


    mainAddButton.style.display = "flex";

    addButton.style.display = "flex";

    editButton.style.display = "flex";

    deleteButton.style.display = "flex";



});
 








