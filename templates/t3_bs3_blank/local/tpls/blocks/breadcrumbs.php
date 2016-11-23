<?php if ($this->countModules( 'breadcrumbs' )) { ?>
<div class="breadcrumbs container">
	<jdoc:include type="modules" name="<?php $this->_p('breadcrumbs') ?>" style="raw" />
</div>
<?php } ?>