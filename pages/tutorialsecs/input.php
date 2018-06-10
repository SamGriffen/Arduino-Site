<div id="content">
	<article>
		<header>
			<h1>Input</h1>
		</header>
		<p>Up until this point, all we have done is programmed in patterns for LEDs. This is all well and good, but a program needs to be able to take inputs! We can do this with Arduino, and we can do it with physical switches, buttons, sensors, and anything else you could make. You will have picked up on the fact that the <span class="code"><span class="func">pinMode</span>()</span> function can set a pin as an input. But what does this mean you may ask?</p>

		<p>If a pin is set as an input, then the Arduino knows that you are going to tell it to read the state of that pin at some point in the code. Remember the button to turn an LED on and off that we used before? If you don't it is this one:</p>

		<div class="tutorial-demo" id="led-demo">
			<div id="button-casing">
				<button></button>
			</div>
			<div class="LED">
			</div>
		</div>

		<p>How about we try to make that with our Arduino? Let's get out those tactile switches and start looking at a circuit to do this!</p>

		<p>The first thing you are going to want to do is wire a single LED up to your Arduino, just as we have been in the previous tutorials (If you need a refresher open the spoiler)</p>

		<div>
			<div class="spoiler" id="6">Remind Me</div>
			<div class="spoiler-content" id="spoiler6">
				<p>The Blink circuit is shown below. With the LEDs positive leg wired to pin 13</p>
				<div class="tutorial-demo">
					<img src="img/tutorial-images/blinkled/blink_circuit.png" alt="Depiction of an Arduino Uno set up with an LED and resistor in a circuit that could be used for the blink sketch.">
				</div>
			</div>
		</div>

		<p>How do make a button control the blinking? Well, you are probably thinking "We could just wire the button straight into a circuit. That would do it", and you are right, that would also do it, but we need to know how to know how to read input with the Arduino. The first thing we need is a circuit with a button that the Arduino can read. This is a little more complex than you may expect. Below is the most basic circuit that you can set up to do this.</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/input/switch_circuit.png" alt="Depiction of an Arduino Uno set up with an LED and resistor, along with a tactile switch connected to the Arduino on pin 13, and to ground through 470 ohm resistor. Food for thought: What is the difference between a tactile switch and a tactile hub?">
		</div>

		<p>Note that for a tactile switch, usually both pins that are on the same side are connected together, and will connect with the two on the other side when the button is closed. However for some switches only diagonal opposite pins will have a path between. You will notice that the switch is connected to 5 volts on one side, and on the other it is connected to pin 12 and also to ground through a resistor. This resistor that goes down to ground is what we call a pull-down resistor. We call it this, as it means that when the switch is not closed, pin 12 has a direct connection to ground, or 0 volts. Electrons (Which is what current is made up of) will take the path of least resistance, so this is why we do not just tie the switch directly to ground with a wire, as when the button is closed (pressed), there will still be a reading of HIGH on pin 12. If we did not have this, then when the button wasn't pushed, the Arduino would get confused.</p> 
		
		<p>I am sure there are many more complicated physics ideas here, but we don't need to know them. Just know that you need a pull-down resistor to read a button.</p>

		<p>Now, how do we get the Arduino to make use of this? Well first of all, I will teach you about the <span class="code func">digitalRead</span> function. We have learnt what the <span class="code func">digitalWrite</span> function does, and <span class="code func">digitalRead</span> does exactly what you might expect! The <span class="code func">digitalRead</span> function is used as shown below:</p>

		<div class="code">
			<span class="func">digitalRead</span>(<span class="decl">int</span> pin);
		</div>

		<p>To use the function, you simply pass it the pin that you want to read the state of, and it will return the state of that pin as a boolean.</p>

		<p>Remember we went over booleans shortly earlier, well unknowingly you have been using them! <span class="decl code">HIGH</span> and <span class="decl code">LOW</span> are booleans, <span class="decl code">HIGH</span> being a shortcut to 1, or <span class="decl code">true</span>. <span class="decl code">LOW</span> being a shortcut to 0 or <span class="decl code">false</span>. <span class="func code">digitalRead</span> returns a boolean. It returns <span class="decl code">true</span> if the specified pin has 5 volts, and returns <span class="decl code">false</span> if the pin has 0 volts. Look at the circuit in front of you, with the LED in pin 13, and the switch on pin 12. If you were to <span class="code func">digitalRead</span> pin 12 while the switch is pressed down, then there would be 5 volts connected to pin 12, causing it to read a <span class="decl">HIGH</span> state. If the button was not pressed, it would read <span class="decl">LOW</span>. How can we use this to do different things? Well we need If/Else statements!</p>

		<a href="index.php?page=tutorial&tutorial=ifelse" class="block-link">Next</a>
	</article>
</div>