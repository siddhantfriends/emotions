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

        <?php
            $sqlQuery = "SELECT [Question] FROM [dbo].[Questionaire] WHERE [Type]='IUIPC'";
            $result = $conn->query($sqlQuery);
            $questionGrabber = <<<QUESTIONGRABBER

QUESTIONGRABBER;
            foreach ($result as $row) {
                $questionGrabber .= <<<QUESTIONGRABBER
                <paper-item>$row[0]</paper-item>
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
                        <iron-label id="info-label">The next pages will have some questions and will require you to create a Gmail account. If you already own a Gmail account please create a new one. Please take your time and fill out all of the required fields.<br /><br /><b>For each of the following, click the scale to indicate how well each adjective or phrase describes your present mood.</b></iron-label>
                        <br />

                        <?php
                        for ($i = 0; $i < count($row); $i++) {
                            echo '<paper-item>  $questionGrabber  </br></paper-item>';
                            echo '<paper-input label="testing input"></paper-input>';
                        }
                        ?>
<!-- text area not displaying-->

<!--                        <paper-textarea label="textarea for question"></paper-textarea>-->


                        <style is="custom-style">
                            .caption {
                                padding-left: 12px;
                                color: #a0a0a0;
                            }
                            #grade {
                                --paper-slider-secondary-color: var(--paper-red-a200);
                            }
                        </style>
                        <div>Ratings: <span id="ratingsLabel" class="caption"></span></div><br>
                        <paper-slider id="ratings" pin snaps max="10" max-markers="10" step="1" value="5"></paper-slider>
                        <paper-slider value="21"></paper-slider>
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
                        <paper-button>Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>