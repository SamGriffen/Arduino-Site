<div id="content">
	<article>
		<header>
			<h1>LEDs!</h1>
		</header>
		<p>As stated before, at the heart of things an Arduino can do three things. It can read an input, it can process that information, and it can manipulate an output. The place to start is with manipulating outputs, and that is what the blink sketch is doing. Before we jump into making more LEDs blink in a more interesting way, we need to look at what an Arduino program actually looks like. Let&apos;s take the one that we uploaded before for example:</p>
		
		<div class="code">
			<!-- Wondering why this segment of code is horrific? I created it with my JS tool, and just copy pasted the output -->
			<div><span class='comment'>// the setup function runs once when you press reset or power the board</span></div><div><span class='decl'>void</span> <span class='decl_func'>setup</span>() {</div><div>  <span class="comment">// initialize digital pin 13 as an output.</span></div><div>  <span class='func'>pinMode</span>(13, <span class='decl'>OUTPUT</span>);</div><div>}</div><div>  <span class='comment'>// the loop function runs over and over again forever</span></div><div>  <span class='decl'>void</span> <span class='decl_func'>loop</span>() {</div><div>  <span class='func'>digitalWrite</span>(13, <span class='decl'>HIGH</span>); <span class='comment'>// turn the LED on (HIGH is the voltage level)</span></div><div>  <span class='func'>delay</span>(1000); <span class='comment'>// wait for a second</span></div><div>  <span class='func'>digitalWrite</span>(13, <span class='decl'>LOW</span>); <span class='comment'>// turn the LED off by making the voltage LOW</span></div><div>  <span class='func'>delay</span>(1000); <span class='comment'>// wait for a second</span></div><div>}</div>
		</div>

		<p>Firstly, you will see a block of code in curly brackets that are prefixed by something saying void setup(). If you know other languages, you may recognise this as a function definition. Before the tutorial continues, I think it is important that you understand what functions are, and how to use them.</p>

		<p>This setup function will run once Arduino is first started up. After this, you will see something that looks very similar, but this one says void loop(). This is the main loop of the program. What does this mean? It means that after the setup code has been run, the Arduino will infinitely run the code within these curly brackets, until the Arduino is reset.</p>

		<p>Inside the setup you see a line saying</p>

		<div class="code">
			<div><span class="func">pinMode</span>(13, <span class="decl">OUTPUT</span>);</div>
		</div>
		
		<p>This function is giving the Arduino some information on a specific pin. I suppose it is about time that I explained what pins are. Pins are basically plugs that you can tell to be on or off, or you can read if they are or or off. What the pinMode function does is it tells the Arduino whether the pin specified is to be used as an input or an output, and trust me, from experince omitting this isn't worth it</p>

		<p>This is the only line in the setup block, let&apos;s move on to what the loop() block does. The first line is using the digitalWrite() function. This is what we use to turn a pin on or off. It takes two parameters. The number of the pin you wish to manipulate, and the state you want to put it in. So this first line:</p>
		
		<div class="code">
			<div><span class='func'>digitalWrite</span>(13, <span class='decl'>HIGH</span>);</div>
		</div>

		<p>Is saying set pin 13 to state HIGH. What does this mean? You will have heard of binary, the idea of representing data with 1&apos;s and 0&apos;s. The same applies here. HIGH and LOW are references to 1 and 0, and in fact 1 and 0 can be used. In turn, these are what are used to tell the Arduino what you want a pin to do. Setting a pin HIGH is, as you might expect, setting a pin to 5 volts. What would you think setting a pin LOW does? Yeah. It sets the pin to 0 volts. If you don&apos;t quite get this, then check out the demonstration below. (Clicking the button toggles the LED from LOW to HIGH)</p>

		<div class="tutorial-demo" id="led-demo">
			<div id="button-casing">
				<button></button>
			</div>
			<div class="LED">
			</div>
		</div>

		<p>The final function that you will see in the code is the delay() function. This function totally freezes the microcontroller for the number of milliseconds that you pass the microcontroller. The demo below illustrates this. The LED below is attached to an Arduino running blink, and the number in the text box is how long each delay function runs for. Edit this number and see what it does! (Note: You must keep the number in the box greater than 10ms, as otherwise the animation may not work for you)</p>

		<div class="tutorial-demo" id="delay-demo">
			<form id="delay-input">
				<div>
					<input type="number" name="millis" id="delay-millis" placeholder="Milliseconds">
				</div>
				<div>
					<button>Go!</button>
				</div>
			</form>
			<div class="LED">
			</div>
			<div class="error"></div>
		</div>

		<p>An important thing to note is that every line is finished with a semicolon ( ; ). It is important to ensure that every line ends with one of these, otherwise the code simply will not work.</p>
	</article>
	<article>
		<header>
			<h1>A Real Application</h1>
		</header>
		<p>So far we haven&apos;t actually plugged anything into the board. All we have been doing is manipulating the LED that is built into the board on pin 13. The code is setting pin 13 to 5v, so couldn’t we wire up an LED on a breadboard to blink in time with the one on the board? See if you can get this to work, based off what you know and the previous circuit diagram. Once you have it working, move on. If you get stuck, then reveal the spoiler to see a circuit that will do the trick!</p>

		<div>
			<div class="spoiler" id="2">Show Me!</div>
			<div class="spoiler-content" id="spoiler2">
				<p>Taking the circuit that you saw earlier, and plugging the red wire into pin 13 will make use of the fact that the pin is being pulled high, then low by the microcontroller!</p>
				<div class="tutorial-demo">
					<img src="img/tutorial-images/blinkled/blink_circuit.png" alt="Depiction of an Arduino Uno set up with an LED and resistor in a circuit that could be used for the blink sketch.">
				</div>
			</div>
		</div>

		<p>Okay, so once you have one LED blinking, see if you can plug the LED into different pins (just make sure to change all occurrences of 13 in the code to the number of the pin you plug it into in the code!) and see if it still works, just to prove I&apos;m not having you on. If you want another challenge try to get two LEDs blinking at different times like the animation below:</p>

		<div class="tutorial-demo" id="two-blink">
			<div class="LED blink on">
			</div>
			<div class="LED blink">
			</div>
		</div>


		<div>
			<div class="spoiler" id="3">Click for a hint</div>
			<div class="spoiler-content" id="spoiler3">
				<p>Here is a little code:</p>
				<div class="code">
					<!-- Again, generated via generator. I suppose if you REALLY want to read it you could use a de-minimiser application. But honestly, it is just the same classes as before -->
					<div><span class='decl'>void</span> <span class='decl_func'>loop</span>() {</div><div>  <span class='func'>pinMode</span>(a, <span class='decl'>HIGH</span>);</div><div>  <span class='func'>pinMode</span>(b, <span class='decl'>LOW</span>);</div><div>  <span class='func'>delay</span>(1000);</div><div>  <span class='func'>pinMode</span>(a, <span class='decl'>LOW</span>);</div><div>  <span class='func'>pinMode</span>(b, <span class='decl'>HIGH</span>);</div><div>  <span class='func'>delay</span>(1000);</div><div>}</div>
				</div>
			</div>
		</div>

		<p>Get it working? Well, once you have I think you are ready to move on to that knight rider project I talked about earlier.</p>
		<a href="index.php?page=tutorial&tutorial=knightrider" class="block-link">Move On</a>
	</article>
</div>