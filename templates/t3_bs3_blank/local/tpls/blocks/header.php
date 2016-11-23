<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$slogan    = $this->params->get('slogan', '');
$logotype  = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', T3Path::getUrl('images/logo.png', '', true)) : '';
$logoimgsm = ($logotype == 'image' && $this->params->get('enable_logoimage_sm', 0)) ? $this->params->get('logoimage_sm', T3Path::getUrl('images/logo-sm.png', '', true)) : false;


if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

?>

<!-- HEADER -->
<header id="t3-header" class="container t3-header">
	<div class="row">

		<!-- LOGO -->
		<div class="col-xs-6 col-sm-6 col-md-3 logo">
			<div class="logo-<?php echo $logotype, ($logoimgsm ? ' logo-control' : '') ?>">
				<a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>">
					<?php if($logotype == 'image'): ?>
						<img class="logo-img" src="<?php echo JURI::base(true) . '/' . $logoimage ?>" alt="<?php echo strip_tags($sitename) ?>" />
					<?php endif ?>
					<?php if($logoimgsm) : ?>
						<img class="logo-img-sm" src="<?php echo JURI::base(true) . '/' . $logoimgsm ?>" alt="<?php echo strip_tags($sitename) ?>" />
					<?php endif ?>
					<span><?php echo $sitename ?></span>
				</a>
				<small class="site-slogan"><?php echo $slogan ?></small>
			</div>
		</div>
		
		<?php if ($this->countModules('phone')) : ?>
		<div class="col-xs-6 col-sm-6 col-md-3 phone-block">
			<div class="phone <?php $this->_c('phone') ?>">
				<jdoc:include type="modules" name="<?php $this->_p('phone') ?>" style="raw" />
				</div>
		</div>
		<?php endif ?>
		<div class="clearfix visible-sm-block visible-xs-block"></div>
		<?php if ($this->countModules('search')) : ?>
		<div class="col-xs-8 col-sm-8 col-md-4 search-block">
			<div class="search <?php $this->_c('search') ?>">
				<jdoc:include type="modules" name="<?php $this->_p('search') ?>" style="raw" />
			</div>			
		</div>
		<?php endif ?>
		
		<?php if ($this->countModules('cart')) : ?>
		<div class="col-4 col-sm-4 col-md-2 cart-block pull-right">
			<div class="cart <?php $this->_c('cart') ?>">
				<jdoc:include type="modules" name="<?php $this->_p('cart') ?>" style="raw" />
			</div>
		</div>
		<?php endif ?>

	</div>
</header>
<!-- //HEADER -->
