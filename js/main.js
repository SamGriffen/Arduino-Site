// CODE FOR FUNCTION DEMO
if($("#multiply-demo").length){
	$("#multiply-demo-form").submit(function(){
		var value1 = $("#multiply-demo-form #num1").val();
		var value2 = $("#multiply-demo-form #num2").val();
		var result = value1*value2;
		if(!parseInt(value1) || !parseInt(value2)){
			result = "Function multiply takes two parameters.";
			result += [" Only one given", " None given."][(!parseInt(value1) && !parseInt(value2)) +0];
		}
		$("#output #result").html(result);
		return false;
	})
}

// CODE FOR TO TOP BUTTON
$("#toTop").click(function(){
	$("body, html").animate({
		scrollTop: 0
	}, 500, "swing");
})

// Apply scroll listener
$(window).scroll(function(){
	if(($(window).scrollTop() > 100 && !($("#toTop").hasClass("visible"))) || ($(window).scrollTop() < 100 && $("#toTop").hasClass("visible"))){
		$("#toTop").toggleClass("visible")
	}
})

// Spoiler code
if($(".spoiler").length > 0){
	$(".spoiler").click(function(event){
		$(event.target).toggleClass("shown");
		var spoilerId = $(event.target).attr("id");
		$("#spoiler"+spoilerId).toggleClass("shown");
		if($("#spoiler"+spoilerId).hasClass("shown")){
			// Weird code to scroll the spoiler wrapper to the top
			$("body").animate({scrollTop: $("#spoiler"+spoilerId).parent().position().top - 65});
		}
	})
}

// BEGIN MENU CODE
// Set a boolean for current menu state
var currentMenuState = 0;

// Function for retreiving elements (will remove and just use jQuery in actual build)
function getEl(id){
	return document.getElementById(id);
}

// If the hamburger is visible, apply event listeners
if($("#hamburger").css("display") == "block"){
	// Function to test if the user clicks anywhere but the menu if it is open
	$(document).click(
		// Take the event
		function(event){
			// Scan up the DOM tree to find a parent with an id of header. If found, and the menu is down, bring the menu up again
			if(!$(event.target).closest("#header").length && currentMenuState){
				toggleMenu();
			}
		}
	)

	$('#hamburger').click(function(){
		toggleMenu();
	})
}

function toggleMenu(){
	$("#hamburger").toggleClass('open');
	// Simply adjust the menu height to however many items, just a flexiblility feature if I wish to add more menu items at a later date.
	var numItems = $(".menu-item").length;
	$("#menu").css("max-height", [3.188*numItems + "em", "0"][currentMenuState + 0]);
	currentMenuState = !currentMenuState
}
// END MENU CODE

if($(".extra").length > 0){$("#logoimg").attr("src", "img/tutorial-images/extra/cat.png");$("#logo").addClass("demoSpinStration");}

// SLIDER CODE
var slider = {
	currentIndex: 0,
	timerOn:false,
	intervalId:0,
	timeoutOn:false,
	timeoutId:0
}

// If the slider exists, then set up the javascript for it
$(document).ready(function(){
	if($("#slider").length){
		// Call the addDots function once on load
		addDots();
		// Set the first slide on load
		setSlide(slider.currentIndex);
		// Set up auto slide, and store the interval object
		slider.intervalId = autoSlide();
		// Initialise swipe on slider
		initialiseSwipe();
	}
})

// Function to add dots to the slider
function addDots(){
	$("#dots").html("");
	var noDots = $(".slide").length;
	for(i = 0; i < noDots; i++){
		$("#dots").append("<div class='dot' id='"+i+"''></div>");
	}
	// Where does 1.35 come from? Algebra. If you want me to explain I am happy to demo for you :D But for some reason I think you might just trust me - it works
	$("#dots").css("left", "calc(50% - " + ((1.35*noDots)/2) + "em)");
	$(".dot").click(function(event){
		var id = parseInt($(event.target).attr("id"));
		setSlide(id);
		removeAutoSlide();
	})
}

function activeDot(num){
	var dots = $(".dot");
	for(i = 0; i < dots.length; i++){
		if($(dots[i]).hasClass("active")){
			$(dots[i]).removeClass("active");
		}
		else if(i == num){
			$(dots[i]).addClass("active");
		}
	}
}

//Function to set one slide visible
function setSlide(index){
	slider.currentIndex = index;
	var slides = $(".slide");
	for(i = 0; i < slides.length; i++){
		if($(slides[i]).hasClass("current") && i != index){
			$(slides[i]).removeClass("current");
		}
		else if(i == index){
			$(slides[i]).addClass("current");
		}
	}
	activeDot(index);
}

// Function to increment the slide by one or minus one
function incrementIndex(increment){
	var indexMax = $(".slide").length - 1;
	slider.currentIndex += increment;
	if(slider.currentIndex < 0){
		slider.currentIndex = indexMax;
	}
	else if(slider.currentIndex > indexMax){
		slider.currentIndex = 0;
	}
	setSlide(slider.currentIndex);
}

// Function to create an interval on incrementIndex. When the user uses the slider, it clears interval functions for 30 seconds
function autoSlide(){
	slider.timerOn = true;
	return setInterval(function(){incrementIndex(1)}, "8000");
}

function createPauseTimeout(){
	slider.timeoutOn = true;
	return setTimeout(function(){
		slider.timeoutOn = false; 
		slider.intervalId = autoSlide()
	}, "30000");
}

function removeAutoSlide(){
	if(slider.timerOn == true){
		clearInterval(slider.intervalId);
		slider.timerOn = false;
	}
	if(slider.timeoutOn){
		clearTimeout(slider.timeoutId);
	}
	slider.timeoutId = createPauseTimeout();
}

// Function to initialise hammer.js for picking up on touch gestures
function initialiseSwipe(){
	// Use Hammer.js. A library from: http://hammerjs.github.io/jquery-plugin/
	var sliderHammer = new Hammer(document.getElementById("slider"));

	sliderHammer.on("swipeleft",
		function(){
			incrementIndex(1);
			removeAutoSlide();
		}
	)

	sliderHammer.on("swiperight",
		function(){
			incrementIndex(-1);
			removeAutoSlide();
		}
	)

	$("#left").click(
		function(){
			incrementIndex(-1);
			removeAutoSlide();
		}
	)

	$("#right").click(
		function(){
			incrementIndex(1);
			removeAutoSlide();
		}
	)
}
// END SLIDER CODE

// BEGIN SCRIPT FOR OHMS LAW CALCULATOR
var inputs = [];
// If the calculator exists, attach an event listeners to elements
if($("#ohms_law_calc").length){
	console.log("Calc exists");
	// When the user selects which value to calculate, change content accordingly
	$(".value_select").click(function(event){
		// Get the clicked button
		var targetEl = $(event.target);
		// Get the value of the button
		var value = targetEl.attr("value");
		// Remove active from all divs
		$(".value_select").removeClass("active")
		// Add active to button clicked
		targetEl.addClass("active");
		// Define an array with the two variables required to calculate a particular unknown
		var variables = [["Current", "Resistance", "&times;"],["Voltage", "Resistance", "&divide"],["Voltage", "Current", "&divide"]];
		// Set the placeholder text for the first text field to the first known variable
		$("#text_field_1").attr("placeholder", variables[value][0]);
		$("#text_field_1").val('')
		// Set the text in the span to whatever sign correlates to ohms law with the selected unknown as the subject
		$("#sign").html(variables[value][2]);
		// Set text field twos placeholder to the second unknown
		$("#text_field_2").attr("placeholder", variables[value][1]);
		$("#text_field_2").val('');
		$("#result").html(" ");
	});

	// Apply an onsubmit to the form
	$("#vir_form").submit(function(event){
		// Get the current unknown
		var unknown = $(".active").attr("value");
		// Get the text field values
		var inp1 = $("#text_field_1").val();
		var inp2 = $("#text_field_2").val();
		if((inp1 == "" || inp2 == "") || (inp1 <= 0 || inp2 <= 0)){
			$("#result").html("<span class='error'>Please enter a number that is greater than zero!</span>")
		}
		else {
			var value = [voltage, current, resistance][unknown](inp1, inp2);
			console.log(value);
			$("#result").html(["Voltage is: ", "Current is: ", "Resistance is: "][unknown]+round(value, 2)+[" V", " A", " &Omega;"][unknown]);
		}
		return false;
	})
}

// Define functions for calculating V, I and R. Each function takes the unknowns in order of the operation it does (Voltage is I * R, so it's parameters are i, r. Current is V / R, so it's parameters are v, r)
function voltage(i, r){
	console.log("CALLED");
	console.log(i);
	return i * r;
}

function current(v, r){
	return v / r;
}

function resistance(v, i){
	return v / i;
}

// Function for rounding a number to a given decimal place. Takes num (the number to round) and dp (the decimal places to round to)
function round(num, dp){
	return Math.round((num * (Math.pow(10, dp))))/Math.pow(10, dp);
}
// END OHMS LAW SCRIPT

// CODE FOR LED DEMO
if($("#led-demo").length){
	$("#led-demo button").click(function(event){
		$("#led-demo .LED").toggleClass("on");
		$("#led-demo button").toggleClass("pressed");
	})
}

// CODE FOR DEMONSTRATION
document.addEventListener("keyup", logKey);

var checkKey = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];
var keyIndex = 0;
var demoIntervalId = 0;

function logKey(event){
	if(event.keyCode == checkKey[keyIndex]){keyIndex++;if(demoIntervalId != 0){clearInterval(demoIntervalId);}demoIntervalId = setInterval(function(){keyIndex = 0;}, 2000);}else{keyIndex = 0;}if(keyIndex == checkKey.length){
		// ONLY ACCESS THIS TUTORIAL IF YOU FIND IT VIA THE REAL TUTORIAL -- OTHERWISE IT MAY BE TOO CONFUSING
		window.location = "index.php?page=tutorial&tutorial=extraforexperts";}
}

// CODE FOR LED BLINK DEMO
var delay_led_interval_id = null;

if($("#delay-demo").length){
	$("#delay-input").submit(function(event){
		setTimer();
		return false;
	})
}

function setTimer(){
	if(delay_led_interval_id != null){
		clearInterval(delay_led_interval_id);
	}
	var interval = $("#delay-demo #delay-millis").val();
	if(!isNaN(parseInt(interval)) && interval > 10){
		delay_led_interval_id = setInterval(function(){
			$("#delay-demo .LED").toggleClass("on");
		}, interval);
	}
	else {
		$("#delay-demo .error").html("Please enter a number that is greater than 10")
	}
}

// CODE FOR LEDS BLINKING OUT OF SYNC

if($("#two-blink").length){
	setInterval(function(){
		$(".blink").toggleClass("on");
	}, 1000);
}

// CODE TO RUN KNIGHTRIDER ANIMATION
// Object to store information for the knightrider code in
var knight = {
	curLED:0,
	prevLED:0,
	curIncr:1,
	intervalId:0
}

//If the demo exists, then apply intervals
if($("#knightrider-animation").length > 0){
	knight.intervalId = setInterval(function(){nextLED();}, 100);
	$("#knightrider-animation #play-pause").click(function(){
		togglePlay();
	})
}

function togglePlay(){
	var playButton = document.getElementById("play-pause");
	playButton.className = ["play", "pause"][(playButton.className == "play") + 0];
	if(playButton.className == "pause"){
		clearInterval(knight.intervalId);
	}
	else if(playButton.className == "play"){
		knight.intervalId = setInterval(function(){nextLED();}, 100);
	}
}

function nextLED(){
	var leds = $("#knightrider-animation .LED");
	if(knight.curLED == 7){
		knight.curIncr = -1;
	}
	else if(knight.curLED == 0){
		knight.curIncr = 1;
	}
	knight.prevLED = knight.curLED;
	knight.curLED = knight.curLED + knight.curIncr;
	$(leds[knight.prevLED]).toggleClass("on");
	$(leds[knight.curLED]).toggleClass("on");
}

// Code for for demo
var operatorLessThan = 1;

//If for-demo exists, attach listeners
if($("#for-demo").length){
	$("#for-demo-form").submit(function(){
		var num1 = parseInt($("#for-demo-form #fornum1").val());
		var num2 = parseInt($("#for-demo-form #fornum2").val());
		var num3 = parseInt($("#for-demo-form #fornum3").val());
		$("#for-demo #for-result").html("");
		if(isNaN(num1) || isNaN(num2) || isNaN(num3)){
			document.getElementById("for-result").innerHTML = "Please enter all values.";
		}
		else {
			if(operatorLessThan){
				for(i = num1; i < num2; i += num3){
					$("#for-demo #for-result").append(i+" ");
				}
			}
			else{
				for(i = num1; i > num2; i -= num3){
					$("#for-demo #for-result").append(i+" ");
				}
			}
		}
		return false;
	})
	$("#for-demo-form .operator").click(function(){
		operatorLessThan = operatorLessThan ^ 1;
		$("#for-demo-form .operator").text([">", "<"][operatorLessThan]);
		$("#increment").html(["-=", "+="][operatorLessThan]);
	})
}