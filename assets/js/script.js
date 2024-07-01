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