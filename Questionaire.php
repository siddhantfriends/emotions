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
        <link rel="import" href="bower_components/iron-ajax/iron-ajax.html" />
        
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

                        <template is="dom-bind">
                            <iron-ajax auto url="iron-ajax-handler" params='{"type":"ques"}' handle-as="json" last-response="{{quesResponse}}"></iron-ajax>
                            <template is="dom-repeat" items="{{quesResponse}}">
                                <paper-item value="{{item.ID}}">{{item.Question}}</paper-item>
                                 <span>Completely Agree</span>
                                <paper-slider id="ratings" pin snaps max="100" max-markers="100" step="20" value="1"></paper-slider>
                                <span >Completely Disagree</span>
                            <input type="hidden" id="item{{item.ID}}"value="{{ratings}}" name="sliderAnswer" />  
                            </template>    
                        </template>
                    </div>

                    <div class="card-actions">
                        <paper-button>Next</paper-button>
                    </div>
                </paper-card>
                <br />
            </div>
        </div>
    </body>
</html>