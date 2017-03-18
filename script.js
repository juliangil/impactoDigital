$(document).ready(function(){
	$("#submit").click(function(){

	var name = $("#name").val();
	var email = $("#email").val();
	var lastName = $("#lastName").val();
	var nationality = $("#nationality").val();

	//alert(name+", "+lastName+", "+nationality+", "+email
	var hoy = new Date();
	var ss = hoy.getSeconds();
	var mn = hoy.getMinutes();
	var hh = hoy.getHours();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; //hoy es 0!
	var yyyy = hoy.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	}
	var hoy = yyyy+'-'+mm+'-'+dd+'-'+hh+':'+mn+':'+ss

	// Returns successful data submission message when the entered information is stored in database.
	var dataString = 'name='+ name + '&lastName='+ lastName + '&nationality='+ nationality + '&email='+ email + '&registerDate='+ hoy;

	//alert(dataString)
	
	if(name==''||lastName==''||nationality==''||email==''){
		alert("Please Fill All Fields");
	}
	else{
		// AJAX Code To Submit Form.
		$.ajax({
		type: "POST",
		url: "ajaxsubmit.php",
		data: dataString,
		cache: false,
		success: function(result){
			alert(result);
			}
		});
	}
	return false;
	});
});