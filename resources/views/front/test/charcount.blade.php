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

.column {
	float: left;
	margin-right: 50px;
}

label {
	display: block;
	font-weight: bold;
}

input,
textarea {
	width: 200px;
	margin-bottom: 30px;
}

input + .maxlength,
textarea + .maxlength {
	position: relative;
	top: -30px;
}

.counter-container {
	width: 300px;
	padding: 20px;
	background: #f3f3f3;
}

.counter-container .header {
	font-weight: bold;
	margin: 0;
}

.counter-container .header,
.counter-container .maxlength {
	margin-bottom: 1em;
}

.counter-container .maxlength:last-child {
	margin-bottom: 0;
}
		</style>
	</head>
	<body>
		<div class="column">
			<label for="input-1">Input 1: maxlength=50</label>
			<input type="text" maxlength="50" id="input-1" value="Hello there!"/>
			
			<label for="input-2">Input 2: no maxlength attribute</label>
			<input type="text" id="input-2" value="Oh hai!"/>
			
			<label for="textarea-1">Textarea 1: maxlength=50</label>
			<textarea maxlength="50" id="textarea-1"></textarea>
			
			<label for="textarea-2">Textarea 2: maxlength=100, character counter in the grey div</label>
			<textarea maxlength="100" id="textarea-2"></textarea>
			
			<label for="input-3">Input 3: maxlength=100, character counter in the grey div, custom text</label>
			<input type="text" maxlength="100" id="input-3"/>
		</div>
		<div class="column">
			<div class="counter-container">
				<p class="header">Counter container for Textarea 2 and Input 3</p>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript">

/*
 * jQuery Maxlength
 * http://pioul.fr/jquery-maxlength
 *
 * Copyright 2013, Philippe Masset
 * Dual licensed under the MIT or GPL Version 2 licenses
 */
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
	$("#input-1, #input-2, #textarea-1").maxlength();
	
	// custom counter container
	$("#textarea-2").maxlength({
		counterContainer: $(".counter-container")
	});
	
	// custom counter container and text
	$("#input-3").maxlength({
		counterContainer: $(".counter-container"),
		text: 'Input 3: You have written <b>%length</b> characters, <b>%maxlength</b> are allowed, you have <b><u>%left</u> left</b>.'
	});
	
	// subscribe to the "update.maxlength" event
	$("input, textarea").bind("update.maxlength", function(event, element, lastLength, length, maxLength, left){
		console.log(event, element, lastLength, length, maxLength, left);
	});
	
});
</script>