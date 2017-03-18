var value = null, 
    type = null;

value = '123'; // we assign '123' into variable `value`
type = typeof value; // we get the type of variable `value` and assign it into variable `type`
//console.log(type); // we output the variable `type` (containing the type of variable `value`)

var message_element = document.getElementById('message');
console.log(message_element.innerHTML);
console.log(typeof message_element);
message_element.innerHTML = 'New text';
console.log(message_element.innerHTML);