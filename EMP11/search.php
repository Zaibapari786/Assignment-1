<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<script language="javascript">
function Blink() {
   obj=document.getElementById("blink");
   if (obj.style.visibility=="hidden") obj.style.visibility="visible";
      else obj.style.visibility="hidden";
   window.setTimeout("Blink();",500);
}
</script>
<style type="text/css">.adlesse-hidden{display:none!important;}				.adlesse-invisible{visibility:hidden!important;}								#adlesse_configPopup{position:fixed; background-color:#FFFFFF!important; z-index:5000!important; width:1px; height:1px;}				#adlesse_configPopup_overlay{z-index:4999!important; position:fixed; left:0; top:0; width:0; height:0; background:Black!important;}				#adlesse_configPopup_iframe{width:100%; height:100%; border:0; margin:0; padding:0;}								</style><style type="text/css">.adlesse-hidden{display:none!important;}				.adlesse-invisible{visibility:hidden!important;}				.adlesse-actionpanel{padding:0!important; margin:0!important; position:absolute!important; z-index:9999!important; border:solid #000000 1px!important; background:#ffffff!important; font-family:sans-serif!important; font-weight:normal!important; font-size:10px!important; text-decoration:none!important; color:#000000!important;}				.adlesse-actionpanel a{padding:0!important; margin:0!important; background:none repeat scroll 0 0 transparent!important; font-family:sans-serif!important; font-weight:normal!important; font-size:10px!important; text-decoration:none!important; color: #000000!important; display: inline-block !important }				.adlesse-actionpanel a:hover{text-decoration:underline!important; }				.adlesse-trans-65{opacity:0.65; filter:alpha(opacity=65); -moz-opacity:0.65; filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=65); -khtml-opacity: 0.65; -ms-filter: 'progid:DXImageTransform.Microsoft.Alpha(Opacity=65)';}				.adlesse-rounded-corner{-moz-border-radius:3px; -webkit-border-radius:3px; -khtml-border-radius:3px; border-radius:3px;}								.adlesse-actionpanel-menu{position:absolute!important; z-index:9999!important;background:#ffffff!important; font-family:sans-serif!important; font-weight:normal!important; font-size:10px!important; text-decoration:none!important; color: #000000!important; border:1px solid #000000;text-align:center!important;padding:0!important; margin:5px!important; margin-top:1px!important;min-width:55px;}				.adlesse-actionpanel-menu-h {margin: 5px;list-style-type: none;}				.adlesse-actionpanel-menu-v {list-style-type: none;} 				.adlesse-actionpanel-menu-h li{background:#ffffff; cursor:pointer; display: inline-block; padding: 5px; zoom: 1;*display: inline;border-right:1px solid #cccccc}				.adlesse-actionpanel-menu-v li{background:#ffffff;cursor:pointer;padding:3px; border-bottom: 1px solid #000000;}								.adlesse-widget-div{}				.adlesse-widget-iframe{border:0px;}								</style></head>
<body promptdialogcheckdone="1" onload="Blink();">
	<?php include 'nav.php'; ?>
	<center>
	    <h1 font style= color:blue;><span style="visibility: visible;" id="blink">Search Employee Details</span></h1>
		<center>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="search_emp.php">
  <td>
  <table width="100%" >
  <tr>
  <td width="78"><h3>Name</h3></td>
  <td width="6">:</td>
  <td width="294"><input name="name" type="text" id="name" value=""></td>
  </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="submit" value="Search" class="btn btn-success"></td>
 </tr>
  </table>
  </td>
</form>
</tr>
</table>
     </td>    
	   </tr>
    </table>
</center>	
    </body>
</html>
