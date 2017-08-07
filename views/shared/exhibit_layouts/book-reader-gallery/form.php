<?php
$formStem = $block->getFormStem();
$options = $block->getOptions();
?>
<div class="selected-items">
    <h4><?php echo __('Items'); ?></h4>
    <?php echo $this->exhibitFormAttachments($block); ?>
</div>

<div class="block-text">
    <h4><?php echo __('Text'); ?></h4>
    <?php echo $this->exhibitFormText($block); ?>
</div>

<div class="layout-options">
    <div class="block-header">
        <h4><?php echo __('Layout Options'); ?></h4>
        <div class="drawer"></div>
    </div>

    <div class="gallery-file-size">
        <?php echo $this->formLabel($formStem . '[options][gallery-file-size]', __('Gallery file size')); ?>
        <?php
            $defaultFileSize = (get_option('use_square_thumbnail') == 1) ? 'square_thumbnail' : 'thumbnail';
            echo $this->formSelect($formStem . '[options][gallery-file-size]',
            (@$options['gallery-file-size']) ? @$options['gallery-file-size'] : $defaultFileSize, array(),
            array(
                'square_thumbnail' => __('Square Thumbnail'),
                'thumbnail' => __('Thumbnail'),
                'fullsize' => __('Full Size')
            ));
        ?>
    </div>
</div>
