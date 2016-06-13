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
        
        <?php
            $sqlQuery = "SELECT [Country] FROM [dbo].[Nationality]";
            $result = $conn->query($sqlQuery);
            $nationalityDropdown = <<<NATIONALITYDROPDOWN
NATIONALITYDROPDOWN;
            foreach ($result as $row) {
                $nationalityDropdown .= <<<NATIONALITYDROPDOWN
                <paper-item>$row[0]</paper-item>
NATIONALITYDROPDOWN;
            }
        
            $sqlQuery = "SELECT [Education] FROM [dbo].[Education]";
            $result = $conn->query($sqlQuery);
            $educationDropdown = <<<EDUCATIONDROPDOWN
EDUCATIONDROPDOWN;
            foreach ($result as $row) {
                $educationDropdown .= <<<EDUCATIONDROPDOWN
                <paper-item>$row[0]</paper-item>
EDUCATIONDROPDOWN;
            }
        ?>
        
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
                                <?php echo $nationalityDropdown ?>
                            </paper-listbox>
                        </paper-dropdown-menu>
                        <br />
                        <iron-label for="occupation">Occupation</iron-label><br />
                        <div id="occupation">
                            <iron-label for="education-dropdown">Education</iron-label><br />
                            <paper-dropdown-menu id="education-dropdown" label="Education" no-label-float>
                                <paper-listbox class="dropdown-content">
                                    <?php echo $educationDropdown ?>
                                </paper-listbox>
                            </paper-dropdown-menu>
                        </div>
                    </div>
                    <div class="card-actions">
                        <paper-button>Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>