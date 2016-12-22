<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="jquery.editable-select.css">
  <script type="text/javascript" src="../hbccr/js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="jquery.editable-select.pack.js"></script>
  <script type="text/javascript" src="common.js"></script>
  <script type="text/javascript">
  $(function() {
    $('.editable-select').editableSelect(
      {
        bg_iframe: true,
        onSelect: function(list_item) {
          $('#results').html('List item text: '+ list_item.text() +'<br> \
          Input value: '+ this.text.val());
        }
      }
    );
    var select = $('.editable-select:first');
    var instances = select.editableSelectInstances();
    instances[0].addOption('Germany, value added programmatically');
  });
  if(!window.console || !window.console.log || !$.browser.mozilla) {
    window.console = {};
    window.console.log = function(str) { $('#debug').show().val($('#debug').val() + str +'\n'); };
  }
  var hidden_offset;
  function moveHidden() {
    var hidden = $('#hidden');
    hidden.show();
    $('#toggle_hidden').val('Hide');
    if(!hidden_offset) {
      hidden_offset = hidden.offset();
      hidden
        .css('position', 'absolute')
        .css('top', hidden_offset.top)
        .css('left', hidden_offset.left)
        .animate({top: 100, left: 400})
      ;
    } else {
      hidden.animate({top: hidden_offset.top, left: hidden_offset.left}, function() {
        hidden.css('position', 'static');
        hidden_offset = null;
      });
    }
  }
  function toggleHidden(btn) {
    var hidden = $('#hidden');
    if($('#hidden').is(':visible')) {
      hidden.hide();
      $(btn).val('Display');
    } else {
      hidden.show();
      $(btn).val('Hide');
    }
  }
  </script>

  <style type="text/css">
  .example .example-select {
    padding-top: 10px;
    padding-bottom: 10px;
    border-bottom: 1px dotted #CCC;
  }
  .example p {
    margin: 0;
    padding: 0;
  }
  .last {
    margin-bottom: 10px;
  }
  #comment-form {
    width: 100%;
  }
  </style>
  <title>A demo of an editable select list/box - Coffeescripter.com</title>
</head>
<body>
  <div id="container">
    <h1>A demo of an editable select list, plugin for jQuery</h1>
    <p>Read more at <a href="http://coffeescripter.com/2009/07/an-editable-select-list-plugin-for-jquery/">http://coffeescripter.com/2009/07/an-editable-select-list-plugin-for-jquery/</a> | <a href="http://coffeescripter.com/code/">More code at Coffeescripter.com</a></p>

    <form class="example">
      <div class="example-select">
        <label for="country">Country</label>
        <select name="country" id="country" class="editable-select">
          <option>Denmark</option>
          <option selected="selected">Sweden, selected</option>
          <option>Norway</option>

          <option>Finland</option>
          <option>Iceland</option>
        </select>
      </div>
      <div class="example-select">
        <label for="name">Names</label>
        <select name="name" id="name" class="editable-select">

          <option>Al</option>
          <option>Anders</option>
          <option selected="selected">Andy, selected</option>
          <option>Brad</option>
          <option>Fred</option>
          <option>George</option>

          <option>Jennifer</option>
          <option>Matt</option>
          <option>Niklas</option>
          <option>Nicole</option>
          <option>Susan</option>
        </select>

      </div>
      <div class="example-select">
        <label for="country2">Other select</label>
        <select name="other" id="other">
          <option>Other1</option>
          <option>Other2</option>
          <option>Other3</option>

          <option>Other4</option>
          <option>Other5</option>
          <option>Other6</option>
          <option>Other7</option>
          <option>Other8</option>
          <option>Other9</option>

          <option>Other10</option>
          <option>Other11</option>
          <option>Other12</option>
          <option>Other13</option>
          <option>Other14</option>
          <option>Other15</option>

          <option>Other16</option>
          <option>Other17</option>
          <option>Other18</option>
          <option>Other19</option>
          <option>Other20</option>
          <option>Other21</option>

          <option>Other22</option>
          <option>Other23</option>
          <option>Other24</option>
          <option>Other25</option>
          <option>Other26</option>
          <option>Other27</option>

          <option>Other28</option>
          <option>Other29</option>
          <option>Other30</option>
        </select>
      </div>
      <div class="example-select">
        <label for="color">Color</label>

        <select name="color" id="color" class="editable-select">
          <option>Color 1</option>
          <option>Color 2</option>
          <option>Color 3</option>
          <option>Color 4</option>
          <option>Color 5</option>

          <option>Color 6</option>
          <option>Color 7</option>
          <option>Color 8</option>
          <option>Color 9</option>
          <option>Color 10</option>
          <option>Color 11</option>

          <option>Color 12</option>
          <option>Color 13</option>
          <option>Color 14</option>
          <option>Color 15</option>
          <option>Color 16</option>
          <option>Color 17</option>

          <option>Color 18</option>
          <option>Color 19</option>
          <option>Color 20</option>
          <option>Color 21</option>
          <option>Color 22</option>
          <option>Color 23</option>

          <option>Color 24</option>
          <option>Color 25</option>
          <option>Color 26</option>
          <option>Color 27</option>
          <option>Color 28</option>
          <option>Color 29</option>

          <option>Color 30</option>

        </select>
      </div>
      <div class="example-select last">
        <p>Just an example of the fact that it works even if the select list isn't visible from
        the start, or if you move the elements around</p>
        <input type="button" onclick="toggleHidden(this);" id="toggle_hidden" value="Display">
        <input type="button" onclick="moveHidden();" value="Move">

        <label for="hidden">Hidden</label>
        <span>
          <select name="hidden" id="hidden" class="editable-select" style="display:none;">
            <option>Al</option>
            <option>Anders</option>
            <option selected="selected">Hidden name, selected</option>
          </select>

        </span>
      </div>
      <input type="submit" value="Submit">
      <div id="results"></div>
    </form>
    <h2>Features</h2>

    <ul>
      <li>Navigate through list with keyboard arrows</li>

      <li>Close list with Esc button</li>
      <li>If the user types in an option that exists in the list, it gets selected</li>
      <li>Autosuggests options when you type</li>
      <li>If an option in the original list has the <code>selected</code> attribute,
      it's value is put inside the text input</li>

      <li>Add a background iframe to prevent IE from displaying select lists
      above the EditableSelect options</li>

      <li>If the user types in a value that exists in the list, that option
      is highlighted in the list when you click on it, just like real selects</li>
      <li>Pick option by clicking on it, pressing Tab, or pressing Enter (form
      submission is prevented when you hit Enter)</li>
      <li>Add values after init with <code>addOption()</code></li>
    </ul>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1364373-3");
pageTracker._trackPageview();
} catch(err) {}</script>

    <h2>Downloads</h2>
    <p><a href="jquery.editable-select.js">The JS-file</a></p>
    <p><a href="jquery.editable-select.css">The CSS-file</a></p>
    <p><a href="arrow-down.gif">The arrow image</a></p>
    <p><a href="jquery.editable-select.1.3.2.zip" onclick="pageTracker._setVar('downloaded-editable-select');">Download all the files required</a></p>

    <h2>Note</h2>

    <p>When the plugin runs, it replaces the select with an input field, and sets the
    id of the input to the id of the select. The id of the select is then set to
    <code>[real id]_hidden_select</code>. If the element has no id, the id is set to
    <code>editable-select[0-9]</code>. Beginning with 1.3.2, it also copies all
    class names from the select to the input.</p>

    <h2>Example code</h2>
    <pre><code>$(function() {
  $('.editable-select').editableSelect(
    {
      bg_iframe: true,
      onSelect: function(list_item) {
        alert('List item text: '+ list_item.text());
        // 'this' is a reference to the instance of EditableSelect
        // object, so you have full access to everything there
        alert('Input value: '+ this.text.val());
      },
      case_sensitive: false, // If set to true, the user has to type in an exact
                             // match for the item to get highlighted
      items_then_scroll: 10 // If there are more than 10 items, display a scrollbar
    }
  );
  var select = $('.editable-select:first');
  var instances = select.editableSelectInstances();
  instances[0].addOption('Germany, value added programmatically');
});</code></pre>

    <h2>Feedback, feature requests, bug reports</h2>

    <p>If you have any feedback on this, please send it as a comment
    or email me at <span class="no-spam">andy at-no-spam coffeescripter dot-no-spam com</span>.</p>

    <div id="comment-form">
      <form action="http://coffeescripter.com/wp-comments-post.php" method="post" id="commentform">
        <div class="field">
          <label class="text">Name (required)</label>

          <input type="text" name="author" id="author" value="" class="textfield" tabindex="1" />

        </div>
        <div class="field">
          <label class="text">Email (required)</label>
          <input type="text" name="email" id="email" value="" class="textfield" tabindex="2" />
        </div>
        <div class="field">
          <label class="text">Website</label>

          <input type="text" name="url" id="url" value="" class="textfield" tabindex="3" />
        </div>
        <div class="field">
          <label class="text">Comment</label>
          <textarea name="comment" id="comment" class="commentbox" tabindex="4"></textarea>
        </div>
        <div class="formactions">
          <input type="submit" name="submit" tabindex="5" class="submit" value="Add your comment" />

        </div>
        <input type="hidden" name="comment_post_ID" value="114" />
      </form>
    </div>

    <h2>Credits</h2>
    <p>Thanks to Niklas Ohlsson for a lot of bug testing and helping out with
    feature ideas.</p>

    <h2>Changelog</h2>

    <ul>
      <li>2010.11.06 Fixed it for newer versions of jQuery, and made it possible
      to have select lists that are hidden at page load - v1.3.2</li>
      <li>2009.07.17 Fixed a bug in Opera and Firefox 3.5 that made the scroll
      unscrollable, and items unhoverable (is that a word?) - v1.3.1</li>
      <li>2009.07.16 Added features that works with regular selects, but were
      missing from this plugin, also added auto suggestion on options when
      you write - v1.3.0</li>
      <li>2009.07.15 Added ability to add option after creation, and to get the
      instance for an element, also added a packed version - v1.2.0</li>

      <li>2009.07.09 Added the onSelect callback - v1.1.0</li>
      <li>2009.07.07 Released - v1.0.0</li>

    </ul>

    <textarea rows="100" cols="80" id="debug" style="display:none"></textarea>
  </div>
</body>
</html>