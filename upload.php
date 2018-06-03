<?php
$config = include('images/config.php');

$key = $config['secure_key'];
$uploadhost = $config['output_url'];
$redirect = $config['redirect_url'];

if ($_SERVER["REQUEST_URI"] == "/robot.txt") { die("User-agent: *\nDisallow: /"); }
 
if (isset($_POST['key'])) {
    if ($_POST['key'] == $key) {
        $parts = explode(".", $_FILES["d"]["name"]);
        $target = getcwd() . "/images/" . $_POST['name'] . "." . end($parts);
        if (move_uploaded_file($_FILES['d']['tmp_name'], $target)) {
            $target_parts = explode("/images/", $target);
            echo $uploadhost . end($target_parts);
        } else {
            echo "There was a problem uploading the file.";
        }
    } else {
        header('Location: '.$redirect);
    }
} else {
    header('Location: '.$redirect);
}
?>


