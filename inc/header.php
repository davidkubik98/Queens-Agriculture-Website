	<header>
	    <img id="wordmark" src="img/queens-wordmark.png" alt="Queen's University"/>
        <div id="hero-container" class="bee">
            <div class="overlay"></div>
            <img id="logo" src="img/queens-logo.png" alt="Queen's University Coat of Arms"/>
            <div id="site-title">
                <a href="index.php">Department of Agriculture</a>
            </div>
            <nav>
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li>
                    	<form action="search-results.php" method="post" id="search-form">
                    		<input type="text" name="<?= SEARCH_FORM_TERM ?>" id="<?= SEARCH_FORM_TERM ?>" placeholder="Search" maxlength="100"/>
                    		<label for="<?= SEARCH_FORM_TERM ?>">Search term (required)</label>
                    		<input type="submit"/>
                    	</form>
                    </li>
                </ul>
            </nav>
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/QueensComputing">
                        <i class="icon-facebook-square" aria-hidden="true" title="Facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/queenscomputing">
                        <i class="icon-twitter-square" aria-hidden="true" title="Twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>
            </ul>
        </div>
	</header>
	