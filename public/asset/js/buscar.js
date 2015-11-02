    $(function() {
      theTable = $("#table");
      $("#q").keyup(function() {
      $.uiTableFilter(theTable, this.value);
      });
    });