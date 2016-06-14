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
                        <paper-item><?php echo $questionGrabber ?></paper-item>
                        <paper-textarea label="autoresizing textarea input"></paper-textarea>
                    </div>
                    <div class="card-actions">
                        <paper-button>Submit</paper-button>
                    </div>
                </paper-card>
            </div>
        </div>
    </body>
</html>