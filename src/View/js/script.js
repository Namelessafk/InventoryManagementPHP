function apertadinha(){
    var apert = document.getElementById("apert");
    let panel = document.getElementById("panel");
    apert.style.display="block";
    panel.style.zIndex="0"
}
function fechadinha(){
    apert.style.display="none";

}

$(document).ready(function(){
    var dataTable = $('#datatable').dataTable({
        "ajax":{
            url:"http://localhost/IvManagement/src/Controller/produtos.php",
            type:"POST"
        },
        "responsive":true,
        "dom":'Bfrtip',
        "bAutoWidth": false,
        "select":true,
        "processing":true,
        "serverSide":true
    });
    
    $('#datatable').on('draw.dt',function(){
        $('#datatable').Tabledit({
            url:'http://localhost/IvManagement/src/Controller/produtos.php',
            datatype:'json',
            columns:{
                identifier:[1,'CodigoDeBarra'],
                editable:[[0,'Descricao'],[1,'CodigoDeBarra']]
            },
            restorebuttons:false,
            onSuccess:function(data, textStatus, JqXHR){
                if(data.action=='delete')
                {
                    $('#'+data.CodigoDeBarra).remove();
                    $('#datatable').dataTable().ajax.reload()
                }
            }
        }); 
    })

});
