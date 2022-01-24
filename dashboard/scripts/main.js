
// Creat a Cookie to stor the page.
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


// set the movement of side menu.
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


// reload page after submitting to see the change on page.
let submitForm = document.querySelector("form");
submitForm.addEventListener("submit", (e) => {

	window.location.reload();
});


// deleting product part
let deleteId = document.querySelectorAll('.delete-btn');
creatCookie('id', 0, 1);
deleteId.forEach(x => {
	x.addEventListener('click', (e) => {
		e.preventDefault;
		let pElement = x.parentNode;
		x.parentNode.classList.add('pDelete');

		creatCookie('deleteId', x.parentNode.firstElementChild.textContent, 1);

		setTimeout(() => {
			pElement.style.display = "none";
		}, 1000);
		
		window.location.reload();
	})
});


// start modifying the product
// const modifyProduct = (p) => {
// 	let typ = p.firstElementChild.className;
// 	let updateId = p.parentNode.firstElementChild.textContent;

	

// 	creatCookie('updateProduct', typ, 1);
// 	creatCookie('updateId', updateId, 1);

	
// }


