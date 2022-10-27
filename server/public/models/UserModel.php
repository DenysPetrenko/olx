<?php

namespace Models;
class UserModel extends Model
{
    protected string $tableName = 'users';
    public function getAll(): array
    {
        return (new self())->getAllBySQL();
    }
}