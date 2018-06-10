<div id="content">
	<article>
		<header>
			<h1>Breadboards</h1>
		</header>
		<p>Breadboards are an awesome tool for prototyping circuits. Essentially what they are is a way to connect components together without solder, for quick circuit creation and debugging. They are very simple to use, let&apos;s take a look at what the circuit with the LED and the resistor that we just looked at will look like powered by an Arduino and set up on a breadboard:</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/breadboards/led_circuit.png" alt="Depiction of an Arduino Uno set up with an LED and resistor in a circuit that will power the LED if Arduino is powered.">
		</div>

		<p>The red and black lines are what we call Jumper Wires. These are simply wires that are used to connect components together on a breadboard. They have pins which will plug neatly into the pins on a breadboard or an Arduino. As you can see, I have connected the 5 volt pin to the first column on the left, which is a special column. Every pin in this column is connected vertically as if it is one wire. This means that I can plug a jumper into any pin on this line and it will have 5 volts. This is the same with the black wire connected to ground.</p> 

		<p>Other than the 2 columns on the left and right with blue and red lines on them, which I will refer to as power rails, there is a grid of pins in the middle. For each row in this grid, pins A, B, C, D, and E are all connected as if they are a single wire, and pins F, G, H, I, and J are connected as if they are one wire.</p> 

		<p>Why don&apos;t you plug your Arduino in and set up this circuit? Once the LED is glowing play around with the pins and see how the breadboard works. Note that in the diagram one side of the LED is flat (If you can&apos;t see, it is on the bottom side). This side is the negative side, so connect it to the ground side of the circuit. Your LEDs are likely to have flat parts, and along with this LEDs have one long leg and one short leg. The long one is positive, and the short one is negative. So go ahead, set it up! Just don&apos;t directly connect 5 volts to ground, as that can become a bit of a situation...</p>

		<p>Once you understand how a breadboard works, let&apos;s move on to getting your Arduino doing something!</p>
		<a href="index.php?page=tutorial&tutorial=setup" class="block-link">Finally!</a>
	</article>
</div>