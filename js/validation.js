
             
document.getElementById('nameF').addEventListener('change', proveraIme);
document.getElementById('nameL').addEventListener('change', proveraPrezime);
document.getElementById('email').addEventListener('change', proveraEmail);
document.getElementById('submit').addEventListener('click' , posalji);
document.getElementById('message').addEventListener('change' , proveraPoruke);



function proveraIme() {
const ime = document.getElementById('nameF');
const reg1 = /^[A-Z]{1}[a-z]{2,20}$/;

if(!reg1.test(ime.value)) {
    ime.style.border = '3px solid red';
    alert('Ime mora početi velikim slovom, a sva ostala moraju biti mala!');
} else {
    ime.style.border = '3px solid green';
}
};



//prezime
function proveraPrezime() {
const prezime = document.getElementById('nameL');
const reg1 = /^[A-Z]{1}[a-z]{2,20}\ [A-Z]{1}[a-z]{2,20}$|^[A-Z]{1}[a-z]{2,20}$/;

if(!reg1.test(prezime.value)) {
  prezime.style.border = '3px solid red';
  alert('Neispravno uneto Prezime. Prezime mora početi velikim slovom');

} else {
  prezime.style.border = '3px solid green';
}

};
//email
function proveraEmail() {
const email = document.getElementById('email');
const reg2 = /^([A-Za-z0-9_\-\.]+)@([A-Za-z0-9_\-\.]+)\.([A-Za-z]{2,5})$/

if(!reg2.test(email.value)) {
  email.style.border = '3px solid red';
  alert('Neispravno uneta email adresa !')
  
} else {
  email.style.border = '3px solid green';
  
}
}



function proveraPoruke() {
  if(unos.value == "") {
      alert('Unesite poruku');
  }
}
// slanje
function posalji() {
  
  proveraIme();
  proveraPrezime();
  proveraEmail();
 
  proveraPoruke();
 
}
