<?php include_once "/inc/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php print_head("Gallery", true, false); ?>

<body>

<?php include_once("/header.php"); ?>

	<main>
        <h1>Gallery</h1>

        <div class="thumbnail-gallery">
            <figure>
                <a href="img/grapes.jpg">
                    <img src="img/grapes.jpg"
                     alt="A farmer holding grapes"/s>
                </a>
            </figure>            
            <figure>
                <a href="img/orange-juice.jpg">
                    <img src="/~sjw3/TC8M6rQk/img/orange-juice.jpg"
                     alt="A glass of orange juice"/>
                </a>
            </figure>            
            <figure>
                <a href="img/single-leaf.jpg">
                    <img src="img/single-leaf.jpg"
                     alt="A single leaf"/>
                </a>
            </figure>
            <figure>
                <a href="img/single-cherry.jpg">
                    <img src="img/single-cherry.jpg"
                     alt="A single cherry"/>
                </a>
            </figure>
            <figure>
                <a href="img/cardamom-buns.jpg">
                    <img src="img/cardamom-buns.jpg"
                     alt="Dinner rolls spiced with cardamom"/>
                </a>
            </figure>        
            <figure>
                <a href="img/dew-on-grass.jpg">
                    <img src="img/dew-on-grass.jpg"
                     alt="Dew drops on blades of grass"/>
                </a>
            </figure>
        </div>
    </main>

<?php include_once("/footer.php"); ?>

</body>
</html>