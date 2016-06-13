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
        <link rel="import" href="bower_components/paper-radio-group/paper-radio-group.html" />
        <link rel="import" href="bower_components/paper-radio-button/paper-radio-button.html" />
        <link rel="import" href="bower_components/paper-input/paper-input.html" />
        <link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html" />
        <link rel="import" href="bower_components/paper-listbox/paper-listbox.html" />
        <link rel="import" href="bower_components/paper-item/paper-item.html" />
        
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
                        <br /><br />
                        <iron-label for="age-input">Age</iron-label>
                        <paper-input id="age-input" label="Please enter your age." type="number" no-label-float min="18" max="90" maxlength="2" text-align="right">
                            <div suffix>years</div>
                        </paper-input>
                        <br />
                        <iron-label for="nationality-dropdown">Nationality</iron-label><br />
                        <paper-dropdown-menu id="nationality-dropdown" label="Nationality" no-label-float>
                            <paper-listbox class="dropdown-content">
                                <paper-item>allosaurus</paper-item>
                                <paper-item>brontosaurus</paper-item>
                                <paper-item>carcharodontosaurus</paper-item>
                                <paper-item>diplodocus</paper-item>
                            </paper-listbox>
                        </paper-dropdown-menu>
                        <?php
                            $sqlQuery = "SELECT * FROM [dbo].[Nationality]";
                            $result = $conn->query($sqlQuery);
                            foreach ($result as $row) {
                                print_r($row);
                            }
                        ?>
                    </div>
                    <div class="card-actions">
                        <paper-button>Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>