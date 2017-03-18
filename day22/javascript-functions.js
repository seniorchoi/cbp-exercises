

function my_func() {

    console.log('THe function runs!');

}

my_func();

var element = document.getElementById('my_element');

element.addEventListener('click', 


function(event) {   

    console.log(event); // the event object

    console.log('Element clicked!');

}


);


function(event) {   

    console.log(event); // the event object

    console.log('Element clicked!');

}

function some_func() {

    var my_function_variable = function(event) {   

        console.log(event); // the event object

        console.log('Element clicked!');

    }


    my_function_variable(event);

    // variables are destroyed
    // and so is the function because it was anonymous - only existed within the variable
}


var element = document.getElementById('my_element');

var my_click_function = function(event) {

    console.log(event);
    console.log('event happened');

}

element.addEventListener('click',  my_click_function );

element2.addEventListener('click',  my_click_function );

element3.addEventListener('click',  my_click_function );


