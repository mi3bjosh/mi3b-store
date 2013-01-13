
<html lang="en-US">
 <head>
 
 <title></title>
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

<script type="text/javascript" src="<?php echo base_url(); ?>res/js/calendar.js"></script>

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
 
 <form method="post" action="<?php echo $action; ?>">
 <table>
 <tr>
	<td colspan="2">
		<h3>Yakin Ingin Menghapus Data </h3>
	</td>
	
</tr>
 <tr>
	<td align="right">
	<input type="hidden" name="id" value="<?php echo set_value('id',$this->form_data->id); ?>"/>
<?php echo $link_back; ?> </td>
	<td align="left">
	<input type="submit" value="Delete"/><td>
	</td>
	
</tr>
 

</table>
 </form>
 
      </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   <?php include "admin_template/footer.php";?>   
   
</div>
 </body>
</html>
