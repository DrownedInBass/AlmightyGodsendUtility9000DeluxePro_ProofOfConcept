
function createCodeWriter() {
    return {

        indent : 0
        , indentString = "\t"
        , lines = new Array()


        /*
            increaseIndent
                indent++
            decreaseIndent
                indent--
                falls < 0 error

        */

        , pushLine : function(line) { 
            let lineWithIndent = 
            lines.push(line) 
        }

        , writeLine : function(line) { lines.push(line) }

    };
}