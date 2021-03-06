<?php

namespace Biz\Department\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface DepartmentDao extends GeneralDaoInterface
{
    public function getByName($name);

    public function find();
}