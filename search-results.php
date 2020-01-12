<?php
include_once "inc/functions.php"; 
include_once ("inc/search.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<?php print_head("Search Results"); ?>

<body>

<?php include_once("inc/header.php"); ?>
	
	<main>
        <h1>Search Results</h1>
        
<?php if (! array_key_exists(SEARCH_FORM_TERM, $_REQUEST)) : ?>
		
		<p>Sorry, but your search term could not be processed.</p>
		
<?php else : 
	$search_term = trim($_REQUEST[SEARCH_FORM_TERM]);
	$search_term = filter_var($search_term, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	
	$search_result_array = search_for_term($search_term);
	if (! $search_result_array) : ?>

		<p>Sorry, but there were no matches for "<?= $search_term ?>".</p>

	<?php else : ?>
		<p>Your search for "<?= $search_term ?>" produced <?= count($search_result_array) ?> result(s).</p>
	
		<ul>
		<?php foreach ($search_result_array as $search_result) : ?>
			<li><a href="<?= $search_result[CONTENT_LINK] ?>"><?= $search_result[CONTENT_TITLE] ?></a></li>
		<?php endforeach; ?>		
		</ul>
	<?php endif; 
endif; ?>
        
     </main>

<?php include_once("inc/footer.php"); ?>
	
</body>
</html>