<!--default search form-->
<!--http://codex.wordpress.org/Function_Reference/get_search_form-->

<form role="search" method="get" id="search" action="<?php echo home_url( '/' ); ?>">
    	<label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" placeholder="Search QiBelly...">
        <button type="submit" id="searchsubmit" value="Search">Search</button>
</form>