<?php
class Kwc_Trl_SwitchLanguage_Category_Trl_Component extends Kwc_Root_Category_Trl_Component
{
    public static function getSettings($masterComponentClass = null)
    {
        $ret = parent::getSettings($masterComponentClass);
        $ret['generators']['page']['model'] = 'Kwc_Trl_SwitchLanguage_Category_Trl_PagesTrlTestModel';
        return $ret;
    }
}
