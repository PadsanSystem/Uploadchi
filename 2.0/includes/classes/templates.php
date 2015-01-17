<?php
require_once(SMARTY.'smarty.php');

class templates extends Smarty {
   function __construct(){
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir(THEMES);
        $this->setCompileDir(THEMES_CACHE);
        $this->setConfigDir(CONFIGS);
        $this->setCacheDir(CACHE);
        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
   }
}
?>