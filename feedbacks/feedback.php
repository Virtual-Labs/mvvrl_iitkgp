<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Feedback page</title>



</head>

<body>
<?php //include('../left_sidebar_menu.php'); ?>
<?php include('../header.php'); ?>


<div class="wrapper_body">

<form action="save_feedback.php" name="" method="post">
<div class="feedbackDiv">

<span class="inst">Please insert your personal details</span><br /><br />
<table>
<tr><td>Enter your name:</td><td><input type="text" name="user_name" value="" size="50" /></td></tr>
<tr><td>Enter your email id:</td><td><input type="text" name="user_email" value="" size="50" /></td></tr>
<tr><td>Enter your Institute/College/University name:</td><td><input type="text" name="user_inst" value="" size="50"/></td></tr>
</table>
<br /><br />
  



<span class="inst">Please indicate your agreement with the following statements</span><br /><br />	
            <table border="0">
                <thead>
                <tr>
                    <td width="23%"></td>
                    <td width="5%"></td>
                    <td align="center" width="15%">Excellent</td>
                    <td align="center" width="12%">Very Good</td>
                    <td align="center" width="10%">Good</td>
                    <td align="center" width="12%">Average</td>
                    <td align="center" width="10%">Poor</td>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">How do you rate the online performance of the experiment?</td>
                        <td style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expPerformance" value="1" id="expPerformance"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expPerformance" value="2" id="expPerformance"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expPerformance" value="3" id="expPerformance"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expPerformance" value="4" id="expPerformance"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expPerformance" value="5" id="expPerformance"  />
                        </td>                       
                    </tr>
                    <tr>
                        <td align="right">To what extent did you have control over the interactions?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="interactionCtrl" value="1" id="interactionCtrl" />
                        </td>
                        <td align="center">
                            <input type="radio" name="interactionCtrl" value="2" id="interactionCtrl"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="interactionCtrl" value="3" id="interactionCtrl"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="interactionCtrl" value="4" id="interactionCtrl"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="interactionCtrl" value="5" id="interactionCtrl"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">To what degree was the actual lab environment simulated?</td>
                        <td style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="simulatorCmpr" value="1" id="simulatorCmpr"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="simulatorCmpr" value="2" id="simulatorCmpr"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="simulatorCmpr" value="3" id="simulatorCmpr"   />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="simulatorCmpr" value="4" id="simulatorCmpr"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="simulatorCmpr" value="5" id="simulatorCmpr" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Was the measurement and analysis of data easy for you?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="dataMrmnt" value="1" id="dataMrmnt"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="dataMrmnt" value="2" id="dataMrmnt"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="dataMrmnt" value="3" id="dataMrmnt"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="dataMrmnt" value="4" id="dataMrmnt"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="dataMrmnt" value="5" id="dataMrmnt"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">The manuals were found to be helpful</td>
                        <td style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="manuals" value="1" id="manuals"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="manuals" value="2" id="manuals" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="manuals" value="3" id="manuals"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="manuals" value="4" id="manuals" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="manuals" value="5" id="manuals"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Were the links provided consistent with the objectives of the experiment?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="expObjectives" value="1" id="expObjectives" />
                        </td>
                        <td align="center">
                            <input type="radio" name="expObjectives" value="2" id="expObjectives" />
                        </td>
                        <td align="center">
                            <input type="radio" name="expObjectives" value="3" id="expObjectives" />
                        </td>
                        <td align="center">
                            <input type="radio" name="expObjectives" value="4" id="expObjectives" />
                        </td>
                        <td align="center">
                            <input type="radio" name="expObjectives" value="5" id="expObjectives" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">Were the results of the experiment easily interpreted?</td>
                        <td style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expResult" value="1" id="expResult" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expResult" value="2" id="expResult"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expResult" value="3" id="expResult"  />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expResult" value="4" id="expResult" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="expResult" value="5" id="expResult" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">A clear understanding of the experiment and related topics was gained</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="understandExp" value="1" id="understandExp" />
                        </td>
                        <td align="center">
                            <input type="radio" name="understandExp" value="2" id="understandExp" />
                        </td>
                        <td align="center">
                            <input type="radio" name="understandExp" value="3" id="understandExp" />
                        </td>
                        <td align="center">
                            <input type="radio" name="understandExp" value="4" id="understandExp"  />
                        </td>
                        <td align="center">
                            <input type="radio" name="understandExp" value="5" id="understandExp"  />
                        </td>
                    </tr>
                </tbody>
            </table>
			
<br/><br/><br/>		
<span class="inst">Please answer the following</span><br />			
<div style="width:100%; margin-bottom:30px;">
        <div>
            <table border="0" align="left">
                <thead>
                    <tr>
                        <td width="40%"></td>
                        <td width="10%"></td>
                        <td width="13%" align="center">Yes</td>
                        <td width="13%" align="center">No</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">Did you get the feel of a real lab while performing the experiments virtually?</td>
                        <td align="center" style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="actualLab" value="Y" id="actualLab" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="actualLab" value="N" id="actualLab" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Did you feel the absence of an instructor?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="instructorAbs" value="Y" id="instructorAbs" />
                        </td>
                        <td align="center">
                            <input type="radio" name="instructorAbs" value="N" id="instructorAbs"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">Could you run the experiments smoothly, i.e., without interruptions?</td>
                        <td align="center" style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="withoutInt" value="Y" id="withoutInt" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="withoutInt" value="N" id="withoutInt"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Could you measure and analyse the data successfully?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="analyzeData" value="Y" id="analyzeData" />
                        </td>
                        <td align="center">
                            <input type="radio" name="analyzeData" value="N" id="analyzeData"  />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">Did you follow the step by step procedure before doing the live experiment?</td>
                        <td align="center" style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="stepmethdBeforeRun" value="Y" id="stepmethdBeforeRun" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="stepmethdBeforeRun" value="N" id="stepmethdBeforeRun" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Could you compare your results with the given typical results?</td>
                        <td></td>
                        <td align="center">
                            <input type="radio" name="compareRes" value="Y" id="compareRes" />
                        </td>
                        <td align="center">
                            <input type="radio" name="compareRes" value="N" id="compareRes" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right" style="background-color:#E8E8E8;">Do you think performing experiments through virtual labs were more challenging than the real lab experiments?</td>
                        <td align="center" style="background-color:#E8E8E8;"></td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="performExp" value="Y" id="performExp" />
                        </td>
                        <td align="center" style="background-color:#E8E8E8;">
                            <input type="radio" name="performExp" value="N" id="performExp" />
                        </td>
                    </tr>
                </tbody>
            </table>
           </div>
		   <div style="clear:both;"></div>
         </div>  
		   
		   <span class="inst">Do you think doing experiments through virtual lab gives scope for more innovative and creative research work?</span><br />	
		   <table>
		   <tr><td>Yes<input type="radio" name="scope" value="yes" /></td><td>No<input type="radio" name="scope" value="no" /></td></tr>
		   </table>
		   
		   <br />
		   <center>
		   <input type="submit" name="" value="     Submit     "	/>
		   </center>
        </div>	<!-- End of feedbackDiv-->		
		</form>	

</div><!-- end of wrapper_body -->

<?php include('../footer.php'); ?>

</body>
</html>
