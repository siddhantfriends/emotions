<html>
<head>
    <title>iron-form</title>

    <?php require_once "../essentials/database_conn.php"; ?>
    <!-- Adding polyfill support. -->
    <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

    <link rel="import" href="../bower_components/polymer/polymer.html" />
    <link rel="import" href="../bower_components/iron-ajax/iron-ajax.html" />
    <link rel="import" href="../bower_components/paper-card/paper-card.html" />
    <link rel="import" href="../bower_components/paper-button/paper-button.html" />

    <link rel="import" href="../bower_components/paper-item/paper-item.html" />
    <link rel="import" href="../bower_components/paper-slider/paper-slider.html" />
    
 

</head>
<body>
    <form is="iron-form" id="form" method="post" action="iron-form-handler-problem.php">
        <paper-card>
            <div class="title">Title goes here..</div>
            <div class="card-content">
                <template is="dom-bind">
                <iron-ajax auto url="../iron-ajax-handler" params='{"type":"test-question"}' handle-as="json" last-response="{{question}}"></iron-ajax>
                <template is="dom-repeat" items="{{question}}">
                    <paper-item value="{{item.ID}}">{{item.Question}}</paper-item>
                    <paper-slider id="rating" pin snaps max="100" max-markers="100" step="20" value={{sliderSelectedValue}}></paper-slider>
                    
<!--                To grab selected value of slider and retrieved question ID-->
                    <input type="hidden" name="questionSectionID" value="{{item.ID}}" />
                    <input type="hidden" name="selectedSliderValue" value="{{sliderSelectedValue}}" />
                </template>    
            </template>
            </div>
            
            <div class="card-actions">
                <paper-button onclick="form_submit()">Submit</paper-button>
            </div>
        </paper-card>
    </form>
</body>

<script>
    function form_submit() {
       document.getElementById('form').submit();
    }
</script>
</html>
