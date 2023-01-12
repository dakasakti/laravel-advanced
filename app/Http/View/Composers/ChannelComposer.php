<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class ChannelComposer
{
    public function compose(View $view)
    {
        $view->with("datas", ["dakasakti", "kaila"]);
    }
}
