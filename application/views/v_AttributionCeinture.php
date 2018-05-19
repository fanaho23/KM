<html>
<head>
	<title>KM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            include 'v_bootstrapPC.php';
        ?>
                <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript">
           $(
                function()
                {
                    
                    $('#btnValider').click
                    (                           
                            function()
                           {
                                alert($('#lstEleve option:selected').val()+$('#lstCeinture option:selected').text());
                                AttribuerCeintureEleve();
                           }
                    );    
                   
                }
            );
        </script>
</head>
<body style="background-color:#F5F5F5; margin-left: 10px; margin-bottom: 10px" >
    <div style="border-color: black; height:auto; overflow:auto">
        <h1 style="font-family: Impact; color: red;" align="center"><br>KM</br></h1>
        <h2 style="font-family: Impact; " align="center"><u>COACHING</u></h2>
    </div>


   <div id="dOK"></div>
    <div class="form-inline">
        <label>Selectionner un eleve </label> </br>   
    
    
        
        <select  id="lstEleve"  class="form-control">
        <?php foreach ($lesEleves as $eleve) {
                    
                          ?>
        
            <option value="<?php echo $eleve->idEleve; ?>"><?php echo $eleve->idEleve." / ".$eleve->nomEleve." ".$eleve->prenomEleve." est ".$eleve->ceinture ; ?></option>
        
        <?php } ?>
            </select>
    </div></br>

        <div class="form-inline">
            <label>Selectionner une ceinture </label></br>
        <select  id="lstCeinture" class="form-control">
            <option>Blanche</option>
            <option>Jaune</option>
            <option>Orange</option>
            <option>Verte</option>
            <option>Bleu</option>
            <option>Marron</option>
            <option>Noire</option>
        </select>
    </div></br>
    
        <div style="border-color: black; height:auto; overflow:auto">

    </div>
    <button type="button" class="btn btn-danger" id="btnValider">Valider</button></br></br>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br>
</body>
</html>

<!--    <table border="1.5" class="table" >
            <thead>
                <tr> <th>Id</th><th>Nom</th><th>Prenom</th><th>Telephone</th><th>Adresse</th><th>Mail</th><th>Ceinture</th></tr>
            </thead>
            
            
            <tbody>               
                    <?php 
           
               
                    foreach($lesEleves as $eleve)
                        {
                            
                    ?>
            
                <tr>
                    <td><?php echo $eleve->idEleve; ?></td>
                    <td><?php echo $eleve->nomEleve;?></td>
                    <td><?php echo $eleve->prenomEleve;?></td>
                    <td><?php echo $eleve->telephone;?></td>
                    <td><?php echo $eleve->adresse;?></td>
                    <td><?php echo $eleve->mail;?></td>
                    <td><?php echo $eleve->ceinture;?></td>
                </tr>
                    <?php 
                     
                        } 
                    ?>
            </tbody>
        
        </table>  -->