<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="../jquery.maxlength.js"></script>
		<style type="text/css">

body{
	margin: 50px 0 50px 50px;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 13px;
	line-height: 18px;
	color: #333;
	background-color: #fff;
}






</style>

	</head>
	<body>
		<div class="column">

			<label for="input-1">Input 1: maxlength=50</label><br>
			<input type="text" maxlength="50" id="input-1" value="Hello there!"/><br>

			<label for="input-3">Character Count and left</label>
			<div class="counter-container">
				<input type="text" maxlength="100" id="textLength"/>
			</div>
		</div>
		
	</body>
</html>

<script type="text/javascript">

(function($){
	$.fn.maxlength = function(options){
		var t = $(this);
		t.each(function(){
			options = $.extend(
				{},
				{
					counterContainer: false,
					text: '%left characters left' // %length %maxlength %left
				},
				options
			);
			var t = $(this),
				data = {
					options: options,
					field: t,
					counter: $('<div class="maxlength"></div>'),
					maxLength: parseInt(t.attr("maxlength"), 10),
					lastLength: null,
					updateCounter: function(){
						var length = this.field.val().length,
							text = this.options.text.replace(/\B%(length|maxlength|left)\b/g, $.proxy(function(match, p){
								return (p == 'length')? length : (p == 'maxlength')? this.maxLength : (this.maxLength - length);
							}, this));
						this.counter.html(text);
						if(length != this.lastLength){
							this.updateLength(length);
						}
					},
					updateLength: function(length){
						this.field.trigger("update.maxlength", [
							this.field,
							this.lastLength,
							length,
							this.maxLength,
							this.maxLength - length
						]);
						this.lastLength = length;
					}
				};
			if(data.maxLength){
				data.field
					.data("maxlength", data)
					.bind({
						"keyup change": function(e){
							$(this).data("maxlength").updateCounter();
						},
						"cut paste drop": function(e){
							setTimeout($.proxy(function(){
								$(this).data("maxlength").updateCounter();
							}, this), 1);
						}
					});
				if(options.counterContainer){
					options.counterContainer.append(data.counter);
				} else {
					data.field.after(data.counter);
				}
				data.updateCounter();
			}
		});
		return t;
	};
})(jQuery);


	$(document).bind("ready", function(){

		// basic usage
		$("#input-1").maxlength();

	// custom counter container and text
		$("#textLength").maxlength({
			counterContainer: $(".counter-container"),
			text: 'You have written <b>%length</b> characters, <b>%maxlength</b> are allowed, you have <b><u>%left</u> left</b>.'
		});
	});
</script>