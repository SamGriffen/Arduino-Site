<div id="content">
	<article>
		<header>
			<h1>Circuit Basics</h1>
		</header>
		<p>Maybe you know a bit about electronics. To use Arduino it is important to have a basic understanding of how very simple circuits work. I imagine that this is something that you have covered at school, but I will brush over the basics so that we are on the same page. A circuit is a path for things to move through, these things are tiny little things that have energy. This energy is gained from the battery. This is what we call electricity. Current flows from the positive end of a battery, through the circuit, back to the negative end of a battery, shown in the diagram below:</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/circuits/basic.png" alt="Basic outline of a circuit with a battery connected to a standard light bulb.">
		</div>

		<p>The arrows represent the direction of the current. This is the simplest circuit you could possibly have. In any circuit it needs to create a full loop from the positive side, to the negative side. This doesn&apos;t always have to be a battery, on the Arduino board there are two power sources. If you look on your board you will see a pin labelled &quot;5V&quot; and a pin labelled &quot;3.3V&quot;, you will also see some pins labelled &quot;GND&quot;. These are the equivalent of your battery, with &quot;5V&quot; being the main positive power source we will be using, and &quot;GND&quot; (standing for Ground) being the negative points we will use.</p>

		<p>Why are the pins labelled &quot;5V&quot; and &quot;3.3V&quot;, the V stands for Voltage. This is a term you may have heard; in fact, it is a term you have probably heard somewhere. On the Arduino system, it is not as much of a worry when you are starting out, as the board has 5 volts and 3.3 volts available. Voltage is related to the amount of energy that the things flowing around the circuit have. If you want to learn more about the physics behind this, then there are plenty of websites describing it, and NCEA Level 2 physics delves right into it. But all that you need to know is that the higher the voltage, the more energy the circuit will have.</p>

		<p>The final point I want to bring up is resistance. You may know that if you directly connect the positive end of a battery to the negative end, your wire may start to heat up and even melt. This is called a short circuit. If there is nothing resisting the current, then the current will get faster and faster. This is not good, as it puts too much strain on most components. This can lead to parts being destroyed.</p> 
		
		<p>This is where resistance comes in. Resistance is when something limits the current in a circuit. In the diagram with the bulb, there is not a resistor, as bulbs introduce their own resistance. However, if we were to draw it with an LED, which has very little resistance, we would need a resistor as otherwise the LED would blow. Below is a diagram of what this circuit would look like with a resistor and an LED in it:</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/circuits/basic_with_led.png" alt="Basic outline of a circuit with a battery connected to a standard LED.">
		</div>

		<p>The resistor is a 470 Ohm resistor. Ohms are the unit with which we measure resistance. In this circuit the LED will glow, and will not blow as the resistor is limiting the current. There is a mathematical relationship between Voltage, Current, and Resistance. This is called Ohms law, and if you would like to learn more and use a calculator to calculate these numbers, please visit the page on Ohms Law <a href="index.php?page=tools">here</a>.
		Now that you have a basic outline of what circuits are, let&apos;s take a quick look at what breadboards are, and how you use them.</p>

		<a href="index.php?page=tutorial&tutorial=breadboards" class="block-link">Next!</a>
	</article>
</div>