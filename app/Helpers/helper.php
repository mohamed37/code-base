<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

function getModelsList(): array
{
    $models = [];

    $modelFiles = File::files(app_path('Models'));

    $notIn = ['.', '..', 'Token.php', 'Image.php', 'Code.php'];

    foreach ($modelFiles as $model) {
        $class = $model->getRelativePathName();

        if (in_array($class, $notIn)) continue;

        $models[] = (string)str($class)->replaceLast('.php', '');
    }

    return $models;
}
