<?php

namespace App\Mixins;

class StrMixins
{
    public function orderId()
    {
        return function ($id) {
            return "DM-" . substr($id, 0, 3) . "-" . substr($id, 3);
        };
    }

    public function prefix()
    {
        return function ($id, $prefix = "DM-") {
            return $prefix . $id;
        };
    }
}
