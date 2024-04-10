const inputs = document.querySelectorAll('.form input');

const patterns = {
    email: {
        regex: /^[a-zA-Z0-9_\.\-]+@[a-z]+\.[a-z]{2,6}$/,
        message: "email not valid (example: example@gmail.com)",
    },
    password: {
        regex: /^.{6,}$/,
        message: "password must be at least 6 characters",
    }
};

function validate(pattern, input) {
    const fieldMessage = document.getElementById(input.name + "-message");

    if (!pattern.regex.test(input.value)) {
        fieldMessage.innerText = pattern.message;
        fieldMessage.style.color = "red";
    } else {
        fieldMessage.innerText = "valid";
        fieldMessage.style.color = "green";
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', function (e) {
        validate(patterns[e.target.name], e.target);
    });
});


