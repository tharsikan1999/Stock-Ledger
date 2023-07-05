/* pre loader  */

const preloader = document.querySelector(".center");

window.addEventListener("load", function () {
  preloader.style.display = "none";
});

/* ---- logut ---- */

const logOutUrl = document.querySelector(".logout-user-profile");

logOutUrl.addEventListener("click", () => {
  window.location = "Index.html";
});

const logOutUrlFooter = document.querySelector(".logout");

logOutUrlFooter.addEventListener("click", () => {
  window.location = "Index.html";
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

userLogo.addEventListener("click", function () {
  userMenu.classList.toggle("user-Display");
});

$(document).ready(function () {
  $("#type").change(function (e) {
    var $district = $("#product");
    // $district.empty();

    // $.ajax({
    //     url: "index.php/Homepage/getdistrict/" + e.target.value,
    //     method: 'get',
    //     dataType: 'json',
    //     success: function(response) {
    //         // console.log(response);
    //         response.map(function(item) {
    //             $("#district").append(
    //                 "<option value='" + item.District_ID + "'>" + item.name_en + "</option>"
    //             );
    //         });
    //     }
    // });
  });

  $("#inbound_form").submit(function (e) {
    e.preventDefault();

    // var formvalid = $("#inbound_form").valid();
    var formvalid = formValid();
    if (formvalid) {
      console.log("validatedddd! and ready to send");
      // $.ajax({
      //     url: base_url + 'index.php/Farmer/investProposal',
      //     method: 'post',
      //     data: new FormData(this),
      //     contentType: false,
      //     cache: false,
      //     async: false,
      //     processData: false,
      //     success: function(response) {
      //         // console.log(response);
      //         Swal.fire({
      //             position: 'top-end',
      //             icon: 'success',
      //             title: 'You are successfully proposed.',
      //             showConfirmButton: false,
      //             timer: 3000
      //         });
      //         window.location = base_url + 'index.php/Invest-Farmer';
      //     },
      //     error: function() {
      //         Swal.fire({
      //             position: 'top-end',
      //             icon: 'error',
      //             title: 'Something went wrong, Please check your email address',
      //             showConfirmButton: false,
      //             timer: 3000
      //         });
      //     }
      // });
    } else {
      console.log("Not validated");
    }
  });
  const typ1 = document.getElementById("type").value;

  $("#inbound_form").validate({
    rules: {
      type: "required",
      product: "required",
      startingDate: "required",
      duration: "required",
      fertilizer: "required",
      picture: "required",
      acre: {
        required: true,
        minlength: 1,
      },
      cost: "required",
      kg: "required",
      mprice: "required",
      wsprice: "required",
      fromFarmer: "required",
      total: "required",
      fromInvestor: "required",
      roi: "required",
      amt: "required",
    },
    messages: {
      type: "*required",
      product: "*required",
      startingDate: "*required",
      duration: "*required",
      fertilizer: "*required",
      picture: "*required",
      acre: {
        required: "Required",
        minlength: "Please insert higher than 1",
      },
      cost: "*required",
      kg: "*required",
      mprice: "*required",
      wsprice: "*required",
      fromFarmer: "*required",
      total: "*required",
      fromInvestor: "*required",
      roi: "*required",
      amt: "*required",
    },
  });

  function formValid() {
    if (
      ($("#type").val() == "") |
      (($("#stock").val() == "") |
        ($("#unit").val() == "") |
        ($("#tstock").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type2").val() != "") &
      (($("#stock2").val() == "") |
        ($("#unit2").val() == "") |
        ($("#tstock2").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type3").val() != "") &
      (($("#stock3").val() == "") |
        ($("#unit3").val() == "") |
        ($("#tstock3").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type4").val() != "") &
      (($("#stock4").val() == "") |
        ($("#unit4").val() == "") |
        ($("#tstock4").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type5").val() != "") &
      (($("#stock5").val() == "") |
        ($("#unit5").val() == "") |
        ($("#tstock5").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type6").val() != "") &
      (($("#stock6").val() == "") |
        ($("#unit6").val() == "") |
        ($("#tstock6").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type7").val() != "") &
      (($("#stock7").val() == "") |
        ($("#unit7").val() == "") |
        ($("#tstock7").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type8").val() != "") &
      (($("#stock8").val() == "") |
        ($("#unit8").val() == "") |
        ($("#tstock8").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type9").val() != "") &
      (($("#stock9").val() == "") |
        ($("#unit9").val() == "") |
        ($("#tstock9").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type10").val() != "") &
      (($("#stock10").val() == "") |
        ($("#unit10").val() == "") |
        ($("#tstock10").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type11").val() != "") &
      (($("#stock11").val() == "") |
        ($("#unit11").val() == "") |
        ($("#tstock11").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type12").val() != "") &
      (($("#stock12").val() == "") |
        ($("#unit12").val() == "") |
        ($("#tstock12").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type13").val() != "") &
      (($("#stock13").val() == "") |
        ($("#unit13").val() == "") |
        ($("#tstock13").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type14").val() != "") &
      (($("#stock14").val() == "") |
        ($("#unit14").val() == "") |
        ($("#tstock14").val() == ""))
    ) {
      return 0;
    } else if (
      ($("#type15").val() != "") &
      (($("#stock15").val() == "") |
        ($("#unit15").val() == "") |
        ($("#tstock15").val() == ""))
    ) {
      return 0;
    } else {
      return 1;
    }
  }
});
