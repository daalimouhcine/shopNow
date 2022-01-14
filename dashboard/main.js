let hmb__menu = document.getElementById("hmb__menu");
let arrow = document.getElementById("arrow")
let aside = document.querySelector("aside");
let my__icons = document.getElementsByClassName("icons");

hmb__menu.addEventListener("click", () => {
	if(arrow.className === "fas fa-arrow-left") {
		arrow.className = "fas fa-arrow-right";
	} else {
		arrow.className = "fas fa-arrow-left";
	}
	aside.classList.toggle("hide");
});