<?php if ($this->countModules( 'top-left or top-right' )) { ?>
<div class="header-top">
	<div class="container">
		<div class="row">
			<?php if ($this->countModules( 'top-left' )) { ?>
			<div class="col-sm-6 col-xs-6 top-left">
				<jdoc:include type="modules" name="<?php $this->_p('top-left') ?>" style="raw" />
			</div>
			<?php } ?>
			<?php if ($this->countModules( 'top-right' )) { ?>
			<div class="col-sm-6 col-xs-6 top-right pull-right">
				<jdoc:include type="modules" name="<?php $this->_p('top-right') ?>" style="raw" />
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php } ?>
