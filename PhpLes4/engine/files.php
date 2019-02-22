<?php
function uploadFile($destination, $atributeName = 'file'){
    if(isset($_FILES[$atributeName])){
        move_uploaded_file($_FILES[$atributeName]["tmp_name"], $destination);
    }
}
    