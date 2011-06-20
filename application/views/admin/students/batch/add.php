<h2>Add Batch</h2>

<?php

    echo form_open('students/add_batch');

    echo form_label('Year','year');
    echo form_input('year',set_value('year'));
    echo form_error('year');
    echo br();

    echo form_label('Remarks','remarks');
    echo form_input('remarks',set_value('remarks'));
    echo form_error('remarks');
    echo br();

    echo br(); 
    
    echo form_submit('add','Add');
    echo form_close();
    
    echo br();
    
    if ($batch != NULL) {
        echo '<table>';
        echo '<tr> <th>Batch</th> <th>Remarks</th> <th colspan="2">Actions</th> </tr>';
        foreach($batch as $item){
            echo '<tr>';
            echo'<td>'.$item->year.'</td>';
            echo'<td>'.$item->remarks.'</td>';
            echo'<td>'.anchor('students/edit_batch/'.$item->batch_id, 'Edit').'</td>';
            echo'<td>'.anchor('students/delete_batch/'.$item->batch_id, 'Delete').'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

?>

