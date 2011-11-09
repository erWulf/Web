<?php
$current = 'Risikoplan';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Risikoskala for gruppe 38:</h2>
<p>
	Vi har rangert risiko etter f�lgende skala:
</p>
<ul>
	<li>1: lite sannsynlig</li>
	<li>2: middels sannsynlig</li>
	<li>3: sannsynlig</li>
	
</ul>

<table class="risiko">
	<tr>
		<th>Scenario</th><th>Risiko</th>
	</tr>
	<tr>
		<td>Sykdom</td><td>3</td>
	</tr>
	<tr>
		<td>Manglende oppm�te</td><td>1</td>
	</tr>
	<tr>
		<td>Medlem som slutter</td><td>1</td>
	</tr>
	<tr>
		<td>Ikke holde avtaler</td><td>1</td>
	</tr>
	<tr>
		<td>Uenigheter i gruppen</td><td>1</td>
	</tr>
	<tr>
		<td>Tap av data:</td><td>2</td>
	</tr>
</table>
<h3>Sykdom</h3>
<p>
    Faren for sykdom der et gruppemedlem ikke kan bidra er alltid til stede.
</p>
<p>
    <strong>Tiltak:</strong> Omfordele oppgaver. Holde kontakt via Skype, telefon og/eller e-post.
</p>

<h3>Manglende oppm�te</h3>
<p>
    Manglende oppm�te hindrer fremgang i prosjektet, i tillegg til at vi ikke f�r diskutert arbeidet vi har gjort.
</p>
<p>
    <strong>Tiltak:</strong> Gjenntatt manglende oppm�te vil f�re til ekskludering fra gruppen i f�lge <a href="./samarbeidsavtale.php">samarbeidsavtalen</a>.
</p>

<h3>Medlem som slutter i Web-prosjekt</h3>
<p>
	Anser vi som lavt da alle har et h�yt ambisjonsniv�. 
</p>
<p><strong>Tiltak:</strong> Skulle en person slutte, m� vi ha omfordele arbeidet og skrive ansvarskartet p� nytt.</p>

<h3>Ikke holde avtaler</h3>
<p>
    � ikke holde avtaler vil g� ut over andre medlemmene i gruppen og til slutt produktet vi skal utvikle i fellesskap.
</p>
<p>
    <strong>Tiltak</strong>: Vi har en <a href="samarbeidsavtale.php">samarbeidsavtale</a> som sier at man kan bli ekskludert hvis man ikke holder avtaler.
</p>
<h3>Uenigheter i gruppen</h3>
<p>
    Det kan oppst� uenigheter i gruppen da vi kan ha forskjellig oppfatning av hvordan vi vil utforme sluttproduktet.
</p>
<p>
    <strong>Tiltak:</strong> Skulle det oppst� uenigheter vil vi diskutere problemstillingen mellom gruppemedlemmene og komme frem til den beste l�sningen i fellesskap.
</p>
<h3>Tap av data</h3>
<p>
    Tap av data vil ha store konsekvenser og vil forsinke arbeidet og i verste fall m� vi starte p� nytt. Sannsynligheten for at alle data relatert til prosjektet g�r tapt er tiln�rmet lik null, allikevel har vi tiltak for � unng� de minste tap av data.
</p>
<p>
    <strong>Tiltak:</strong> Vi lagrer alt p� Dropbox. Alle har backup p� sine personlige datamaskiner.
</p>

<?php
include '../inc/footer.inc.php';
?>