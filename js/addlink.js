// JavaScript Document
$(document).ready(function(e) {
	$('.error').hide()
	$('#notify').hide()
    $('#btnaddlink').bind('click',function(e){
		e.preventDefault()
		var siebelcircuit = $('#siebelcircuit').val()
		var projectmanager = $('#projectmanager').val()
		var customername = $('#customername').val()
		var accountmanager = $('#accountmanager').val()
		var physicaladdress = $('#physicaladdress').val()
		var bandwidth = $('#bandwidth').val()
		var servicetype = $('#servicetype').val()
		var accessmedia = $('#accessmedia').val()
		var contactperson = $('#contactperson').val()
		var contactdetails = $('#contactdetails').val()
		var status = $('#status').val()
		var datereceived = $('#datereceived').val()
		var datecompleted = $('#datecompleted').val()
		var comments = $('#comments').val()
		if (siebelcircuit.length<=0||projectmanager.length<=0||customername.length<=0||accountmanager.length<=0||
			physicaladdress.length<=0||bandwidth.length<=0||servicetype.length<=0||accessmedia.length<=0||
			contactperson.length<=0||contactdetails.length<=0||status.length<=0||datereceived.length<=0||datecompleted.length<=0||
			comments.length<=0){
			$('#notify').html("Please Correct All errors First");
			$('#notify').fadeIn('slow')
			}
		else {
			$('#notify').fadeOut('slow')
			var url = "addstatus.php?siebelcircuit="+siebelcircuit+"&projectmanager="+projectmanager+"&customername="+customername+"&accountmanager="+accountmanager+"&physicaladdress="+physicaladdress+"&bandwidth="+bandwidth+"&servicetype="+servicetype+"&accessmedia="+accessmedia+"&contactperson="+contactperson+"&contactdetails="+contactdetails+"&status="+status+"&datereceived="+datereceived+"&datecompleted="+datecompleted+"&comments="+comments
			$.get(url,function(data,status){
				alert(data)
				confirm("Link Added Successfully, Would You Like to Submit Another Link?")
				window.location = "newlinktask.php"
				})
			}

		})
})