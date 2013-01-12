<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MI 3B Jos</title>
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
<!-- start of link nivo -->
<link rel="stylesheet" href="<?=base_url();?>style/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url();?>style/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url();?>style/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url();?>style/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url();?>style/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url();?>style/css/style_nivo.css" type="text/css" media="screen" />
 <!-- end of link nivo -->
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
<?php include "user/user_template/header.php"?>
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><?php echo anchor('ecommerce/index', 'Home' , array('class'=>'selected'));?></li>
            <li><?php echo anchor('ecommerce/produk', 'Produk');?></li>
            <li><?php echo anchor('ecommerce/news', 'News');?></li>
            <li><?php echo anchor('ecommerce/forum', 'Forum');?></li>
            <li><?php echo anchor('ecommerce/caratransaksi', 'Cara Transaksi');?></li>
            <li><?php echo anchor('ecommerce/contact', 'Contact Us');?></li>
			<li><?php echo anchor('ecommerce/admin', 'Admin');?></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
	
	
    
     <div id="templatemo_middle">
	 <!------------------------------------------------------- slider ------------------------------------------------------------------------------------------>
    	<div id="wrapper">
    
        <div class="slider-wrapper theme-default">
        
            <?php foreach($slider as $row): ?>
            <div id="slider" class="nivoSlider">
                <img src="<?=base_url().$row->gambar;?>" width="150" height="100" data-thumb="<?=base_url().$row->gambar;?>" width="150" height="100" alt="" title="<?=$row->deskripsi;?>" width="300" height="200"  />
                
            </div>
            <?php endforeach;?>
            
        </div>
        

    </div>
    <script type="text/javascript" src="<?=base_url();?>style/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>style/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    </div>
	<!----------------------------------------------------------------------------- end of slider ------------------------------------------------------------------------------>
	<!-- END of middle -->
    
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	       
        <?php include "user/user_template/sidebar.php";?>
        
        <div id="content">
        	<!-------------------------------------------------------------- Produk terbaru ----------------------------------------------------------------------->
        	<h2>Produk Terbaru</h2>
          <?php foreach($all as $row): ?>
        	<div class="col col_14 product_gallery no_margin_right">
            	
            	<img src="<?=base_url().$row->gambar;?>" width="150" height="100"/>
                <h3><?=$row->nama_produk;?></h3>
                <p class="product_price"><?=$row->harga;?></p>
                <?php echo anchor('ecommerce/cart',' ',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
               </div>  
                <?php endforeach; ?>
			 <!------------------------------------------------------------------ end of Produk terbaru --------------------------------------------------------------->
           <!------------------------------------------------------------------Produk terkenal ----------------------------------------------------------------------------->      
                <h2>Produk Terkenal</h2>
          <?php foreach($terkenal as $row): ?>
        	<div class="col col_14 product_gallery no_margin_right">
            	
            	<img src="<?=base_url().$row->gambar;?>" width="150" height="100"/>
                <h3><?=$row->nama_produk;?></h3>
                <p class="product_price"><?=$row->harga;?></p>
                <?php echo anchor('ecommerce/cart2',' ',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail2','Detail',array('title'=>'Detail','class'=>'detail'));?>
               </div>  
                <?php endforeach; ?>
                  	
        <!------------------------------------------------------------------ end of Produk terkenal ----------------------------------------------------------------------------->
                	
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
   <?php include "user/user_template/footer.php";?>   
   
</div>

</body>
</html>
