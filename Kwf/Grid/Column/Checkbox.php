<?php
class Kwf_Grid_Column_Checkbox extends Kwf_Grid_Column
{
    public function __construct($dataIndex = null, $header = null, $width = 30)
    {
        parent::__construct($dataIndex, $header, $width);
        $this->setType('boolean');
        $this->setSortable(false);
        $this->setRenderer('boolean');
    }
}
