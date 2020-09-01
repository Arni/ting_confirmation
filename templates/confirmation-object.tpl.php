
<?php
/**
 * @file
 * Modified version of the default theme implementation for displaying a single
 * search result. The h3 title have been removed.
 *
 *
 * @see template_preprocess()
 * @see template_preprocess_search_result()
 * @see template_process()
 */
?>
<div class="conformation-object">
    <div class="conformation-object-cover">
        <?php print $cover; ?>
    </div>
    <div class="conformation-object-message">
        <h2>Tak for din reservering</h2>
        <?php print $message; ?>
    </div>
</div>
<div class="conformation-object-inspiration">
    <div class="more-link conformation-object-recommender"><a href="#recommender">Find lignende</a></div>
    <div class="more-link conformation-object-inspirationlink"><a href="/inspiration/inspiration">Bliv inspireret</a></div>
    <div class="more-link conformation-object-nyt"><a href="https://nytpaahylderne.dk/ranbib">Nyt på hylderne</a>
</div>




