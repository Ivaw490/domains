<?php
function uploadFile($destination, $FormAttributeName = 'file'){
    if(isset($_FILES[$FormAttributeName])){
        move_uploaded_file($_FILES[$FormAttributeName]["tmp_name"], $destination);
    }
}
    