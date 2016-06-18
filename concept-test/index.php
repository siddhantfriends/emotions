<html>
<head>
    <title>Test page</title>

        <?php require_once "../essentials/database_conn.php"; ?>
        <!-- Adding polyfill support. -->
        <script src="../bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

        <!-- Import elements to be used -->
        <link rel="import" href="../bower_components/paper-card/paper-card.html" />
        <link rel="import" href="../bower_components/paper-button/paper-button.html" />
        <link rel="import" href="../bower_components/iron-ajax/iron-ajax.html" />

</head>
<body onload="generateReq()">

    <paper-card heading="Card Title">
      <div class="card-content">Some content</div>
      <div class="card-actions">
        <paper-button>Some action</paper-button>
      </div>
    </paper-card>
    <iron-ajax
        id="elem"
        auto
        url="http://gdata.youtube.com/feeds/api/videos/"
        params='{"alt":"json", "q":"chrome"}'
        handle-as="json"
        on-response="handleResponse"
        debounce-duration="300"></iron-ajax>
    <?php

    ?>
</body>
    <script>
        function generateReq() {
            document.getElementById('elem').generateRequest();
        }
    </script>
</html>
