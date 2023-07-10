
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


/* Notification bar */


const iconNotification = document.querySelector("#notification-icon");

const notificationBar = document.querySelector(".notifications-box");

iconNotification.addEventListener("click",()=>{

    notificationBar.classList.toggle("notification-display");

});




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

const tableBody = document.querySelector("#tables");




addButton.addEventListener("click",function(){
    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    addButton.classList.add("Add-Display");

    mainEditButton.style.display = "none";

    mainDeleteButton.style.display = "none";

    editButton.style.display = "none";

    deleteButton.style.display = "none";

    tableBody.style.cursor = "pointer";



});


   
editButton.addEventListener("click",function(){

    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    editButton.classList.add("Add-Display");

    mainDeleteButton.style.display = "none";

    mainAddButton.style.display = "none";

    addButton.style.display = "none";

    deleteButton.style.display = "none";

    tableBody.style.cursor = "pointer";



});

deleteButton.addEventListener("click",function(){

    chartCircle.style.display = "none";

    addEditBox.style.display = "flex";

    deleteButton.classList.add("Add-Display");

    mainAddButton.style.display = "none";

    mainEditButton.style.display = "none";

    addButton.style.display = "none";

    editButton.style.display = "none";

    tableBody.style.cursor = "pointer";





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

    tableBody.style.cursor = "default";


    document.getElementById("Product-No").value = "";

        document.getElementById("Product-Name").value = "";

        document.getElementById("Division").value = "";
        
        document.getElementById("Add-Date").value = "";

        document.getElementById("Up-Date").value = "";

        document.getElementById("Stocks").value = "";

        document.getElementById("Cost").value = "";

        document.getElementById("Total-Cost").value = "";




});
 




/* Chart Numbers --- */

/*--Total Stocks*/


(()=>{
    const totalNumber = document.querySelector(".totalNumber");


let demo = 0;

let inter = setInterval(()=>{

    totalNumber.innerHTML = demo ++ + 1;

    if( demo == 352)
    clearInterval(inter);
},2);




})();

/* Avilable Stocks */


(()=>{
    const avilableStocks = document.querySelector(".avilableStocks");

    let demo = 0;


    
        const interval = setInterval(()=>{
    
            
            avilableStocks.innerHTML = demo++ + 1; 
    
            if( demo == 296)
            clearInterval(interval)
            
        },2); 
})();

/* Low Stocks */


(()=>{
    const lowStocks = document.querySelector(".lowStock");

    let demo = 0;

        const interval = setInterval(()=>{
    
            
            lowStocks.innerHTML = demo++ + 1; 
    
            if( demo == 126)
            clearInterval(interval)
            
        },10); 
})();


/* Out OF Stocks */


(()=>{
    const outOfStocks = document.querySelector(".outOfStock");

    let demo = 0;


    
        const interval = setInterval(()=>{
    
            
            outOfStocks.innerHTML = demo++ + 1; 
    
            if( demo == 50)
            clearInterval(interval)
            
        },10); 
})();



/* ----- table ---- */


new DataTable('#example');


/* tabel functions */

const firstTableth = document.querySelector(".table-first-th");

const secondTableth = document.querySelector(".table-second-th");


const fourthTableth = document.querySelector(".table-fourth-th");

const fiveTableth = document.querySelector(".table-five-th");

const sixTableth = document.querySelector(".table-six-th");

const sevenTableth = document.querySelector(".table-seven-th");



const upButton = document.querySelector(".fa-caret-up");

const downButton = document.querySelector(".fa-caret-down");

firstTableth.addEventListener("click",function(){

    upButton.classList.toggle("up-Button-Display");

    downButton.classList.toggle("Down-Button-Display");

});




const secondUp = document.querySelector("#second-fa-caret-up");

const secondDown = document.querySelector("#second-fa-caret-down");



secondTableth.addEventListener("click",function() {

    secondUp.classList.toggle("up-Button-Display");

    secondDown.classList.toggle("Down-Button-Display");

});







const fourthup = document.querySelector("#fourth-fa-caret-up");

const fourthdown = document.querySelector("#fourth-fa-caret-down");

fourthTableth.addEventListener("click",function() {

    fourthup.classList.toggle("up-Button-Display");

    fourthdown.classList.toggle("Down-Button-Display");

});

const fiveup = document.querySelector("#five-fa-caret-up");

const fivedown = document.querySelector("#five-fa-caret-down");

fiveTableth.addEventListener("click",function() {

    fiveup.classList.toggle("up-Button-Display");

    fivedown.classList.toggle("Down-Button-Display");

});


const sixup = document.querySelector("#six-fa-caret-up");

const sixdown = document.querySelector("#six-fa-caret-down");

sixTableth.addEventListener("click",function() {

    sixup.classList.toggle("up-Button-Display");

    sixdown.classList.toggle("Down-Button-Display");

});

const sevenup = document.querySelector("#seven-fa-caret-up");

const sevendown = document.querySelector("#seven-fa-caret-down");

sevenTableth.addEventListener("click",function() {

    sevenup.classList.toggle("up-Button-Display");

    sevendown.classList.toggle("Down-Button-Display");

});





/* get and set the value tables stocks for avilable options */


(
    function GetCellValues() {
        var table = document.getElementById('tables');
        for (var r = 0, n = table.rows.length; r < n; r++) {
            for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {

                const avilableCircle = document.querySelectorAll(".table-avilable-circle");

                const makeArray = Array.apply(null,avilableCircle);

                let stocksCounts = table.rows[r].cells[3].innerText;

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

  




    











