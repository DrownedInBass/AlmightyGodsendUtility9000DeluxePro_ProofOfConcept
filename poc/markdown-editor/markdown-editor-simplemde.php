<?php

    // http://localhost:9000/DEV_AlmightyGodsendUtility9000DeluxePro_ProofOfConcept/poc/markdown-editor/markdown-editor-simplemde.php

    // --- SimpleMDE Mark Down Editor ---
    // Showcase         --> https://simplemde.com/
    // Github-Project   --> https://github.com/sparksuite/simplemde-markdown-editor
    //
?>
<html>
    <head>
        <script src="../../lib-external/jquery/jquery.js"></script>

        <link rel="stylesheet" href="../../lib-external/simplemde/simplemde.min.css">
        <script src="../../lib-external/simplemde/simplemde.min.js"></script>
        <script>
            $(function() {
                new SimpleMDE({
                    element: document.getElementById("demo1"),
                    spellChecker: false,
                });
            });
            
            
            // new SimpleMDE({
            //     element: document.getElementById("demo2"),
            //     spellChecker: false,
            //     autosave: {
            //         enabled: true,
            //         unique_id: "demo2",
            //     },
            // });
            
            // new SimpleMDE({
            //     element: document.getElementById("demo3"),
            //     status: false,
            //     toolbar: false,
            // });            
        </script>
    </head>
    <body>
        <textarea id="demo1"></textarea>
    </body>
</html>