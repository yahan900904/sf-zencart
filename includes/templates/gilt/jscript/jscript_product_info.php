<script src="<?php echo HTTP_SERVER.DIR_WS_CATALOG.DIR_WS_TEMPLATE.'jscript/jquery.scroll.js' ?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$.my_scroll_plugin({
		'up_scroll_id':'additionalImagesUp',
		'down_scroll_id':'additionalImagesDown',
		'containner_id':'additionThumbnail',
		'containner_css':{'height':'289px'},
		'step'		: '70',
		'child_mousemove':function(){
			$(".thumbnail_selected").removeClass("thumbnail_selected");
			$(this).addClass("thumbnail_selected");
		}
	});
	
	$(".additionalImages").each(function(i){
		$(this).css({position:'relative'});
		$('<div></div>').text(i).css({position:'absolute',top:0,left:0,background:'#cc0000',color:'#fff',padding:'5px'}).appendTo(this);
	});
	$(".multiLabelMenu-nav-tab").click(function(){
		var rel = $(this).attr("rel");
		if($(".tab_selected").attr("rel")==rel)	return;
		$(".tab_selected").removeClass("tab_selected");
		$(this).addClass("tab_selected");
		$('.content_selected').removeClass('content_selected');
		$("#"+rel).addClass("content_selected");
		
	});
	//自定义尺寸输入表单的显示与隐藏
// 	$("select[id='attrib-1']").change(function(i){
// 		if($(this).attr("value")=='1'){
// 			$(".wrapperAttribsOptions").filter(function(i){
// 				if($(".optionName",this).text().match('Bust|Waist|Hips|Hollow to Floor'))
// 					return true;
// 			}).show();
// 		}else{
// 			$(".wrapperAttribsOptions").filter(function(i){
// 				if($(".optionName",this).text().match('Bust|Waist|Hips|Hollow to Floor'))
// 					return true;
// 			}).hide();
// 		}
// 	});
// 	$("#attrib-6-0").attr("value","the same as the photo");
// 	$("input","#productAttributes").click(function(){
//             if($.browser.msie) this.createTextRange().select();
//             else {
//                 this.selectionStart = 0;
//                 this.selectionEnd = this.value.length;
//             }
// 	});

// 	$("input[name='addToCart']").click(function(){
// 		var bust = $("#attrib-2-0").val();
// 		var waist = $("#attrib-3-0").val();
// 		var hips = $("#attrib-4-0").val();
// 		var shoulder = $("#attrib-5-0").val();
// 		var hollow_to_floor = $("#attrib-6-0").val();
// 		var height = $("#attrib-7-0").val();
// 		if(bust=="") {
// 			alert("Please input your bust value.");
// 			$("#attrib-2-0").focus();
// 			return false;
// 		}
// 		if(waist=="") {
// 			alert("Please input your waist value.");
// 			$("#attrib-3-0").focus();
// 			return false;
// 		}
// 		if(hips=="") {
// 			alert("Please input your hips value.");
// 			$("#attrib-4-0").focus();
// 			return false;
// 		}
// 		if(shoulder=="") {
// 			alert("Please input your shoulder value.");
// 			$("#attrib-5-0").focus();
// 			return false;
// 		}			
// 		if(hollow_to_floor=="") {
// 			alert("Please input your hollow to floor value.");
// 			$("#attrib-6-0").focus();
// 			return false;
// 		}
// 		if(height=="") {
// 			alert("Please input your height value.");
// 			$("#attrib-7-0").focus();
// 			return false;
// 		}			

// 		return true;
// 	});
});
</script>
<?php
require DIR_WS_MODULES.'jqzoom/init_jqzoom.php';