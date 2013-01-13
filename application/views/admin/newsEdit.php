<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>CONTOH APLIKASI CRUD</title>
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
		<h1><?php echo $title; ?></h1>
		<?php echo $message; ?>
		<form method="post" action="<?php echo $action; ?>">
		<div class="data">
		<table>
			<tr>
				<td width="30%">ID</td>
				<td><input type="text" name="id" disabled="disable" class="text" value="<?php echo set_value('id'); ?>"/></td>
				<input type="hidden" name="id" value="<?php echo set_value('id',$this->form_data->id); ?>"/>
			</tr>
			<tr>
				<td valign="top">Title<span style="color:red;">*</span></td>
				<td><input type="text" name="title" class="text" value="<?php echo set_value('title',$this->form_data->title); ?>"/>
<?php echo form_error('title'); ?>
				</td>
			</tr>
			<tr>
				<td valign="top">Text<span style="color:red;">*</span></td>
				<td><Textarea name="text" class="text" ><?php echo set_value('text',$this->form_data->text); ?>
				</Textarea><?php echo form_error('text'); ?>

				</td>
			</tr>
			<tr>
				<td valign="top">Author<span style="color:red;">*</span></td>
				<td><input type="text" name="author" class="text"  value="<?php echo set_value('author',$this->form_data->author); ?>"/>
<?php echo form_error('author'); ?>
				</td>
			</tr>
			
			<tr>
				<td valign="top">Date (dd-mm-yyyy)<span style="color:red;">*</span></td>
				<td><input type="text" name="date" onclick="displayDatePicker('date');" class="text" value="<?php echo set_value('date',$this->form_data->date); ?>"/>
				<a href="javascript:void(0);" onclick="displayDatePicker('date');"><img src="<?php echo base_url(); ?>res/css/images/calendar.png" alt="calendar" border="0"></a>
<?php echo form_error('date'); ?></td>
				</td>
			</tr>
			<tr>
				<td valign="top">Source<span style="color:red;">*</span></td>
				<td><Textarea name="src" class="text" ><?php echo set_value('src',$this->form_data->src); ?></Textarea><?php echo form_error('src'); ?>

				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Save"/></td>
			</tr>
		</table>
		</form>
		<br />
		<?php echo $link_back; ?>
	</div>
	     </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   <?php include "admin_template/footer.php";?>   
   
</div>
</body>
</html>
