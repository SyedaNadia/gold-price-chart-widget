<?php
/*
*Plugin Name: Live Gold price chart widget
*Plugin URI: https://www.goldbroker.com/en/gold-spot-price-widget
*Description: Live gold price chart widget. Once activated go to Widgets and drag the Gold Price Chart in the widget area.
*Version: 1.1
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
	       $this->WP_widget("widget-gold-price", "Gold Price Chart");
	  }
	  function widget($args,$instance){
	        extract($args);
			echo $before_widget;
			echo $before_title.$instance["title"].$after_title;
			?>
			<iframe src="https://banners.goldbroker.com/en/widget/iframe/live/XAU/<?php echo $instance["height"]; ?>?currency=<?php echo $instance["currency"]; ?>" width="<?php echo $instance["width"]; ?>" height="<?php echo $instance["height"]; ?>" style="border: 0; overflow:hidden;"></iframe><br />Gold Price by <a href="https://www.goldbroker.com">GoldBroker.com</a>
			<?php
			echo $after_widget;
	  }
	  function update($new,$old){
	      return $new;
	  }
	  function form($instance){

		   $instance = wp_parse_args( (array) $instance, array( 'title' => 'Gold Price', 'currency' => 'USD', 'height' => '320', 'width' => '100%' ) );
           $title = $instance['title'];
           $currency = $instance['currency'];   
		   $height = $instance['height']; 
		   $width = $instance['width']; 

	 ?>
	   <p>
	      <label for="<?php echo $this->get_field_id('title'); ?>">Title : </label>
		  <input value="<?php echo $instance["title"]; ?>" name="<?php echo $this->get_field_name('title'); ?>" name="<?php echo $this->get_field_id('title'); ?>" type="text"/>
		</p>  
		
		<p>
		 <label for="<?php echo $this->get_field_id('currency'); ?>">Select Currency: 
        <select  id="<?php echo $this->get_field_id('currency'); ?>" name="<?php echo $this->get_field_name('currency'); ?>" type="text">
          
<option value='USD '<?php echo ($currency=='USD ')?'selected':''; ?>>USD </option>
<option value='EUR '<?php echo ($currency=='EUR ')?'selected':''; ?>>EUR </option>
<option value='CHF '<?php echo ($currency=='CHF ')?'selected':''; ?>>CHF </option>
<option value='GBP '<?php echo ($currency=='GBP ')?'selected':''; ?>>GBP </option>
<option value='AED '<?php echo ($currency=='AED ')?'selected':''; ?>>AED </option>
<option value='ANG '<?php echo ($currency=='ANG ')?'selected':''; ?>>ANG </option>
<option value='ARS '<?php echo ($currency=='ARS ')?'selected':''; ?>>ARS </option>
<option value='AUD '<?php echo ($currency=='AUD ')?'selected':''; ?>>AUD </option>
<option value='AWG '<?php echo ($currency=='AWG ')?'selected':''; ?>>AWG </option>
<option value='AZN '<?php echo ($currency=='AZN ')?'selected':''; ?>>AZN </option>
<option value='BAM '<?php echo ($currency=='BAM ')?'selected':''; ?>>BAM </option>
<option value='BBD '<?php echo ($currency=='BBD ')?'selected':''; ?>>BBD </option>
<option value='BDT '<?php echo ($currency=='BDT ')?'selected':''; ?>>BDT </option>
<option value='BGN '<?php echo ($currency=='BGN ')?'selected':''; ?>>BGN </option>
<option value='BMD '<?php echo ($currency=='BMD ')?'selected':''; ?>>BMD </option>
<option value='BOB '<?php echo ($currency=='BOB ')?'selected':''; ?>>BOB </option>
<option value='BRL '<?php echo ($currency=='BRL ')?'selected':''; ?>>BRL </option>
<option value='BSD '<?php echo ($currency=='BSD ')?'selected':''; ?>>BSD </option>
<option value='BTC '<?php echo ($currency=='BTC ')?'selected':''; ?>>BTC </option>
<option value='BYR '<?php echo ($currency=='BYR ')?'selected':''; ?>>BYR </option>
<option value='BZD '<?php echo ($currency=='BZD ')?'selected':''; ?>>BZD </option>
<option value='CAD '<?php echo ($currency=='CAD ')?'selected':''; ?>>CAD </option>
<option value='CDF '<?php echo ($currency=='CDF ')?'selected':''; ?>>CDF </option>
<option value='CLF '<?php echo ($currency=='CLF ')?'selected':''; ?>>CLF </option>
<option value='CLP '<?php echo ($currency=='CLP ')?'selected':''; ?>>CLP </option>
<option value='CNH '<?php echo ($currency=='CNH ')?'selected':''; ?>>CNH </option>
<option value='CNY '<?php echo ($currency=='CNY ')?'selected':''; ?>>CNY </option>
<option value='COP '<?php echo ($currency=='COP ')?'selected':''; ?>>COP </option>
<option value='CRC '<?php echo ($currency=='CRC ')?'selected':''; ?>>CRC </option>
<option value='CUP '<?php echo ($currency=='CUP ')?'selected':''; ?>>CUP </option>
<option value='CVE '<?php echo ($currency=='CVE ')?'selected':''; ?>>CVE </option>
<option value='CZK '<?php echo ($currency=='CZK ')?'selected':''; ?>>CZK </option>
<option value='DJF '<?php echo ($currency=='DJF ')?'selected':''; ?>>DJF </option>
<option value='DKK '<?php echo ($currency=='DKK ')?'selected':''; ?>>DKK </option>
<option value='DOP '<?php echo ($currency=='DOP ')?'selected':''; ?>>DOP </option>
<option value='DZD '<?php echo ($currency=='DZD ')?'selected':''; ?>>DZD </option>
<option value='EGP '<?php echo ($currency=='EGP ')?'selected':''; ?>>EGP </option>
<option value='FJD '<?php echo ($currency=='FJD ')?'selected':''; ?>>FJD </option>
<option value='GIP '<?php echo ($currency=='GIP ')?'selected':''; ?>>GIP </option>
<option value='GTQ '<?php echo ($currency=='GTQ ')?'selected':''; ?>>GTQ </option>
<option value='GYD '<?php echo ($currency=='GYD ')?'selected':''; ?>>GYD </option>
<option value='HKD '<?php echo ($currency=='HKD ')?'selected':''; ?>>HKD </option>
<option value='HRK '<?php echo ($currency=='HRK ')?'selected':''; ?>>HRK </option>
<option value='HUF '<?php echo ($currency=='HUF ')?'selected':''; ?>>HUF </option>
<option value='IDR '<?php echo ($currency=='IDR ')?'selected':''; ?>>IDR </option>
<option value='ILS '<?php echo ($currency=='ILS ')?'selected':''; ?>>ILS </option>
<option value='INR '<?php echo ($currency=='INR ')?'selected':''; ?>>INR </option>
<option value='IRR '<?php echo ($currency=='IRR ')?'selected':''; ?>>IRR </option>
<option value='ISK '<?php echo ($currency=='ISK ')?'selected':''; ?>>ISK </option>
<option value='JMD '<?php echo ($currency=='JMD ')?'selected':''; ?>>JMD </option>
<option value='JPY '<?php echo ($currency=='JPY ')?'selected':''; ?>>JPY </option>
<option value='KES '<?php echo ($currency=='KES ')?'selected':''; ?>>KES </option>
<option value='KGS '<?php echo ($currency=='KGS ')?'selected':''; ?>>KGS </option>
<option value='KHR '<?php echo ($currency=='KHR ')?'selected':''; ?>>KHR </option>
<option value='KPW '<?php echo ($currency=='KPW ')?'selected':''; ?>>KPW </option>
<option value='KRW '<?php echo ($currency=='KRW ')?'selected':''; ?>>KRW </option>
<option value='KWD '<?php echo ($currency=='KWD ')?'selected':''; ?>>KWD </option>
<option value='KYD '<?php echo ($currency=='KYD ')?'selected':''; ?>>KYD </option>
<option value='KZT '<?php echo ($currency=='KZT ')?'selected':''; ?>>KZT </option>
<option value='LAK '<?php echo ($currency=='LAK ')?'selected':''; ?>>LAK </option>
<option value='LBP '<?php echo ($currency=='LBP ')?'selected':''; ?>>LBP </option>
<option value='LTC '<?php echo ($currency=='LTC ')?'selected':''; ?>>LTC </option>
<option value='LTL '<?php echo ($currency=='LTL ')?'selected':''; ?>>LTL </option>
<option value='LVL '<?php echo ($currency=='LVL ')?'selected':''; ?>>LVL </option>
<option value='LYD '<?php echo ($currency=='LYD ')?'selected':''; ?>>LYD </option>
<option value='MAD '<?php echo ($currency=='MAD ')?'selected':''; ?>>MAD </option>
<option value='MGA '<?php echo ($currency=='MGA ')?'selected':''; ?>>MGA </option>
<option value='MKD '<?php echo ($currency=='MKD ')?'selected':''; ?>>MKD </option>
<option value='MMK '<?php echo ($currency=='MMK ')?'selected':''; ?>>MMK </option>
<option value='MNT '<?php echo ($currency=='MNT ')?'selected':''; ?>>MNT </option>
<option value='MOP '<?php echo ($currency=='MOP ')?'selected':''; ?>>MOP </option>
<option value='MUR '<?php echo ($currency=='MUR ')?'selected':''; ?>>MUR </option>
<option value='MVR '<?php echo ($currency=='MVR ')?'selected':''; ?>>MVR </option>
<option value='MXN '<?php echo ($currency=='MXN ')?'selected':''; ?>>MXN </option>
<option value='MXV '<?php echo ($currency=='MXV ')?'selected':''; ?>>MXV </option>
<option value='MYR '<?php echo ($currency=='MYR ')?'selected':''; ?>>MYR </option>
<option value='NIO '<?php echo ($currency=='NIO ')?'selected':''; ?>>NIO </option>
<option value='NOK '<?php echo ($currency=='NOK ')?'selected':''; ?>>NOK </option>
<option value='NZD '<?php echo ($currency=='NZD ')?'selected':''; ?>>NZD </option>
<option value='OMR '<?php echo ($currency=='OMR ')?'selected':''; ?>>OMR </option>
<option value='PAB '<?php echo ($currency=='PAB ')?'selected':''; ?>>PAB </option>
<option value='PEN '<?php echo ($currency=='PEN ')?'selected':''; ?>>PEN </option>
<option value='PGK '<?php echo ($currency=='PGK ')?'selected':''; ?>>PGK </option>
<option value='PHP '<?php echo ($currency=='PHP ')?'selected':''; ?>>PHP </option>
<option value='PKR '<?php echo ($currency=='PKR ')?'selected':''; ?>>PKR </option>
<option value='PLN '<?php echo ($currency=='PLN ')?'selected':''; ?>>PLN </option>
<option value='PYG '<?php echo ($currency=='PYG ')?'selected':''; ?>>PYG </option>
<option value='QAR '<?php echo ($currency=='QAR ')?'selected':''; ?>>QAR </option>
<option value='RON '<?php echo ($currency=='RON ')?'selected':''; ?>>RON </option>
<option value='RSD '<?php echo ($currency=='RSD ')?'selected':''; ?>>RSD </option>
<option value='RUB '<?php echo ($currency=='RUB ')?'selected':''; ?>>RUB </option>
<option value='SAR '<?php echo ($currency=='SAR ')?'selected':''; ?>>SAR </option>
<option value='SBD '<?php echo ($currency=='SBD ')?'selected':''; ?>>SBD </option>
<option value='SCR '<?php echo ($currency=='SCR ')?'selected':''; ?>>SCR </option>
<option value='SEK '<?php echo ($currency=='SEK ')?'selected':''; ?>>SEK </option>
<option value='SGD '<?php echo ($currency=='SGD ')?'selected':''; ?>>SGD </option>
<option value='SHP '<?php echo ($currency=='SHP ')?'selected':''; ?>>SHP </option>
<option value='SYP '<?php echo ($currency=='SYP ')?'selected':''; ?>>SYP </option>
<option value='THB '<?php echo ($currency=='THB ')?'selected':''; ?>>THB </option>
<option value='TMT '<?php echo ($currency=='TMT ')?'selected':''; ?>>TMT </option>
<option value='TND '<?php echo ($currency=='TND ')?'selected':''; ?>>TND </option>
<option value='TRY '<?php echo ($currency=='TRY ')?'selected':''; ?>>TRY </option>
<option value='TTD '<?php echo ($currency=='TTD ')?'selected':''; ?>>TTD </option>
<option value='TWD '<?php echo ($currency=='TWD ')?'selected':''; ?>>TWD </option>
<option value='TZS '<?php echo ($currency=='TZS ')?'selected':''; ?>>TZS </option>
<option value='UAH '<?php echo ($currency=='UAH ')?'selected':''; ?>>UAH </option>
<option value='UYU '<?php echo ($currency=='UYU ')?'selected':''; ?>>UYU </option>
<option value='UZS '<?php echo ($currency=='UZS ')?'selected':''; ?>>UZS </option>
<option value='VEF '<?php echo ($currency=='VEF ')?'selected':''; ?>>VEF </option>
<option value='VND '<?php echo ($currency=='VND ')?'selected':''; ?>>VND </option>
<option value='XAF '<?php echo ($currency=='XAF ')?'selected':''; ?>>XAF </option>
<option value='XCD '<?php echo ($currency=='XCD ')?'selected':''; ?>>XCD </option>
<option value='XDR '<?php echo ($currency=='XDR ')?'selected':''; ?>>XDR </option>
<option value='XOF '<?php echo ($currency=='XOF ')?'selected':''; ?>>XOF </option>
<option value='XPF '<?php echo ($currency=='XPF ')?'selected':''; ?>>XPF </option>
<option value='YER '<?php echo ($currency=='YER ')?'selected':''; ?>>YER </option>
<option value='ZAR '<?php echo ($currency=='ZAR ')?'selected':''; ?>>ZAR </option>
<option value='ZWL '<?php echo ($currency=='ZWL ')?'selected':''; ?>>ZWL </option>
        </select>                
      </label>
	  </p>
	  
	  <p>
	      <label for="<?php echo $this->get_field_id('height'); ?>">Height : </label>
		  <input value="<?php echo $instance["height"]; ?>" name="<?php echo $this->get_field_name('height'); ?>" name="<?php echo $this->get_field_id('height'); ?>" type="text"/>
		</p>  
		
		<p>
	      <label for="<?php echo $this->get_field_id('width'); ?>">Width : </label>
		  <input value="<?php echo $instance["width"]; ?>" name="<?php echo $this->get_field_name('width'); ?>" name="<?php echo $this->get_field_id('width'); ?>" type="text"/>
		</p> 
		
	   <?php
	      
	  }
}	  
?>