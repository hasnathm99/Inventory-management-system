$(document).ready(function() {
  var wrapper       = $(".input_fields_wrap"); //Fields wrapper
  var add_button      = $(".add_field_button"); //Add button ID
  
  var x = 1; //initlal text box count
  $(add_button).click(function(){ //on add input button click
      x++; //text box increment
      $(wrapper).append('<tr class="form_group"><td><select><option disabled="" selected="">Select page</option><option>A4</option><option>A3</option></select></td><td><input type="number" name="" class="pu-input"></td> <td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td><input type="number" name="" class="pu-input"></td><td colspan="2" style="padding-left: 0; padding-right: 30px;"><button class="btn btn-danger"><i class="fas fa-times"></i></button></td></tr>'); //add input box
    
  });
  $(wrapper).on("click", "#remove_field", function (e) { //user click on remove text
  		e.preventDefault();
        $(this).parent('tr').remove();
        x--;
    });
});