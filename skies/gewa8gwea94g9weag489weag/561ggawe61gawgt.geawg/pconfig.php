<?php
$myfile = fopen("C:/Users/root/Desktop/pass.txt", "r") or die("Unable to open file!");
$password = fgets($myfile);
fclose($myfile);
$buttonPost = $_POST['button_post']; 
$enteredValue = htmlspecialchars(trim($_POST['test_input_p']));
if(isset($buttonPost))
{
    if($password == $enteredValue)
    {
        echo 'TRUE <script type="text/javascript">
             window.location="http://privategts1.eu/admin/gmeaiwonhwh/panelgenawoihnbweh/panel/panel.php";
</script>
';
    }
    elseif($password != $enteredValue)
    {
        echo "FALSE";
    }
    else
    {
        echo "Er__!";
    }
}
?>