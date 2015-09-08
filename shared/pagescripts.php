<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- jQuery events and code -->
<script>
    $(function() {
        $( "#editor-box" ).draggable({ handle: "div.draghandle" });
        $( ".draghandle" ).disableSelection();
        $("#text-input").height($("#editor-box").innerHeight() - $(".draghandle").outerHeight(true));
      });
</script>
<!-- Markdown Parser -->
<script src="scripts/plugins/markdown-js/markdown.min.js"></script>
<script>
    function Editor(input, preview) {
        this.update = function () {
            preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
    }
    // Create new Markdown editor/parser
    //new Editor($("#text-input")[0], $("#preview")[0]);
</script>