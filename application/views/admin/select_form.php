<html>
<head>
<title>CodeIgniter Select Demo</title>
<link rel="stylesheet" type="ass/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="main">
<div class="message">
<?php
if (isset($read_set_value)) {
echo $read_set_value;
}
if (isset($message_display)) {
echo $message_display;
}
?>
</div>

<div id="show_form">
<h2>Display The Record Select By ID And Date</h2>

<form action="select_by_country" method="post">
    <label for="id">Select By ID :</label>
    <select name="country" id="country"  class="Country-name" required >
<option value="">Select VISA Country</option>           
<?php
foreach ($country as $qu) {
  ?>
<option value= '<?php echo $qu['name']; ?>'>
<?php
echo $qu['name'];?> </option>
 <?php
}

?>
</select>
    <input type="submit" name="submit" value="Show Record">
</form>

<div class="message">
<?php
if (isset($result_display)) {
    echo "<p><u>Result</u></p>";
    if ($result_display == 'No record found !') {
        echo $result_display;
    } else {
        echo '<div class="result_container">';
        foreach ($result_display as $value) {
            echo '<div class="result_row">';
            echo '<div class="result_column"><strong>Name:</strong> ' . $value->name . '</div>';
            echo '<div class="result_column"><strong>Location:</strong> ' . $value->location . '</div>';
            echo '<div class="result_column"><strong>Time:</strong> ' . $value->time . '</div>';
            echo '<div class="result_column"><strong>Area:</strong> ' . $value->area . '</div>';
            echo '<div class="result_column"><strong>Population:</strong> ' . $value->population . '</div>';
            echo '</div>'; // Close result_row
        }
        echo '</div>'; // Close result_container
    }
}
?>
</div>


<?php
echo form_open('Admin/select_by_id');
echo form_label('Select By ID : ');
$data = array(
'name' => 'id',
'placeholder' => 'Please Enter ID'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($id_error_message)) {
echo $id_error_message;
}

echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();

echo form_open('Admin/select_by_date');
echo form_label('Select By Date : ');
$data = array(
'type' => 'date',
'name' => 'date',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($date_error_message)) {
echo $date_error_message;
}
echo "</div>";
echo form_submit('submit', 'Show Record');
echo form_close();
echo form_open('Admin/select_by_date_range');
echo form_label('Select By Range Of Dates : ');
echo "From : ";

$data = array(
'type' => 'date',
'name' => 'date_from',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo " To : ";

$data = array(
'type' => 'date',
'name' => 'date_to',
'placeholder' => 'yyyy-mm-dd'
);
echo form_input($data);
echo "<div class='error_msg'>";
if (isset($date_range_error_message)) {
echo $date_range_error_message;
}
echo form_submit('submit', 'Show Record');
echo form_close();
?>
<div class="message">
<?php
if (isset($result_display)) {
echo "<p><u>Result</u></p>";
if ($result_display == 'No record found !') {
echo $result_display;
} else {
echo "<table class='result_table'>";
echo '<tr><th>Name </th><th>Time</th><th>Population</th><th>Climate</th><th>Area</th><tr/>';
foreach ($result_display as $value) {
echo '<tr>' . '<td class="e_id">' . $value->name . '</td>' . '<td>' . $value->time . '</td>' . '<td class="j_date">' . $value->climate . '</td>' . '<td>' . $value->area . '</td>' . '<td class="mob">' . $value->population . '</td>' . '<tr/>';
}
echo '</table>';
}
}
?>

</div>
</div>

<?php
if (isset($show_table)) {
echo "<div class='emp_table'>";
if ($show_table == 'Database is empty !') {
echo $show_table;
} else {
echo '<caption>Employee Table</caption>';
echo "<table width='100%'>";
echo '<tr><th class="e_id">NAme</th><th> Area</th><th>Climate</th><tr/>';
foreach ($show_table as $value) {
echo "<tr>" . "<td class='e_id'>" . $value->name . "</td>" . "<td>" . $value->area . "</td>" . "<td>" . $value->climate . "</td>" . "<tr/>";
}
echo '</table>';
}
echo "</div>";
}
?>


</div>

</div>

</body>
</html>