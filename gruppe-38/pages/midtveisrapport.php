<?php
$current = 'Midtveisrapport';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Midtveisrapport</h2>
<h3>Innhold</h3>
<table class="indextable">
	<tr>
		<td>1</td>
		<td><a href="#1skisse">Skisse til ferdig nettsted</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="#2krav">Beskrivelse over krav</a></td>
	</tr>
	<tr>
		<td>2.1</td>
		<td><a href="#21krav">Teknologi</a></td>
	</tr>
	<tr>
		<td>2.2</td>
		<td><a href="#22krav">Standarder</a></td>
	</tr>
	<tr>
		<td>2.3</td>
		<td><a href="#23krav">Funksjonalitet</a></td>
	</tr>
	<tr>
		<td>2.4</td>
		<td><a href="#24krav">Hvordan sikre brukervennlighet og universell utforming</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="#3designvalg">Begrunnelse for designvalg</a></td>
	</tr>
	<tr>
		<td>4</td>
		<td><a href="#4evaluering">Evaluering</a></td>
	</tr>
	<tr>
		<td>4.1</td>
		<td><a href="#41evaluering">Hvordan har samarbeidet i gruppa g�tt?</a></td>
	</tr>
	<tr>
		<td>4.2</td>
		<td><a href="#42evaluering">Hvordan har vi lykkes i � f�lge fremdriftsplanen?</a></td>
	</tr>
	<tr>
		<td>4.3</td>
		<td><a href="#43evaluering">Har det dukket opp noe spesielt underveis i prosjektet som har p�virket fremdriften, og hvordan har vi eventuelt h�ndtert dette?</a></td>
	</tr>
	<tr>
		<td>5</td>
		<td><a href="#5individuellerapporter">Individuelle rapporter</a></td>
	</tr>
	<tr>
		<td>6</td>
		<td><a href="#6skissesluttrapport">Skisse til sluttraport</a></td>
	</tr>
</table>
	<h3 id="1skisse">1 Skisse til ferdig nettsted</h3>
	<p>
		Vi har tegnet skisser til det ferdige nettstedet og skrevet et nettstedskart for h�nd. Disse er pakket inn i en .zip-fil. <a href="../docs/skisser.zip">Skisser til ferdig nettsted</a>.
	</p>
	<h3 id="2krav">2 Beskrivelse over krav</h3>
		<h4 id="21krav">2.1 Teknologi:</h4>
		<ul>
			<li>HTML</li>
			<li>CSS</li>
			<li>PHP</li>
		</ul>
		<h4 id="22krav">2.2 Standarder:</h4>
		<ul>
			<li>HTML5</li>
			<li>CSS 2.1</li>
			<li>WCAG AA</li>
		</ul>
		<h4 id="23krav">2.3 Funksjonalitet</h4>
		<p>
			Fordi vi har en spredt brukergruppe �nsker vi � holde funksjonaliteten til et grunnleggende niv�. Et enkelt menysystem. En programside med kort informasjon om innslagene. Et galleri med bilder fra tidligere festivaler. Skjema for � sende inn sp�rsm�l til festivalens kontaktpersoner. Det skal v�re mulig � navigere seg gjennom et sidekart. 
		</p>
	<h4 id="24krav">2.4 Hvordan sikre brukervennlighet og universell utforming</h4>
	<ul>
		<li>Det skal v�re �penbart hva siden handler om</li>
		<li>Ha stor nok skrift og som er skalerbar</li>
		<li>Riktig kontrast mellom skrift og bakgrunn</li>
		<li>Vi skal ta hensyn til lesem�nsteret p� web (F-m�nsteret)</li>
		<li>Overskrifter og lenker er meningsb�rende</li>
		<li>Den viktigste informasjonen skal st� �verst</li>
		<li>Ha mye luft i teksten</li>
		<li>Dele opp innholdet fornuftig med H-tagger</li>
		<li>Overskrifter og lenker er meningsb�rende</li>
		<li>Enkel navigasjon p� siden, 3 klikk regelen</li>
		<li>Brukeren skal v�re klar over hvor p� siden han/hun er</li>
		<li>Brukeren skal vite hvor linkene g�r</li>
		<li>F�lge HTML-standarder</li>
	</ul>
	<p>
		Ved � f�lge disse punktene mener vi at vi vil sikre brukervennlighet/universell utforming.
	</p>
<h3 id="3designvalg">3 Begrunnelse for designvalg</h3>
<p>
	M�lgruppen for festivalen er meget stor. Derfor har det v�rt viktig � holde et enkelt design som alle kan forst� og navigere i. Oversiktlige menyer som alltid viser hvor p� nettsiden man er et godt tiltak for appelere til en slik brukergruppe. Menyene skal fungere i forskjellige skriftst�rrelser, noe som gj�r det mulig for brukere med d�rligere syn � navigere nettsiden. Med en implementering av WCAG AA vil vi dekke behovene for brukere med nedsatt funksjonalitet.
</p>
<p>
	Vi har ogs� lagt vekt p� et solid menysystem. Det vil v�re en hovedmeny som alltid er tilgjengelig, det vil ogs� legge seg ekstra menyer under hovedmenyen for undersider hvor et slikt behov er tilstede, f.eks. programsiden. Relevant informasjon skal alltid v�re id�ellt et, maksimum to klikk unna, dette er viktig s� potensielt bes�kende til festivalen ikke g�r seg vill i sidene og mister interessen. Vi vil begrense bruk av scrolling og holde artiklene korte og konsise. Det skal v�re mulig � navigere lenker ved hjelp av Tab-knappen. Foruten gallerisiden b�r ikke sidene inneholde videoer. Forsiden spesielt f�lger en F-struktur i forhold til viktig innhold. Derfor deler vi den inn i to vertikale div-elementer med nyheter til venstre. Vi �nsker � beholde fargene til den gamle logoen for � beholde gjenkjennelsesfaktoren.
</p>
<h3 id="4evaluering">4 Evaluering</h3>
<h4 id="41evaluering">4.1 Hvordan har samarbeidet i gruppa g�tt?</h4>
<p>
	Samarbeidet har g�tt greit. Vi har satt opp faste gruppem�ter som passer for alle og vi har brukt Dropbox til dokumentene i prosjektet.
</p>
<p>
	I tillegg til dette har vi en samarbeidsavtale som med faste rammer. Denne har alle signert under.
</p>
<p>
	P� m�tene diskuterer vi fremdriften siden sist m�te og eventuelle justeringer vi m� gj�re for � holde oss til tidsskjema, og hva som skal jobbes med til neste m�te.
</p>
<p>
	Videre blir det jobbet i grupper p� to om de viktigste oppgavene. Slik sikrer vi at ansvarsfordelingen blir balansert og arbeidet blir effektivt. Gruppen fokuserer ogs� p� god interaksjon i mellom medlemmer s� samarbeidet blir p� topp.
</p>
<h4 id="42evaluering">4.2 Hvordan har vi lykkes med � f�lge fremdriftsplanen?</h4>
<p>
	Vi har hatt en litt vanskelig start, hvor mye tid har g�tt med p� � l�re oss korrekt prosjektplanlegging. Det har f�rt til at vi i ettertid har m�ttet rette opp arbeid som igjen har forskj�vet fremdriftsplanen. Selv om det har f�rt til tidsmessige ulemper ser vi at et godt fundament vil hjelpe oss � arbeide effektivt videre.
</p>
<p>
	Som ett resultat av det har vi ikke f�tt p� plass en ordentlig fremdriftsplan f�r uke 43.
</p>
<h4 id="43evaluering">4.3 Har det dukket opp noe spesielt underveis i prosjektet som har p�virket fremdriften, og hvordan har vi eventuelt h�ndtert dette?</h4>
<p>
	Det har v�rt to st�rre hindere underveis. Det f�rste at Leveranse 1 hadde store mangler i henhold til oppgavebeskrivelsen. Vi h�ndterte dette ved � sette opp hastem�ter og ha en klarere fordeling av ansvar for innholdet i f�rste leveranse.
</p>
<p>
	Det andre hinderet var endring av prosjektet under arbeidet med Leveranse 2. Nicolai har jobbet som frivillig p� en liten kulturfestival i Sandvika og har sett et stort behov for en ny webl�sning for festivalen. Han foreslo derfor � endre prosjektet v�rt til dette. Dette ble gruppen med p�.
</p>
<p>
	Vi vurderte fordeler og ulemper ved � bytte prosjekt til neste m�te, og vedtok dette ved gruppem�te 28.10.11.
</p>
<p>
	Det er en stor motivasjonsfaktor � utvikle for web n�r man m� ta hensyn til at produktet kan bli brukt av folk, istedenfor � ende opp med en "d�d" nettside som kun har fungert som et eksempel p� webutvikling. Denne motivasjonsfaktoren har veid opp for det ekstra arbeidet.
</p>
<h3 id="5individuellerapporter">5 Individuelle rapporter</h3>
<ul>
	<li><a href="http://www.stud.hio.no/~s141169/rapport.html">Martin Johan Grini</a></li>
	<li><a href="http://student.iu.hio.no/~s180489/rapport.html">Mathias Groven</a></li>
	<li><a href="http://student.iu.hio.no/~s180339/Webprosjekt/Oblig1/individuellrapport.html">Nicolai Gr�ndahl</a></li>
	<li><a href="http://www.stud.hio.no/~s181807/Rapport.html">Erlend Gunnesen</a></li>
</ul>
<h3 id="6skissesluttrapport">6 Skisse til sluttrapport</h3>
<p>
	Skissen til sluttrapporten kan lastes ned som .pdf-dokument. <a href="../docs/skisse_til_sluttrapport.pdf">Skisse til sluttrapport</a>.
</p>

<?php
include '../inc/footer.inc.php';
?>