<div id="content">
	<article>
		<header>
			<h1>Variables</h1>
		</header>
		<p>Variables are in essence a container for us to put information in. In C++, variables are slightly more complex than other languages. For starting with Arduino, you will only need to know the basics, and as you learn you will surely pick the rest up.
		Variables are a way of storing information. In other languages, like Python you can just write something like:</p>

		<div class="code">
			<div>x = <span class="string">&quot;Hello World&quot;</span></div>
		</div>

		<p>or</p>

		<div class="code">
			<div>x <span class="oper">=</span> <span class="number">10</span></div>
		</div>

		<p>These are two different types of information. The first is a string, and the second is an integer. This is the main complexity with C++. Languages like Python automatically pick up on what type of data you are storing in the variable, and if you have used python you probably know a bit about converting between data types. In the world of Arduino, you have to tell the program what sort of data you are trying to store in a variable. For instance, if you wanted to store a whole number, or as we call them in programming, and integer, you would write this:</p>

		<div class="code">
			<div><span class="decl">int</span> x = 10;</div>
		</div>

		<p>Likely, this is the only type of data that you will want to store when starting with Arduino. However, there are many other types of data. Such as strings, and Booleans. Strings are complex in C++, and since we won’t use them in this tutorial, I won&apos;t teach them. However you may wish to use Booleans. To declare a boolean variable you simply write this:</p>

		<div class="code">
			<div><span class="decl">bool</span> x = <span class="decl">true</span>;</div>
		</div>
		
		<p>A boolean is a variable that has two possible states: true or false. They are often used when evaluating if things have happened or not. We will learn about how this comes into Arduino later on.</p>

		<p>Now you know how to declare variables in C++, shall we move on to what functions are?</p>

		<a href="index.php?page=tutorial&tutorial=functions" class="block-link">Sweet</a>
	</article>
</div>