var pseudo = document.getElementById("pseudo");
var email = document.getElementById("email");

let pseudoValue = pseudo.innerHTML;
let emailValue = email.innerHTML;

let emailIsClicked = false;
let pseudoIsClicked = false;

var pseudoInput = "<input type='text' name='pseudo' value='"+pseudoValue+"'>";
var emailInput =  "<input type='email' name='email' value='"+emailValue+"'>";



pseudo.addEventListener("mousedown", event => {
    pseudoIsClicked = true;
    pseudo.innerHTML = pseudoInput;
    console.log(pseudoIsClicked);
    if (emailIsClicked)
    {
        email.innerHTML = emailValue;
    }
})

email.addEventListener('mousedown', event => {
    emailIsClicked = true;
    email.innerHTML = emailInput;
    console.log(emailIsClicked);
    if (pseudoIsClicked)
    {
        pseudo.innerHTML = pseudoValue;
    }
})

if (emailIsClicked == true)
{
    pseudoIsClicked = false;
    console.log(emailIsClicked);
}

if (pseudoIsClicked == true)
{
    emailIsClicked = false;
}
console.log(emailIsClicked);
console.log(pseudoIsClicked);