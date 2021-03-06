<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

	<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOT NAVIGATION -->
		<div class="container">
			<?php $this->spotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
		</div>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>

	<section class="t3-copyright">
		<div class="container">
			<div class="row">
				<?php if ($this->countModules( 'footer-left' )) { ?>
				<div class="col-sm-6 col-xs-12 footer-left">
					<jdoc:include type="modules" name="<?php $this->_p('footer-left') ?>" />
				</div>
				<?php } ?>
				<?php if ($this->countModules( 'footer-right' )) { ?>
				<div class="col-sm-6 col-xs-12 footer-right">
					<jdoc:include type="modules" name="<?php $this->_p('footer-right') ?>" />
				</div>
				<?php } ?>
			</div>			
		</div>
	</section>

</footer>
<!-- //FOOTER -->

<!-- BACK TOP TOP BUTTON -->

<div id="back-to-top" data-spy="affix" data-offset-top="300" class="back-to-top hidden-xs hidden-sm affix-top">
	<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
</div>

<script type="text/javascript">
	(function($) {
		// Back to top
		$('#back-to-top').on('click', function(){
		$("html, body").animate({scrollTop: 0}, 500);
			return false
		});
	})(jQuery);
</script>
<!-- BACK TO TOP BUTTON -->