function test() {

    let height = Number(document.getElementById('Height').value);
    let weight = Number(document.getElementById('Weight').value);
    let age = Number(document.getElementById('Age').value);
    let gender;

    let genderRadios = document.getElementsByName('gender');

    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            gender = genderRadios[i].value;
            break;
        }
    }

    if (!height || !weight || !age) {
        var div = document.getElementById("warning-container");
        var message = document.createTextNode("<p id='message' style='color:red;'>this is a warning</p>");
        div.appendChild(message);
    }
    else {
        let message;
        if (document.getElementById("warning-message") != null) {
            message = document.getElementById("warning-message");
            message.remove;
        }

        let result;

        if (gender == "male") {
            result = (9.99 * weight) + (6.25 * height) - (4.92 * age) + 5;
        }
        else {
            result = (9.99 * weight) + (6.25 * height) - (4.92 * age) - 161;
        }

        result = Math.round(result);

        document.getElementById('Result').value = result;
    }

}
