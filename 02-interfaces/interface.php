<?php

interface TableInterface {
    public function save(array $data);
}

interface LogInterface {
    public function log(string $message);
}

class Table implements TableInterface, LogInterface { // bisa manggil lebih dari satu interface, tapi ntar harus di implement penuh isianya
    // harus di implement ulang isian class tsb dari interfacenya 
    public function save(array $data) { 
        return "Save method from table class";
    }

    public function log(string $message) {
        return $message . "\n";
    }
}

echo (new Table)->log("Interface from log interface");
echo (new Table)->save([]);