<div id="content">
	<article>
		<header>
			<h1>If/Else Statements</h1>
		</header>
		<p>These are an essential part of programming, and likely you have come across them before. Since I am assuming you know a little about at least Python, I will outline how to use then in C++, and a quick bit about how they work. First, this is what they look like in C++:</p>

		<div class="code">
			<div><span class='decl_func'>if </span>( condition ){</div><div>  <span class='comment'>// Some code</span></div><div>}</div><div><span class='decl_func'>else</span> {</div><div>  <span class='comment'>// Some other code</span></div><div>}</div>
		</div>

		<p>Essentially, they are used for operating certain code if something is true. See why booleans are important now? The condition must be true or false. If it is true, then the code inside the curly brackets after the if will execute. If the condition is false, then the code inside the curly brackets after the else will execute. This means the use of comparison operators. These are things we use to compare two bits of data, and end up with a boolean we can use in our if statements. Below is a useful table of these operators: (Note: In each case x and y can be any kind of data, numbers, strings, variables, etc. Also note that evaluation is what we call the result of a comparison operation)</p>

		<div class="tutorial-demo operators">
			<table>
				<tr>
					<th>Operator</th>
					<th>Effect</th>
				</tr>
				<tr>
					<td>x == y</td>
					<td>Checks if x is equal to y. Evaluates to true if x is equal to y.</td>
				</tr>
				<tr>
					<td>x != y</td>
					<td>Opposite to the last. Evaluates to true if x is not equal to y, otherwise evaluates false.</td>
				</tr>
				<tr>
					<td>x &gt; y</td>
					<td>Checks if x is greater than y. Evaluates to true if it is, otherwise false.</td>
				</tr>
				<tr>
					<td>x &lt; y</td>
					<td>Checks if x is less than y. Evaluates to true if it is, otherwise false.</td>
				</tr>
				<tr>
					<td>x &gt;= y</td>
					<td>Checks if x is greater than or equal to y. Evaluates to true if it is, otherwise false.</td>
				</tr>
				<tr>
					<td>x &lt;= y</td>
					<td>Checks if x is less than or equal to y. Evaluates to true if it is, otherwise false.</td>
				</tr>
			</table>
		</div>

		<p>Along with comparison, we have logical operators. These are very simple, and here is another handy table! In this one, x and y are booleans (Which means they can also be comparison operations from above)</p>

		<div class="tutorial-demo operators">
			<table>
				<tr>
					<th>Operator</th>
					<th>Effect</th>
				</tr>
				<tr>
					<td>!x</td>
					<td>The &quot;NOT&quot; inverts x. So if x evaluated to false, then this operator would make it true/</td>
				</tr>
				<tr>
					<td>x && y</td>
					<td>The &quot;AND&quot; will evaluate to true if both x and y are true.</td>
				</tr>
				<tr>
					<td>x || y</td>
					<td>The &quot;OR&quot; operator will evaluate to true if either x or y are true.</td>
				</tr>
			</table>
		</div>

		<p>We can also use these operators in the condition of our if/else statement! An if statement could look like the one below:</p>

		<div class="code">
			<div><span class='decl'>int</span> x = 1;</div><div><span class='decl_func'>if</span> (x == 1 || x == 2){</div><div>  <span class='func'>print</span>(<span class='string'>"Evaluated to true!"</span>);</div><div>}</div><div>else {</div><div>  <span class='func'>print</span>(<span class='string'>"Evaluated false"</span>);</div><div>}</div>
		</div>

		<p>This code would output <span class="string code">"Evaluated to true!"</span>, as x has been set to one, thus <span class="code">x == 1</span> is true. If x was equal to 2, it would still do this, as <span class="code">x == 1</span> would evaluate to false, so it would go on to evaluate <span class="code">x == 2</span>. This would be true, so <span class="code">x == 1 || x == 2</span> would be satisfied, as one of the conditionals was true. It would therefore also output <span class="string code">"Evaluated to true!"</span>. If x was anything except 1 or 2, it would output <span class="string code">"Evaluated to false"</span>.</p>

		<p>Let&apos;s apply this to Arduino. If <span class="func code">digitalRead</span> returns a boolean, then we can use it in an if statement right? Correct! Remembering that you can put a function directly as the conditional in an if statment, see if you can write some code to turn our LED on when a switch is turned on, and turn it off if the switch is off. If you need a little extra, read the spoiler below!</p>

		<div>
			<div class="spoiler" id="7">Pls Help</div>
			<div class="spoiler-content" id="spoiler7">
				<p>The code below reads pin 12 in the if statement, and if pin 12 is high (i.e. the button is pressed), it turns the LED on. If it sees that pin 12 is low, (i.e. the button is not pressed), it turns the LED off. Note that at the top I have created global variables containing the pin numbers for each thing. This just means that these varaibles can be accessed anywhere, and if I use thhose instead of the numbers directly, I can easily change the pins later.</p>

				<div class="code">
					<div><span class='comment'>// Little note: You can declare variables anywhere, and store pin numbers</span></div><div><span class='decl'>int</span> button = 12;</div><div><span class='decl'>int</span> LED = 13;</div><div></div><div><span class='decl'>void</span> <span class='decl_func'>setup</span>() {</div><div>    <span class='comment'>// Set pinmodes. Remember this is important</span></div><div>    <span class='func'>pinMode</span>(button, <span class='decl'>INPUT</span>);</div><div>    <span class='func'>pinMode</span>(LED, <span class='decl'>OUTPUT</span>);</div><div>}</div><div></div><div><span class='decl'>void</span> <span class='decl_func'>loop</span>() {</div><div>  <span class='comment'>// Is the button pressed? Remember this loop runs over and over infinitely</span></div><div>  <span class='decl_func'>if</span>(<span class='func'>digitalRead</span>(button)){</div><div>    <span class='comment'>// Remember that HIGH and LOW are also true and false, so we don't need a comparison here!</span></div><div>    <span class='func'>digitalWrite</span>(LED, <span class='decl'>HIGH</span>);</div><div>  }</div><div>  <span class='decl_func'>else</span> {</div><div>    <span class='func'>digitalWrite</span>(LED, <span class='decl'>LOW</span>);</div><div>  }</div><div>}  </div>
				</div>
			</div>

			<p>And there you have it, if/else statements!</p>

			<div class="tutorial-demo" id="thanks">
				<img src="img/drawings/thanks_chip.png" alt="Thanks for sticking with it to the end!">
			</div>

			<p>You have reached the end, thank you for sticking with it. You know Arduino now. So go forth, build your own projects, find the answers to your questions! Google will always be your best friend</p>
			<a href="http://www.google.com" class="block-link">Move On</a>
		</div>
	</article>
</div>