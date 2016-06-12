<!DOCTYPE html>
<html>
    <head>
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
        <link rel="import" href="bower_components/paper-radio-group/paper-radio-group.html" />
        <link rel="import" href="bower_components/paper-radio-button/paper-radio-button.html" />
        <link rel="import" href="bower_components/paper-input/paper-input.html" />
        
        <!-- Importing css -->
        <link rel="stylesheet" type="text/css" href="style/main.css" />
    </head>
    <body>
        <div id="content">
            <paper-toolbar>
                <span class="title">Research</span>
            </paper-toolbar>
            
            <div id="center">
                <paper-card id="user-details-1" heading="Please fill the details below:">
                    <div class="card-content">
                        <iron-label id="gender-label">Gender</iron-label>
                        <br />
                        <paper-radio-group aria-labelledby="gender-label">
                            <paper-radio-button name="male">Male</paper-radio-button>
                            <paper-radio-button name="female">Female</paper-radio-button>
                        </paper-radio-group>
                        <br />
                        <br />
                        <iron-label>Age</iron-label>
                        <paper-input label="Please enter your age." type="number" no-label-float min="18" max="90">
                            <div suffix> years</div>
                        </paper-input>
                    </div>
                    <div class="card-actions">
                        <paper-button>Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>