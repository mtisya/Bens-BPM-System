// JavaScript Document
$(document).ready(function(e) {
	$('.error').hide()
	$('#notify').hide()
    $('#btnaddsurvey').bind('click',function(e){
		e.preventDefault()
		var customername = $('#customername').val()
		var solutionarchitect = $('#solutionarchitect').val()
		var physicaladdress = $('#physicaladdress').val()
		var coordinates = $('#coordinates').val()
		var surveytype = $('#surveytype').val()
		var reqcode = $('#reqcode').val()
		var contactperson = $('#contactperson').val()
		var contactdetails = $('#contactdetails').val()
		var fieldengineer = $('#fieldengineer').val()
		var engcontacts = $('#engcontacts').val()
		var datereceived = $('#datereceived').val()
		var comments = $('#comments').val()
	
		if (customername.length<=0||solutionarchitect.length<=0||physicaladdress.length<=0||coordinates.length<=0||
			surveytype.length<=0||reqcode.length<=0||contactperson.length<=0||contactdetails.length<=0||
			fieldengineer.length<=0||engcontacts.length<=0||datereceived.length<=0||comments.length<=0){
			$('#notify').html("NOTE: Fields marked with  * are required, Please fill in all fields. ");
			$('#notify').fadeIn('slow')
			}
		else {
			$('#notify').fadeOut('slow')
			var url = "survey.php?customername="+customername+"&solutionarchitect="+solutionarchitect+"&physicaladdress="+physicaladdress+"&coordinates="+coordinates+"&surveytype="+surveytype+"&reqcode="+reqcode+"&contactperson="+contactperson+"&contactdetails="+contactdetails+"&fieldengineer="+fieldengineer+"&engcontacts="+engcontacts+"&datereceived="+datereceived+"&comments="+comments
			$.get(url,function(data,status){
				alert(data)
				confirm("Link Added Successfully, Would You Like to Submit Another Link?")
				window.location = "surveyform.php"
				})
			}

		})
})