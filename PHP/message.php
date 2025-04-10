<?php
class ErrorMessage {
    private $error = [];

    public function set($field, $message) {
        $this->error[$field][] = $message;
    }

    public function count() {
        return count($this->error);
    }

    public function has($field) {
        return isset($this->error[$field]);
    }

    public function first($field) {
        return $this->error[$field][0] ?? null;
    }
}
?>
