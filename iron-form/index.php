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
    <link rel="import" href="../bower_components/paper-input/paper-input.html" />
</head>
<body>
    <form is="iron-form" id="form" method="post" action="iron-form-handler.php">
        <input type="text" name="xyz" />
        <button type="submit">Submit</button>
    </form>
    <form is="iron-form" id="form2" method="post" action="iron-form-handler.php">
        <paper-card>
            <div class="title">Title goes here..</div>
            <div class="card-content">
                <paper-input type="text" name="polymer-element" />
            </div>
            <div class="card-actions">
                <paper-button onclick="form_submit()">Submit</paper-button>
            </div>
        </paper-card>
    </form>
</body>

<script>
    function form_submit() {
       document.getElementById('form2').submit();
    }
</script>
</html>
