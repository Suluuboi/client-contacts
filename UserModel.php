<?php

namespace suluuboi\phpmvc;

use suluuboi\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}