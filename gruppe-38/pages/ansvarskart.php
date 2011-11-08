<?php
$current = 'Ansvarskart';
include '../inc/headerup.inc.php';
include '../inc/sidebar.inc.php';
?>
<h2>Ansvarskart</h2>

<table>
    <tr>
        <th>Person</th><th>Hovedansvar</th><th>Delansvar</th>
    </tr>
    <tr>
        <td>Nicolai</td><td>struktur, PHP, validering</td><td>design, tilrettelegging sos. medier, rettskrivning, HTML</td>
    </tr>
    <tr>
        <td>Martin</td><td>s�kemotoroptimalisering, universell utforming, rettskrivning</td><td>milep�ler og aktivitetsplan, WCAG, HTML</td>
    </tr>
    <tr>
        <td>Erlend</td><td>milep�lsplan og aktivitetsplan, git, plattformoptimalisering</td><td>PHP, s�kemotoroptimalisering, validering, HTML</td>
    </tr>
    <tr>
        <td>Mathias</td><td>WCAG, design</td><td>struktur, universell utforming, HTML, plattformoptimalisering</td>
    </tr>
</table>

<h3>Struktur</h3>
<p>
    Sette opp struktur og konvensjoner for hvordan HTML-dokuementene skal kodes. Her ligger ogs� ansvar for stilark.
</p>

<h3>Validering</h3>
<p>
    S�rge for at sidene validerer i henhold til HTML5-standarden.
</p>

<h3>S�kemotoroptimalisering</h3>
<p>
    Tilrettelegge for s�kemotorene
</p>
<h3>PHP</h3>
<p>
    Ansvar for koding av PHP.
</p>

<h3>WCAG</h3>
<p>
    S�rge for at siden f�lger WCAG sine standarder
</p>

<h3>Design</h3>
<p>
    Ansvar for designet av det ferdige produktet
</p>
  
<h3>GIT</h3>
<p>
    Opprette en GIT repository og gi de andre innf�ring i GIT
</p>        
    
<h3>Universell utforming</h3>
<p>
   Universell utforming av nettstedet, s� det er tilrettelagt for s� mange som mulig
</p>
<h3>Plattformoptimalisering</h3>
<p>
   S�rge for at siden ser lik ut for alle OS og browsere. Skal ogs� gj�re en vurdering om vi har tid til � opptimalisere for smart telefon
</p>

<?php
include '../inc/footer.inc.php';
?>