<?php

namespace App\Controllers\Admin;

use App\Controllers\Basecontroller;

class Order extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $sql = "SELECT * FROM tblorder ORDER BY status ASC";

        $result = $db->query($sql);

        $row = $result->getResult('array');

        echo $row[0]['idorder'];

        foreach ($row as $key) {
            echo $key['tglorder'];
            echo '<br>';
        }
        // echo $row[0]->total;
        echo '<hr>';

        // foreach ($row as $key) {
        //     echo $key->total;
        //     echo '<br>';
        // }

        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
}

?>
