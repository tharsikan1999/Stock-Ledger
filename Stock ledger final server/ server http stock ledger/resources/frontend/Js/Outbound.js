/* pre loader  */

const preloader = document.querySelector(".center");

window.addEventListener("load", function () {
	preloader.style.display = "none";
});

/* ---- logut ---- */

const logOutUrl = document.querySelector(".logout-user-profile");

logOutUrl.addEventListener("click", () => {
	window.location = "http://tharsikan.live/index.php/Welcome/logout";
});

const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click", () => {
	window.location = "http://tharsikan.live/index.php/Welcome/logout";
});

/* ---- Profile page turnig --- */

const profilePage = document.querySelector(".user-profile");

profilePage.addEventListener("click", () => {
	window.location = "http://tharsikan.live/index.php/Admin/profileView";
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

const userLogo = document.querySelector(".admin-avatar");

const userMenu = document.querySelector(".user-dashboard");

userLogo.addEventListener("mousemove", function () {
	userMenu.classList.add("user-Display");
});

userMenu.addEventListener("mouseleave", function () {
	userMenu.classList.remove("user-Display");
});

$(document).ready(function () {
	$("#outbound_form").submit(function (e) {
		e.preventDefault();

		var formvalid = formValid();
		if (formvalid) {
			$.ajax({
				url: "http://tharsikan.live/index.php/Admin/outboundProducts",
				data: $("#outbound_form").serialize(),
				method: "post",
				success: function (response) {
					console.log(response);
					Swal.fire({
						position: "top-end",
						icon: "success",
						title: "Updated succesfully!" + response,
						showConfirmButton: false,
						timer: 3000,
					});
					window.location =
						"http://tharsikan.live/index.php/Admin/index";
				},
				error: function () {
					Swal.fire({
						position: "top-end",
						icon: "error",
						title: "Something went wrong, Please check the fields",
						showConfirmButton: false,
						timer: 3000,
					});
				},
			});
		} else {
			Swal.fire({
				position: "top-end",
				icon: "error",
				title: "Please check the fields. There are some incompleted fields.",
				showConfirmButton: false,
				timer: 3000,
			});
		}
	});

	function formValid() {
		if (
			($("#is_no").val() == "") |
			($("#sir_no").val() == "") |
			($("#date").val() == "")
		) {
			return 0;
		} else if (
			($("#type").val() == "") |
			(($("#stock").val() == "") |
				($("#unit").val() == "") |
				($("#tstock").val() == "") |
        ($("#depart").val() == "")) 
		) {
			return 0;
		} else if (
			($("#type2").val() != "") &
			(($("#stock2").val() == "") |
				($("#unit2").val() == "") |
				($("#tstock2").val() == "") |
        ($("#depart2").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type3").val() != "") &
			(($("#stock3").val() == "") |
				($("#unit3").val() == "") |
				($("#tstock3").val() == "")|
        ($("#depart3").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type4").val() != "") &
			(($("#stock4").val() == "") |
				($("#unit4").val() == "") |
				($("#tstock4").val() == "")|
        ($("#depart4").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type5").val() != "") &
			(($("#stock5").val() == "") |
				($("#unit5").val() == "") |
				($("#tstock5").val() == "")|
        ($("#depart5").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type6").val() != "") &
			(($("#stock6").val() == "") |
				($("#unit6").val() == "") |
				($("#tstock6").val() == "")|
        ($("#depart6").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type7").val() != "") &
			(($("#stock7").val() == "") |
				($("#unit7").val() == "") |
				($("#tstock7").val() == "")|
        ($("#depart7").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type8").val() != "") &
			(($("#stock8").val() == "") |
				($("#unit8").val() == "") |
				($("#tstock8").val() == "")|
        ($("#depart8").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type9").val() != "") &
			(($("#stock9").val() == "") |
				($("#unit9").val() == "") |
				($("#tstock9").val() == "")|
        ($("#depart9").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type10").val() != "") &
			(($("#stock10").val() == "") |
				($("#unit10").val() == "") |
				($("#tstock10").val() == "")|
        ($("#depart10").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type11").val() != "") &
			(($("#stock11").val() == "") |
				($("#unit11").val() == "") |
				($("#tstock11").val() == "")|
        ($("#depart11").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type12").val() != "") &
			(($("#stock12").val() == "") |
				($("#unit12").val() == "") |
				($("#tstock12").val() == "")|
        ($("#depart12").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type13").val() != "") &
			(($("#stock13").val() == "") |
				($("#unit13").val() == "") |
				($("#tstock13").val() == "")|
        ($("#depart13").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type14").val() != "") &
			(($("#stock14").val() == "") |
				($("#unit14").val() == "") |
				($("#tstock14").val() == "")|
        ($("#depart14").val() == ""))  
		) {
			return 0;
		} else if (
			($("#type15").val() != "") &
			(($("#stock15").val() == "") |
				($("#unit15").val() == "") |
				($("#tstock15").val() == "")|
        ($("#depart15").val() == ""))  
		) {
			return 0;
		} else {
			return 1;
		}
	}
});
