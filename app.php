<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>LHS Languages</title>
<!-- jQuery Tools and styles -->
<script type="text/javascript" src="lib/jquerytools.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/accordion.css"/>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
</head>
<body>
<table class="header" style="background: #000; height: 32px; padding: 0px;" cellpadding="0" cellspacing="0">
  <tr>
<td style="width:50%" align="left"><?php echo '<img src="images/Buttons/Header/', $_GET["language"], '.jpg" alt="Japanese" />' ?></td>
<td><img src="images/Buttons/Header/101-hover.jpg" width="90" height="40" alt="101" /></td>
<td><img src="images/Buttons/Header/201.jpg" width="90" height="40" alt="201" /></td>
<td><img src="images/Buttons/Header/301.jpg" width="90" height="40" alt="301" /></td>
<td align="right" style="width: 50%">Logged in as <b>Austen Sensei</b></td>
<td>Logout</td>
</tr>
</table>

<div id="accordion" align="center" style="height: 100%; width: 100%">
  <table class="dojo" style="background: url('images/Backgrounds/dojo-header.jpg') center top">
  <tr>
    <td align="left"><b>
	<img src="images/Icons/dojo.png" width="32" height="32" align="absmiddle" />Dojo</b></td><td align="right">Homework: 1 worksheet</td></tr></table> 
 
<div class="pane" style="display:block; background: url('images/Backgrounds/dojo-back.jpg') center top"> 

    <img src="http://static.flowplayer.org/img/title/javascript24.png" alt="JavaScript tools" style="float:left; margin:0 15px 15px 0" /> 

    <h3>Lorem ipsum dolor</h3>

    <p> 
        <strong>Fusce semper, nisi nec pellentesque sollicitudin.</strong>
    </p> 
    
    <p style="clear:both"> 
        Consectetur adipiscing elit. Praesent bibendum eros ac nulla. Integer vel lacus ac neque viverra ornare. Nulla id massa nec erat laoreet elementum. Vivamus tristique auctor odio. Integer mi neque.
    </p> 

</div>
<table class="hallofzen" style="background: url('images/Backgrounds/hall-header.jpg') center top">
  <tr><td align="left"><b>
	  <img src="images/Icons/hall.png" width="32" height="32" align="absmiddle" />Hall of Zen</b></td><td align="right">4 people online</td></tr></table>

<div class="pane" style="display:block; background: url('images/Backgrounds/hall-back.jpg') center top"> 
    <h3>Vestibulum ante ipsum</h3> 

    <p> 
        Cras diam. Donec dolor lacus, vestibulum at, varius in, mollis id, dolor. Aliquam erat volutpat. Praesent pretium tristique est. Maecenas nunc lorem, blandit nec, accumsan nec, facilisis quis, pede. Aliquam erat volutpat. Donec sit amet urna quis nisi elementum fermentum.
    </p> 
</div>

</div>
 
<!-- activate tabs with JavaScript --> 
<!-- So for example ...
$(user + "[title]").tooltip();
...
document.getElementById(user).title = questions; // Or more complex tooltip
$(user + "[title]").data("tooltip").show();
...
$(user + "[title]").data("tooltip").show();
-->
<script type="text/javascript">
$(function() { 
 
$("#accordion").tabs("#accordion div.pane", {tabs: 'table', effect: 'slide', initialIndex: 1});
});


</script>
</body>
</html>
