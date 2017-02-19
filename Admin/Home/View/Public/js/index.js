//jquery 库
//菜单栏左边的js
$(function(){
	/*$('.left .active:gt(0)').nextAll().hide();*/
	$('.'+menu+' a:gt(0) ').nextAll().show();
	$('.list-group').not($('.'+menu)).find('a:gt(0)').hide();
	$('.active').click(function(){
		$(this).nextAll().toggle();
         $('.active').not($(this)).nextAll().hide();
	});
});
//kindeditor编辑器插件
var editor;
KindEditor.ready(function(K) {
	editor = K.create('.content', {
		resizeType : 0,
		items : [
			'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'image', 'link']
	});
});