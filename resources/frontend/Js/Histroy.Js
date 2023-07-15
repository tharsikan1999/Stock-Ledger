/* pre loader  */

const preloader = document.querySelector(".center");

window.addEventListener("load", function () {
	preloader.style.display = "none";
});


/* ---- logut ---- */

new DataTable("#example");

const logOutUrl = document.querySelector(".logout-user-profile");

logOutUrl.addEventListener("click", () => {
	window.location = "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});

const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click", () => {
	window.location = "http://localhost/Stock-Ledger/index.php/Welcome/logout";
});

/* ---- Profile page turnig --- */

const profilePage = document.querySelector(".user-profile");

profilePage.addEventListener("click", () => {
	window.location = "http://localhost/Stock-Ledger/index.php/Admin/profileView";
});

/* Slider bar animations */

const hangBurgar = document.querySelector(".hanburgar");

const slideBar = document.querySelector(".slide-bar");

hangBurgar.addEventListener("click", function () {
	slideBar.classList.toggle("Display");
	hangBurgar.children[0].classList.toggle("Display1");
	hangBurgar.children[1].classList.toggle("Display2");
	hangBurgar.children[2].classList.toggle("Display3");
});

/* user profile animations */

/* user profile animations */

const userLogo = document.querySelector(".admin-avatar");

const userMenu = document.querySelector(".user-dashboard");


userLogo.addEventListener("mousemove",function(){
    userMenu.classList.add("user-Display");
});


userMenu.addEventListener("mouseleave",function(){
    userMenu.classList.remove("user-Display");

    
});



const firstTableth = document.querySelector(".table-first-th");

const secondTableth = document.querySelector(".table-second-th");

const thirdTableth = document.querySelector(".table-third-th");

const fourthTableth = document.querySelector(".table-fourth-th");

const FiveTableth = document.querySelector(".table-five-th");

const sixTableth = document.querySelector(".table-six-th");


const sevenTableth = document.querySelector(".table-seven-th");

const eightTableth = document.querySelector(".table-eight-th");






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







const threethup = document.querySelector("#third-fa-caret-up");

const threethdown = document.querySelector("#third-fa-caret-down");

thirdTableth.addEventListener("click",function() {

	threethup.classList.toggle("up-Button-Display");

	threethdown.classList.toggle("Down-Button-Display");

});

const fourthup = document.querySelector("#fourth-fa-caret-up");

const fourthdown = document.querySelector("#fourth-fa-caret-down");

fourthTableth.addEventListener("click",function() {

	fourthup.classList.toggle("up-Button-Display");

	fourthdown.classList.toggle("Down-Button-Display");

});


const fiveup = document.querySelector("#five-fa-caret-up");

const fivedown = document.querySelector("#five-fa-caret-down");

FiveTableth.addEventListener("click",function() {

	fiveup.classList.toggle("up-Button-Display");

	fivedown.classList.toggle("Down-Button-Display");

});


const SixUp = document.querySelector("#six-fa-caret-up");

const SixDown = document.querySelector("#six-fa-caret-down");

sixTableth.addEventListener("click",function() {

	SixUp.classList.toggle("up-Button-Display");

	SixDown.classList.toggle("Down-Button-Display");

});


const SevenUp = document.querySelector("#seven-fa-caret-up");

const SevenDown = document.querySelector("#seven-fa-caret-down");

sevenTableth.addEventListener("click",function() {

	SevenUp.classList.toggle("up-Button-Display");

	SevenDown.classList.toggle("Down-Button-Display");

});

const EightUp = document.querySelector("#eight-fa-caret-up");

const EightDown = document.querySelector("#eight-fa-caret-down");

eightTableth.addEventListener("click",function() {

	EightUp.classList.toggle("up-Button-Display");

	EightDown.classList.toggle("Down-Button-Display");

});






