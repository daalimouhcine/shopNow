let hmb__menu = document.getElementById("hmb__menu");
let my__nav = document.getElementById("my__nav");
let my__icons = document.getElementsByClassName("icons");

hmb__menu.addEventListener("click", () => {
	my__nav.classList.toggle("show");
});