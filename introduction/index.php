<?php
    require_once 'create-user-or-redirect.php';
?><!DOCTYPE html>
<html>
    <head>
        <!-- Adding polyfill support. -->
        <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

        <!-- Import elements to be used -->
        <link rel="import" href="../bower_components/polymer/polymer.html" />
        <link rel="import" href="../bower_components/paper-card/paper-card.html" />
        <link rel="import" href="../bower_components/paper-button/paper-button.html" />
        <link rel="import" href="../bower_components/paper-header-panel/paper-header-panel.html" />
        <link rel="import" href="../bower_components/paper-toolbar/paper-toolbar.html" />
        <link rel="import" href="../bower_components/iron-flex-layout/iron-flex-layout.html" />
        <link rel="import" href="../bower_components/paper-icon-button/paper-icon-button.html" />
        <link rel="import" href="../bower_components/iron-label/iron-label.html" />
        <link rel="import" href="../bower_components/paper-radio-group/paper-radio-group.html" />
        <link rel="import" href="../bower_components/paper-radio-button/paper-radio-button.html" />
        <link rel="import" href="../bower_components/paper-input/paper-input.html" />
        <link rel="import" href="../bower_components/paper-dropdown-menu/paper-dropdown-menu.html" />
        <link rel="import" href="../bower_components/paper-listbox/paper-listbox.html" />
        <link rel="import" href="../bower_components/paper-item/paper-item.html" />
        <link rel="import" href="../bower_components/iron-ajax/iron-ajax.html" />
        <link rel="import" href="../bower_components/google-castable-video/google-castable-video.html" />

        <!-- Importing css -->
        <link rel="stylesheet" type="text/css" href="../style/main.css" />
    </head>
    <body>
        <div id="content">

            <?php include_once "../include/title-bar.php"; ?>

            <div id="center">
                <paper-card id="user-details-1" heading="Welcome Lad, Play the video when you are ready">
                    <div class="card-content">
                        <h3><?php echo "The current user ID is " . $id . ".<br>"; ?></h3>
                        <video id="video-view" is="google-castable-video">
                            <source src="../survey-data/video/sample1.mp4"></source>
                        </video>
                    </div>
                    <div id="controls" class="card-actions" style="padding: 0px;">
                        <paper-button id="play-pause">PLAY</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
    <script>
        var playing = false;
        var video = document.getElementById("video-view");
        var playPauseButton = document.getElementById("play-pause");

        playPauseButton.addEventListener("click", function(){
            if (playing) {
                playing = false;
                video.pause();
                playPauseButton.innerHTML = "PLAY";
            } else {
                playing = true;
                video.play();
                playPauseButton.innerHTML = "PAUSE";
            }
        });
    </script>
</html>
