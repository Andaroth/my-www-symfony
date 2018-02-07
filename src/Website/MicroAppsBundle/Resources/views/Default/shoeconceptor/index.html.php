<?php 
include('php/lang/lang.php'); 
include('php/incl/config.php');
?><!DOCTYPE html>

<html>
    
    <head>
        <title><?php echo TITLE; ?></title>
        
        <meta name="description" content="Personnalisez votre paire de chaussures !" />
        <meta name="keywords" content="atttextile,nivelles,personnaliser,,chaussures,converseconverses,personnalisées,anime,manga,otaku,image" />
        <meta name="robots" content="noindex, nofollow">
        
        <script src="js/lang/<?php echo $lang ?>_lang.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/viewport.css" media="screen and (max-width: 1000px)" />
        
        <meta property="og:image" content="http://axelfiolhh.cluster017.ovh.net/shoeconceptor/img/og_img.jpg" />
        <meta property="og:title" content="<?php echo TITLE; ?>" />
        
        <link rel="image_src" href="./img/banner.jpg" />
    </head>
    
    <body>
        
        <header>
            <h1><?php echo TXT_HEADER; ?></h1>
        </header>
        
        <form method="post" id="imgSelect" action="purchase.html" enctype="multipart/form-data">
            
            <div id="sidebar">

                <!-- ///////////////////// STEP2 ///////////////////// -->
                <section id="step_1">

                    <h2>1. <?php echo STEP_TWO_INSTRUCT; ?></h2>

                    <ul>
                        <li id="pickAShoe">
                            <ul>
                                <li><p class="plabel"><?php echo PLEASE_PIKACHU; ?></p></li>
                                <li>
                                    <select class="choiceRoll" name="brand" id="brand" form="imgSelect">
                                        <option value="noname"><?php echo NONAME_BRAND_TXT." (".$price['noname']." €)"; ?></option>
                                        <option value="converse">Converse (<?php echo $price['converse']; ?> €)</option>
                                    </select>
                                </li>

                                <li class="colorPick">
                                    <p class="plabel"><?php echo PLEASE_PIKCOL; ?></p>
                                    <select class="choiceRoll" name="color" id="color" form="imgSelect">
                                        <option value="fullblack" class="noConverse"><?php echo COLOR_FULLBLACK; ?></option>
                                        <option value="black" id="defaultColor" selected><?php echo COLOR_BLACK; ?></option>
                                        <option value="white"><?php echo COLOR_WHITE; ?></option>
                                        <option value="grey" class="noConverse"><?php echo COLOR_GREY; ?></option>
                                        <option value="bordeau" class="noConverse"><?php echo COLOR_BORD; ?></option>
                                        <option value="pink" class="noConverse"><?php echo COLOR_PINK; ?></option>
                                        <option value="darkblue" class="noConverse"><?php echo COLOR_DARKBLU; ?></option>
                                    </select>
                                </li>

                                <li class="selector">
                                    <p class="plabel"><?php echo PLEASE_PIKMODL; ?></p>
                                    <select class="choiceRoll" id="ankle" name="ankle" form="imgSelect">
                                        <option value="high" id="highSize"><?php echo CHOICE_H; ?></option>
                                        <option value="low" id="lowSize"><?php echo CHOICE_B; ?></option>
                                    </select>
                                </li>
                                <li class="selector selectSize">
                                    <p class="plabel"><?php echo PLEASE_PIKSIZE; ?></p>
                                    <select class="choiceRoll" name="size" form="imgSelect">
                                        <option disabled><?php echo SIZE_KID; ?></option>
                                        <option value="24" class="noBlanc noGrisBas noBleuBas noNoirBlancBas noNoirNoirBas noBordeau">24</option>
                                        <option value="25" class="noBlanc noGrisBas noBleuBas noNoirBlancBas noNoirNoirBas noBordeau">25</option>
                                        <option value="26" class="noBlanc noNoirNoirBas noBordeau">26</option>
                                        <option value="27" class="noBlanc noNoirNoirBas noBordeau">27</option>
                                        <option value="28" class="noBlanc noNoirNoirBas noBordeau">28</option>
                                        <option value="29" class="noBlanc noNoirNoirBas noBordeau">29</option>
                                        <option value="30" class="noBlanc noNoirNoirBas noBordeau">30</option>
                                        <option value="31" class="noBlanc noNoirNoirBas noBordeau">31</option>
                                        <option value="32" class="noBlanc noNoirNoirBas noBordeau">32</option>
                                        <option value="33" class="noBlanc noNoirNoirBas noBordeau">33</option>
                                        <option value="34" class="noBlanc noNoirNoirBas noBordeau">34</option>
                                        <option value="35" class="noBlanc noNoirNoirBas noBordeau">35</option>
                                        <option disabled><?php echo SIZE_ADULT; ?></option>
                                        <option value="36" class="noNoirNoirBas noBordeau">36</option>
                                        <option value="37" class="noNoirNoirBas noBordeau">37</option>
                                        <option value="38" class="noNoirNoirBas noBordeau">38</option>
                                        <option value="39" class="noNoirNoirBas noBordeau">39</option>
                                        <option value="40" class="noNoirNoirBas noBordeau" selected>40</option>
                                        <option value="41" class="noNoirNoirBas noBordeau" id="safe41">41</option>
                                        <option value="42" class="noBlancHaut noRose" id="safe42">42</option>
                                        <option value="43" class="noBlancHaut noRose">43</option>
                                        <option value="44" class="noBlancHaut noRose">44</option>
                                        <option value="45" class="noBlancHaut noRose">45</option>
                                        <option value="46" class="noBlancHaut noRose">46</option>
                                    </select>
                                </li>
                            </ul>
                        </li>

                        <li><button id="submit1" class="submit"><?php echo TXT_BTN_NEXT; ?></button></li>
                    </ul>    

                </section>
                
                <!-- ///////////////////// STEP2 ///////////////////// -->
                <section id="step_2" class="closed">

                    <h2>2. <?php echo STEP_ONE_INSTRUCT; ?></h2>

                    <input type="hidden" name="MAX_FILE_SIZE" value="512000000" />

                    <ul class="hidSel hidden">
                        
                        <li class="">
                            <input id="twoPicCheck" class="check" type="checkbox" name="twoPic" />
                            <label class="checkLabel" for="twoPicCheck"><?php echo TWO_TXT; ?></label>
                        </li>
                        
                        <li class="formatArea"><em><?php echo TXT_FORMAT; ?></em></li>
                        
                        <li class="sideInfo hidden"><h3><?php echo TXT_LEFT; ?> :</h3></li>
                        <li id="selectTwo" class="selectArea hidden"><input type="file" name="imgSelector2" class="imgSelector" id="imgSelector2" accept="image/x-png,image/jpeg" /></li>
                        
                        <li id="thumbL" class="thumbnail hidden">
                            <img id="imgPreL" class="imgPreview imgPreviewL" src="img/assets/nopic.png" alt="<?php echo PREVIEW_LABEL; ?>">
                            <p id="previewAlert2" class="previewAlert"></p>
                        </li>
                        
                        <li class="sideInfo hidden"><h3><?php echo TXT_RIGHT; ?> :</h3></li>
                        <li class="selectArea"><input type="file" name="imgSelector1" id="imgSelector1" class="imgSelector" accept="image/x-png,image/jpeg" /></li>

                        <li id="thumbR" class="thumbnail hidden">
                            <img id="imgPreR" class="imgPreview imgPreviewR" src="img/assets/nopic.png" alt="<?php echo PREVIEW_LABEL; ?>">
                            <p id="previewAlert1" class="previewAlert"></p>
                            <input id="cropCheckR" class="check" type="checkbox" name="crop" />
                            <label class="checkLabel" for="cropCheckR"><?php echo CROP_TXT; ?></label>
                            <p class="placeTxt"><strong><?php echo PLACE_TXT; ?></strong></p>
                            <p class="sideImportant"><?php echo WARNING_TXT; ?></p>
                        </li>

                        <li id="sendPic"><button class="submit hidden" id="submit2"><?php echo TXT_BTN_NEXT; ?></button></li>
                    </ul> 

                </section>

                <!-- ///////////////////// STEP3 ///////////////////// -->
                <section id="step_3" class="closed">

                    <h2>3. <?php echo STEP_THREE_INSTRUCT; ?></h2>

                    <ul>
                        <li><p><?php echo PLEASE_SHIP; ?></p></li>
                        <li><button id="submit3" class="submit finalSubmit"><?php echo TXT_BTN_ORDER; ?> !</button></li>
                    </ul>

                </section>
                
                <footer>
                    <p>&copy; <a href="http://axelfiolle.be">Axel Fiolle</a> - Tous droits réservés.</p>
                </footer>
                
            </div> <!-- /SIDEBAR -->
            
            <section id="userValidation" class="hidden">

                <h2><?php echo PLEASE_VALID; ?></h2>

                <ul class="userValid">
                    <li>
                        <p><?php echo REALY_SURE; ?></p>
                    </li>
                    <li class="lileft"><button id="cancelValid" class="submit validCancel"><?php echo TXT_BTN_N; ?></button></li>
                    <li class="lileft"><input id="submit4" class="submit validSubmit" type="submit" value="<?php echo TXT_BTN_Y; ?>" /></li>
                </ul>

            </section>
            
            <input style="display:none;" type="file" name="prntscr" accept="image/x-png,image/jpeg" />
        </form>

        <div id="sideChange" class="hidden">
            Switch
        </div>

        <div id="viewer">

            <div id="placerContainRight" class="placerContain">
                <div id="handlerGeneral1" class="handlerGeneral draggable1">
                    <img id="dragpic1" class="sizable" src="/" alt="" />
                </div>
            </div>
            
            <div id="placerContainLeft" class="placerContain">
                <div id="handlerGeneral2" class="handlerGeneral draggable2">
                    <img id="dragpic2" class="sizable" src="/" alt="" />
                </div>
            </div>

        </div>
            
        <!-- Have a nice day -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery-rotate.js"></script>
        <script src="js/jquery-touch-punch.js"></script>
        <script src="js/html2canvas.js"></script>
        
        <script src="js/jquery.nicescroll.js"></script>
        
        <!-- All aboard ;) -->
        <script src="js/app.js"></script>
        
    </body>
    
</html>