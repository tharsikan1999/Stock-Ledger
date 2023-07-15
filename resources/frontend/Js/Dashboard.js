
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


      /* table Ascending and Descending */


      const firstTableth = document.querySelector(".table-first-th");

      const secondTableth = document.querySelector(".table-second-th");
      
      const thirdTableth = document.querySelector(".table-third-th");
      
      const fourthTableth = document.querySelector(".table-fourth-th");
      
      const FiveTableth = document.querySelector(".table-five-th");
      
      
      
      
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
      
      thirdTableth.addEventListener("click",function() {
      
          fourthup.classList.toggle("up-Button-Display");
      
          fourthdown.classList.toggle("Down-Button-Display");
      
      });
      
      const fiveup = document.querySelector("#five-fa-caret-up");
      
      const fivedown = document.querySelector("#five-fa-caret-down");
      
      fourthTableth.addEventListener("click",function() {
      
          fiveup.classList.toggle("up-Button-Display");
      
          fivedown.classList.toggle("Down-Button-Display");
      
      });
      
      
      const sixup = document.querySelector("#seven-fa-caret-up");
      
      const sixdown = document.querySelector("#seven-fa-caret-down");
      
      FiveTableth.addEventListener("click",function() {
      
          sixup.classList.toggle("up-Button-Display");
      
          sixdown.classList.toggle("Down-Button-Display");
      
      });
      
     
      


      /* Available options manage */



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


    const totalNumber = document.querySelector(".totalNumber");

    const avilableStocks = document.querySelector(".avilableStocks");
    
    const lowStocks = document.querySelector(".lowStock");
    
    const outOfStocks = document.querySelector(".outOfStock");
    
    
    
    
    var table = document.getElementById("tables");
    
    
        var stocksVal = document.querySelectorAll("#tables-stocks");
    
        var stocksVArr =  Array.apply(null,stocksVal), totalStocks = 0;
    
         var totalSt = 0,totalNumberStocks=0,lowTotalStocks=0,outOfS=0, zeroCounts = 0;
         
    
        for(var i = 0; i < stocksVArr.length; i ++){
    
    
            var totalStocks = parseInt(stocksVArr[i].innerText);
    
    
            var totalNumberStocks = totalNumberStocks + totalStocks;
    
            
    
    
            let demo = 0;
    
            let inter = setInterval(()=>{
    
                totalNumber.innerHTML = demo ++ + 1;
    
                if( demo == this.totalNumberStocks)
                clearInterval(inter);
            },5);
    
    
            if(totalStocks<1){
    
                let demo = 0;
    
    
                if(totalStocks == 0){
    
                    zeroCounts++;
    
                    const interval = setInterval(()=>{
    
                        
                        outOfStocks.innerHTML = demo++ + 1; 
        
                        if( demo == zeroCounts)
                        clearInterval(interval)
                        
                    },200); 
    
    
    
                }
    
                 
    
            }
    
    
    
           else if(totalStocks < 11){
    
    
                var lowTotalStocks = lowTotalStocks + totalStocks;
                
    
               let demo = 0;
    
              let interval = setInterval(()=>{
    
                lowStocks.innerHTML = demo ++ + 1;
    
    
    
                if( demo == this.lowTotalStocks)
                clearInterval(interval)
              },100);
             
    
    
            }
            else {
    
               
             var totalSt = totalSt + totalStocks;
    
                avilableStocks.innerHTML = this.totalSt ;
    
                let demo = 0;
    
                const interval = setInterval(()=>{
    
                    avilableStocks.innerHTML = demo ++ + 1;
    
                    if(demo == this.totalSt)
    
                    clearInterval(interval);
                    
                },5);
    
    
            }
    
    
        }
    
    