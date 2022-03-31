Obstacles - #TechQuiz

1. SPA (Single Page Application) Design

Der Entwurf einer SPA hatte Francis schon in seinem vorherigen Projekt eingebettet und wollte
als Leadcoder diesen Ansatz mit dem TechQuiz verfolgen. Dabei gab es in den ersten Tagen
einige Herausforderungen zu meistern und bugs, die wegen fehlender Übung in der Erstellung einer SPA 
(von der Planungsphase bis zum eigentlichen coden der Applikation) mit spontanen Einfällen
und ganz instinktiv durch Logik gelöst wurden.

- Die Zurücksetzung globaler $_SESSION() Werte auf der Index-Seite spielte bei der Lösung des Problems
eine sehr wichtige Rolle.

- Ralph gab uns den Tip die PHP Arrays mit einem Index von 1=> zu beginnen und somit den Code verständlicher
zu machen, da die Kern-Variabel dieser Applikation die Fragenummer ist, worauf sich Fragen, Antworten, 
Antwort-Input-Typen, Hints und Jokers basieren, um die nötigen Informationen für den User darzustellen.


2. Aufteilung der Aufgaben

Am Anfang war klar: Beni ist Scrum Master, Ajoub Designer und trug zum Javascript bei, Saleh wollte
Footer und Header erstellen und eine SPA besser verstehen und ich war als kreativer Leadcoder, derjenige 
der neben der Planung einer SPA, Animationen erstelle.

- Beni koordiert den Ablauf der Meetings und beschäftigte sich mit dem Merge der Branches auf Github.
Weiter setzte er sich ein für die Erstellung der Fragen und Antworten und half tatkräftig mit
als es um die Erweiterung, Umstrukturierung und Überprüfung des Codes ging.

- Francis hat eine 'typewriter' und Szenen Animation mitgebracht, die mit wenigen Zeilen CSS
und die Plazierung einiger Tags im script als Grundbaustein dienten, eine SPA zu programieren.

- Am zweiten Tag des Projektes, nachdem Francis ein Barebones für eine SPA vorbereitet hatte, gab er eine 
kleine Schulung, um allen den Code zu erklären. Grösstenteils des Inhalt waren zu diesem Zeitpunkt 
Arrays mit den Fragen und Anworten. Die Erklärungen von Francis gingen hauptsächlich dann, um den Loop, 
der die Antworten und Inputtypen zusammenstellt und wie die Fragenummer als Index dient.

- Saleh war sofort dabei den Footer und Header zu erstellen mit Navigationsmenu, nachdem Ajoub
das Logo entwurf, musste aber wegen privaten Angelegenheiten in seinem Heimatland mit Stress und
der Konzentration zu kämpfen. Nachdem wir mit ihm Github eingerichtet haben, hat er auf seinem Branch 
ein Footer und Header erstellt und dies synchronisiert. Somit hat er neben etlichen Ideen beim Brain-Storming,
sowie die aktive Teilnahme an der kleinen Schulung und während Besprechungen und das lernen von PHP im selbststudium 
einen wichten Beitrag zum Projekt geleistet.

- Ajoub entwurf das Logo für unser Projekt und schrieb viele Fragen auf. Zusätzlich war er massgeblich 
an der Erstellung der 'Hints' beteiligt. Er hat anhand einer Kopie der joker.js Funktion ein Array von 
Mitteilungen kreiert. Diese werden dann in einem Element mit 'hint' ID in questions.php als Text 
anhand der .innerHTML funktion eingefügt. Er Verstand die SPA und zeigte als er dabei war vollen Einsatz.

3. Design Bugs

Wir haben kein Bootstrap verwendet, sondern verbreitete Skalierungsfunktionen verwendet, entweder für
den 'typewriter' Text oder bei der Plazierung von Bildern in Animationen.Dabei gab es vorallen bei der 
Smartphone-Darstellung zunächst Herausforderungen, die wir aber mit der Überprüfung der Screensize in CSS lösen konnten.

- Wir haben mit min-width und screen-size Überprüfengen ein Ergebnis lieferen können, der für den Benutzr
noch nicht 100%ig Perfekt sitzt, jedoch für die schnelle Quizrunde brauchbar ist.

- Bei der Anfangs Animation, war bei Full-Screen alles gut und sobald man zu einem Smart-Phone View
wechselte, sitze Arnold Schwarenegger plötzlich auf dem Lenker. Dies lag an der 'right: 20%' Plazierung
des 'Divs'. Die Lösung war ab einer gewissen Screen-Size diese Plazierung zu verschieben, damit Arnold
wieder fahren konnte

- Das Gleiche Problem wie im vorherigen Punkt beschrieben war ebenfalls bei der Plazierung von Arnold
während der Fragen auf dem Smartphone, die Sprechblase, den Hint und die auftauchende Jokers auf Arnold's
Auge.

- Der Header war leider nicht passend zum Rest des schlichten Dark-Mode Design auf den wir uns beim Brainstorming
geeignet hatten, darum entschieden wir ihn wegzulassen und im Footer die Kerninformationen zu verzeichnen.


4. Abgabe Termin

- Es fehlte noch die Aufteilung der 'hints' bzw. der Hint-Text, damit es auf Smartphone besser lesbar ist.

- Dazu gab es bei der Roboter-Animation einen Bug mit der Plazierung des leuchtenden Roboterauges. Es
war auf dem Laptop, den wir brauchen wieter nach oben verschoben.

Wir entschieden uns am letzten Tag, deshalb die letzen Bugs noch zu debuggen und danach unser Projekt
abzugeben.

5. Meetings

Wegen privaten Abszensen in den letzen Tagen des Projekts und weil Francis am Mittwoch seit geräumiger 
Zeit einen freien Tag nahm, war es für Benjamin umso anspruchsvoller das Team zusammenzubekommen, um 
Meetings im Plenum durchzuführen. Jedoch hatten wir als wir beisammen waren, sehr viel Potential
schon entschlüsselt und Ideen gesammelt damit das Projekt zum selbstläufer wurde. Codezeilen gab es nicht viele,
sondern durch den Grundstein der SPA durch Francis, war der gesamte Fokus, dann auf die Spielbarkeit des Quizes
und des für uns sehr wichten Spassfaktor.