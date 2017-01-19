







<!DOCTYPE html>
<html lang="en">
<head>
<title>Concasa Real Estate - Buy and Sell Homes - List v2</title>

 <?php include("head-index.php"); ?> 

</head>

<body class="category-page">
<div id="page"> 




<!-- Header -->
<?php include("header.php"); ?> 
<!-- end header --> 
  
  



  
  <!-- Main Container -->
  <section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
      <div class="row">
	  
	  
<!-- Categorias -->		
<?php include("busqueda-iz.php"); ?> 	
<!-- Fin Categorias -->			
		
	  
	  
	  
  <!-- Contenidos Centro -->		  



  <div class="col-sm-9 col-sm-push-3" style="">
  
    <div class="map-wrapper">
	
	

    </div>

  
  
  
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  

                  

                </div>
              </div>
            </div>
          </div>
		  




		  
          <article class="col-main">
            <h2 class="page-heading"> <span class="page-heading-title">LIST PROPERTIES</span> </h2>
            <div class="display-product-option">
              <div class="pager hidden-xs">

              </div>
              <div class="sorter">
                <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div>
              </div>
            </div>
			
            <div class="toolbar">
              <div class="row">

                <div class="col-lg-6 col-sm-7 col-md-5" style="float:right;">
                  <div class="pager">
                    <div class="pages">
                      <label>Page <?php echo ($pag+1); ?> of <?php echo $numpaginas+1; ?></label>
                      <ul class="pagination">
                        <li><a href="#"  onclick="irapagina(0);" >&laquo;</a></li>
                        <?php echo $paginacion; ?>

                        <li><a href="#" onclick="irapagina(<?php echo $numpaginas; ?>);" >&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3">

                </div>
              </div>
            </div>			
			
			

 
 
 
 
 
 			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						
						
						
	<?php echo $listado; ?>						
						
						





						</ul>
				</section><!-- // grid-wrap -->
				
				




				</div><!-- // grid-gallery -->

 
 
 
 
 
 
 



            <div class="toolbar">
              <div class="row">

                <div class="col-lg-6 col-sm-7 col-md-5" style="float:right;">
                  <div class="pager">
                    <div class="pages">
                      <label>Page <?php echo ($pag+1); ?> of <?php echo $numpaginas+1; ?></label>
                      <ul class="pagination">
                        <li><a href="#"  onclick="irapagina(0);" >&laquo;</a></li>
                        <?php echo $paginacion; ?>

                        <li><a href="#" onclick="irapagina(<?php echo $numpaginas; ?>);" >&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-12 col-md-3">

                </div>
              </div>
            </div>			
			




			</article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>


 
<div id="body-container" style="display:none;">
      
        <div class="tabs"></div>                      
              
                <div id="content">
          <div class="panel">
      <div class="panel-region-top">
     


  </div>
  
  
  
  
  
 
  <div class="breadcrumbs" style="  width:730px; height:27px; margin-bottom:10px; text-transform:uppercase; font-size: 14px;   ">
  <p class="current" style="float:left;" >LIST OF PROPERTIES</p> 
  </div>   
  
  
  
<div  style="  width:730px; min-height:27px; margin-bottom:20px; margin-top:15px; text-transform:uppercase; font-size: 14px;   ">
		
			<div class="wp-pagenavi" style=" min-height:20px; ">
			
			
			
			
			<div style="float:right;">
			
				<span class="pages">Page <?php echo ($pag+1); ?> of <?php echo $numpaginas; ?></span>
				<a href="#"  onclick="irapagina(0);" class="first"  >« First</a>

				<?php echo $paginacion; ?>

				<a href="#"  onclick="irapagina(<?php echo $numpaginas; ?>);"  class="last">Last »</a>
				
			</div>
				
				
			</div>

</div> 
  
  
   
  
      <div class="panel-region-top" style="min-height:458px;">

			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
						
						
					

						
						
<?php echo $listado; ?>				
						
						
						
						
						
						
						
						
						
						
						
						



		
					</ul>
				</section><!-- // grid-wrap -->
				
				
		

			
			
			</div>
			<!-- // grid-gallery -->
			
			 
  <div class="clearfix"></div>
  </div>
 
 
  
   
  
  
  
  
<div  style="  width:730px; min-height:27px; margin-bottom:20px; margin-top:15px; text-transform:uppercase; font-size: 14px;   ">
		
			<div class="wp-pagenavi" style=" min-height:20px; ">
			

			
			
			<div style="float:right;">
			
				<span class="pages">Page <?php echo ($pag+1); ?> of <?php echo $numpaginas; ?></span>
				<a href="#"  onclick="irapagina(0);" class="first"  >« First</a>

				<?php echo $paginacion; ?>

				<a href="#"  onclick="irapagina(<?php echo $numpaginas; ?>);"  class="last">Last »</a>
				
			</div>
				
				
			</div>

</div> 
  
  
  
  
  
  
  
  
  
  
  
 </br> 
  <div class="breadcrumbs" style="  width:730px; height:27px; margin-bottom:10px; text-transform:uppercase; font-size: 14px;   "><p class="current">PROFESSIONAL SALES TEAM</p></div>   
<div class="" style="   width:722px; height:69px;  text-transform:uppercase; font-size: 14px;   "><img src="img/team-sales.jpg" alt="" ></div>    
  
    
  <div class="clearfix"></div>
</div> 

       </div>
	   
	   
	   
	   

<!-- bottom -->
                
</div>




		</div>
    </div>
  </section>
  <!-- Main Container End --> 
  

  
<!-- Footer --> 
<?php include("footer.php"); ?> 	  
<!-- End Footer --> 

  
  </div>



<?php include("jsfooter.php"); ?> 	
 






</body>
</html>



