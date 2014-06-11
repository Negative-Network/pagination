<?php
$first_string = '<<&nbsp;';
$previous_string = '<&nbsp';
$next_string = '&nbsp;>';
$last_string = '&nbsp;>>';

if (!isset($current_controller)) $current_controller = strtolower(Request::current()->controller());
$href = URL::base().Request::current()->uri();
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
    if ($first)
    {
        echo '<a href="'.$href.$first.'" rel="first" class="list_pagination" controller="'.$current_controller.'">'.$first_string.'</a>';
    }
    if ($previous)
    {
        echo '<a href="'.$href.$previous.'" rel="previous" class="list_pagination" controller="'.$current_controller.'">'.$previous_string.'</a>';
    }
    foreach ($pages_in_range as $key => $value)
    {
        $value ? print('<a href="'.$href.$value.'" class="list_pagination" controller="'.$current_controller.'">'.$key.'</a>')  : print $key;
    }
    if ($next)
    {
        echo '<a href="'.$href.$next.'" rel="next" class="list_pagination" controller="'.$current_controller.'">'.$next_string.'</a>';
    }
    if ($last)
    {
        echo '<a href="'.$href.$last.'" rel="last" class="list_pagination" controller="'.$current_controller.'">'.$last_string.'</a>';
    }
    echo '</div>';

    if ($items_per_page)
    {
        echo '<div class="right first">';
        if ($items_per_page == 10) echo $items_per_page;
        else echo '<a href="'.$href.'?amount=10" rel="last" class="list_pagination" controller="'.$current_controller.'">10</a>';
        if ($items_per_page == 20) echo $items_per_page;
        else echo '<a href="'.$href.'?amount=20" rel="last" class="list_pagination" controller="'.$current_controller.'">20</a>';
        if ($items_per_page == 50) echo $items_per_page;
        else echo '<a href="'.$href.'?amount=50" rel="last" class="list_pagination" controller="'.$current_controller.'">50</a>';
        if ($items_per_page == 100) echo $items_per_page;
        else echo '<a href="'.$href.'?amount=100" rel="last" class="list_pagination" controller="'.$current_controller.'">100</a>';
        if ($items_per_page == 'all') echo '&infin;';
        else echo '<a href="'.$href.'?amount=0" rel="last" class="list_pagination" controller="'.$current_controller.'">&infin;</a>';
        echo '</div>';
    }
    ?>
</div>
