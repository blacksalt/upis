<?php 
    if($student!=NULL) {
        $name = $student->last .', ' .$student->given .' ' .$student->middle;

        echo '<h3>' .$name .'</h3>';        
        echo '<table>';
        echo '<tr><th>Student ID</th><td>' .$student->student_id. '</td>';
        echo '<tr><th>Student Number</th><td>' .$student->student_no. '</td>';
        echo '<tr><th>Name</th><td>' .$name. '</td>';
        echo '<tr><th>Nick</th><td>' .$student->nick. '</td>';

        echo '<tr><th>Address</th><td>' .$student->address. '</td>';
        echo '<tr><th>Mobile</th><td>' .$student->mobile. '</td>';
        echo '<tr><th>Landline</th><td>' .$student->landline. '</td>';
        echo '<tr><th>Email</th><td>' .$student->email. '</td>';
        
        echo '<tr><th>Birthday</th><td>' .$student->birthday. '</td>';
        echo '<tr><th>Religion</th><td>' .$student->religion. '</td>';
        echo '<tr><th>Entry Poing</th><td>' .$student->entry. '</td>';

        $student->graduate == 1 ? $graduate = 'TRUE' : $graduate = 'FALSE'; 
        $student->upcat == 1 ? $upcat = 'TRUE' : $upcat = 'FALSE'; 
        $student->disciplinary == 1 ? $disciplinary = 'TRUE' : $disciplinary = 'FALSE'; 
        
        echo '<tr><th>Graduated from UPIS</th><td>' .$graduate. '</td>';
        echo '<tr><th>Passed UPCAT</th><td>' .$upcat. '</td>';
        echo '<tr><th>With disciplinary case</th><td>' .$disciplinary. '</td>';
        
        echo '<tr><th>Father</th><td>' .$student->father. '</td>';
        echo '<tr><th>Father Occupation</th><td>' .$student->foccupation. '</td>';
        echo '<tr><th>Father Office</th><td>' .$student->foffice. '</td>';
        echo '<tr><th>Father Contacts</th><td>' .$student->fcontact. '</td>';
        
        echo '<tr><th>Mother</th><td>' .$student->mother. '</td>';
        echo '<tr><th>Mother Occupation</th><td>' .$student->moccupation. '</td>';
        echo '<tr><th>Mother Office</th><td>' .$student->moffice. '</td>';
        echo '<tr><th>Mother Contacts</th><td>' .$student->mcontact. '</td>';
        
        echo '</table>';
    } else {
        echo 'Student not found.';
    }

?>
