<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<?php
	    $i = 'Cerca su undolog...';
		$q = get_search_query();
		$v = ( $q == "" ) ? $i : $q;
	?>
	<input onblur="this.value=(this.value == '')?'<?php echo $i?>':this.value" onfocus="this.value=(this.value == '<?php echo $i?>')?'':this.value" type="text" value="<?php echo $v?>" name="s" id="s" />
</form>