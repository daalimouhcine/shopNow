
// Creat a Cookie function to stor the page.
const creatCookie = (cName, cValue, days) => {	
	let date = new Date();
	date.setDate(date.getTime() + (days * 24 * 60 * 60 * 1000));
	let expire ="expires=" + date.toUTCString();
	document.cookie = `${cName}=${cValue};${expire};path=/`
} 

// Get the value from specific cookie name.
function getCookie(name) {
	const value = `; ${document.cookie}`;
	const parts = value.split(`; ${name}=`);
	if (parts.length === 2) return parts.pop().split(';').shift();
  }

// set the cookie after page loading.
if(!getCookie('currentPage')) {
	creatCookie("currentPage", "Dashboard", 30);

}

// edit the cookie to contain value of the last page.
let sideLinks = document.querySelectorAll(".my__nav li");
sideLinks.forEach(x => {
	x.addEventListener("click", (e) => {
		e.preventDefault();
		creatCookie("currentPage", x.lastElementChild.textContent, 30);
		window.location.reload(true);
	});
});



// -----------------------------------------------------------------------------

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

let logout = document.getElementById("logout-bt");


// Get the modal --------------------------------------------------------------
var modal = document.getElementsByClassName("modal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close");

var btn__edit = document.getElementsByClassName("btn__edit");



for(let i = 0; i < btn.length; i++){
	btn[i].addEventListener("click", ()=>{
		modal[i].style.display = "block";
	})

	// When the user clicks on <span> (x), close the modal
	span[i].addEventListener("click", ()=>{
		modal[i].style.display = "none";
	})
}







