<?php
//try tp run on linux
if(isset($_GET['action']) && $_GET['action'] == 'open_in_py') {
    $test = $_POST['test'];
    print shell_exec("index.py");
}
?>

<form action="form.php?action=open_in_py" method="post">
    <input type="text" name="test">
    <input type="submit" value="PDF erzeugen">
</form>