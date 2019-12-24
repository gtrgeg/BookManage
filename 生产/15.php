
<div>
	<table id="table">
	</table>
</div>
<?php 
$function(){
	$('#index-form').bootstrapTable({
	ajax : function (request) {
        $.ajax({
            type : "GET",
            url : "tushufenlei.php",
			contentType: "application/json;charset=utf-8",
			dataType:"jsonp",
			data:'',
			jsonp:'callback',
            success : function (msg) {			
				request.success({
                    row : msg
                });
                $('#index-form').bootstrapTable('load', msg);
            },
			error:function(){
				alert("错误");
			}
        });
	},
		
		toolbar:'#toolbar',
		singleSelect:true,
		clickToSelect:true,	
		sortName: "create_time",
		sortOrder: "desc",
		pageSize: 15,
		pageNumber: 1,
		pageList: "[10, 25, 50, 100, All]",
		showToggle: true,
		showRefresh: true,
		showColumns: true,
		search: true,
		pagination: true,
		columns: [{
			field: "state",
			checkbox:true,
		},{
			field: 'scene_name',
			title: '推荐位名称',
			switchable: true
		}, {
			field: 'scene',
			title: '场景',
			switchable: true
		}, {
			field: 'creater',
			title: '创建者',
			switchable: true
		}, {
			field: 'create_time',
			title: '创建时间',
			switchable: true,
			sortable: true
		}, {
			field: 'managers',
			title: '授权账号',
			switchable: true
		}],
 
	});
 ?>