<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<div class="content">


			<h1> $AllBlacks.Name is a $AllBlacks.Sport $AllBlacks.Region team!</h1>
			<h2 style="color:#$AllBlacks.Colour"> This is their color </h2>
			<h2> The mascot name is $AllBlacks.MascotName </h2>
			<h2> They play on $AllBlacks.Season </h2>
			<h3> Players:</h3>

			<ul>
				<% loop $AllBlacks.Sportmen %>
				<li>$FirstName $LastName</li>
				<% end_loop %>
			</ul>

			<h1> $JeffWilson.FirsName $JeffWilson.LastName plays in the following teams:</h1>
			<ul>
				<% loop $JeffWilson.Teams %>
				<li>$Name ($Sport $Region) plays on $Season</li>
				<% end_loop %>
			</ul>

		
		
		</div>
	</article>
</div>