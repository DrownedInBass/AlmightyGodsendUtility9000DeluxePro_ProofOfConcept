<?php


$pathsToMp3s = array(
    "E:\# Workspace Data - DJ\Drum and Bass - Amazon (rulebot)",
    "E:\# Workspace Data - DJ\Drum and Bass - Bandcamp (rulebot)",
    "E:\# Workspace Data - DJ\Drum and Bass - Beatport (rulebot)",
    "E:\# Workspace Data - DJ\Drum and Bass - Bought from Artists",
    "E:\# Workspace Data - DJ\Drum and Bass - Free Downloads",
    "E:\# Workspace Data - DJ\Drum and Bass - Not Permitted To Share"
);

$allMp3Data = array();

foreach($pathsToMp3s as $directory) {
    $directoryContents = scandir($directory);    

    foreach($directoryContents as $content) {
        // TODO: Make Recursive later!        

        if($content === "." || $content === "..") {
            continue;
        }

        $combinedPath = realpath($directory."/".$content);

        $sizeInBytes = filesize($combinedPath);
        $sizeInMegabytes = $sizeInBytes / 1024;
        $sizeInMegabytesFormatted = number_format($sizeInMegabytes, 3, ",", ".")." MB";

        $tag = id3_get_tag($combinedPath);
        print_r($tag);

        
        $mp3Data = array(
            "file" => $content,
            "directory" => $directory,
            "size" => $sizeInMegabytesFormatted
        );

        array_push($allMp3Data, $mp3Data);
    }
}

?>
<html>
    <body>

    <table>
        <thead>
            <tr>
                <th>Directory</th>
                <th>File</th>
            </tr> 
        </thead>
        <tbody>
            <?php
                foreach ($allMp3Data as $data) {
                    echo "<tr>";                    
                    echo "<td>", $data["file"], "</td>";
                    echo "<td>", $data["size"], "</td>";
                    echo "<td>", $data["directory"], "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
    </body>
</html>