
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
 



/* Add,Edit,Delete Inputs value Set the table */


/*  Add Items to table */

     mainAddButton.addEventListener("click",function(){

const produtcNo = document.getElementById("Product-No").value,

        produtcName = document.getElementById("Product-Name").value,
    
        division = document.getElementById("Division").value,
    
        addDate = document.getElementById("Add-Date").value,

        upDate = document.getElementById("Up-Date").value,
    
        stocks = document.getElementById("Stocks").value,

        cost = document.getElementById("Cost").value,
    
        totalCost = document.getElementById("Total-Cost").value;


        const table = document.querySelector("#tables");


        if(produtcNo == ""|| produtcName == "" || division == "" ||addDate == "" ||upDate == "" ||stocks == "" ||cost == "" || totalCost == "" ){

            window.alert("Please Fill Empty Field");
        }
        else{
            table.innerHTML += `

            
            
        <tr >
        <td>${produtcNo}</td>
        <td>${produtcName}</td>
        <td>${division}</td>
        <td>${addDate}</td>
        <td>${upDate}</td>
        <td id="stocks-values">${stocks} </td>
        <td>${cost}</td>
        <td>${totalCost}</td>
        <td id="table-avilable-circle"><div class="table-avilable-circle"></div></td>
    </tr>     
            `
        }
     
    }); 
        

/* ---- edit Items ----------- */


var table = document.getElementById("tables"),rIndex;

for(r = 0; r <table.rows.length; r ++ ){
    table.rows[r].addEventListener("click",function(){
        rIndex = this.rowIndex;
        
        document.getElementById("Product-No").value = this.cells[0].innerHTML;

        document.getElementById("Product-Name").value = this.cells[1].innerHTML;

        document.getElementById("Division").value = this.cells[2].innerHTML;
        
        document.getElementById("Add-Date").value = this.cells[3].innerHTML;

        document.getElementById("Up-Date").value = this.cells[4].innerHTML;

        document.getElementById("Stocks").value = this.cells[5].innerHTML;

        document.getElementById("Cost").value = this.cells[6].innerHTML;

        document.getElementById("Total-Cost").value = this.cells[7].innerHTML;
    });
}
     

mainEditButton.addEventListener("click",function(){

    const     produtcNo = document.getElementById("Product-No").value,

    produtcName = document.getElementById("Product-Name").value,

    division = document.getElementById("Division").value,

    addDate = document.getElementById("Add-Date").value,

    upDate = document.getElementById("Up-Date").value,

    stocks = document.getElementById("Stocks").value,

    cost = document.getElementById("Cost").value,

    totalCost = document.getElementById("Total-Cost").value;



    if(produtcNo == ""|| produtcName == "" || division == "" ||addDate == "" ||upDate == "" ||stocks == "" ||cost == "" || totalCost == "" ){

        window.alert("Please Fill Empty Field");
    }
    else{
    table.rows[rIndex].cells[0].innerHTML = document.getElementById("Product-No").value;
    table.rows[rIndex].cells[1].innerHTML = document.getElementById("Product-Name").value;
    table.rows[rIndex].cells[2].innerHTML = document.getElementById("Division").value;
    table.rows[rIndex].cells[3].innerHTML = document.getElementById("Add-Date").value;
    table.rows[rIndex].cells[4].innerHTML = document.getElementById("Up-Date").value;
    table.rows[rIndex].cells[5].innerHTML = document.getElementById("Stocks").value;
    table.rows[rIndex].cells[6].innerHTML = document.getElementById("Cost").value;
    table.rows[rIndex].cells[7].innerHTML = document.getElementById("Total-Cost").value;
}
    
});


/* ------ delete Options ----------- */


mainDeleteButton.addEventListener("click",function(){

    table.deleteRow(rIndex);

    document.getElementById("Product-No").value = "";

        document.getElementById("Product-Name").value = "";

        document.getElementById("Division").value = "";
        
        document.getElementById("Add-Date").value = "";

        document.getElementById("Up-Date").value = "";

        document.getElementById("Stocks").value = "";

        document.getElementById("Cost").value = "";

        document.getElementById("Total-Cost").value = "";

});



/* search for table */


var input = document.querySelector(".search-button");

var table = document.getElementById('myTable');

input.addEventListener('keyup', filterTable);

function filterTable() {
  var filter = input.value.toUpperCase();
  var rows = table.getElementsByTagName('tr');

  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName('td');
    var found = false;

    for (var j = 0; j < cells.length; j++) {
      var cell = cells[j];

      if (cell) {
        var cellValue = cell.textContent || cell.innerText;

        if (cellValue.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }

    if (found) {
      rows[i].style.display = '';
    } else {
      rows[i].style.display = 'none';
    }
  }
}



/* Chart Numbers --- */


const totalNumber = document.querySelector(".totalNumber");

const avilableStocks = document.querySelector(".avilableStocks");

const lowStocks = document.querySelector(".lowStock");

const outOfStocks = document.querySelector(".outOfStock");





var table = document.getElementById("myTable");


    var stocksVal = document.querySelectorAll("#stocks-values");

    

    var stocksVArr =  Array.apply(null,stocksVal), totalStocks = 0;

     var totalSt = 0,totalNumberStocks=0,lowTotalStocks=0,outOfS=0;

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





    












