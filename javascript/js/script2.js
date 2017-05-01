console.log(document);

var my_button = document.getElementById('the-button');

console.log(my_button);

var message_element = document.getElementById('message');
var typeof_message = typeof message_element;

console.log(message_element);
console.log(typeof_message)

function changeTheMessage() {
    message_element.className = "error";
    // message_element.innerHTML = "Wazzup?";
}

console.log(message_element.innerHTML)

globalValue = null;

function changeBack() {
    if (globalValue == 0) {
        message_element.innerHTML = "Nothing to report.";
        globalValue = 1;
    } else {
        message_element.innerHTML = "Wazzup?";
        globalValue = 0;
    }
};

var counter_button = document.getElementById('counter-button');
var buttonCounter = 0;

function increaseCounter() {
    var element = buttonCounter ++;
    counter_button.innerHTML = "This button was clicked " + element + " times.";

};