<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MI 3B Jos</title>
<link href="<?=base_url();?>style/css/templatemo_style.css" rel="stylesheet" type="text/css" />

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

<link rel="stylesheet" href="<?=base_url();?>style/css/lightbox.css" type="text/css" media="screen" />
	
<script src="<?=base_url();?>style/js/prototype.js" type="text/javascript"></script>
<script src="<?=base_url();?>style/js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="<?=base_url();?>style/js/lightbox.js" type="text/javascript"></script>

</head>
<?php include "user_template/header.php"?>
    
    <div id="templatemo_menu" class="ddsmoothmenu">
       <ul>
            <li><?php echo anchor('ecommerce/index', 'Home');?></li>
            <li><?php echo anchor('ecommerce/produk', 'Produk' , array('class'=>'selected'));?></li>
            <li><?php echo anchor('ecommerce/news', 'News');?></li>
            <li><?php echo anchor('ecommerce/forum', 'Forum');?></li>
            <li><?php echo anchor('ecommerce/caratransaksi', 'Cara Transaksi');?></li>
            <li><?php echo anchor('ecommerce/contact', 'Contact Us');?></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        <?php include "user_template/sidebar.php"?>
        
        <div id="content">
        	<h2>Product Details</h2>
            <div class="col col_13">
        	<a rel="lightbox[portfolio]" href="<?=base_url();?>style/images/product/10_l.jpg" title="Lady Shoes"><img src="<?=base_url();?>style/images/product/10.jpg" alt="Image 10" /></a>
            </div>
            <div class="col col_13 no_margin_right">
                <table>
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>$100</td>
                    </tr>
                    <tr>
                        <td height="30">Availability:</td>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <td height="30">Model:</td>
                        <td>Product 14</td>
                    </tr>
                    <tr>
                        <td height="30">Manufacturer:</td>
                        <td>Apple</td>
                    </tr>
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="shoppingcart.html" class="add_to_cart">Add to Cart</a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5><strong>Product Description</strong></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero.</p>	
            
            <div class="cleaner h50"></div>
            
            <h4>Other Products</h4>
        	<div class="col col_14 product_gallery">
            	<img src="<?=base_url();?>style/images/product/01.jpg" alt="Product 01" />
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <?php echo anchor('ecommerce/cart',' ',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery">
            	<img src="<?=base_url();?>style/images/product/02.jpg" alt="Product 02" />
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <?php echo anchor('ecommerce/cart',' ',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>        	
            <div class="col col_14 product_gallery no_margin_right">
            	<img src="<?=base_url();?>style/images/product/03.jpg" alt="Product 03" />
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <?php echo anchor('ecommerce/cart',' ',array('title'=>'Cart','class'=>'add_to_cart'));?>
				<?php echo anchor('ecommerce/detail','Detail',array('title'=>'Detail','class'=>'detail'));?>
            </div>
            <a href="#" class="more float_r">View all</a>
            
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <?php include "user_template/footer.php"?>
   
</div>

</body>
</html>
