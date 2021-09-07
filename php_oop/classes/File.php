<?php
    class File {
        public $file = 'text.txt';
        public $handle;

        public function __construct() {
            if (is_writable($this->file)) {
                $this->handle = fopen($this->file, 'a');
            }
        }

        public function __destruct() {
            fclose($this->handle);
        }

        public function writeText($string) {
            fwrite($this->handle, $string . PHP_EOL);
        }
    }