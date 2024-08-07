function deleteGameAlert() {
   return confirm("Do you really want to do this ? This action is irreversible !");
} // deleteGameAlert()

var priceRangeMin = document.getElementById("priceRangeMin");
var priceRangeMinValue = document.getElementById("priceRangeMinValue");

var priceRangeMax = document.getElementById("priceRangeMax");
var priceRangeMaxValue = document.getElementById("priceRangeMaxValue");

priceRangeMin.addEventListener('input', function () {
   updatePriceRange();
});

priceRangeMax.addEventListener('input', function () {
   updatePriceRange();
});

function updatePriceRange() {
   let val1 = parseInt(priceRangeMin.value);
   let val2 = parseInt(priceRangeMax.value);

   priceRangeMinValue.textContent = val1;
   priceRangeMaxValue.textContent = val2;
} // updatePriceRange()

function validateContactForm() {
	var valid = true;

	$(".info").html("");
	$(".input-field").css("border", "#e0dfdf 1px solid");
	var userName = $("#userName").val();
	var userEmail = $("#userEmail").val();
	var subject = $("#subject").val();
	var content = $("#content").val();

	if (userName == "") {
		$("#userName-info").html("Required.");
		$("#userName").css("border", "#e66262 1px solid");
		valid = false;
	}
	if (userEmail == "") {
		$("#userEmail-info").html("Required.");
		$("#userEmail").css("border", "#e66262 1px solid");
		valid = false;
	}
	if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("Invalid Email Address.");
		$("#userEmail").css("border", "#e66262 1px solid");
		valid = false;
	}

	if (subject == "") {
		$("#subject-info").html("Required.");
		$("#subject").css("border", "#e66262 1px solid");
		valid = false;
	}
	if (content == "") {
		$("#userMessage-info").html("Required.");
		$("#content").css("border", "#e66262 1px solid");
		valid = false;
	}
	return valid;
}