<?php
$first_string = '<<&nbsp;';
$previous_string = '<&nbsp';
$next_string = '&nbsp;>';
$last_string = '&nbsp;>>';
?>
<style type="text/css">
    <!--
    .pagination a {
        border: 1px solid #CCCCCC;
        margin: 2px;
        padding: 0.1em 0.2em;
    }
    .pagination div.first {
        margin-right: 40px;
    }
    -->
</style>
<div class="pagination right">
    <?php
    echo '<div class="right">';
    if ($first) {
        echo '<a href="' . $first . '" rel="first">' . $first_string . '</a>';
    }
    if ($previous) {
        echo '<a href="' . $previous . '" rel="previous">' . $previous_string . '</a>';
    }
    foreach ($pages_in_range as $key => $value) {
        $value ? print('<a href="' . $value . '">' . $key . '</a>')  : print $key;
    }
    if ($next) {
        echo '<a href="' . $next . '" rel="next">' . $next_string . '</a>';
    }
    if ($last) {
        echo '<a href="' . $last . '" rel="last">' . $last_string . '</a>';
    }
    echo '</div>';
    if ($items_per_page) {
        echo '<div class="right first">';
        if ($items_per_page == 10)
            echo $items_per_page; else
            echo '<a href="?amount=10" rel="last">10</a>';
        if ($items_per_page == 20)
            echo $items_per_page; else
            echo '<a href="?amount=20" rel="last">20</a>';
        if ($items_per_page == 50)
            echo $items_per_page; else
            echo '<a href="?amount=50" rel="last">50</a>';
        if ($items_per_page == 100)
            echo $items_per_page; else
            echo '<a href="?amount=100" rel="last">100</a>';
        if ($items_per_page == 'all')
            echo __('All'); else
            echo '<a href="?amount=0" rel="last">All</a>';
        echo '</div>';
    }
    ?>
</div>
