<h2>View Students</h2>
<p>Choose a batch</p>
<?php 
    if( $batch!=NULL ) {
        echo '<ul>';    
        foreach($batch as $item) {
            echo '<li>'.anchor('students/view_batch/'.$item->batch_id, $item->year);
            echo ' ' .$item->remarks.'</li>';
        }
        echo '</ul>';
    } else {
        echo 'No batches found :(';
    }
?>
