console.log("This is from an external file...");

var valye = null;
var type = null;

value = "123";
console.log(value);
type = typeof value;
console.log(type);

'123'

function hello() {
    console.log("Hello World");
}

function say_hello_to(whom) {
    console.log("Hello, " + whom);
}

function print_type (input) {
    type = typeof input;
    console.log("The type of " + input + " is a " + type)
}

print_type()

function get_type() {
    type = typeof value;
    return type;
}

get_type("123");