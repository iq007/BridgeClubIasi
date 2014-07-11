function hide(id){
	$('#'+id).hide();
	$('#'+id+'_button').removeClass('active');
}

function show(id){
	$('#'+id).show();
	$('#'+id+'_button').addClass('active');

}

function toggle(id){
	$('#'+id).toggle();
	if($('#'+id).is(":visible")){
		$('#'+id+'_button').addClass('active');
	}
	else{
		$('#'+id+'_button').removeClass('active');
	}
}

function showContest(str) {
 
  if (str.length==0) {
    document.getElementById("br_rezultate_contest").innerHTML="";
    return;
  }

  var strid = str.replace(".","");
  
  
  if($('#'+strid).length > 0){
    toggle(strid);
	return;
  }
  
  //remove other archive views
  $("#br_rezultate_contest").empty();
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	  
      $("#br_rezultate_contest").append( "<div id=" + strid + ">" + xmlhttp.responseText + "</div>");
	  	  
	  show("br_rezultate_contest");
    }
  }
  xmlhttp.open("GET","rezultate_arhiva.php?q="+str,true);
  xmlhttp.send();
}
