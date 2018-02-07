$(document).ready(function(){
    $s = true;
    $c = 0; 
    setInterval(function(){
        if ($s) 
        {
            $("#label").text("Expirer");
            $("#square").removeClass("spin");
            $("#all").removeClass("black");
            $("#all").addClass("white");
            $("#square").removeClass("white");
            $("#square").addClass("black"); 
        }
        else 
        {
            $("#label").text("Inspirer");
            $("#square").addClass("spin");
            $("#square").removeClass("black");
            $("#square").addClass("white");
            $("#all").removeClass("white");
            $("#all").addClass("black"); 
        }
        $s = !$s;
    }, 4250);
    $("#all").click(function(){
        if ($c == 4) {
            alert("Carré négatif sur fond positif, par Axel Andaroth");
            $c += 1;
        } 
        else if ($c < 5) {
            $c += 1; 
        }
    });  
});