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
        
        <!-- Importing css -->
        <link rel="stylesheet" type="text/css" href="style/main.css" />
    </head>
    <body>
        <div id="content">
            <form is="iron-form" id="form" method="post" action="test-form-handler.php">
            <?php include_once "include/title-bar.php"; ?>
            
            <div id="center">
                <paper-card id="user-details-1" heading="Please fill the details below:">
                    <div class="card-content">
                        <iron-label id="gender-label">Gender</iron-label>
                        <br />
                        <template is="dom-bind">
                            <paper-radio-group id="gender-radio-group" aria-labelledby="gender-label" selected="{{gender}}">
                                <paper-radio-button name="male">Male</paper-radio-button>
                                <paper-radio-button name="female">Female</paper-radio-button>
                            </paper-radio-group>
                            <paper-input id="gender" hidden="true" value="{{gender}}" name="gender-radio-group" required error-message="This is a required field. Please select your gender."></paper-input>
                            <p id="gender-error" style="visibility: hidden;">This is a required field. Please select your gender.</p>
                        </template>

                        <br />
                        <iron-label for="age-input">Age</iron-label>
                        <paper-input id="age-input" name="age-input" label="Please enter your age." type="number" no-label-float min="18" max="90" maxlength="2" text-align="right" required error-message="This is a required field. Please enter your valid age.">
                            <div suffix>years</div>
                        </paper-input>
                        <iron-label for="nationality-dropdown">Nationality</iron-label><br />
                        <template is="dom-bind">
                            <paper-dropdown-menu id="nationality-dropdown" label="Nationality" no-label-float required error-message="This is a required field. Please select your nationality.">
                                <paper-listbox attr-for-selected="value" class="dropdown-content" selected="{{nationality}}">
                                    <iron-ajax auto url="iron-ajax-handler" params='{"type":"nationality"}' handle-as="json" last-response="{{nationalityResponse}}"></iron-ajax>

                                    <template is="dom-repeat" items="{{nationalityResponse}}">
                                        <paper-item value="{{item.ID}}">{{item.Country}}</paper-item>
                                    </template>
                                </paper-listbox>
                            </paper-dropdown-menu>
                            <input type="hidden" value="{{nationality}}" name="nationality-dropdown" />
                        </template>
                        <br />
                        <iron-label for="occupation">Occupation</iron-label>
                        <div id="occupation">
                            <iron-label for="education-dropdown">
                                Education <span>(If you are not currently in education, please select your highest level achieved.)</span>
                            </iron-label><br />
                            <template is="dom-bind">
                                <paper-dropdown-menu id="education-dropdown" label="Education" no-label-float required error-message="This is a required field. Please select your education.">
                                    <paper-listbox attr-for-selected="value" class="dropdown-content" selected="{{education}}">
                                        <iron-ajax auto url="iron-ajax-handler" params='{"type":"education"}' handle-as="json" last-response="{{educationResponse}}"></iron-ajax>

                                        <template is="dom-repeat" items="{{educationResponse}}">
                                            <paper-item value="{{item.ID}}">{{item.Education}}</paper-item>
                                        </template>
                                    </paper-listbox>
                                </paper-dropdown-menu>
                                <input type="hidden" value="{{education}}" name="education-dropdown" />
                            </template>

                            <br />
                            <iron-label for="degree-title">
                                Degree title <span>(university students only)</span>
                            </iron-label>
                            <paper-input id="degree-title" name="degree-title" no-label-float label="Degree"></paper-input>
                            <iron-label for="employment-status-dropdown">Employment Status</iron-label><br />
                            <template is="dom-bind">
                                <paper-dropdown-menu id="employment-status-dropdown" label="Employment Status" no-label-float required error-message="This is a required field. Please select your employment status.">
                                    <paper-listbox attr-for-selected="value" class="dropdown-content" selected="{{employmentStatus}}">
                                        <iron-ajax auto url="iron-ajax-handler" params='{"type":"employment-status"}' handle-as="json" last-response="{{employmentStatusResponse}}"></iron-ajax>

                                        <template is="dom-repeat" items="{{employmentStatusResponse}}">
                                            <paper-item value="{{item.ID}}">{{item.Status}}</paper-item>
                                        </template>
                                    </paper-listbox>
                                </paper-dropdown-menu>
                                <input type="hidden" value="{{employmentStatus}}" name="employment-status-dropdown" />
                            </template>
                        </div>
                    </div>
                    <div class="card-actions" style="padding: 0px;">
                        <paper-button id="submit-button" onclick="submitForm()" class="green">Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
    <script>
        function submitForm() {
            var genderError = document.getElementById('gender').validate();
            var valid = [document.getElementById('age-input').validate(),
                        document.getElementById('nationality-dropdown').validate(),
                        document.getElementById('education-dropdown').validate(),
                        document.getElementById('employment-status-dropdown').validate(),
                        genderError];
            var validated = false;

            if (!genderError) {
                document.getElementById('gender-error').style.visibility = "visible";
            } else {
                document.getElementById('gender-error').style.visibility = "hidden";
            }

            for (var i = 0; i < valid.length; i++) {
                if (!valid[i]) {
                    validated = false;
                    break;
                } else {
                    validated = true;
                }
            }

            if(validated) {
                    document.getElementById('form').submit();
            }
        }
    </script>
</html>
