<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>



<?php include($_SERVER['DOCUMENT_ROOT'].'/readlanguage.php');$idioma=readLanguage("es");?>	

<META content="3 days" name=Revisit>
	<META content=all name=robots>
	<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
 <link href="/css/normal.css" rel="stylesheet" type="text/css">

<title>

<?php if ($idioma=='es') 
  echo "Control de versiones";
  else   echo "Version control by dates";  ?>

</title>


<body bgcolor="#FFFFFF">




<body bgcolor="#FFFFFF" text="#000000">

<h1>

  Version control by dates </h1>



<h2>BMapBuilder 3.2 (November 2019) </h2>
<h3>Minor changes</h3>


<h2>BMapBuilder 3.1 (March 2013) </h2>
<h3>Minor changes</h3>

<h2>BMapBuilder 3.0 (May 2012)</h2>
<h3>New functionality</h3>
A confidence measure of LD estimation - v.g. based on the MAF values at each pair of SNPs - may be used to correct the color map.
<br>
As an example, if the default color is green, the color for LD will be cyan (intense cyan, LD=1, white: LD=0) and the color for LD confidence will be yellow (strong confidence (c=1) intense yellow, no confidence at all (c=0) white).
<br>
Therefore, <ul>
<li>in the case LD=1 and c=1 (we are certain about a very high LD), intense yellow with intense cyan will be combined resulting in intense green,</li>
<li>in the case LD=0 and c=1 (we are certain about linkage equilibrium), final color will be intense yellow, and </li>
<li>in the case LD=1, c=0 (complete uncertainty about high LD), final color will be intense cyan.</li></ul>
<br>
In conclusion, departure of intense green will mean either departure of LD, departure of confidence about the measure of LD or both, so that we should focus in the "greenest" areas of the LD maps for green as default color.


<h3>Minor changes: Default color has been set up to green.</h3>


<h2>BMapBuilder 2.3.2 (February 2009) </h2>
<h3>Minor changes</h3>

<h2>BMapBuilder 2.3 (June 2008) </h2>
<h3>New functionality</h3>
<ul>
<li>An horizontal coloured bar showing some measure for individual snps, such as MAF, is added in 2D maps on the top of the maps whether MAF is provided.</li>
<li>
LD can be compared from two different groups, such as transmitted versus untransmitted haplotypes, female versus male or sample versus individual LD (used to show recombination events when phase is inferred from trios). The difference can be displayed in 2D maps if the input file has a column with values 0, 1 or 2 with the following meaning:

<ul><li>0: Display LD in the chosen color.</li>
<li>1: Display LD in green if chosen color is red or in blue otherwise. As an example, for sample versus undividual LD it would mean LD in this pair is higher assuming non-recombination from the parent in the current file to offspring. Or if comparing Transmitted versus Untransmitted, it would mean one is greater than the other.</li>
<li>2: Display LD in blue if chosen color is red, in red otherwise. It would mean LD in this pair is higher assuming recombination from the parent in the current file to offpspring</li></ul>
</li></ul>


<h2>BMapBuilder 2.2 (April 2008)</h2>
<h3>New functionality</h3>
Minor changes
<h3>User interface</h3>
Command line interface: For long processes, a non GUI user mode has been added.


<h2>BMapBuilder 2.1 (June 2006)</h2>
<h3>New functionality</h3>
Annotated maps: Instead of SNP positions supplied in the input file, only those SNP positions in a second file (<b>ann1</b>) will be marked in the map in black. A third file (<b>ann2</b>) also containing SNP positions can be supplied and those positions will be marked in the map in red if they are not in the <b>ann1</b> file and in green if they are.
<h3>User interface</h3>
<h3>Minor changes</h3>




<h2>BMapBuilder 2.0 (May 2006)</h2>
<h3>New functionality</h3>
<p>3D plots</p>
<h3>User interface</h3>
<p>Major changes in the graphical user interface</p> 


<h2>BMapBuilder 1.0 (January 2006)</h2>
<h3>Minor changes</h3>


</body>

</html>


