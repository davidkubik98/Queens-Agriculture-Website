<?php

/*****************************************************************************/
/* constant */
/*****************************************************************************/

define("SEARCH_FORM", "search-form");
define("SEARCH_FORM_TERM", "search-term");

/*****************************************************************************/
/* print_head */
/*****************************************************************************/
function print_head($page_title, $magnific_popup = false) {
?>
<head>
	<title>Queen's Agriculture | <?= $page_title ?></title>
	<meta charset="utf-8"/>
	<meta name="author" content="David Kubik"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="css/icons.css"> 	
	<link rel="stylesheet" href="css/style.css"> 	
	<link rel="stylesheet" href="css/responsive.css">
	<?php if ($magnific_popup) : ?>
	<link rel="stylesheet" href="css/magnific-popup.css">
	<?php endif; ?>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/header-slideshow.js"></script>
	<?php if ($magnific_popup) : ?>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/thumbnail-gallery.js"></script>
	<?php endif; ?>	
	<script src="js/form-validation.js"></script>
</head>
<?php
}
