
<?php 
    if ($students->result() != NULL) {
        
        echo '<p>' .anchor('students/view_all', 'return to batch lists').'</p>';

        echo '<h2> Batch ' .$batch->year. '</h2>';
        echo '<p>has ' .$students->num_rows().' student(s)</p>';
        echo '<p>' .$batch->remarks .'</p>';
            
        echo '<table>';
        echo '<tr> <th>Student ID</th> <th>Student Number</th> <th>Name</th> <th colspan = "2">Action</th></tr>';
        foreach($students->result() as $item){
            $name = $item->last .', ' .$item->given .' ' .$item->middle;
            echo '<tr>';
            echo'<td>'.$item->student_id.'</td>';
            echo'<td>'.$item->student_no.'</td>';
            echo'<td>' .$name. '</td>';
            echo'<td>';
            echo anchor('students/view_student/'.$item->student_id, 'View') .'  | ';
            echo anchor('students/edit_student/'.$item->student_id, 'Edit') .'  | ';
            echo anchor('students/delete_student/'.$item->student_id, 'Delete');
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>' .anchor('students/view_all', 'return to batch lists').'</p>';
        echo 'No students found';
    }

?>
