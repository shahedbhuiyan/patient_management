if(window.jQuery) {
  (function($) {
    $(function() {
      $('span.no-spam').each(
        function() {
          var address = $(this).text();
          address = address.replace(' at-no-spam ', '@');
          address = address.replace(' dot-no-spam ', '.');
          var link = $('<a href="mailto:'+ address +'">'+ address +'</a>');
          $(this).empty().append(link);
        }
      );
    });
  })(jQuery);
}