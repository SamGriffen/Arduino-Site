<div id="content">
	<article>
		<header>
			<h1>Ohm's Law Calculator</h1>
		</header>
		<p>You may have heard of Ohm's law. In essence, what it is is a physics principle that describes a relationship between Voltage, Current, and Resistance. It is one of the base equations in electronics, and you may find a situation where you need to calculate one of these variables. The equation is:</p>

		<p id="ohms-law">V = I R</p>
		<ul>
			<li>V is Voltage in Volts [V]</li>
			<li>I is Current in Amps [A]</li>
			<li>R is Resistance in Ohms [&Omega;]</li>
		</ul>
		<p>This can be rearranged to find any of the three values, as long as you know the other two. Below is a calculator that will do this for you. Just click the value that you are solving for and punch in the ones you know!</p>
		<div id="ohms_law_calc">
			<div id="select-val">
				<button class="value_select active" value="0">V</button>
				<button class="value_select" value="1">I</button>
				<button class="value_select" value="2">R</button>
			</div>
			<form id="vir_form">
				<div id="field_1">
					<input type="number" id="text_field_1" class="ohms_num" name="text_field_1" placeholder="Current">
				</div>
				<span id="sign">&times;</span>
				<div id="field_2">
					<input type="number" id="text_field_2" class="ohms_num" name="text_field_2" placeholder="Resistance">
				</div>
				<input type="submit" name="submit" value="Solve!">
			</form>
			<span id="result">
				
			</span>
		</div>
	</article>
</div>