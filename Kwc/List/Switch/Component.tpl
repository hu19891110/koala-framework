<div class="kwfEyeCandyList <?=$this->rootElementClass?>">

    <?=$this->hiddenOptions($this->options)?>
    <div class="listSwitchLargeWrapper">
        <div class="listSwitchLargeContent"></div> <?php /* this div is requred, see LargeContentPlugin */ ?>
        <div class="kwfUp-clear"></div>
    </div>

    <div class="listSwitchPreviewWrapper <?=$this->previewCssClass?>">
        <?php $i = 0; ?>
        <?php foreach ($this->listItems as $item) { ?>
            <div id="<?= $item['data']->componentId; ?>" class="listSwitchItem <?= $item['class']; ?>" style="<?=$item['style']?>">
                <?=$this->componentLink($item['largePage'], $this->component($item['data']), array('cssClass'=>'previewLink'))?>
            </div>
        <?php } ?>
        <div class="kwfUp-clear"></div>
    </div>
</div>
