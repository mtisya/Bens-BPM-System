// JavaScript Document
$(document).ready(function(e) {
  var date = new Date();
 var curryear = date.getFullYear();
 var prevdate = curryear-2;
 for (var i=prevdate;i<=curryear;i++){
 var nextdate = i + 1;
 var str = "<option value="+i+"/"+nextdate+">"+i+"/"+nextdate+"</option>";
 $('#cboyear').append(str);    
 }
$('#txtsearch').bind('keyup',function(e){
	var str = $('#txtsearch').val();
	var workorder = $('#workorder').val();
	var circuitid = $('#circuitid').val();
	var year = $('#year').val();
	var session = $('#session').val();
	var url = "reportsearch.php?year="+year+"&session="+session+"&str="+str;
	$.get(url,function(data,status){
		$('#tblres').html(data);
	});
});
$('#instsearch').bind('keyup',function(e){
	var str = $('#instsearch').val();
	var url = "instructionsearch.php?str="+str;
	$.get(url,function(data,status){
		$('#instruct').html(data);
	});
});
$('#itemsearch').bind('keyup',function(e){
	var str = $('#itemsearch').val();
	var url = "itemsearch.php?str="+str;
	$.get(url,function(data,status){
		$('#items').html(data);
	});
});
$('#btnfilter').bind('click',function(e){
	var year = $('#cboyear').val();
	var session = $('#cbosession').val();
	var url = "sessionsearch.php?year="+year+"&session="+session;
	$.get(url,function(data,status){
		$('#tblres').html(data);
	});
});
	$('#vacancysearch').bind('keyup',function(e){
		var str = $('#vacancysearch').val();
		var url = "vacancysearch.php?str="+str;
		$.get(url,function(data,status){
			$('#unallocated').html(data);
		});
	});

});

	



