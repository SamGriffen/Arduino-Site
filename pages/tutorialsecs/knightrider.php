<div id="content">
	<article>
		<header>
			<h1>Knight Rider Tracer</h1>
		</header>
		<p>First of all, you will need to set your circuit up. What you want to do is have about 8 LEDs all in a row, each connected to a separate pin on the Arduino. For simplicity&apos;s sake, let&apos;s say connect the first LED to pin 0, the second to pin 1, and so on until the eighth one goes into pin 7. (This will make the code a lot cleaner). So go ahead, set this up. If you get stuck, again click below to see a circuit that will do the trick!</p>
 
		<div>
			<div class="spoiler" id="4">Click for a hint</div>
			<div class="spoiler-content" id="spoiler4">
				<p>If you do a similar thing to the blink sketch, and ensure that you plug the LEDs into pins 0-7. In this circuit, you can see that each LED is grounded via a resistor, and the positive side of each LED is connected to a pin on the Arduino.</p>
				<div class='tutorial-demo'>
					<img src="img/tutorial-images/knightrider/knight_rider.png" alt="An Arduino Uno wired up to control a knight rider style tracer.">
				</div>
			</div>
		</div>

		<p>Once it is wired up, we need to program the Arduino to make these LEDs do something! Open up a new project from the file menu in the Arduino IDE and you should see the basic structure of an Arduino project set up already. So what do we want to do? We want to make the LEDs blink one after another, like the animation below:</p>

		<div class="tutorial-demo" id="knightrider-animation">
			<div id="knightrider-strip">
				<div class="LED on"></div>
				<div class="LED"></div>
				<div class="LED"></div>
				<div class="LED"></div>
				<div class="LED"></div>
				<div class="LED"></div>
				<div class="LED"></div>
				<div class="LED"></div>
			</div>
			<div id="play-pause" class="play">
			</div>
		</div>

		<p>So how would we achieve this? Well, we need to set up pins 0 to 7 as output pins in the setup, then we need to loop through each one turning it on and then off, then do the same thing in the other direction. We could do a similar thing to the blink sketch, and manipulate them each one after the other. However, this code would get extremely long, and honestly extremely boring. So I am going to teach you what a for loop is. What a for loop does is it will essentially create a variable, and then loop over a block of code, adding something to that variable each loop, until the variable is has reached a certain point, then the loop ends. Below is a basic for loop in C++, that I will go on to explain.</p>

		<div class="code">
			<div><span class='decl_func'>for</span>(<span class='decl'>int</span> i = 0; i &lt; 8; i++){</div><div>  <span class='comment'>// Do something</span></div><div>}</div>
		</div>

		<p>Inside the brackets after the for:</p>
		
		<div class="code">
			<div><span class='decl'>int</span> i = 0; i &lt; 8; i++</div>
		</div>&lt;
		<p>There is lots of stuff that looks confusing. Don&apos;t worry, it isn’t that confusing. It can be broken down into 3 parts, you will notice two semicolons inside. These are breaking it into 3 parts. The first part:</p>

		<div class="code">
			<div><span class='decl'>int</span> i = 0;</div>
		</div>

		<p>You should recognise this as a variable declaration, and that is exactly what this is. You start a for loop by declaring an integer for the for loop to use as the number to increment (Incrementing just means to add something). In this for loop, we are setting this variable to 0.</p>

		<p>The next part is:</p>

		<div class="code">
			i &lt; 8;
		</div>

		<p>This second section of the for loop is the part that must evaluate to true for the loop to run. For example, when i is 0, then i is less than 8, so this condition is true. However when i equals 8 it is no longer less than 8, therefore this condition is not true, so the for loop will exit and move on to the next bit of code.
		The final part is:</p>

		<div class="code">
			i++
		</div>

		<p>This is saying that every time you loop over the code in this for loop, add one to the variable i. This is basically saying what to do to i at the end of each loop, you could make this something like i += 5 (Note that ++ is a shortcut for i = i + 1, and i += 5 is a shortcut for i = i + 5) . You can even subtract from i in this bit, by making it i—(Which is a shortcut for i = i - 1)
		So if we look at all this together, the code in the brackets says something like this:</p>

		<p>&quot;Make a variable called i, while this variable is less than 8 loop over the following block of code, and each time you loop over it, add one to i&quot;</p>

		<p>This means since i starts at 0, and ends at 7, and the loop runs 7 times. The first time, i is equal to 0, on the second loop i is equal to 1, third time it is 2, and so on. Try the demo below to see what I mean. (Edit the numbers in the boxes, and then click run and the for loop will run how you have defined it and on each loop it will print i into the box below. Click the middle operator to change it an the increment!)</p>

		<div class="tutorial-demo" id="for-demo">
			<form id="for-demo-form">
				<div><span class='func'>for</span>(<span class='decl'>int</span> i = <input type="number" name="fornum1" max="999" id="fornum1">; i <button class="operator">&lt;</button> <input type="number" name="fornum2" max="999" id="fornum2">; i <span id="increment">+=</span> <input type="number" name="fornum3" max="999" id="fornum3">){</div><div>  <span class='func'>print</span>(i);</div><div>}</div>
				<div class="demo-submit"><input type="submit" name="submit" value="Run"></div>
			</form>
			<div id="output">
				<div id="title">Output</div>
				<div id="for-result">Enter some data!</div>
			</div>
		</div>

		<p>So now that you know what for loops are, can you see why they are applicable in this situation? What if we were to use the variable set in the for loop (in the example this was i) as a pin number in the function digitalWrite()? Hmmm. Interesting thought (see why we put the LEDs in pins 0 to 7 now?). First, we need to write our setup loop. So see if you can write it, then click the spoiler to see what I have written.</p>

		<div class="code">
			<div><span class='decl'>void</span> <span class='decl_func'>setup</span>(){</div><div>  <span class='func'>pinMode</span>(0, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(1, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(2, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(3, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(4, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(5, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(6, <span class='decl'>OUTPUT</span>);</div><div>  <span class='func'>pinMode</span>(7, <span class='decl'>OUTPUT</span>);</div><div>}</div>
		</div>

		<p>This will work, as it sets each pin as an output. But if you really understood the for loop that we just learnt. There is a faster way:</p>

		<div class="code">
			<div><span class='decl'>void</span> <span class='decl_func'>setup</span>(){</div><div>  <span class='decl_func'>for</span>(<span class='decl'>int</span> i = 0; i &lt; 8; i++)</div><div>    <span class='func'>pinMode</span>(i, <span class='decl'>OUTPUT</span>);</div><div>  }</div><div>}</div>
		</div>

		<p>See how useful for loops are? Now that we have a setup loop we need to move on to the next part. What we need is a bit of code to iterate through LEDs from 0 to 7, then we need code to iterate through LEDs from 7 to 0, turning each individual on for a bit, and then off again before moving on to the next one (Iteration just means looping over things). So how best to do this? Well, let’s see if you can figure out how! I know this feels like the deep end. But just remember for loops, digitalWrite() and the delay() function, and it is possible! (Hint: In a for loop i could start at something like 7, and the last part could even be something like i--, with the middle bit saying while i is greater than something)</p>

		<p>Once you have your code, upload it to the board and see if it works! If it doesn’t, have a look in the spoiler to see how I did it.</p>
		
		<div>
			<div class="spoiler" id="5">Show Me!</div>
			<div class="spoiler-content" id="spoiler5">
				<div class="code">
					<div><span class='decl'>void</span> <span class='decl_func'>setup</span>(){</div><div><span class="comment indent">// Initiate pins 0-7 as outputs</span></div><div><span class='indent'><span class='decl_func'>for</span>(<span class='decl'>int</span> i = 0; i &lt; 8; i++)</span></div><div><span class='indent'><span class='indent'><span class='func'>pinMode</span>(i, <span class='decl'>OUTPUT</span>);</span></span></div><div><span class='indent'>}</span></div><div>}</div><div><span class='decl'>void</span> <span class="decl_func">loop</span>(){</div><div><span class="comment indent">// Iterate through each LED turning it on, and then off</span></div><div><span class='indent'><span class="decl">for</span>(<span class="decl">int</span> i = 0; i &lt; 8; i++)</span></div><div><span class='indent'><span class='indent'><span class='func'>digitalWrite</span>(i, <span class='decl'>HIGH</span>);</span></span></div><div><span class='indent'><span class='indent'><span class='func'>delay</span>(100);</span></span></div><div><span class='indent'><span class='indent'><span class='func'>digitalWrite</span>(i, <span class='decl'>LOW</span>);</span></span></div><div><span class='indent'>}</span></div><div><span class="comment indent">// Iterate through each LED backwards turning it on, and then off</span></div><div><span class='indent'><span class="decl">for</span>(<span class="decl">int</span> i = 7; i &gt; -1; i--)</span></div><div><span class='indent'><span class='indent'><span class='func'>digitalWrite</span>(i, <span class='decl'>HIGH</span>);</span></span></div><div><span class='indent'><span class='indent'><span class='func'>delay</span>(100);</span></span></div><div><span class='indent'><span class='indent'><span class='func'>digitalWrite</span>(i, <span class='decl'>LOW</span>);</span></span></div><div><span class='indent'>}</span></div><div>}</div>
				</div>
			</div>
		</div>

		<p>Awesome! Now you know how to control outputs with Arduino, and you have your own LED tracer. Next up, how do we read input?</p>

		<a href="index.php?page=tutorial&tutorial=input" class="block-link">Move On</a>
	</article>
</div>