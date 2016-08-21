<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="randomColor-master/randomColor.js"></script>
</head>
<body>
	<style type="text/css">
	body{margin: 0px;padding: 0px;}
	</style>
	<script type="text/javascript">
		
		$(document).ready(function(){
			div();
			div_config();
		});

		$(window).resize(function(){
			div_config();
		});
		
		function div(){
			for(i=0;i<10;i++){
				$('body').append("<div></div>");
				$('body > div').eq(i).css({'background':randomColor()})
			}
		}
		
		function div_config(){
			var w = $(window).width();
			var h = $(document).height();
			var width, height;
			if(w<=425){
				div_css(w/1);
			}else if(w<=768){
				div_css(w/2-10);
			}else{
				div_css(w/4-5);
			}
		}		

		function div_css(e){
			$('div').css({
				'width'		: e,
				'height'	: e,
				'float'		: 'left',
				});
		}
		

	</script>
</body>
</html>