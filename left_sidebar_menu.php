<?php
/*$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$is_exp_folder = strpos($url, "/experiments/");
$page_name = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);*/
?>

<?php
/*if($is_exp_folder != false && $page_name != 'experiments.php')
{*/
?>
<!--<div class="shadowblockmenu-v">
<div id="menuDiv">
<ul>
<li><a href="theory.php">Theory</a></li>
<li><a href="procedure.php">Procedure</a></li>
<li><a href="video_demo.php">Video Demo</a></li>
<li><a href="simulator.php">Simulator</a></li>
<li><a href="quiz.php">Quiz</a></li>
<li><div> <a href="feedback.php">Feedback</a> </div></li>
</ul>
</div>
</div>-->
<?php
//}
?>

<link rel="stylesheet" type="text/css" href="<?php echo $base_url."css/menu.css";?>" />
<div id="menu3">
  <ul>
	<li><a href="theory.php">Theory</a></li>
	<li><a href="procedure.php">Procedure</a></li>
    <li><a href="video_demo1.php">Video Demo</a></li>
    <li><a href="procedure1.php">Simulator Proc.</a></li>
	<li><a href="simulator.php">Simulator</a></li>
	<li><a href="quiz.php">Quiz</a></li>
    <li><a href="reference.php">References</a></li>
  </ul>
</div>

