// Label system for input fields
let inputDivs = document.getElementsByClassName("input");

for (let i = 0; i < inputDivs.length; i++) {
    // console.log(inputDivs[i].childNodes[1]);
    // console.log(inputDivs[i].childNodes[3]);

    let input = inputDivs[i].childNodes[1];
    let label = inputDivs[i].childNodes[3];

    input.addEventListener("focusin", function() {
        let height = input.offsetHeight;
        label.style.setProperty("top", `-${(height/2)+1}px`)
    })

    input.addEventListener("focusout", function () {
        if (input.value.trim() == "") {
            let height = input.offsetHeight;
            label.style.setProperty("top", `0px`)
        }
    })
}

// Username input validation
let usernameInput = document.getElementById("username-input");
let usernameFeedback = document.getElementById("username-feedback");

// Event listener with function when there is input in the username or email for live validation and feedback
usernameInput.addEventListener("input", function (e) {
    let value = usernameInput.value.trim(); //Trims value

    // Changing input type if a user filled in a email or username
    if (value.includes("@")) {
        usernameInput.type = "email";
    } else {
        usernameInput.type = "text";
    }

    // Checks if input from the username or email is not empty
    if (value === "") {
        usernameFeedback.innerHTML = "Gebruikersnaam of Email kan niet leeg zijn!";

        submitBtnActive = false;
        return;
    }

    submitBtnActive = true;
})

// Password input validation

let passwordInput = document.getElementById("password-input");
let passwordFeedback = document.getElementById("password-feedback");

// Event listener with function when there is input in the password for live validation and feedback
passwordInput.addEventListener("input", function (e) {
    let value = passwordInput.value.trim(); // Trims value
    let valueLength = value.length; // Get the length of the password

    // Checks if password is not empty
    if (value === "") {
        passwordFeedback.innerHTML = "Wachtwoord kan niet leeg zijn!";

        submitBtnActive = false;
        return;
    } else {
        passwordFeedback.innerHTML = "";

        submitBtnActive = true;
    }

    // Checks if password is shorter or longer than 8 characters
    if (valueLength < 8 ) {
        passwordFeedback.innerHTML = "Wachtwoord kan niet minder dan 8 tekens hebben!";

        submitBtnActive = false;
        return;
    } else {
        passwordFeedback.innerHTML = "";

        submitBtnActive = true;
    }

    submitBtnActive = true;
})

// Check for submit button enabled or disabled
let submitBtn = document.getElementById("submit-input");
let submitBtnActive = false;

setInterval(checkIfSubmitActive, 500);

function checkIfSubmitActive() {
    if (usernameInput.value.trim() === "" || passwordInput.value.trim() === "") {
        submitBtnActive = false;
    }

    if (submitBtnActive) {
        submitBtn.style.opacity = "1";
        submitBtn.disabled = false;
    } else {
        submitBtn.style.opacity = ".5";
        submitBtn.disabled = true;
    }
}