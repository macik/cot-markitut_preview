
function time () {
  return Math.floor(new Date().getTime() / 1000);
}
var previewMode = false;

$('.markitup_preview_button').click(function(){
	$('li.mPreview').mouseup();
	previewMode = autoPreview;
});

if ($('.markitup_preview_button').length) $('li.mPreview').hide();
var tmark = time();

$('.markItUpEditor').keypress(function( event ) {
	if (previewMode && (time()-tmark)>5 && (event.charCode || event.keyCode==8 || event.keyCode==46)) {
		$('li.mPreview').mouseup();
		tmark = time();
	}
});
