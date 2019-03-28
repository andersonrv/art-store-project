<?php
//SIMPLE SEARCH BEGIN
function searchPainting($value) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $searchedValue = '%' . $value . '%';
        if($searchedValue == '%%') {
            echo '<tr><td>No value was informed.</td></tr>';
        } else {
            $sql = "SELECT * 
            FROM art.Paintings 
            WHERE Title 
            LIKE :searchedValue  
            ORDER BY Title";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':searchedValue',$searchedValue);
            $statement->execute();
            $results = $statement;
            while($singleResult = $results->fetch()) {
                $aPainting = new Painting($singleResult);
                $keyword = $value;
                $aPainting->displayAsSimpleResult($keyword);
            }
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}

function searchArtistAsc($value) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $searchedValue = '%' . $value . '%';
        if($searchedValue == '%%') {
            echo '<tr><td>No value was informed.</td></tr>';
        } else {
            $sql = "SELECT * 
            FROM art.Artists 
            WHERE FirstName 
            LIKE :searchedValue 
            OR LastName 
            LIKE :searchedValue 
            ORDER BY LastName ASC";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':searchedValue',$searchedValue);
            $statement->execute();
            $results = $statement;
            while($singleResult = $results->fetch()) {
                $aPainting = new Artist($singleResult);
                $keyword = $value;
                $aPainting->displayAsSimpleResult($keyword);
            }
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}

function searchArtistDesc($value) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $searchedValue = '%' . $value . '%';
        if($searchedValue == '%%') {
            echo '<tr><td>No value was informed.</td></tr>';
        } else {
            $sql = "SELECT * 
            FROM art.Artists 
            WHERE FirstName 
            LIKE :searchedValue 
            OR LastName 
            LIKE :searchedValue 
            ORDER BY LastName DESC";
            $statement = $connection->prepare($sql);
            $statement->bindValue(':searchedValue',$searchedValue);
            $statement->execute();
            $results = $statement;
            while($singleResult = $results->fetch()) {
                $aPainting = new Artist($singleResult);
                $keyword = $value;
                $aPainting->displayAsSimpleResult($keyword);
            }
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SIMPLE SEARCH ENDS

//SEARCH WORKS OF A SPECIFIC GENRE BEGINS
function searchPaintingOfGenre($searchedValue) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT art.Paintings.*
        FROM art.Paintings
        JOIN art.PaintingGenres
        ON art.Paintings.PaintingID = art.PaintingGenres.PaintingID
        JOIN art.Genres
        ON art.PaintingGenres.GenreID = art.Genres.GenreID
        WHERE Genres.GenreID = :searchedValue";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':searchedValue',$searchedValue);
        $statement->execute();
        $results = $statement;
        while($singleResult = $results->fetch()) {
            $aPainting = new Painting($singleResult);
            $keyword = '';
            $aPainting->displayAsSimpleResult($keyword);
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH WORKS OF A SPECIFIC GENRE ENDS

//SEARCH WORKS OF A SPECIFIC SUBJECT BEGINS
function searchPaintingOfSubject($searchedValue) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT art.Paintings.*
        FROM art.Paintings
        JOIN art.PaintingSubjects
        ON art.Paintings.PaintingID = art.PaintingSubjects.PaintingID
        JOIN art.Subjects
        ON art.PaintingSubjects.SubjectID = art.Subjects.SubjectID
        WHERE Subjects.SubjectID = :searchedValue";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':searchedValue',$searchedValue);
        $statement->execute();
        $results = $statement;
        while($singleResult = $results->fetch()) {
            $aPainting = new Painting($singleResult);
            $keyword = '';
            $aPainting->displayAsSimpleResult($keyword);
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}

function getSubjectName($searchedValue) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT art.Subjects.*
        FROM art.Subjects
        WHERE Subjects.SubjectID = :searchedValue";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':searchedValue',$searchedValue);
        $statement->execute();
        $results = $statement;
        $args = $results->fetch();
        $subject = new Subject($args);
        return $subject;
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH WORKS OF A SPECIFIC SUBJECT ENDS

//SEARCH TOP 12 SELLING ARTISTS BEGINS
function searchTopArtists() {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql="SELECT art.Artists.* 
        FROM art.Artists JOIN 
            ((SELECT art.Paintings.ArtistID, 
            COUNT(*) 
            FROM art.OrderDetails 
            JOIN art.Paintings ON art.OrderDetails.PaintingID = art.Paintings.PaintingID 
            GROUP BY ArtistID 
            ORDER BY COUNT(*) DESC 
            LIMIT 10) AS sub) 
        ON art.Artists.ArtistID = sub.ArtistID";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement;
        while($singleArtist = $results->fetch()) {
            $anArtist = new Artist($singleArtist);
            $anArtist->displayAsThumbnail();
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}

function countingArtistSales() {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql="SELECT fc.*, ed.Sales 
        FROM ((
            SELECT art.Paintings.ArtistID, 
            COUNT(*) AS Sales 
            FROM art.OrderDetails 
            JOIN art.Paintings ON art.OrderDetails.PaintingID = art.Paintings.PaintingID 
            GROUP BY ArtistID) AS ed) 
            JOIN ((
                SELECT art.Artists.* 
                FROM art.Artists JOIN ((
                    SELECT art.Paintings.ArtistID, COUNT(*) 
                    FROM art.OrderDetails 
                    JOIN art.Paintings ON art.OrderDetails.PaintingID = art.Paintings.PaintingID 
                    GROUP BY ArtistID 
                    ORDER BY COUNT(*) DESC LIMIT 10) AS sub) ON art.Artists.ArtistID = sub.ArtistID) AS fc) ON fc.ArtistID = ed.ArtistID";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement;
        return $results;
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}

function countingBestSellersTotalSales() {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql="SELECT SUM(sub.Sales) AS Total 
        FROM ((
            SELECT COUNT(*) AS Sales 
            FROM art.OrderDetails 
            JOIN art.Paintings ON art.OrderDetails.PaintingID = art.Paintings.PaintingID 
            GROUP BY ArtistID ORDER BY Sales DESC LIMIT 10) AS sub)";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement;
        $total = $results->fetch();
        return $total;
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH TOP 12 SELLING ARTISTS ENDS

//SEARCH PAINTINGS IN WITHIN A YEAR RANGE BEGINS
function searchPaintingsInYearRange($initialYear, $finalYear) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT * 
        FROM art.Paintings 
        WHERE YearOfWork >= :initialYear 
        AND YearOfWork <= :finalYear 
        ORDER BY YearOfWork DESC";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':initialYear',$initialYear);
        $statement->bindValue(':finalYear',$finalYear);
        $statement->execute();
        $results = $statement;
        while($singleResult = $results->fetch()) {
            $aPainting = new Painting($singleResult);
            $keyword = '';
            $aPainting->displayAsSimpleResultWithYear($keyword);
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH PAINTINGS IN WITHIN A YEAR RANGE ENDS


//SEARCH PAINTINGS IN WITHIN A YEAR RANGE BEGINS
function searchPaintingsInPriceRange($initialPrice, $finalPrice) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT * 
        FROM art.Paintings 
        WHERE MSRP >= :initialPrice 
        AND MSRP <= :finalPrice 
        ORDER BY MSRP DESC";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':initialPrice',$initialPrice);
        $statement->bindValue(':finalPrice',$finalPrice);
        $statement->execute();
        $results = $statement;
        while($singleResult = $results->fetch()) {
            $aPainting = new Painting($singleResult);
            $keyword = '';
            $aPainting->displayAsSimpleResultWithPrice($keyword);
        }
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH PAINTINGS IN WITHIN A YEAR RANGE ENDS

//SEARCH FOR A CUSTOMER BEGINS
function searchForCustomerProfile($searchedValue) {
    try {
        $connectionString = DBCONNSTRING;
        $user = DBUSER;
        $pass = DBPASS;
        $connection = new PDO($connectionString, $user , $pass);
        $sql = "SELECT art.Customers.* 
        FROM art.Customers 
        JOIN art.CustomerLogon 
        ON art.Customers.CustomerID = art.CustomerLogon.CustomerID 
        WHERE CustomerLogon.UserName = :searchedValue";
        $statement = $connection->prepare($sql);
        $statement->bindValue(':searchedValue',$searchedValue);
        $statement->execute();
        $results = $statement;
        $args = $results->fetch();
        $aCustomer = new Customer($args);
        return $aCustomer;
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage());
    }
}
//SEARCH FOR A CUSTOMER ENDS
?>