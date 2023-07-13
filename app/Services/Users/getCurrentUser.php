<?php
namespace App\Services\Users;


class getCurrentUser {

    public function execute()
    {
        return auth()->id();
    }
}
