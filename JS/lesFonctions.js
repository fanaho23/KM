function Authentification()
{
       
        $.ajax 
        (
            {
                type:"post",
                url:"leMenu",
                data:"login="+$('#txtLogin').val()+"&mdp="+$('#txtMdp').val(),
                success:function(data)
                {
                    alert('coucou');
                    $('#d1').empty();
                    $('#d1').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        );   
}
function InsererEleve()
{
        
        $.ajax 
        (
            {
                type:"post",
                url:"insertionEleve",
                data:"nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&tel="+$('#txtTel').val()+"&addresse="+$('#txtAdresse').val()+"&mail="+$('#txtMail').val(),
                success:function(data)
                {
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        );   
}
function ModifierEleve()
{
  
    $.ajax 
        (
            {
                type:"post",
                url:"modificationUnEleve",
                data:"nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&tel="+$('#txtTel').val()+"&addresse="+$('#txtAdresse').val()+"&mail="+$('#txtMail').val()+"&id="+$('#txtId').val(),

                success:function(data)
                {
                    
                    
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        ); 
}
function InsererInstructeur()
{
    
        $.ajax 
        (
            {
                type:"post",
                url:"insertionInstructeur",
                data:"nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&tel="+$('#txtTel').val()+"&addresse="+$('#txtAdresse').val()+"&mail="+$('#txtMail').val(),
                success:function(data)
                {
                    alert('salut');
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        );   
}
function ModifierInstructeur()
{
  
    $.ajax 
        (
            {
                type:"post",
                url:"modificationUnInstructeur",
                data:"nom="+$('#txtNom').val()+"&prenom="+$('#txtPrenom').val()+"&tel="+$('#txtTel').val()+"&addresse="+$('#txtAdresse').val()+"&mail="+$('#txtMail').val()+"&id="+$('#txtId').val(),

                success:function(data)
                {
                    
                    
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        ); 
}
function AttribuerCeintureEleve()
{
    $.ajax 
        (
            {
                type:"post",
                url:"attributionCeintureByEleve",
                data:"idEleve="+$('#lstEleve option:selected').val()+"&ceinture="+$('#lstCeinture option:selected').text(),

                success:function(data)
                {
                    
                     
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        ); 
}
function SuppressionCoursInstructeur()
{
    $.ajax 
        (
            {
                type:"post",
                url:"suppressionAttributionCours",
                data:"cours="+$('#lstCours option:selected').val()+"&idInstructeur="+$('#lstInstructeur option:selected').val(),

                success:function(data)
                {
                    
                     
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        ); 
}
function InsererCoursInstructeur()
{
    $.ajax 
        (
            {
                type:"post",
                url:"InsertionAttributionCours",
                data:"cours="+$('#lstCours option:selected').val()+"&idInstructeur="+$('#lstInstructeur option:selected').val(),

                success:function(data)
                {
                    
                     
                    $('#dOK').empty();
                    $('#dOK').append(data);
                },
                error:function()
                {
                   // alert('Erreur pendant l insertion!');
                }
            }
                 
        ); 
}