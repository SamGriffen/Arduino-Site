<div id="content">
	<article>
		<header>
			<h1>Blink</h1>
		</header>
		<p>Blink is a well-known sketch to everyone that has used Arduino, it is the sketch that is used to test that boards are working, and demonstrate very basic principles. It is universal that every Arduino has an LED on the board that is wires up to digital pin 13. This is primarily for testing purposes, however also status purposes. What we will be doing is uploading a sketch that makes this LED turn on for one second, then turn off for one second, then turn on for one second, and repeat. To do this, you first need to open the sketch. Click File, then examples, 01.Basics, then click on &quot;Blink&quot;. This should open up a new window, with the blink program in it, this window should look like the one below:</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/blink/blink.png" alt="Image of the Arduino IDE with the classic Blink sketch loaded.">
		</div>

		<p>To upload the sketch, first check that you are on the right COM port. To do this click Tools > Port > And select the COM port that you found earlier. In this menu, also hover over board and select ensure that &quot;Arduino/Genuino Uno&quot; is selected.</p>
		<p>Now that everything is set up, go ahead and click the upload button. This is the button in the top left that is an arrow pointing to the right. When you click this, the program will compile and then upload to the board. Once it says that it has finished uplaoding, you should see the LED on the board labelled &quot;L&quot; blinking slowly.</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/blink/blink.gif" alt="Animation of what an Arduino with blink loaded on to it looks like." id="gif">
		</div>

		<p>Once your Arduino responds like this, we can move on to explaining the aspects of C++ you need to know. Don't worry, it isn't scary!</p>
		<a href="index.php?page=tutorial&tutorial=variables" class="block-link">Next</a>
	</article>
</div>