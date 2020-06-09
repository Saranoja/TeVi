var checks = document.querySelectorAll(".check");
var max = 4;
for (var i = 0; i < checks.length; i++)
  checks[i].onclick = selectiveCheck;
function selectiveCheck (event) {
  var checkedChecks = document.querySelectorAll(".check:checked");
  if (checkedChecks.length >= max + 1)
    {
    alert("You have reached the limit of the selected fields");
    return false;
	}
}