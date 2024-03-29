<!DOCTYPE html>
<html>
    <head>
        <?php require_once "essentials/database_conn.php"; ?>
        <!-- Adding polyfill support. -->
        <script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

        <!-- Import elements to be used -->
        <link rel="import" href="bower_components/paper-card/paper-card.html" />
        <link rel="import" href="bower_components/paper-button/paper-button.html" />
        <link rel="import" href="/bower_components/paper-header-panel/paper-header-panel.html" />
        <link rel="import" href="/bower_components/paper-toolbar/paper-toolbar.html" />
        <link rel="import" href="/bower_components/iron-flex-layout/iron-flex-layout.html" />
        <link rel="import" href="/bower_components/paper-icon-button/paper-icon-button.html" />
        <link rel="import" href="bower_components/iron-label/iron-label.html" />
        <link rel="import" href="bower_components/paper-input/paper-input.html" />
        <link rel="import" href="bower_components/paper-item/paper-item.html" />
        <link rel="import" href="bower_components/polymer/polymer.html">
        <link rel="import" href="bower_components/iron-autogrow-textarea/iron-autogrow-textarea.html" />
        <link rel="import" href="bower_components/iron-form-element-behavior/iron-form-element-behavior.html">
        <link rel="import" href="bower_components/paper-input/paper-input-behavior.html">
        <link rel="import" href="bower_components/paper-input/paper-input-char-counter.html">
        <link rel="import" href="bower_components/paper-input/paper-input-container.html">
        <link rel="import" href="bower_components/paper-input/paper-input-error.html">

        <link rel="import" href="bower_components/iron-a11y-keys-behavior/iron-a11y-keys-behavior.html"/>
        <link rel="import" href="bower_components/iron-flex-layout/iron-flex-layout.html"/>
        <link rel="import" href="bower_components/iron-form-element-behavior/iron-form-element-behavior.html"/>
        <link rel="import" href="bower_components/iron-range-behavior/iron-range-behavior.html"/>
        <link rel="import" href="bower_components/paper-behaviors/paper-inky-focus-behavior.html"/>
        <link rel="import" href="bower_components/paper-input/paper-input.html"/>
        <link rel="import" href="bower_components/paper-progress/paper-progress.html"/>
        <link rel="import" href="bower_components/paper-styles/color.html"/>
        <link rel="import" href="bower_components/paper-slider/paper-slider.html" />

        <?php
            $sqlQuery = "SELECT [Question] FROM [dbo].[Questionaire] WHERE [Type]='panasx'";
            $result = $conn->query($sqlQuery);
            $questionGrabber = <<<QUESTIONGRABBER

QUESTIONGRABBER;
            foreach ($result as $row) {
                $questionGrabber .= <<<QUESTIONGRABBER
                <paper-item>$row[0]</paper-item>
                <paper-slider id="ratings" pin snaps max="10" max-markers="10" step="1" value="1"></paper-slider>
QUESTIONGRABBER;
            }
        ?>
        
        <!-- Importing css -->
        <link rel="stylesheet" type="text/css" href="style/main.css" />
    </head>
    <body>
        <div id="content" class="style-scope sample-content">
            <?php include_once "include/title-bar.php"; ?>
            
            <div id="center">
                <paper-card id="user-details-1" heading="Questionnaire">
                    <div class="card-content">
                        <iron-label id="info-label">Read each item and then select the appropriate answer from the scale next to that word. Indicate to what extent you have felt this way while watching the video. Use the following scale to record your answers.<br /><br /><b>Please select the option closest to your feelings when you watched the video.</b></iron-label>
                        <br />

                        <?php echo $questionGrabber; ?>
                        <style is="custom-style">
                            .caption {
                                padding-left: 12px;
                                color: #a0a0a0;
                            }
                            #grade {
                                --paper-slider-secondary-color: var(--paper-red-a200);
                            }
                        </style>
                        <script>
                            document.addEventListener('WebComponentsReady', function() {
                                var ratings = document.querySelector('#ratings');
                                ratings.addEventListener('value-change', function() {
                                    document.querySelector('#ratingsLabel').textContent = ratings.value;
                                });

                                var grade = document.querySelector('#grade');
                                grade.addEventListener('value-change', function() {
                                    var label = (grade.value < grade.secondaryProgress) ? "Fail" : "Pass" ;
                                    document.querySelector('#gradeLabel').textContent = grade.value + " (" + label + ")";
                                });
                            });
                        </script>
                    </div>
                    <div class="card-actions">
                        <paper-button>Next</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>