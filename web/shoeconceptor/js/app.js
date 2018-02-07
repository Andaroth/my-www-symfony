$(document).ready(function() {

    
    console.log("ready ?");
    
    $(".check").prop("checked", false);
    
    $("#placerContainRight").css("background-image","url('./img/noname_black_high_R.jpg')");
    $("#placerContainLeft").css("background-image","url('./img/noname_black_high_L.jpg')");
    
    var userStep = 0;
    var checkLeft = 0;
    var checkRight =  0;
    var checkBoth = 0;
    var checkIf = 1;
    
    var thisPic;
    var thisPicWidth;
    var thisPicHeight;
    var files;
    
    var sourceName;
    
    var FormData;
    var image;
    var data;
    
    var prntscr;
    
    var modulWidth = $("#viewer").width();
    var modulHeight = $("#viewer").height();
    
    var brand = $("#brand option:selected").val();
    var color = $("#color option:selected").val();
    var ankle = $("#ankle option:selected").val();
    
    $(window).resize(function() {
        modulWidth = $("#viewer").width();
        modulHeight = $("#viewer").height();  
        console.log(modulWidth+"*"+modulHeight);
    });

    /*
    
    STEP 1
    
    */
    
    // Getting inputs' value
    function selectChange() {
        console.log("change");
        
        brand = $("#brand option:selected").val();
        console.log("brand: "+brand);
        
        color = $("#color option:selected").val();
        console.log("color: "+color);
        
        ankle = $("#ankle option:selected").val();
        console.log("ankle: "+ankle);
        
        //
        if (brand=="converse") { // force
            $(".noConverse").prop("disabled", true);
            $("#highSize").prop("disabled", false);
            $("#lowSize").prop("disabled", false);
            if (
                (color=="fullblack") ||
                (color=="grey") ||
                (color=="bordeau") ||
                (color=="pink") ||
                (color=="darkblue") 
            )
            {
                $("#defaultColor").prop("selected", true);
            }
        }
        else { // release
            $(".noConverse").prop("disabled", false);
        }
        
        // verify sizes -----------------------------------
        
        if (brand!="converse") {
            
            if (color=="bordeau") { // force
                if (ankle=="low") 
                {$("#highSize").prop("selected", true);}
                $("#lowSize").prop("disabled", true);
                
                if ($(".noBordeau").is(":selected")) {
                    $("#safe42").prop("selected", true);
                }
                $(".noBordeau").prop("disabled", true);
            }
            else { // release
                $(".noBordeau").prop("disabled", false);
                
                $("#lowSize").prop("disabled", false);
            }

            if (color=="fullblack") { // force
                if ($("#highSize").is(":selected")) 
                {$("#lowSize").prop("selected", true);}
                $("#highSize").prop("disabled", true);
                
                if ($(".noNoirNoirBas").is(":selected")) {
                    $("#safe42").prop("selected", true);
                }
                $(".noNoirNoirBas").prop("disabled", true);
            }
            else { // release
                $(".noNoirNoirBas").prop("disabled", false);
                
                $("#highSize").prop("disabled", false);
            }

            if ((color=="black") && (ankle=="low")) { // force
                if ($(".noNoirBlancBas").is(":selected")) {
                    $("#safe42").prop("selected", true);
                }
                $(".noNoirBlancBas").prop("disabled", true);
            }
            else { // release
                $(".noNoirBlancBas").prop("disabled", false);
            }

            if (color=="pink") { // force
                if ($(".noRose").is(":selected")) {
                    $("#safe41").prop("selected", true);
                }
                $(".noRose").prop("disabled", true);
            }
            else { // release
                $(".noRose").prop("disabled", false);
            }

            if ((color=="darkblue") && (ankle=="low")){ // force
                if ($(".noBleuBas").is(":selected")) {
                    $("#safe42").prop("selected", true);
                }
                $(".noBleuBas").prop("disabled", true);
            }
            else { // release
                $(".noBleuBas").prop("disabled", false);
            }

            if ((color=="grey") && (ankle=="low")){ // force
                if ($(".noGrisBas").is(":selected")) {
                    $("#safe42").prop("selected", true);
                }
                $(".noGrisBas").prop("disabled", true);
            }
            else { // release
                $(".noGrisBas").prop("disabled", false);
            }

            if (color=="white"){ // force
                if ($(".noBlanc").is(":selected")) {
                    $("#safe41").prop("selected", true);
                }
                $(".noBlanc").prop("disabled", true);
                if (ankle!="high") {$(".noBlancHaut").prop("disabled", false);}
            }
            else { // release
                $(".noBlanc").prop("disabled", false);
            }

            if ((color=="white") && (ankle=="high")){ // force
                if ($(".noBlancHaut").is(":selected")) {
                    $("#safe41").prop("selected", true);
                }
                $(".noBlancHaut").prop("disabled", true);
            }
            else { // release
                $(".noBlancHaut").prop("disabled", false);
            }
            
        } //noconverse
        
        
        // set the jpg file to GET --------------------------
        sourceName = "./img/"+brand+"_"+color+"_"+ankle;
        console.log("Source: "+sourceName);
        
        // replace image in the viewer
        $("#placerContainRight").css("background-image","url('"+sourceName+"_R.jpg')");
        // replace image in the viewer
        $("#placerContainLeft").css("background-image","url('"+sourceName+"_L.jpg')");
        console.log("changed");
    }
    
    // Render the preview
    function renderCustom() {
        FormData = $("#imgSelector1");
        image = (window.FormData) ? new FormData(thisPic[0]) : null;
        data = (image !== null) ? image : $form.serialize();
        $("#dragpic").attr("src", window.URL.createObjectURL(thisPic));
    }
    
    $(".choiceRoll").click(function(){
        selectChange();
        
    });
    $(".choiceRoll").change(function(){
        selectChange();
        
    });
    
    $("#submit1").click(function(e) {
        e.preventDefault();
        
        $("#step_2").removeClass("closed");
        $(".hidSel").removeClass("hidden");
        
        $(".sidebar").animate({
            scrollTop: $("#step_3").offset().top
        }, 500);
        
        $("#placerContainRight").removeClass("unload");
        
        $("#submit1").addClass("hidden");
        
    });
    
    
    /*
    
    STEP 2
    
    */
    
    //check 
    $("#twoPicCheck").click(function() {
        console.log("click!");
        
        if ($("#twoPicCheck").is(":checked")) {
            $("#selectTwo").removeClass("hidden");
            $(".sideInfo").removeClass("hidden");
            
            $("#viewer").addClass("viewerLeft");
            $("#sideChange").removeClass("hidden");
            
            checkIf = 2;
            
        } else {
            $("#selectTwo").addClass("hidden");
            $(".sideInfo").addClass("hidden");
            
            $("#thumbL").addClass("hidden");
            
            $("#viewer").removeClass("viewerLeft");
            $("#sideChange").addClass("hidden");
            
             $("#dragpic2").attr("src", "");
            
            checkLeft = 0;
            checkIf = 1;
        }
        console.log(checkLeft+"+"+checkRight+">"+checkBoth+"="+checkIf);
        
        checkBoth = checkLeft + checkRight;
        if (checkBoth == checkIf) {
            $("#submit2").removeClass("hidden");
        } else {
            $("#submit2").addClass("hidden");
        }
        
        $("#submit3").addClass("hidden");
        
    });
    
    //right 
    $("#imgSelector1").change(function() {
       files = $(this)[0].files;
        
        
        if (files.length > 0) {
            console.log("test ?");
            
            thisPic = files[0];
            
            var sizeInKo = ((thisPic.size)/1000).toFixed(3);
            var sizeInMo = ((thisPic.size)/1000000).toFixed(3);
            
            // file is ok
            if (sizeInMo < 2.6) {
                $("#previewAlert1").html("~ " + sizeInKo + " Ko" + lang["TXT_SIZE_OK"] );
                
                $("#dragpic1").attr("src", window.URL.createObjectURL(thisPic));
                
                checkRight = 1;
                checkBoth = checkLeft + checkRight;
                console.log(checkLeft+"+"+checkRight+">"+checkBoth+"="+checkIf);
        
                checkBoth = checkLeft + checkRight;
                if (checkBoth == checkIf) {
                    $("#submit2").removeClass("hidden");
                } else {
                    $("#submit2").addClass("hidden");
                }

                $("#thumbR").removeClass("hidden");
                $("#imgPreR").attr("src", window.URL.createObjectURL(thisPic));
                $("#dragpic1").attr("src", window.URL.createObjectURL(thisPic));
                console.log("That's it");
                
                var imgPreviewSize = $("#imgPreR");
                console.log(imgPreviewSize);
                thisPicWidth = imgPreviewSize.innerWidth();
                console.log(thisPicWidth);
                thisPicHeight = imgPreviewSize.clientHeight;
                console.log(thisPicHeight);
                
                $(".draggable1 div.ui-wrapper").attr("style","opacity:1;width:"+thisPicWidth+"px; height:"+thisPicHeight+"px;");
                $("#dragpic1").attr("style","opacity:1;width:"+thisPicWidth+"px; height:auto;");
                
                $("#viewer").removeClass("viewerLeft");
            }
            else {
                if (sizeInMo < 5.12) {
                    $("#previewAlert1").html("~ " + sizeInMo + " Mo");
                }
                
                //file is too big
                else {
                    $("#previewAlert1").html("<font color=\"red\">"+sizeInMo + " Mo<br/>" + lang["TXT_TOOBIG"] + " </font>");
                    $("#submit1").addClass("hidden");
                }  
            }
            
            
        } else { checkRight = 0; }
        
        
    });
    
    //left 
    $("#imgSelector2").change(function() {
       files = $(this)[0].files;
        
        
        if (files.length > 0) {
            console.log("test ?");
            
            thisPic = files[0];
            
            var sizeInKo = ((thisPic.size)/1000).toFixed(3);
            var sizeInMo = ((thisPic.size)/1000000).toFixed(3);
            
            // file is ok
            if (sizeInMo < 2.6) {
                $("#previewAlert2").html("~ " + sizeInKo + " Ko" + lang["TXT_SIZE_OK"] );
                
                checkLeft = 1;
                checkBoth = checkLeft + checkRight;
                
                console.log(checkLeft+"+"+checkRight+">"+checkBoth+"="+checkIf);
        
                checkBoth = checkLeft + checkRight;
                if (checkBoth == checkIf) {
                    $("#submit2").removeClass("hidden");
                } else {
                    $("#submit2").addClass("hidden");
                }
                
                $("#dragpic2").attr("src", window.URL.createObjectURL(thisPic));
                
                
                $("#thumbL").removeClass("hidden");
                $("#imgPreL").attr("src", window.URL.createObjectURL(thisPic));
                $("#dragpic2").attr("src", window.URL.createObjectURL(thisPic));
                console.log("That's it");
                
                var imgPreviewSize = $("#imgPreL");
                console.log(imgPreviewSize);
                thisPicWidth = imgPreviewSize.innerWidth();
                console.log(thisPicWidth);
                thisPicHeight = imgPreviewSize.clientHeight;
                console.log(thisPicHeight);
                
                $(".draggable2 div.ui-wrapper").attr("style","opacity:1;width:"+thisPicWidth+"px; height:"+thisPicHeight+"px;");
                $("#dragpic2").attr("style","opacity:1;width:"+thisPicWidth+"px; height:auto;");
                
                $("#viewer").addClass("viewerLeft");
            }
            else {
                if (sizeInMo < 5.12) {
                    $("#previewAlert2").html("~ " + sizeInMo + " Mo");
                }
                
                //file is too big
                else {
                    $("#previewAlert2").html("<font color=\"red\">"+sizeInMo + " Mo<br/>" + lang["TXT_TOOBIG"] + " </font>");
                    $("#submit1").addClass("hidden");
                }    
            }
            
            
        } else { checkLeft = 0; }
        
        
    });
    
    
    
    
    $("#submit2").click(function(e) {
        e.preventDefault();
        
        userStep = 2;
        
        $("#step_3").removeClass("closed");
        $("#submit3").removeClass("hidden");
        
        $("#submit2").addClass("hidden");

        $(".sidebar").animate({
            scrollTop: $("#step_2").offset().top
        }, 500);

        var FormData = $(this);

        var image = (window.FormData) ? new FormData(thisPic[0]) : null;
        
        var data = (image !== null) ? image : $form.serialize();
        
        $("#dragpic").attr("src", window.URL.createObjectURL(thisPic));
        
        $("#submit").addClass("hidden");
        
    });
    
    
    $("#cancel2").click(function() {
        
        userStep = 0;
        
        $("#sendPic").removeClass("hidden");
        
        $("#submit1").removeClass("hidden");
        
        
        $("#cancel2").addClass("hidden");
        $("#submit3").addClass("hidden");
        
        $("#step_2").addClass("closed");
        $("#step_3").addClass("closed");

        $(".selectArea").removeClass("hidden");
        $(".formatArea").removeClass("hidden");
        
        $(".sidebar").animate({
            scrollTop: $("#step_1").offset().top
        }, 500);
    });
    
    
    /*
    
    STEP 3
    
    */
    $("#sideChange").click(function() {
       if ($("#viewer").hasClass("viewerLeft")) {
           $("#viewer").removeClass("viewerLeft");
       } else {
           $("#viewer").addClass("viewerLeft");
       }
    });
    
    $(".draggable1").draggable( {
        containment: "#placerContainRight",
        cursor: "move",
        cancel: ".ui-rotatable-handle"
    });
    
    $(".draggable2").draggable( {
        containment: "#placerContainLeft",
        cursor: "move",
        cancel: ".ui-rotatable-handle"
    });
    
    $(".sizable").resizable({
        aspectRatio: "true",
        handles: "n,ne,e,se,s,sw,w,nw",
        cursor: "se-resize"
    });
    
    $("#cancel2").click(function() {
        $("#step_1").removeClass("closed");
        $("#step_2").removeClass("closed");
        
        $("#cancel2").addClass("hidden");
        $("#submit3").addClass("hidden");
        
       $("#step_3").addClass("closed");
        
        $(".sidebar").animate({
            scrollTop: $("#step_2").offset().top
        }, 500);
        
    });
    
    /*
    
    ORDER CLICK
    
    */
    
    $("#submit3").click(function(e) {
        e.preventDefault();
        
        if ($("#twoPicCheck").is(":checked")) {
            
            $("#sidebar").addClass("reducedSide");
            $("#viewer").addClass("viewerFullLeft");
            
            $("#sideChange").addClass("hidden");

            setTimeout(function () {}, 500);

            html2canvas(document.body, {
               onrendered: function(canvas) {

               } 
            });

            $("#userValidation").removeClass("hidden");

        } else 
        {
            $("#sidebar").addClass("reducedSide");
            $("#viewer").addClass("viewerFullRight");

            $("#placerContainLeft").addClass("hidden");

            setTimeout(function () {}, 500);

            html2canvas(document.body, {
               onrendered: function(canvas) {

               } 
            });

            $("#userValidation").removeClass("hidden");
        }
       
    });
    
    $("#cancelValid").click(function(e) {
        e.preventDefault();
        
        $("#sidebar").removeClass("reducedSide");
        $("#viewer").removeClass("viewerFullLeft");
        $("#viewer").removeClass("viewerFullRight");
        $("#placerContainLeft").removeClass("hidden");
        $("#userValidation").addClass("hidden");
        
        if ($("#twoPicCheck").is(":checked")) {
            $("#sideChange").removeClass("hidden");
        }
    });
    
    $("#submit4").click(function(e) {
        e.preventDefault();
        console.log("SENDING...");
        
        html2canvas($("#viewer"), {
            onrendered: function(prntscr) {
            }
        });
        
        $("#imgSelect").append($('<input type="hidden" name="modelValid" />').val(sourceName));
        
        $("#imgSelect").submit();
    });

    
});