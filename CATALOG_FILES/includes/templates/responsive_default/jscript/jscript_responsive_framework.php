<?php
/**
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version ZCA/GIT: $Id: rbarbour New for v1.5.5 $
 */
?>


<?php if ( $detect->isMobile() && !$detect->isTablet() && $_SESSION['layoutType'] == 'full' || $detect->isTablet() && $_SESSION['layoutType'] == 'full' ){ ?>

<script type="text/javascript"><!--//

(function($) {
$(document).ready(function() {

$('.layout>[class*="columns"]').addClass('full');
$('.blocks>[class*="columns"]').addClass('full');
 $('.layout').css({
     'min-width': '<?php echo SET_MAX_WIDTH ?>',
     'margin': 'auto'
 });

  });

}) (jQuery);

//--></script>

<?php } else if ( $detect->isMobile() && !$detect->isTablet() || $_SESSION['layoutType'] == 'mobile' ) { ?>

<script type="text/javascript"><!--//

(function($) {
$(document).ready(function() {

$('input#email-address').clone().attr('type','email').insertAfter('input#email-address').prev().remove();$('input#searchHeader').clone().attr('type','search').insertAfter('input#searchHeader').prev().remove();$('input#mailChimp').clone().attr('type','email').insertAfter('input#mailChimp').prev().remove();$('input#login-email-address').clone().attr('type','email').insertAfter('input#login-email-address').prev().remove();$('input#telephone').clone().attr('type','tel').insertAfter('input#telephone').prev().remove();$('input#dob').clone().attr('type','date').insertAfter('input#dob').prev().remove();$('input#fax').clone().attr('type','tel').insertAfter('input#fax').prev().remove();

  });

}) (jQuery);

//--></script>

<?php } else if ( $detect->isTablet() || $_SESSION['layoutType'] == 'tablet' ){ ?>


<?php } else { ?>



<?php } ?>
