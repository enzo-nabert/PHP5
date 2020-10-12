<?php


class File{

    public static function build_path($path_array) {
        $ROOT_FOLDER = "/wamp64/www/PHP5";
        return $ROOT_FOLDER. '/' . join('/', $path_array);
    }
}