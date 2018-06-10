<div id="content">
	<article>
		<header>
			<h1>Functions</h1>
		</header>
		<p>Functions are an integral idea in the world of programming. They are what allow us to break our code up into little pieces, so that we can have similar blocks of code in only one place. In C++, the language that you will be using with Arduino, function definitions are complex, however you will not need to define your own functions for the duration of this tutorial (Though if you wish to learn how, go ahead! They are pretty awesome things). All that you need to know is that a function is a bit of code that can be used over and over again by doing what we call &quot;calling&quot; the function. For example, say that there was a function called &quot;foo&quot; that we wished to use. To call this function we would have a line of code like this:</p>

		<div class="code">
			<div><span class="func">foo</span>();</div>
		</div>

		<p>This is how we call a function in C++. You write the function name, then follow it with parentheses (Brackets). The reason for these parentheses? Well, one reason is variables. Typing foo; would look exactly like a call to a variable. The brackets also contain what we call parameters. These are in effect, variables that the function needs to be told about to operate. So say our function, foo, takes parameters x and y. The documentation of the function would say:</p>

		<div class="code">
			<div><span class="func">foo</span>(x, y)</div>
		</div>

		<p>This means that foo takes two variables, or parameters. To call this function, you need to give it these variables in order. So if we wanted x to be 10, and y to be 50 the function would look like this:</p>

		<div class="code">
			<div><span class="func">foo</span>(<span class="number">10</span>, <span class="number">50</span>);</div>
		</div>

		<p>The point of functions is to do things, so often they will also return something. When you are setting a variable to the result of a calculation, you would write something like this:</p>

		<div class="code">
			<div>x <span class="oper">=</span> <span class="number">42</span> <span class="oper">+</span> <span class="number">42</span>;</div>
		</div>

		<p>This is basically what a function does. If it returns something, then setting a variable to the function will set the variable to the outcome. Say that a function multiply takes x and multiplies it by y, then returns the result. If we wanted to set a variable called result to that number, then we would write this:</p>

		<div class="code">
			<div><span class="decl">int</span> result <span class="oper">=</span> <span class="func">multiply</span>(<span class="number">10</span>, <span class="number">50</span>);</div>
		</div>

		<p>Result would then be equal to 500.</p>

		<p>Below is an example of our function multiply being called. Enter a number into each of the parameters to see what happens.</p>

		<div class="tutorial-demo" id="multiply-demo">
			<form id="multiply-demo-form">
				<div><span class="func">print multiply</span>(<input type="number" name="num1" max="999" id="num1">, <input type="number" name="num2" max="999" id="num2">);</div>
				<div><input type="submit" name="submit" value="Run"></div>
			</form>
			<div id="output">
				<div id="title">Output</div>
				<div id="result">Enter some data!</div>
			</div>
		</div>

		<p>If you are interested in seeing what the definition of multiply would look like, click the spoiler below. But I won&apos;t spend time explaining it.</p>

		<div>
			<div class="spoiler" id="1">Show Me!</div>
			<div class="spoiler-content" id="spoiler1">
				<p>Below I have shown how you define a function. Note that I declare it like a variable. When declaring a function, declare it with the data type that you intend on it returning.</p>
				<div class="code">
					<div><span class='decl'>int</span> <span class='decl_func'>foo</span>(<span class='decl'>int</span> x, <span class='decl'>int</span> y){</div><div>  <span class='decl_func'>return</span> x*y;</div><div>}</div>
				</div>
			</div>
		</div>

		<p>Did that all make sense? Hopefully it did. All you need to know is how to call a function, and then set a variable to the result. Let’s move on to some cool stuff!</p>
		<a href="index.php?page=tutorial&tutorial=blinkled" class="block-link">Sweet</a>
	</article>
</div>