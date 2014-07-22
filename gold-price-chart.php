<?php
/*
*Plugin Name: Live Gold price chart widget
*Plugin URI: https://www.goldbroker.com/en/gold-spot-price-widget
*Description: free gold price chart widget
*Version: 1.0
*Author: GoldBroker
*Author URI:http://www.goldbroker.com
*/

add_action('widgets_init','gold_price_chart_init');

function gold_price_chart_init(){
         register_widget('gold_price_chart_widget');
}


class gold_price_chart_widget extends WP_widget{

      function gold_price_chart_widget(){
	       $options = array(
		        "classname" => "gold-price-chart",
				"description" => "Live Gold price chart widget"
				);
	       $this->WP_widget("widget-gold-price", "Widget Gold Price Chart");
	  }
	  function widget($args,$d){
	        extract($args);
			echo $before_widget;
			echo $before_title.$d["titre"].$after_title;
			?>
			<iframe src="https://banners.goldbroker.com/en/widget/iframe/live/XAU/320?currency=<?php echo $d["currency"]; ?>" width="100%" height="320" style="border: 0; overflow:hidden;"></iframe><br>Gold Price by <a href="https://www.goldbroker.com/en/">GoldBroker.com</a> 
			<?php
			echo $after_widget;
	  }
	  function update($new,$old){
	      return $new;
	  }
	  function form($d){
	      $defaut = array(
		     "titre" => "Gold Price",
			 "currency" => "USD"
		  );
		  $d = wp_parse_args($d,$defaut)
	   ?>
	   <p>
	      <label for="<?php echo $this->get_field_id('titre'); ?>">Title : </label>
		  <input value="<?php echo $d["titre"]; ?>" name="<?php echo $this->get_field_name('titre'); ?>" name="<?php echo $this->get_field_id('titre'); ?>" type="text"/>
		</p>  
		
		 <p>
	      <label for="<?php echo $this->get_field_id('currency'); ?>">Currency : </label>
		  <input value="<?php echo $d["currency"]; ?>" name="<?php echo $this->get_field_name('currency'); ?>" name="<?php echo $this->get_field_id('currency'); ?>" type="text" maxlength="3"/>
		</p>  
		
	   <?php
	      
	  }
}	  
?>