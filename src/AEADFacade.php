<?php

namespace LaravelAEAD;

use Illuminate\Support\Facades\Facade;

class AEADFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'aead';
    }

}