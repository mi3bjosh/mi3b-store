<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>News</title>
<link href="<?=base_url();?>/style/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?=base_url();?>style/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?=base_url();?>style/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>style/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
  mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" href="<?=base_url();?>style/css/styles.css" />
<script language="javascript" type="text/javascript" src="<?=base_url();?>style/scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?=base_url();?>style/scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?=base_url();?>style/scripts/slideitmoo-1.1.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 5,
						elemsSlide: 2,
						duration: 200,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 171,
						showControls:1});
		},
		
	});

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>
<?php include "admin_template/header.php"?>
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><?php echo anchor('ecommerce/admin', 'Home' , array('class'=>'selected'));?></li>
			<li><?php echo anchor('ecommerce/index', 'User');?></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
     
        <?php include "admin_template/sidebar.php";?>
        
        <div id="content">
		<h1><?php echo $title; ?></h1>
	
		<table>
			<tr>
				<td width="30%">ID <?php echo $news->id; ?></td>
			</tr>
			
					<tr>
						<td valign="top"><b><?php echo $news->title; ?></b></td>
					</tr>
					
					<tr>
						<td><?php echo $news->text; ?></td>
					</tr>
					<tr>
						<td valign="top">Author : <?php echo $news->author; ?></td>
					</tr>
					
					<tr>
						<td>Date : <?php echo date('d-m-Y',strtotime($news->date)); ?></td>
					</tr>
					
					<tr>
						<td> Source : <?php echo $news->src; ?></td>
					</tr>
					</tr>
					
					<tr>
						<td> Insert By : <?php echo $news->inserted_by; ?></td>
					</tr>
					
			
		</table>
		<br />
		<?php echo $link_back; ?>
	        	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   <?php include "admin_template/footer.php";?>   
   
</div>
</body>
</html>
