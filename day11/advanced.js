
function do_advanced_stuff() {
  statement;

  var there_are_errors = check_for_errors(); // check for errors
  if(there_are_errors) {
      return; // stop the function's execution
  }
  
  statement; // this should only run when there are no errors
  statement;
  statement;
  statement;
  statement;
  statement;
  statement;
  statement;

  return 1;
}