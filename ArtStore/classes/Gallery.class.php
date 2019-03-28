<?php
class Gallery {
    private $galleryID;
    private $galleryName;
    private $galleryNativeName;
    private $galleryCity;
    private $galleryAddress;
    private $galleryCountry;
    private $latitude;
    private $longitude;
    private $galleryWebSite;
    private $flickrPlaceID;
    private $yahooWoeID;
    private $googlePlaceID;

    public function __construct($aGallery) {
        $this->galleryID = $aGallery['GalleryID'];
        $this->galleryName = $aGallery['GalleryName'];
        $this->galleryNativeName = $aGallery['GalleryNativeName'];
        $this->galleryCity = $aGallery['GalleryCity'];
        $this->galleryAddress = $aGallery['GalleryAddress'];
        $this->galleryCountry = $aGallery['GalleryCountry'];
        $this->latitude = $aGallery['Latitude'];
        $this->longitude = $aGallery['Longitude'];
        $this->galleryWebSite = $aGallery['GalleryWebSite'];
        $this->flickrPlaceID = $aGallery['FlickrPlaceID'];
        $this->yahooWoeID = $aGallery['YahooWoeID'];
        $this->googlePlaceID = $aGallery['GooglePlaceID'];
    }
    
    function setGalleryID($galleryID) { $this->galleryID = $galleryID; }
    function setGalleryName($galleryName) { $this->galleryName = utf8_encode($galleryName); }
    function setGalleryNativeName($galleryNativeName) { $this->galleryNativeName = utf8_encode($galleryNativeName); }
    function setGalleryCity($galleryCity) { $this->galleryCity = utf8_encode($galleryCity); }
    function setGalleryAddress($galleryAddress) { $this->galleryAddress = utf8_encode($galleryAddress); }
    function setGalleryCountry($galleryCountry) { $this->galleryCountry = utf8_encode($galleryCountry); }
    function setLatitude($latitude) { $this->latitude = $latitude; }
    function setLongitude($longitude) { $this->longitude = $longitude; }
    function setGalleryWebSite($galleryWebSite) { $this->galleryWebSite = utf8_encode($galleryWebSite); }
    function setFlickrPlaceID($flickrPlaceID) { $this->flickrPlaceID = utf8_encode($flickrPlaceID); }
    function setYahooWoeID($yahooWoeID) { $this->yahooWoeID = utf8_encode($yahooWoeID); }
    function setGooglePlaceID($googlePlaceID) { $this->googlePlaceID = utf8_encode($googlePlaceID); }

    public function getGalleryID() { return $this->galleryID; }
    public function getGalleryName() { return $this->galleryName; }
    public function getGalleryNativeName() { return $this->galleryNativeName; }
    public function getGalleryCity() { return $this->galleryCity; }
    public function getGalleryAddress() { return $this->galleryAddress; }
    public function getGalleryCountry() { return $this->galleryCountry; }
    public function getLatitude() { return $this->latitude; }
    public function getLongitude() { return $this->longitude; }
    public function getGalleryWebSite() { return $this->galleryWebSite; }
    public function getFlickrPlaceID() { return $this->flickrPlaceID; }
    public function getYahooWoeID() { return $this->yahooWoeID; }
    public function getGooglePlaceID() { return $this->googlePlaceID; }
}
?>