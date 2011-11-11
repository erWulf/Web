Praktiske GIT kommandoer

git pull
F�rste kommandoen du utf�rer n�r du skal begynne � jobbe. Oppdaterer mappen din p� pc til � v�re lik den som ligger p� githubben. Ikke utf�r denne kommandoen hvis du jobber med filer da den vil overskrive alle endringer du har gjort lokalt p� pcen. NB M� utf�res i mappen du  jobber fra.

git status
Sjekker filene dine lokalt opp mot de som ligger p� servern og ser hvilke filer du har gjort endringer i.

git add �filnavn�
Adder fil eller mappe du vil pushe til githubben. Hvis du skal adde flere filer m� du alts� utf�re denne kommandoen flere ganger. M� utf�res i mappen filen ligger eller bruke mappesti. Eks Git add /mappenavn/navnp�fil

git commit �m �skriv melding her�
Legger til en melding til alle filer/mapper du har addet som da gjerne skal v�re informativ om hva du har gjort. 

git push origin master
Pusher alle filene du har gjort endringer p� til githubben. Hvis du ikke f�r lov til � kj�re en push har antagelig noen andre jobbet med andre filer og pushet dem etter du sist kj�rte en pull. Du m� da kj�re en fetch/merge.

git fetch upstream
Utf�res n�r du ikke f�r lov til � kj�re en push. Henter alle endringer som har blitt gjort p� githubben men overskriver ikke endringene du har gjort lokalt.

git merge upstream/master
Merger de filene du har hentet ned med fetch med filene du har lokalt p� pcen. Du er n� oppdatert uten � ha overskrevet filene du har gjort endringer i. Du f�r n� lov til � kj�re en push. Hvis du fortsatt ikke f�r lov til � kj�re en push s� har noen jobbet i samme filer som deg (Fy! Fy!) og dere f�r ta en n�dtelefon til meg s� f�r vi ordne opp i det. 

Denne filen ligger ogs� som Word Doc i Dropboxen