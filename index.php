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
                        <paper-radio-group id="gender-radio-group" name="gender-radio-group" aria-labelledby="gender-label">
                            <paper-radio-button name="male">Male</paper-radio-button>
                            <paper-radio-button name="female">Female</paper-radio-button>
                        </paper-radio-group>
                        <br />
                        <iron-label for="age-input">Age</iron-label>
                        <paper-input id="age-input" name="age-input" label="Please enter your age." type="number" no-label-float min="18" max="90" maxlength="2" text-align="right">
                            <div suffix>years</div>
                        </paper-input>
                        <iron-label for="nationality-dropdown">Nationality</iron-label><br />
                        <paper-dropdown-menu id="nationality-dropdown" name="nationality-dropdown" label="Nationality" no-label-float>
                            <paper-listbox class="dropdown-content">
                                <template is="dom-bind">
                                    <iron-ajax auto url="iron-ajax-handler" params='{"type":"nationality"}' handle-as="json" last-response="{{nationalityResponse}}"></iron-ajax>

                                    <template is="dom-repeat" items="{{nationalityResponse}}">
                                        <paper-item>{{item.Country}}</paper-item>
                                    </template>
                                </template>
                            </paper-listbox>
                        </paper-dropdown-menu>
                        <br />
                        <iron-label for="occupation">Occupation</iron-label>
                        <div id="occupation">
                            <iron-label for="education-dropdown">
                                Education <span>(If you are not currently in education, please select your highest level achieved.)</span>
                            </iron-label><br />
                            <paper-dropdown-menu id="education-dropdown" name="education-dropdown" label="Education" no-label-float>
                                <paper-listbox class="dropdown-content">
                                    <template is="dom-bind">
                                        <iron-ajax auto url="iron-ajax-handler" params='{"type":"education"}' handle-as="json" last-response="{{educationResponse}}"></iron-ajax>

                                        <template is="dom-repeat" items="{{educationResponse}}">
                                            <paper-item>{{item.Education}}</paper-item>
                                        </template>
                                    </template>
                                </paper-listbox>
                            </paper-dropdown-menu>
                            <br />
                            <iron-label for="degree-title">
                                Degree title <span>(university students only)</span>
                            </iron-label>
                            <paper-input id="degree-title" name="degree-title" no-label-float label="Degree"></paper-input>
                            <iron-label for="employment-status-dropdown">Employment Status</iron-label><br />
                            <paper-dropdown-menu id="employment-status-dropdown" name="employment-status-dropdown" label="Employment Status" no-label-float>
                                <paper-listbox class="dropdown-content">
                                    <template is="dom-bind">
                                        <iron-ajax auto url="iron-ajax-handler" params='{"type":"employment-status"}' handle-as="json" last-response="{{employmentStatusResponse}}"></iron-ajax>

                                        <template is="dom-repeat" items="{{employmentStatusResponse}}">
                                            <paper-item>{{item.Status}}</paper-item>
                                        </template>
                                    </template>
                                </paper-listbox>
                            </paper-dropdown-menu>
                            <div class="index clearfix"></div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <paper-button id="submit-button" raised onclick="submitForm()" class="green">Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
    <script>
        function submitForm() {
          document.getElementById('form').submit();
        }
    </script>
</html>
