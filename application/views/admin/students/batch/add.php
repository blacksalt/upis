<h2>Add Student</h2>

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
?>
