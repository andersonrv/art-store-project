<?php
class Artist {
    private $artistID;
    private $firstName;
    private $lastName;
    private $nationality;
    private $gender;
    private $yearOfBirth;
    private $yearOfDeath;
    private $details;
    private $artistLink;
    private $sales;

    public function __construct($anArtist) {
        $this->artistID = $anArtist['ArtistID'];
        $this->firstName = $anArtist['FirstName'] ?? NULL;
        $this->lastName = $anArtist['LastName'] ?? NULL;
        $this->nationality = $anArtist['Nationality'] ?? NULL;
        $this->gender = $anArtist['Gender'] ?? NULL;
        $this->yearOfBirth = $anArtist['YearOfBirth'] ?? NULL;
        $this->yearOfDeath = $anArtist['YearOfDeath'] ?? NULL;
        $this->details = $anArtist['Details'] ?? NULL;
        $this->artistLink = $anArtist['ArtistLink'] ?? NULL;
        $this->fullName = $this->firstName . ' ' . $this->lastName;
        $this->sales = $anArtist['Sales'] ?? NULL;
    }
    
    function setArtistID($artistID) { $this->artistID = utf8_encode($artistID); }
    function setFirstName($firstName) { $this->firstName = utf8_encode($firstName); }
    function setLastName($lastName) { $this->lastName = utf8_encode($lastName); }
    function setNationality($nationality) { $this->nationality = utf8_encode($nationality); }
    function setGender($gender) { $this->gender = utf8_encode($gender); }
    function setYearOfBirth($yearOfBirth) { $this->yearOfBirth = utf8_encode($yearOfBirth); }
    function setYearOfDeath($yearOfDeath) { $this->yearOfDeath = utf8_encode($yearOfDeath); }
    function setDetails($details) { $this->details = utf8_encode($details); }
    function setArtistLink($artistLink) { $this->artistLink = utf8_encode($artistLink); }
    function setSales($sales) { $this->sales = utf8_encode($sales); }

    public function getArtistID() { return $this->artistID; }
    public function getFirstName() { return $this->firstName; }
    public function getLastName() { return $this->lastName; }
    public function getNationality() { return $this->nationality; }
    public function getGender() { return $this->gender; }
    public function getYearOfBirth() { return $this->yearOfBirth; }
    public function getYearOfDeath() { return $this->yearOfDeath; }
    public function getDetails() { return $this->details; }
    public function getArtistLink() { return $this->artistLink; }
    public function getFullName() { return $this->fullName; }
    public function getSales() { return $this->sales; }

    function displayAsThumbnail() {
        echo '<div class="col-md-2">';
        echo '    <div class="thumbnail sizeThumb">';
        echo '    <div class="cropThumbImage">';
        echo '        <a href="singleArtist.php?ArtistID=' . $this->getArtistID() . '"><img src="images/artists/square-medium/' . $this->getArtistID() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '        </div>';
        echo '        <div class="caption" align="center">';
        echo '            <p class="similarTitle"><a href="singleArtist.php?ArtistID=' . $this->getArtistID() . '">' .  $this->getLastName() . '</a></p>';
        echo '        </div>';
        echo '        <div align="center">';
        echo '            <button type="button" class="btn btn-info"><a href="singleArtist.php?ArtistID=' . $this->getArtistID() . '">';
        echo '            <span>Get Info</span></a></button>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

    function displayAsSimpleResult($keyword) {
        $firstName = $this->getFirstName();
        $lastName = $this->getLastName();
        $artistDetails = $this->getDetails();
        echo '<tr>';
        echo '      <td>';    
        echo '          <a href="singleArtist.php?ArtistID=' . $this->getArtistID() . '"><img src="images/artists/square-medium/' . $this->getArtistID() . '.jpg" alt="..." class="img-thumbnail"></a>';
        echo '      </td>';
        // THE FUNCTION str_ireplace() IS RETURNING THE SEARCHED KEYWORD WITH A CASE DIFFERENT FROM THE ORIGINAL TEXT.
        echo '      <td>
                        <a href="singleArtist.php?ArtistID=' . $this->getArtistID() . '">' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $lastName) . ', '  . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $firstName) .  '</a>
                        <br/>
                        ' . str_ireplace($keyword, '<span class="highlighted">'.$keyword.'</span>', $artistDetails) . '
                    </td>';
        echo '</tr>';
    }
}
?>