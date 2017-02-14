function avatar(){
	var catch_img = {};
	html2canvas($("#photo"), {onrendered: function(canvas){
		catch_img.img = canvas.toDataURL("image/png");
		catch_img.data = {"#photo" : catch_img.img};
		
		$.ajax({
			url: "controller/php/photo.php",
			data: catch_img.data,
			type: "post",
			success: function(result){
				console.log(result);
			}
		});
		
	}});
}