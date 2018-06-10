<div id="content">
	<article>
		<header>
			<h1>Set it Up!</h1>
		</header>
		<p>Before you are able to use your Arduino, you are going to need some things first. The first of these is the Arduino IDE. What is an IDE you may ask? IDE stands for Integrated Development Environment. Basically the Arduino IDE is the software we will use to write our code, and load it onto the chip. If you already have the environment and board drivers installed, then you can skip this part.
		To get the environment, you can download it from the Arduino website <a href="https://www.arduino.cc/en/Main/Software" target="_blank">here</a>.</p>

		<p>Download the installer for your operating system, and run it. If it asks to install drivers, go ahead and do so. Once the install process is finished, and everything is set up you should open up the application, and see this:</p>

		<div class="tutorial-demo">
			<img src="img/tutorial-images/setup/ide.png" alt="Screenshot of the Arduino IDE, with a blank sketch loaded.">
		</div>

		<p>Once you see this, plug your Arduino into your computer. If you have a genuine Arduino Uno board (which is what this tutorial assumes, however the only step that having a non-official one will affect is this one), then your computer should simply recognise it as an Arduino as the drivers will be installed, if it is not genuine then you will need to find the drivers for your board. Some of these can be difficult, a good place to start is to find out what the USB to UART converter chip is on the board, and find a driver for that board. This process can be hard, and with so many different Arduino clones, it is impossible for this tutorial to go over.</p>

		<p>Once you have the drivers working for your Arduino, you should see it in device manager as a COM port. It should say something like &quot;Arduino Uno COMXX&quot; (with the XX being a number).
		Now that the computer sees the Arduino, and you have the IDE installed, you can move onto installing the basic test program.</p>
		<a href="index.php?page=tutorial&tutorial=blink" class="block-link">Next</a>
	</article>
</div>