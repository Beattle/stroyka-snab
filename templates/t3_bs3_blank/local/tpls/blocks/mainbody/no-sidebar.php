<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 1 columns, content only
 */
?>

<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<!-- TOP CONTENT -->
			<?php if ($this->countModules( 'top-content' )) { ?>
			<div class="top-content">
				<jdoc:include type="modules" name="<?php $this->_p('top-content') ?>" style="T3Xhtml" />
			</div>
			<?php } ?>
			<!-- //TOP CONTENT -->
			<jdoc:include type="component" />
			<!-- BOTTOM CONTENT -->
			<?php if ($this->countModules( 'bottom-content' )) { ?>
			<div class="bottom-content">
				<jdoc:include type="modules" name="<?php $this->_p('bottom-content') ?>" style="T3Xhtml" />
			</div>
			<?php } ?>
			<!-- //BOTTOM CONTENT -->
			<!-- Недавно просмотренные товары -->
			<?php if($option == 'com_virtuemart' && ($view == 'category' || $view == 'productdetails')){
	 if ($this->countModules( 'recent' )) { ?>
			<div class="recent">
				<jdoc:include type="modules" name="<?php $this->_p('recent') ?>" style="T3Xhtml" />
			</div>
			<?php }
 } 
else {} ?>
			<!-- //Недавно просмотренные товары -->
		</div>
		<!-- //MAIN CONTENT -->

	</div>
</div> 