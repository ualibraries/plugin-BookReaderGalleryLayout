<?php
$galleryFileSize = isset($options['gallery-file-size'])
    ? html_escape($options['gallery-file-size'])
    : null;
?>
<div class="book-reader-gallery">
    <?php echo $this->exhibitAttachmentGallery($attachments, array('imageSize' => $galleryFileSize)); ?>
</div>
<?php echo $text; ?>
