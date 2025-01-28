<?php

abstract class Database {
    abstract public function connection();
    public function disconnect() {
        // Implementation
    }
}

class Model extends Database {
    // harus dideclare ulang karena abstract
    public function connection() {
        // Implementation
    }

    // klo gada penyertaan abstract di parentnya, maka cmn opsional untuk override method tsb
}

// $db = new Database(); // error, karena abstract gabisa dibuat instance langsung
$model = new Model();