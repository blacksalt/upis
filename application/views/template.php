<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <title>Template</title>
   <?= $_scripts ?>
   <?= $_styles ?>
</head>
<body>
   
   <div id="content">
      <?php print $content ?>
   </div>
   
   
</body>
</html>
-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="forms.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="tables.css" type="text/css" media="screen" />
    <?php
        echo link_tag('public/css/forms.css');
        echo link_tag('public/css/style.css');
        echo link_tag('public/css/tables.css');
    ?>
    
</head>
<body>
    <div id = "wrapper">
    
        <div id = "header">
            <h1>Student Management System</h1>        
        </div>
        <div id = "logstrip">
                Hello User! | <a href = #>logout</a>
            </div>
        <div id = "nav">
            <ul>
                <li id = "current"><a href=#>Students</a><li>
                <li><a href=#>Faculty</a><li>
                <li><a href=#>Grades Module</a><li>
            </ul>
        </div>
        <div id = "content">
            <div id = "leftpane">
                <div id="messages">
                    <?php echo $this->session->flashdata('error') ?>
                    <?php echo $this->session->flashdata('success') ?>
                </div>
                <?php print $content ?>
            </div>
            <div id = "rightpane">
                <?php echo $subnav;?>
            </div>    
            <div style="clear:both;"></div>
        </div>
        <div id = "footer">
        This is the footer.
        </div>
    
    </div>
</body>
