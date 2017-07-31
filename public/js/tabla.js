// var init = 
// {
// 	loadTable:function(params)
// 	{
		
// 		//console.log(params.data);

// 		if(params.data != undefined)
// 		{
// 			var data_offset =params.data.offset;
// 			var data_limit =params.data.limit;
// 			var data_search =params.data.search;


// 			$.ajax({
// 	            type: "POST",
// 	            dataType: "json",
// 	            url: "Tabla/cargarTabla",	            
// 	            data: {

// 	            	offset: data_offset,
// 	            	limit: data_limit,
// 	            	search: data_search

// 	            },
// 	            async: true,
// 	            success: function (data) {
						
// 						//debugger;
// 					//console.log(data);	
// 					if(params.success != undefined){
// 						params.success(data);
// 						$("#Mytable").bootstrapTable('hideColumn', 'id_usuario');
// 					}
					
// 					//$("#Mytable").bootstrapTable({data: data});							
	            	            
// 	            },
// 	            error: function (XMLHttpRequest, textStatus, errorThrown) {
// 	                console.log(textStatus + ": " + XMLHttpRequest.responseText);
// 	            }
// 	        });

// 		}
		
	


		
// 	}
// }


function loadTable(params)
{
	
	//console.log(params.data);

	if(params.data != undefined)
	{
		var data_offset =params.data.offset;
		var data_limit =params.data.limit;
		var data_search =params.data.search;


		$.ajax({
            type: "POST",
            dataType: "json",
            url: "Tabla/cargarTabla",	            
            data: {

            	offset: data_offset,
            	limit: data_limit,
            	search: data_search

            },
            async: true,
            success: function (data) {
					
					//debugger;
				//console.log(data);	
				if(params.success != undefined){
					params.success(data);
					$("#Mytable").bootstrapTable('hideColumn', 'id_usuario');
				}
				
				//$("#Mytable").bootstrapTable({data: data});							
            	            
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus + ": " + XMLHttpRequest.responseText);
            }
        });

	}

}

$(document).on("ready", function()
{

	$("body").on("click",".btnModificar",function()
	{

		var id_usuario = $('#Mytable').bootstrapTable('getData')[$(this).closest("tr").index()].id_usuario;

		alert('Has hecho click en el row con id: '+id_usuario);

	});


	$("body").on("click",".btnEliminar",function()
	{
		var id_usuario = $('#Mytable').bootstrapTable('getData')[$(this).closest("tr").index()].id_usuario;

		alert('Has hecho click en el row con id: '+id_usuario);
		
	});


	$("body").on("click","#btnModificarEnc",function()
	{
		if($("#Mytable tbody tr.selected").length > 0)
		{
			alert('Has hecho click en el row con id: '+$('#Mytable').bootstrapTable('getSelections')[0].id_usuario);
		}
		else
		{
			alert('Seleccione el registro a Modificar');
		}

		

	});

	$("body").on("click","#btnEliminarEnc",function()
	{
		if($("#Mytable tbody tr.selected").length > 0)
		{
			alert('Has hecho click en el row con id: '+$('#Mytable').bootstrapTable('getSelections')[0].id_usuario);
		}
		else
		{
			alert('Seleccione el registro a Eliminar');
		}
		
	});

});


