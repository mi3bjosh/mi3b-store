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
            <li><?php echo anchor('ecommerce/index', 'Home');?></li>
            <li><?php echo anchor('ecommerce/produk', 'Produk' , array('class'=>'selected'));?></li>
            <li><?php echo anchor('ecommerce/news', 'News');?></li>
            <li><?php echo anchor('ecommerce/forum', 'Forum');?></li>
            <li><?php echo anchor('ecommerce/caratransaksi', 'How To Order');?></li>
            <li><?php echo anchor('ecommerce/contact', 'Contact Us');?></li>
			<li><?php echo anchor('ecommerce/admin', 'Admin');?></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<?php include "user_template/slider.php";?>
        
        <?php include "user_template/sidebar.php";?>
        
        <div id="content">
		<div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
			<br>
        	<h2>Etiam In Tellus</h2>
        	<div class="col col_14 product_gallery">
				<img src="<?=base_url();?>style/images/product/01.jpg" alt="Product 01" />
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery">
            	<img src="<?=base_url();?>style/images/product/02.jpg" alt="Product 02" />
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<img src="<?=base_url();?>style/images/product/03.jpg" alt="Product 03" />
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>
            <a href="#" class="more float_r">View all</a>
			<div class="cleaner h50"></div>
            
            <h2>Hendrerit Justo</h2>
            <div class="col col_14 product_gallery">
            	<img src="<?=base_url();?>style/images/product/04.jpg" alt="Product 04" />
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery">
            	<img src="<?=base_url();?>style/images/product/05.jpg" alt="Product 05" />
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<img src="<?=base_url();?>style/images/product/06.jpg" alt="Product 06" />
                <h3>Nulla luctus urna</h3>
                <p class="product_price">$ 193</p>
                <?php echo anchor('ecommerce/cart','Add to Cart',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>     	
            <a href="#" class="more float_r">View all</a>
            <div class="cleaner h50"></div>
            
           
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
 <?php include "user_template/footer.php";?>
   
</div>

</body>
</html>
