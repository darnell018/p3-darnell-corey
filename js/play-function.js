$('.play').click(function() {
  video = '<iframe width="620" height="349" frameborder="0" src="' + $('.video-preview img').attr('data-video') + '"></iframe>';
  $('.video').replaceWith(video);
});
