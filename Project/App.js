
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



$('#example').DataTable();




/* tabel functions */

const firstTableth = document.querySelector(".table-first-th");

const secondTableth = document.querySelector(".table-second-th");

const thirdTableth = document.querySelector(".table-third-th");

const fourthTableth = document.querySelector(".table-fourth-th");

const fiveTableth = document.querySelector(".table-five-th");

const sixTableth = document.querySelector(".table-six-th");

const sevenTableth = document.querySelector(".table-seven-th");

const DivisionTableth = document.querySelector(".table-Division-th");


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



const thirdUp = document.querySelector("#third-fa-caret-up");

const thirdDown = document.querySelector("#third-fa-caret-down");

thirdTableth.addEventListener("click",function() {
    thirdUp.classList.toggle("up-Button-Display");
    thirdDown.classList.toggle("Down-Button-Display");
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


const Divisionup = document.querySelector("#Division-fa-caret-up");

const Divisionown = document.querySelector("#Division-fa-caret-down");

DivisionTableth.addEventListener("click",function() {
    Divisionup.classList.toggle("up-Button-Display");
    Divisionown.classList.toggle("Down-Button-Display");
});



/* get the value tables stocks */


const stocksva = document.querySelectorAll("#tables-stocks");






/* for(i=0;i<makeArray.length;i++){
    console.log(makeArray);
} */




    function GetCellValues() {
        var table = document.getElementById('tables');
        for (var r = 0, n = table.rows.length; r < n; r++) {
            for (var c = 0, m = table.rows[r].cells.length; c < m; c++) {

                const avilableCircle = document.querySelectorAll(".table-avilable-circle");

                const makeArray = Array.apply(null,avilableCircle);




                let stocksCounts = table.rows[r].cells[5].innerText;

                if(stocksCounts< 1){
                    makeArray[r].style.background = " #FF5274";
                }
                else if(stocksCounts<11){
                    makeArray[r].style.background = "#FFC107";
                }
                else  {
                    makeArray[r].style.background = " #71D875";


                } 


                console.log(table.rows.length);
                



                

            }
        }
    }


    GetCellValues();




        
/* 
if(valueStocks< 1){
    circles.style.background = " #FF5274";
}
else if(valueStocks<11){
    circles.style.background = "#FFC107";
}
else  {
    circles.style.background = " #71D875";
} */




  

    



/* get the value of stocks */








