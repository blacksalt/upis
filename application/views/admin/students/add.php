<h4>Add Student</h4>

<?php
    echo form_open('students/add');

    echo form_label('Batch','batch');
    echo form_dropdown('batch_year', array('2010'=>'2010','2009'=>'2009', '2010'=>'2010'));
    echo form_error('batch_year');
    echo br();

    echo form_label('Last','last');
    echo form_input('last',set_value('last'));
    echo form_error('last');
    echo br();
    
    echo form_label('Given','given');
    echo form_input('given',set_value('given'));
    echo form_error('given');
    echo br();
    
    echo form_label('Middle','middle');
    echo form_input('middle',set_value('middle'));
    echo form_error('middle');
    echo br();
    
    echo form_label('Nickname','nick');
    echo form_input('nick',set_value('nick'));
    echo form_error('nick');
    echo br();
    
    echo form_label('Address','address');
    echo form_input('address',set_value('address'));
    echo form_error('address');
    echo br();
    
    #TODO: javascript calendar
    echo form_label('Birthday (yyyy-mm-dd)','birthday');
    echo form_input('birthday',set_value('birthday'));
    echo form_error('birthday');
    echo br();
    
    echo form_label('Mobile','mobile');
    echo form_input('mobile',set_value('mobile'));
    echo form_error('mobile');
    echo br();

    echo form_label('Landline','landline');
    echo form_input('landline',set_value('landline'));
    echo form_error('landline');
    echo br();

    echo form_label('Email','email');
    echo form_input('email',set_value('email'));
    echo form_error('email');
    echo br();

    echo form_label('Religion','religion');
    echo form_dropdown('religion', array('catholic'=>'Catholic', 'protestant'=>'Protestant', 'muslim' => 'Muslim', 'others'=>'Others'));
    echo form_error('religion');
    echo br();

    echo form_label('Entry point','entry');
    echo form_dropdown('entry', array('kindergarten'=>'Kindergarten', 'lateral'=>'Lateral Entry', 'vaas' => 'Vaas Program'));
    echo form_error('entry');
    echo br();

    echo form_label('Graduted from UPIS','graduate');
    echo form_radio(array('name'=>'graduate', 'value'=>'1', 'checked'=>TRUE)) .'Yes';
    echo form_radio(array('name'=>'graduate', 'value'=>'0', 'checked'=>FALSE)) .'No';
    echo form_error('graduate');
    echo br();
    
    echo form_label('Passed the UPCAT','upcat');
    echo form_radio(array('name'=>'upcat', 'value'=>'1', 'checked'=>TRUE)) .'Yes';
    echo form_radio(array('name'=>'upcat', 'value'=>'0', 'checked'=>FALSE)) .'No';
    echo form_error('upcat');
    echo br();

    echo form_label('With Disciplinary Case','disciplinary');
    echo form_radio(array('name'=>'disciplinary', 'value'=>'1', 'checked'=>TRUE)) .'Yes';
    echo form_radio(array('name'=>'disciplinary', 'value'=>'0', 'checked'=>FALSE)) .'No';
    echo form_error('disciplinary');   
    echo br(); 

    echo form_label('Father Name','father');
    echo form_input('father',set_value('father'));
    echo form_error('father');
    echo br();
    
    echo form_label('Father Occupation','foccupation');
    echo form_input('foccupation',set_value('foccupation'));
    echo form_error('foccupation');
    echo br();
    
    echo form_label('Father Office','foffice');
    echo form_input('foffice',set_value('foffice'));
    echo form_error('foffice');
    echo br();
    
    echo form_label('Father Contacts','fcontact');
    echo form_input('fcontact',set_value('fcontact'));
    echo form_error('fcontact');
    echo br();
    
    echo form_label('Mother Name','mother');
    echo form_input('mother',set_value('mother'));
    echo form_error('mother');
    echo br();
    
    echo form_label('Mother Occupation','mocupation');
    echo form_input('moccupation',set_value('moccupation'));
    echo form_error('moccupation');
    echo br();
    
    echo form_label('Mother Office','moffice');
    echo form_input('moffice',set_value('moffice'));
    echo form_error('moffice');
    echo br();
    
    echo form_label('Mother Contacts','mcontact');
    echo form_input('mcontact',set_value('mcontact'));
    echo form_error('mcontact');
    echo br();
    
    echo form_label('Guardian Name','guardian');
    echo form_input('guardian',set_value('guardian'));
    echo form_error('guardian');
    echo br();
    
    echo form_label('Relationship to student','relationship');
    echo form_input('relationship',set_value('relationship'));
    echo form_error('relationship');
    echo br();
    
    echo form_label('Address','gaddress');
    echo form_input('gaddress',set_value('gaddress'));
    echo form_error('gaddress');
    echo br();
    
    echo form_label('Guardian Contacts','gcontact');
    echo form_input('gcontact',set_value('gcontact'));
    echo form_error('gcontact');
    echo br();
    
    echo form_submit('add','Add');
    echo form_close();
?>
