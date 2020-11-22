console.log("hello i'm admin");
let button = document.querySelector('.admin');
let form = document.querySelector('.aform');
button.addEventListener('click', ()=> {
	form.classList.toggle('invisible');
})