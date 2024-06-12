<?php
class FileUpload {
    public static function save($key, $destination) {
        $file = $_FILES[$key];
        if ($file['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($file['tmp_name'], $destination . '/' . basename($file['name']));
            return true;
        }
        return false;
    }
}
