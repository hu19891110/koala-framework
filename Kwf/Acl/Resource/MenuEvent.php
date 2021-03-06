<?php
class Kwf_Acl_Resource_MenuEvent extends Kwf_Acl_Resource_MenuUrl
{
    protected $_menuEventConfig;

    public function __construct($resourceId, $menuConfig = null, $menuEventConfig = null)
    {
        $this->_menuEventConfig = $menuEventConfig;
        parent::__construct($resourceId, $menuConfig);
    }

    public function setMenuEventConfig($menuEventConfig)
    {
        $this->_menuEventConfig = $menuEventConfig;
    }

    public function getMenuEventConfig()
    {
        return $this->_menuEventConfig;
    }
}
