<?php
class BookReaderGalleryLayoutPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_filters = array('exhibit_layouts');

    public function filterExhibitLayouts($layouts)
    {
        $layouts['book-reader-gallery'] = array(
            'name' => 'Book Reader Gallery',
            'description' => 'A Gallery of Book Reader items'
        );
        return $layouts;
    }
}
