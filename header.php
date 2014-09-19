<?php
include('config.php');
//echo $base_url."css/stylesheet.css";
?>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url."css/stylesheet.css"; ?>" />

<div class="header_wrapper">

 <div class="header_div">
   <div class="header_logo">
     <img src="<?php echo $base_url."images/iit_logo.png";?>" />
   </div><!-- end of header_logo -->
   <div class="header_title">
     <span id="header_lab">Virtual Laboratory on Mine Ventilation</span><br />
	 <span id="header_dept">Department of Mining Engineering</span><br />
	 <span id="header_inst">Indian Institute of Technology, Kharagpur</span>
   </div><!-- end of header_title -->
 </div><!-- end of header_div -->

 <div class="header_menu">
   <div class="header_menu_div">
	<table border="0">
	 <tr>
	 <td class="menu_sep"></td>
	 <td class="menu_td" align="center"><a href="<?php echo $base_url; ?>"><span>Home</span></a></td>
	 <td class="menu_sep"></td>
	 <td class="menu_td" align="center"><a href='#'><span>Contents</span></a></td>
	 <td class="menu_sep"></td>
	 <td class="menu_td" align="center"><a href="<?php echo $base_url; ?>experiments/experiments.php"><span>Experiments</span></a></td>
	 <td class="menu_sep"></td>
	 
	 <td class="menu_td" align="center"><a href='#'><span>FAQ</span></a></td>
	 <td class="menu_sep"></td>
	 
	 <td class="menu_td" align="center"><a href="<?php echo $base_url; ?>feedbacks/feedback.php"><span>Feedback</span></a></td>
	 <td class="menu_sep"></td>
	 </tr>
	 
	</table>
  </div><!-- end of header_menu_div -->
 </div><!-- end of header_menu -->

</div><!-- end of .header_wrapper -->


