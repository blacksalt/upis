<?php 
    echo '<h3>Batch</h3>';
    echo '<ul>';
        echo '<li>' .anchor('students/add_batch', 'Add Batch'). '</li>';
    echo '</ul>';
    
    echo '<h3>Students</h3>';
    echo '<ul>';
        echo '<li>' .anchor('students/view_all', 'View All'). '</li>';
        echo '<li>' .anchor('students/add', 'Add Student'). '</li>';
        echo '<li>' .anchor('students/add', 'Upload CSV'). '</li>';
    echo '</ul>';
?>
