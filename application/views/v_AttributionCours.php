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
                    
                    $('#btnSupprimer').click
                    (                           
                            function()
                           {
                                //alert($('#lstInstructeur option:selected').val()+$('#lstCours option:selected').val());
                                SuppressionCoursInstructeur();
                                
                           }
                    );    
                   $('#btnAjouter').click
                    (                           
                            function()
                           {
                                //alert($('#lstInstructeur option:selected').val()+$('#lstCours option:selected').val());
                                InsererCoursInstructeur();
                                
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
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/affichageDesInstructeurs"> Retour  </a></button></br>   
    
    <div class="form-inline">
        <label>Selectionner un instructeur </label> </br>   
    
    
        
        <select  id="lstInstructeur"  class="form-control">
        <?php foreach ($lesInstructeurs as $instructeur) {
                    
                          ?>
        
            <option value="<?php echo $instructeur->idInstructeur; ?>"><?php echo $instructeur->idInstructeur." / ".$instructeur->nomInstructeur." ".$instructeur->prenomInstructeur ; ?></option>
        
        <?php } ?>
            </select>
    </div></br>
    <div class="form-inline">
        <label>Selectionner un instructeur </label> </br>   
    
    
        
        <select  id="lstCours"  class="form-control">
        <?php foreach ($lesCours as $cours) {
                    
                          ?>
        
            <option value="<?php echo $cours->idCours; ?>"><?php echo $cours->idCours." / ".$cours->jourCours." ".$cours->libelleCours ; ?></option>
        
        <?php } ?>
            </select>
    </div></br>
    
    <button type="button" class="btn btn-success" id="btnAjouter">Ajouter</button>
    <button type="button" class="btn btn-danger" id="btnSupprimer">Supprimer</button></br></br>
    <div style="border-color: black; height:auto; overflow:auto">
    <table border="1.5" class="table" >
            <thead>
                <tr> <th>Prénom</th><th>Nom</th><th>Jour</th><th>Intitulé du cours</th></tr>
            </thead>
            <tbody>               
                    <?php 
           
               
                    foreach($lesAttributions as $attribution)
                        {
                            
                    ?>
            
                <tr>
                    <td><?php echo $attribution->prenomInstructeur; ?></td>
                    <td><?php echo $attribution->nomInstructeur;?></td>
                    <td><?php echo $attribution->jourCours;?></td>
                    <td><?php echo $attribution->libelleCours;?></td>
                </tr>
                    <?php 
                     
                        } 
                    ?>
            </tbody>
        
        </table>  
    </div>
    
    
    <button type="button" class="btn btn-primary"><a style="color: white;" href="<?php echo base_url(); ?>index.php/Ctrl_KM/index"> Menu </a></button></br>
</body>
</html>


<!--    <div class="form-inline">
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

    </div>-->