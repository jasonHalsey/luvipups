jQuery(window).load(function() {
  var $word1 = jQuery(".paw-bg-2");
  var $word2 = jQuery(".paw-bg-3");
  var $word3 = jQuery(".paw-bg-1");

  $word1.fadeIn(800, function() {
    $word2.fadeIn(600, function() {
      $word3.fadeIn(600);
    });
  });
});