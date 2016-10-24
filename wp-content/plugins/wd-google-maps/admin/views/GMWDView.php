<?php	
class GMWDView  {
	////////////////////////////////////////////////////////////////////////////////////////
	// Events                                                                             //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Constants                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Variables                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
	protected $model;

	////////////////////////////////////////////////////////////////////////////////////////
	// Constructor & Destructor                                                           //
	////////////////////////////////////////////////////////////////////////////////////////
	public function __construct($model) {
		$this->model = $model;
        if(GMWDHelper::get('ajax') !=1){
            if(GMWDHelper::get('page') == "maps_gmwd" || GMWDHelper::get('page') == "options_gmwd" || GMWDHelper::get('page') == "uninstall_gmwd"){
                upgrade_pro();
            }
        ?>          
			<script>			
			  var _page = "<?php echo (GMWDHelper::get('page') && (GMWDHelper::get('page')!= "markers_gmwd" && GMWDHelper::get('page')!="circles_gmwd" && GMWDHelper::get('page')!="polygons_gmwd" && GMWDHelper::get('page')!="rectangles_gmwd" && GMWDHelper::get('page')!="polylines_gmwd")) ? GMWDHelper::get('page') : "maps_gmwd"; ?>";
			  var ajax_url = '<?php echo add_query_arg(admin_url('admin-ajax.php'),array('nonce_gmwd' => wp_create_nonce('nonce_gmwd'))); ?>';
              var nonce = '<?php echo wp_create_nonce('nonce_gmwd'); ?>';
			</script>
		
		<?php
          GMWDHelper::print_message();
          
          if(!gmwd_get_option("map_api_key")){
               if(GMWDHelper::get('page') == "maps_gmwd" || GMWDHelper::get('page') == "options_gmwd"){
                    api_key_notice();
               }
           }
		}
				
	}
	////////////////////////////////////////////////////////////////////////////////////////
	// Public Methods                                                                     //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Getters & Setters                                                                  //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Private Methods                                                                    //
	////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////
	// Listeners                                                                          //
	////////////////////////////////////////////////////////////////////////////////////////
}
