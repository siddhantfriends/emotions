<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once "essentials/database_conn.php"; ?>
        <!-- Adding polyfill support. -->
        <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

        <!-- Import elements to be used -->
        <link rel="import" href="bower_components/polymer/polymer.html" />
        <link rel="import" href="bower_components/paper-card/paper-card.html" />
        <link rel="import" href="bower_components/paper-button/paper-button.html" />
        <link rel="import" href="bower_components/paper-header-panel/paper-header-panel.html" />
        <link rel="import" href="bower_components/paper-toolbar/paper-toolbar.html" />
        <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html" />
        <link rel="import" href="bower_components/paper-icon-button/paper-icon-button.html" />
        <link rel="import" href="bower_components/iron-label/iron-label.html" />
        <link rel="import" href="bower_components/paper-radio-group/paper-radio-group.html" />
        <link rel="import" href="bower_components/paper-radio-button/paper-radio-button.html" />
        <link rel="import" href="bower_components/paper-input/paper-input.html" />
        <link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html" />
        <link rel="import" href="bower_components/paper-listbox/paper-listbox.html" />
        <link rel="import" href="bower_components/paper-item/paper-item.html" />
        <link rel="import" href="bower_components/iron-ajax/iron-ajax.html" />
        <link rel="import" href="bower_components/google-castable-video/google-castable-video.html" />
        
        <!-- Importing css -->
        <link rel="stylesheet" type="text/css" href="style/main.css" />
    </head>
    <body>
        <div id="content">
            
            <?php include_once "include/title-bar.php"; ?>
            
            <div id="center">

                <paper-card id="user-details-1" heading="Welcome Lad, Play the video when you are ready">
                      <h3><?php echo "The current session ID is " . $_SESSION["currUserID"] . ".<br>"; ?></h3>
                      <video is="google-castable-video" width="850">
                        <source src="survey-data/video/sample1.mp4"></source>
                      </video>
                      
                      <div id="controls">
                        <paper-button id="play">PLAY</paper-button>
                        <paper-button id="pause">PAUSE</paper-button>
                      </div>
                
                        <script>
                        var vid = document.querySelector("video");
                        var playButton = document.querySelector("#play");
                        var pauseButton = document.querySelector("#pause");
                        var castButton = document.querySelector("#cast");
                        var progressSlider = document.querySelector("#progress");

                        playButton.addEventListener("click", function(){
                          vid.play();
                        });

                        pauseButton.addEventListener("click", function(){
                          vid.pause();
                        });

                        castButton.addEventListener("click", function(){
                          vid.launchSessionManager();
                        });
                        </script>
                </paper-card>
    
            </div>
        </div>
    </body>
</html>
