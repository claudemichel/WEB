<html>

<head>
<link type="text/css" href="./style.css" rel="stylesheet" />

<title>My profile WEBPAGE</title>

</head>
<?php 
include ('header.html');
?>


<body>
<?php

$interventions[0]['date']="23/09/2013";
$interventions[0]['type']="Cardiac exam for a heart problem.";
$interventions[0]['doctor']="Franck Einstein";
$interventions[0]['comment']="Electrocardiograme is ok!";
$interventions[0]['place']="G. Pompidou Hospital";
$interventions[0]['next_exam']="2 Years";
$interventions[0]['image']="./coeur.jpg";

$interventions[1]['date']="21/04/2013";
$interventions[1]['type']="Correction for new glasses";
$interventions[1]['doctor']="Bino Culard";
$interventions[1]['comment']="Have to buy new glasses";
$interventions[1]['place']="G. Pompidou Hospital";
$interventions[1]['next_exam']="6 months";
$interventions[1]['image']="./glasses.jpg";

$interventions[2]['date']="07/02/2013";
$interventions[2]['type']="Exam to practice a new sport. Complete check up!";
$interventions[2]['doctor']="Franck Lucas";
$interventions[2]['comment']="Exam is ok";
$interventions[2]['place']="G. Pompidou Hospital";
$interventions[2]['next_exam']="1 Year";
$interventions[2]['image']="./check.jpg";

?>

 ?>
<div class="wall">
<h1>GASTON LAGAFFE:</h1>
<p class="intro"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p> <br>
<br>

<br> <p> <h2> Last exams for the patient: </h2> </p>

<?php 
$exam_num=0;
foreach($interventions as $intervention)
{ 
$exam_num++;

?>
		
		<div id="fond_encadre">
<div id="image">
<img src= <?php echo $intervention['image'] ?> alt="glasses"> 
	</div>
<p> Exam <?php echo $exam_num ?> </p> 
<p> Date: <?php echo $intervention['date'] ?> </p> 
<p> Doctor Name: <?php echo $intervention['doctor'] ?> </p> 
<p> Type of exam: <?php echo $intervention['type'] ?> </p>
<p> Comments: <?php echo $intervention['comment'] ?> </p> 

<p> Exam place: <?php echo $intervention['place'] ?> </p> 
<p> Next recommanded Exam: In <?php echo $intervention['next_exam'] ?> </p> 


	</div>
	<?php
}
?>
	
	</div>
	
</body>

</html>
