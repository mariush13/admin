<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marian
 * Date: 17.07.13
 * Time: 19:10
 * To change this template use File | Settings | File Templates.
 */

namespace custom\objects;


class registerPage extends \engine\object {

    public $core;

    public function __construct($core) {
        $this->core = $core;
        parent::__construct($core);
    }

    public function showAction() {

        parent::showAction();
        if ($this->core->input->get('register_username') != false && $this->core->input->get('register_password') != false) {
            $user = new \engine\objects\user($this->core);
            $user->afterConstruct();
            $user->properties
                ->add('username', $this->core->input->get('username'), 'string')
                ->add('password', md5($this->core->input->get('password')), 'string');
            $this->core->db->addObject($user);
        } else {
            $this->core->output
                ->set('error', 'error');
        }

    }
}