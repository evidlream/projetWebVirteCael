$this->load->library('jquery');

$(document).ready(function(){
	$("img").click(function(){
		$("img").animate({
			top: '30px',
			height: '+=60px',
			width: '+=40px'
		});
	});
});