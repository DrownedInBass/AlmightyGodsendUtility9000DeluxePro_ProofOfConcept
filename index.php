<?php

//  http://localhost:9000/DEV_AlmightyGodsendUtility9000DeluxePro_ProofOfConcept/ 

// CLASSES PP

class Debug {

//    private function 

} // class Debug

class Arr { }
class Num { }

class Str {

    // Checks if a string starts with another string.
    // @param $hay The string to search in.
    // @param $needle The string that should be at the very start of the hay-string..
    public static function startsWith($hay, $needle) { return strpos($hay, $needle, 0); }
}


class File {

    // Gets the directory the requsted (not any included) script is executed in.
    public static function getCallingScriptExecutionFilePath() { return __FILE__; }

    // Gets the directory the requsted (not any included) script is executed in.
    public static function getCallingScriptExecutionDirectoryPath() { return dirname(__FILE__); }

    // Splits a string by the operating system's directory separator symbol and returns the path's single 
    // directories' names as well as the file's name if present.
    // @param $path The path that's splitted.
    public static function splitPath($path) { return explode(DIRECTORY_SEPARATOR, $path);  }
} // class File



// This class helps to get information about the running host server. These information can be properties
// of the operating system, properties of the server, the web application or the operating system's user.
class Environment {
    
    // The key to index the $_SERVER variable for querying the document root directory.
    private const SERVER_PROPERTY__DOCUMENT_ROOT = "DOCUMENT_ROOT";

    // Returns the full path to the root directory that contains all the content the server is hosting.
    // For Apache or XAMPP users, this will be the htdocs-directory if not configured in another way.
    public static function getDocumentRootDirectoryPath() { return self::getServerProperty(self::SERVER_PROPERTY__DOCUMENT_ROOT); }

    // Gets a property from the $_SERVER context object that hold properties of the host server.
    // @param $propertyName The name of the property, the that's used as index to access a $_SERVER property.
    private static function getServerProperty($propertyName) { return $_SERVER[$propertyName];  }

    // The DOCUMENT_ROOT directory is the container of all server contents (htdocs). Normally the direct child 
    // directories in the DOCUMENT_ROOT are the the root directories of the hosted applications. This method returns
    // The DOCUMENTS_ROOT's direct child that contains the calling script.
    public static function getApplicationRootDirectory() {
        $currentDir = pathinfo(dirname(__FILE__));
        $documentRootDir = pathinfo(self::getDocumentRootDirectoryPath());
        
        // var_dump( $currentDir);
        // var_dump(  $documentRootDir);

        //         if(!Str::startsWith($currentDir,$documentRootDir)) {
        //             throw new Exception("The web application seems not to be contained in the executing server's document root directory.");
        //         }

        //         // figure out the folder here:

        throw new Exception("TODO");

    }
} // class Environment


?>
<?php

//  http://localhost:9000/DEV_AlmightyGodsendUtility9000DeluxePro_ProofOfConcept/ 

function addTableContent(&$arr, $pageName, $pageLink, $pageDescription) {
    $row = array(
        "pageName" => $pageName,
        "pageLink" => $pageLink,
        "pageDescription" => $pageDescription
    );
    array_push($arr, $row);
}

$linkTableContents = array();
addTableContent($linkTableContents, "Proof of Concept Landing Page", "http://localhost:9000/DEV_AlmightyGodsendUtility9000DeluxePro_ProofOfConcept/", "Landing Page with links and stuff.");


$pocScripts = glob("./poc/*/*.php");
foreach($pocScripts as $pocScript) {
    addTableContent($linkTableContents, $pocScript, $pocScript, "Generated Link to poc-script.");
}

?>

<html>
    
    <head>
        <script src="lib-external-js/jquery/jquery.js"></script>
    </head>


    <body>

        <div>

        <div>

            <table>
                <!-- Table Head -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Description</th> 
                    </tr>
                </thead>
                <!-- Table Body -->
                <tbody>
                <?php
    
                    //http://localhost:9000/DEV_AlmightyGodsendUtility9000DeluxePro_ProofOfConcept/
                    
                    foreach($linkTableContents as $row) {

                        $pageName = $row["pageName"];
                        $pageLink = $row["pageLink"];
                        $pageDescription = $row["pageDescription"];

                        echo "<tr>"; 
                        echo "<td>", $pageName, "</td>";
                        echo "<td><a href=", $pageLink, ">", "Link", "</a>", "</td>";
                        echo "<td>", $pageDescription, "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>


        <div>

    </body>

</html>