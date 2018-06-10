<div id="content">
	<article>
		<header>
			<h1>Arduino Reference</h1>
		</header>
		<p>This page is dedicated to all the Arduino functions and concepts that are used in this tutorial. Use it as a quick reference when working on your projects.</p>
	</article>
	<article>
		<h2>Functions</h2>
		<h3>Pinmode</h3>
		<div class="code">
			<span class="func">pinMode</span>(<span class="decl">int</span> pin, <span class="decl">INPUT/OUTPUT</span>);
		</div>
		<p>The <span class="func code">pinMode</span>() function is used to tell the Arduino whether a pin is an <span class="decl code">INPUT</span> or an <span class="decl code">OUTPUT</span>. If a pin is an <span class="decl code">OUTPUT</span> then the user can write code that manipulates that pin to <span class="decl code">HIGH</span> or <span class="decl code">LOW</span>. It is important to set this for every pin that you intend to use - otherwise issues will arise and things will not act as expected.</p>
		<h3>Digitalwrite</h3>
		<div class="code">
			<span class="func">digitalWrite</span>(<span class="decl">int</span> pin, <span class="decl">HIGH/LOW</span>);
		</div>
		<p>The <span class="func code">digitalWrite</span>() function is used to make the controller set a pin to <span class="decl code">HIGH</span> (5 volts) or <span class="decl code">LOW</span> (0 volts).</p>
		<h3>Digitalread</h3>
		<div class="code">
			<span class="func">digitalRead</span>(<span class="decl">int</span> pin);
		</div>
		<p>The <span class="func code">digitalRead</span>() function returns the state of <span class="code">pin</span>. This is a boolean.</p>
		<h3>Delay</h3>
		<div class="code">
			<span class="func">delay</span>(<span class="decl">int</span> time);
		</div>
		<p>The <span class="func code">delay</span>() function will freeze the processor for the number of milliseconds specified by <span class="code">time</span>.</p>
	</article>
	<article>
		<h2>For Loops</h2>
		<div class="code">
			<div><span class='decl_func'>for</span>(<span class='decl'>int</span> i = 0; i &lt; x; i++){</div><div>  <span class='comment'>// Do something</span></div><div>}</div>
		</div>
		<p>For loops are used frequently in programming. They are designed to loop over a segment of code a specified number of times. When declaring a for loop, <span class="code">i</span> is an integer that the loop uses as a reference. The first term in the brackets is setting this to it's initial state, the second term <span class="code">i &lt; x</span> is the statement that defines when the loop should stop. (In this case it should continue to run while <span class="code">i</span> is less than whatever number you put as x. The final term <span class="code">i++</span> defines how much <span class="code">i</span> should be incremented by each loop.</p>
	</article>
	<article>
		<header>
			<h2>Sketch Structure</h2>
		</header>
		<p>Arduino programs are called &quot;Sketches&quot;. They have two major functions inside them:</p>

		<div class="code">
			<div><span class='decl'>void</span> <span class='decl_func'>setup</span>(){</div><div>  <span class='comment'>// Some setup code</span></div><div>}</div><div></div><div><span class='decl'>void</span> <span class='decl_func'>loop</span>(){</div><div>  <span class='comment'>// Some code to run forever</span></div><div>}</div>
		</div>

		<p>Any code inside the <span class="code"><span class="func">setup</span>()</span> function will run once when the Arduino starts up. The controller will then move on to the <span class="code"><span class="func">loop</span>()</span>, and run code in this function forever (Until the Arduino loses power and turns off).</p>
	</article>
	<article>
		<header>
			<h1>Operators</h1>
		</header>
		<p>Below are tables showing different operators that exist in the C++ language.</p>
		<h3>Comparison Operators</h3>
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
		<h3>Logical Operations</h3>
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
	</article>
</div>