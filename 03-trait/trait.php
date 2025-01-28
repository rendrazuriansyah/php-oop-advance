<?php

trait Log {
    // ga cuman deklarasi signature, tpi bisa juga ngisi value property atau jga proses function
    protected function log($message) { // bisa pke visibilitas/encapsulation ga kyk interface
        echo "{$message}\n";
    }
    // klo logging tuh pke protected biar cmn si class yg pke log doang yang bisa jalanin tuh log
}

class Table {
    use Log; // biar bisa gunain trait Log

    public function save() {
        $this->log("created log");
    }
}

echo (new Table)->save();