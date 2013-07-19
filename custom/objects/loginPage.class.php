<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marian
 * Date: 17.07.13
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */

namespace custom\objects;


class loginPage extends \engine\object {

    public $core;

    public function __construct($core) {
        $this->core = $core;
        parent::__construct($core);
    }

    public function showAction() {
        parent::showAction();
    }
}