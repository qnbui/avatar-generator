function avatar(){
	html2canvas($("#photo"), {onrendered: function(canvas){
		$("#face").html("");
		$("#face").append(canvas);
	}});
}