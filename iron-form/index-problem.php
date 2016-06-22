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
    <link rel="import" href="../bower_components/paper-dropdown-menu/paper-dropdown-menu.html" />
    <link rel="import" href="../bower_components/paper-listbox/paper-listbox.html" />
    <link rel="import" href="../bower_components/paper-item/paper-item.html" />
</head>
<body>
    <form is="iron-form" id="form" method="post" action="iron-form-handler-problem.php">
        <paper-card>
            <div class="title">Title goes here..</div>
            <div class="card-content">

                <template is="dom-bind">

                <paper-dropdown-menu id="paper-dropdown" label="Your favourite pastry" name="my-dropdown" selectedItem="{{si}}">
                <paper-listbox class="dropdown-content">
                    <paper-item>Croissant</paper-item>
                    <paper-item>Donut</paper-item>
                    <paper-item>Financier</paper-item>
                    <paper-item>Madeleine</paper-item>
                </paper-listbox>
                </paper-dropdown-menu>


                <paper-input type="text" name="polymer-element" ></paper-input>
                <input type="text" name="selectedValue" value="{{si}}"/>

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
