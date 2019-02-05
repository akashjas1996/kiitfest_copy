<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/pathtotheclass/upload_class.php';
$error = '';
$img = '';
$copy_link = '';
 
if(isset($_POST['Submit'])) {
 $my_upload = new file_upload;
 $my_upload->upload_dir = $_SERVER['DOCUMENT_ROOT']."/modal-upload/files/";
 $my_upload->extensions = array(".png", ".jpg", ".gif"); // allowed extensions
 $my_upload->rename_file = true;
 $my_upload->the_temp_file = $_FILES['upload']['tmp_name'];
 $my_upload->the_file = $_FILES['upload']['name'];
 $my_upload->http_error = $_FILES['upload']['error'];
 if ($my_upload->upload()) {
 $image = $my_upload->file_copy;
 $copy_link = ' | <a id="closelink" href="#">Pass file name</a>';
 } 
 $error = $my_upload->show_error_string();
}
?>