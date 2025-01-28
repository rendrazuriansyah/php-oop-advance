<?php

namespace App; // membuat namespace untuk si class Table milik App 

include '../models/Model.php'; // dsini ngemasukin class Model

use Model\Table as ModelTable; // alias untuk menghindari class konflik

class Table { // lokasinya ada di App/Table.php
    public static function get() {
        echo "App.Table.get() <br>";
    }
}

echo Table::get();
echo ModelTable::get();