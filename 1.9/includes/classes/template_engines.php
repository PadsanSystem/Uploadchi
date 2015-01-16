<?php
require_once(SMARTY.'smarty.php');
// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class templates extends Smarty {
   function __construct(){

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir(THEMES);
        $this->setCompileDir(THEMES_CACHE);
        $this->setConfigDir(CONFIGS);
        $this->setCacheDir(CACHE);
        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Guest Book');
   }
}
?>