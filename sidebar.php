 <div class="col-lg-4 sidebar ftco-animate">
            
          
            <?php 
               if(is_active_sidebar( 'rs1' ));{
                dynamic_sidebar( 'rs1' );
               } ?>

                <?php 
               if(is_active_sidebar( 'rs2' ));{
                dynamic_sidebar( 'rs2' );
               } ?>
          
             <?php 
               if(is_active_sidebar( 'rs3' ));{
                dynamic_sidebar( 'rs3' );
               } ?>
          
              <?php 
               if(is_active_sidebar( 'rs4' ));{
                dynamic_sidebar( 'rs4' );
               } ?>
          </div>