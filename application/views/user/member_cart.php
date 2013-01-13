<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MI 3B Jos</title>
<link href="<?=base_url();?>/style/css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?=base_url();?>/style/css/ddsmoothmenu.css" />

<script type="text/javascript" src="<?=base_url();?>/style/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>/style/js/ddsmoothmenu.js">

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

<link rel="stylesheet" type="text/css" href="<?=base_url();?>/style/css/styles.css" />
<script language="javascript" type="text/javascript" src="<?=base_url();?>/style/scripts/mootools-1.2.1-core.js"></script>
<script language="javascript" type="text/javascript" src="<?=base_url();?>/style/scripts/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript" src="<?=base_url();?>/style/scripts/slideitmoo-1.1.js"></script>
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
<?php include "user_template/header.php";?>
    
    <div id="templatemo_menu" class="ddsmoothmenu">
       <ul>
            <li><?php echo anchor('ecommerce/member_index', 'Home');?></li>
            <li><?php echo anchor('ecommerce/member_product', 'Produk' , array('class'=>'selected'));?></li>
            <li><?php echo anchor('ecommerce/member_news', 'News');?></li>
            <li><?php echo anchor('ecommerce/member_forum', 'Forum');?></li>
            <li><?php echo anchor('ecommerce/member_transaksi', 'Cara Transaksi');?></li>
            <li><?php echo anchor('ecommerce/member_contact', 'Contact Us');?></li>
		
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<?php include "user_template/slider.php";?>
        
        <?php include "user_template/sidebarin.php";?>
		 <div id="content">
		
        	<table width="700px" cellspacing="0" cellpadding="5">
                   	  <tr bgcolor="#CCCCCC">
                        	<th width="220" align="left">Image </th> 
                        	<th width="180" align="left">Description </th> 
                       	  	<th width="100" align="center">Quantity </th> 
                        	<th width="60" align="right">Price </th> 
                        	<th width="60" align="right">Total </th> 
                        	<th width="90"> </th>
                            
                      </tr>
                    	<tr>
                        	<td><img src="<?=base_url();?>style/images/product/01.jpg" alt="image 01" /></td> 
                        	<td>Etiam in tellus</td> 
                            <td align="center"><input type="text" value="1" style="width: 20px; text-align: right" /> </td>
                            <td align="right">$100 </td> 
                            <td align="right">$100 </td>
                            <td align="center"> <a href="#"><img src="<?=base_url();?>style/images/remove_x.gif" alt="remove" /><br />Remove</a> </td>
						</tr>
                        <tr>
                        	<td><img src="<?=base_url();?>style/images/product/02.jpg" alt="image 02" /> </td>
                            <td>Hendrerit justo</td> 
                       	  	<td align="center"><input type="text" value="1" style="width: 20px; text-align: right" />  </td>
                            <td align="right">$40  </td>
                            <td align="right">$40 </td>
                            <td align="center"> <a href="#"><img src="<?=base_url();?>style/images/remove_x.gif" alt="remove" /><br />Remove</a>  </td>
						</tr>
                        <tr>
                        	<td colspan="3" align="right"  height="40px">Have you modified your basket? Please click here to <a href=
							"shoppingcart.html"><strong>Update</strong></a>&nbsp;&nbsp;</td>
                            <td align="right" style="background:#ccc; font-weight:bold"> Total </td>
                            <td align="right" style="background:#ccc; font-weight:bold">$140 </td>
                            <td style="background:#ccc; font-weight:bold"> </td>
						</tr>
					</table>
                    <div style="float:right; width: 215px; margin-top: 20px;">
                    
                        <div class="checkout"><a href="#" class="more">Proceed to Checkout</a></div>
                        <div class="cleaner h20"></div>
                        <div class="continueshopping"><a href="javascript:history.back()" class="more">Continue Shopping</a></div>
                    	
                    </div>
            
		</div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php include "user_template/footer.php"?>
   
</div>

</body>
</html>