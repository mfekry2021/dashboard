<?php

namespace App\Repositories\Interfaces;


interface ISetting extends IModelRepository
{

    public function getAppInformation();
    public function updateSetting($data);

}
