<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>openEHR Programs</title>
	<?php include 'panel/headpanel.php' ?>
	
</head>


<body>
<div id="MainFrame">
	
	<div id="TopPanel">
		<?php include 'panel/toppanel.php' ?>
	</div>
	
	<div id="TopMenu">
		<div class="nav">
		<?php include 'menu/topmenu.php' ?>
		</div>
	</div> 

	<div id="MainArea" style="margin-left:30px; width:900px; height:850px;">
		
		<div id="TextArea" style="left:0px; width:900px; height:850px;">
		
			<h1>The openEHR Programs</h1>
			<p>The main work of the openEHR Foundation is performed by four 'programs' which respectively focus on specifications, clinical modelling, software, and localisation. The first three of these programs correspond to the primary types of output of the openEHR community. Work on all of the programs is performed by community members. A lightweight system of governance, influenced by the governance systems of Apache Foundation and the International Health Terminology Standards Development Organisation (IHTSDO), has been defined to enable defensible decision-making.</p>
			
			<img src="gui/SpecificationFrame.png" usemap="#specification" align="left"/>
			<map name="specification">
			  <area shape="rect" coords="0,0,250,150" href="programs/specification" alt="Specification Program" />
			</map> 
			
			<h2>Specification Program</h2>
			<p>The Specifications Program defines the formal models and languages defining openEHR data, openEHR content models (archetypes and templates) and openEHR services and APIs. These specifications are published and used in their own right and also underpin the Clinical Modelling Program (for which they provide the language of archetypes) and the Software Program (for which they provide schemas and interface definitions for software).</p>
			<a href="programs/specification" style="line-height:200%;">Learn more</a><br/><br/><br/>
			
			
			<img src="gui/ModelsFrame.png" usemap="#models" align="left"/>
			<map name="models">
			  <area shape="rect" coords="0,0,250,150" href="programs/clinicalmodels" alt="Clinical Models Program" />
			</map> 
			
			<h2>Clinical Models Program</h2>
			<p>The work of the Clinical Modelling Program is performed largely by clinical professionals and health informatics experts working on the Clinical Knowledge Manager (CKM), building archetypes which act as international standards for re-usable content. These archetypes can be used by national and local programs, and are the basis for building templates, from which software artefacts are generated by tooling.</p>
			<a href="programs/clinicalmodels" style="line-height:200%;">Learn more</a><br/><br/><br/>
			
			
			<img src="gui/SoftwareFrame.png" usemap="#software" align="left"/>
			<map name="software">
			  <area shape="rect" coords="0,0,250,150" href="programs/software" alt="Software Program" />
			</map> 
			
			<h2>Software Program</h2>
			<p>The Software Program is responsible for the development of open source reference implementations of both tooling and information system components. Such components can be freely used by openEHR implementers to build their own tooling and systems, and are available under the industry-friendly Apache 2 licence. The software program performs another very important job: ensuring the implementability of all specifications.</p>
			<a href="programs/software" style="line-height:200%;">Learn more</a><br/><br/><br/>
				
				
			<img src="gui/LocalisationFrame.png" usemap="#localisation" align="left"/>
			<map name="localisation">
			  <area shape="rect" coords="0,0,250,150" href="programs/localisation" alt="Localisation Program" />
			</map> 
			
			<h2>Localisation Program</h2>
			<p>Bringing the technical outputs of the other programs to the real world is the job of the Localisation Program, which works in a distributed fashion around the world, generally in collaboration with local, regional and national standards groups, as well as industry and academic groups. The Localisation Program aims to make the outputs of openEHR available and usable in local languages and within diverse healthcare cultures and funding environments.</p>
			<a href="programs/software" style="line-height:200%;">Learn more</a><br/>
		
		</div>
		
	</div>

	
	<div id="BottomMenu">
	<?php include 'menu/bottommenu.php' ?>
	</div>

	<div id="BottomPanel">
	<?php include 'panel/bottompanel.php' ?>
	</div>

</div>
<script type="text/javascript">
var dropdown=new MENU.dropdown.init("dropdown", {id:'menu', active:'menuhover'});
</script>

</body>
</html>