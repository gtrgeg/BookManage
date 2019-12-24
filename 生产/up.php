
<?php
 
var_dump($_FILES);
if(move_uploaded_file($_FILES['upfile']['tmp_name'],'./../pic/'.$_FILES['upfile']['name'])){
echo '上传成功！'; 
}
?>