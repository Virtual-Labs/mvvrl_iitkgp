<?php include('../database/db.php') ?>

<?php
$performance = "";
$answer      = "";
$name 				= $_POST['user_name'];
$email 				= $_POST['user_email'];
$institute 			= $_POST['user_inst'];

$expPerformance 	= isset($_POST['expPerformance']) ? $_POST['expPerformance'] : 0;
$interactionCtrl 	= isset($_POST['interactionCtrl'])!="" ? $_POST['interactionCtrl'] : 0;
$simulatorCmpr 		= isset($_POST['simulatorCmpr'])!="" ? $_POST['simulatorCmpr'] : 0;
$dataMrmnt	 		= isset($_POST['dataMrmnt'])!="" ? $_POST['dataMrmnt'] : 0;
$manuals 			= isset($_POST['manuals'])!= "" ? $_POST['manuals'] : 0;
$expObjectives 		= isset($_POST['expObjectives'])!="" ? $_POST['expObjectives'] : 0;
$expResult 			= isset($_POST['expResult'])!="" ? $_POST['expResult'] : 0;
$understandExp		= isset($_POST['understandExp'])!="" ? $_POST['understandExp'] : 0;
$performance        = $expPerformance.$interactionCtrl.$simulatorCmpr.$dataMrmnt.$manuals.$expObjectives.$expResult.$understandExp.$performance;

$actualLab          = isset($_POST['actualLab'])!="" ? $_POST['actualLab'] : 'x';
$instructorAbs      = isset($_POST['instructorAbs'])!="" ? $_POST['instructorAbs'] : 'x';
$withoutInt         = isset($_POST['withoutInt'])!="" ? $_POST['withoutInt'] : 'x';
$analyzeData        = isset($_POST['analyzeData'])!="" ? $_POST['analyzeData'] : 'x';
$stepmethdBeforeRun = isset($_POST['stepmethdBeforeRun'])!="" ? $_POST['stepmethdBeforeRun'] : 'x';
$compareRes         = isset($_POST['compareRes'])!="" ? $_POST['compareRes'] : 'x';
$performExp         = isset($_POST['performExp'])!="" ? $_POST['performExp'] : 'x';
$answer             = $actualLab.$instructorAbs.$withoutInt.$analyzeData.$stepmethdBeforeRun.$compareRes.$performExp;

$scope 				= isset($_POST['scope'])!="" ? $_POST['scope'] : 'x';


echo $query = "insert into `overall_feedbacks` set 
												`name` = '".$name."',
												`email` = '".$email."',
												`institute` = '".$institute."',
												`performance` = '".$performance."',
												`answer` = '".$answer."',
												`scope` = '".$scope."' ";

mysql_query($query);												
header('location:feedback.php');												


?>