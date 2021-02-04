<!DOCTYPE html>
<html lang="fr">
<head>
   <link href="style/styleAjout.css" rel="stylesheet">

   <link href="style/menu.css" rel="stylesheet">
   <link href="style/titre/titre.css"rel="stylesheet" media="screen" type="text/css"/>
   <script src="style/jquery.js"></script> 
   <script src="style/titre/titre1.js"></script> 
   <script src="style/titre/titre.js"></script>

   <script type="text/javascript"> 
      $(function() {
      var txt = $('#txtlzr'); 
      txt.textualizer();
      txt.textualizer('start');
      })
   </script>

   <link href="style/bootstrapv3.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="style/bootstrapv3.3/fonts/glyphicons-halflings-regular.svg" rel="stylesheet" id="bootstrap-css">
   <link href="style/bootstrapv3.3/js/bootstrap.min.js" rel="stylesheet" id="bootstrap-css">
   <link href="style/bootstrapv3.3/css/bootstrap-theme.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>  
   <div class="container-fluid">
     <div id="txtlzr">
       <p>LIVRET NUMERIQUE</p>
       <p>Interface de gestion</p>
       <p>Ajout d'une action</p>
       <p>GRETA DE LA LOIRE</p>	
     </div> 
   </div> 
   <?php
   require_once( "menuAjout.html" );
   ?>

      <div class="background">  
        <div class="form-heading">
           <span class="prg">Action</span>
        </div>         
           <div class="col-md-8 inputGroupContainer">                              
              <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
                 <input name="Libelle_action" placeholder="Intitulé de l'action" class="form-control" type="text">
              </div>                                
           </div>
           <div class="form-group">   
              <div class="col-md-4 inputGroupContainer">                      
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input  name="LIEU_action" placeholder="Lieu de l'action" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
     </br></br>
        <div>
           <div class="form-group">   
           <p class= col-md-2 ><font="Andale Mono, monospace">Date de début de formation</p> 
              <div class="col-md-2 inputGroupContainer">                           
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <input name="DDB" class="form-control" type="date" max="3000-12-31" min="1000-01-01">
                 </div>
              </div> 
              <div class="form-group">   
                 <div class="col-md-2">                              
              </div> 
              <p class= col-md-2 ><font="Andale Mono, monospace">Date de fin de formation</p> 
              <div class="col-md-2 inputGroupContainer">                              
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <input name="DDF" class="form-control" type="date" max="3000-12-31" min="1000-01-01">
                 </div> 
              </div>
           </div>
        </div>             
     </br></br>
        <div class="form-heading">
           <span class="prg">Etablissement d'accueil</span>
        </div>                          
           <div class="form-group"> 
              <div class="col-md-4 inputGroupContainer">                
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                    <input name="ETS_accueil" placeholder="Nom de l'établissement" class="form-control" type="text">
                 </div>                                 
              </div>
           </div>
           <div class="form-group"> 
              <div class="col-md-8 inputGroupContainer">                  
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="address_ETS" placeholder="Adresse de l'établissement" class="form-control" type="text">
                 </div>                                 
              </div>
           </div>
     </br></br>
        <div>
           <div class="form-group">  
              <div class="col-md-4 inputGroupContainer">        
                 <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input name="tel_ETS" placeholder="Téléphone de l'établissement" class="form-control" type="text">
                 </div>                              
              </div>
           </div>
           <div class="form-group">   
              <div class="col-md-4 inputGroupContainer">              
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="mail_ETS" placeholder="etablissement@email.com" class="form-control" type="email">
                 </div>                               
              </div>
           </div>
           <div class="form-group">  
              <div class="col-md-4 inputGroupContainer">            
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <input name="logo_ETS" placeholder="Logo de l'etablissement" class="form-control" type="text">
                 </div>                                 
              </div>
           </div>
        </div>
     </br></br>
        <div class="form-heading">
           <span class="prg">CFC de l'action</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="prg">Responsable pédagogique</span>
        </div>
           <div class="form-group"> 
              <div class="col-md-6 inputGroupContainer">             
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
                    <input  name="CFC_action" placeholder="CFC de l'action" class="form-control" type="text">
                 </div>                                 
              </div>
           </div>
           <div class="form-group">  
              <div class="col-md-6 inputGroupContainer">        
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="RP_action" placeholder="Responsable pédagogique" class="form-control" type="text">
                 </div>                              
              </div>
           </div>
     </br></br>
        <div class="form-heading">
           <span class="prg">Coordinatrice</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="prg">Assistante</span>
        </div>
        <div>
           <div class="form-group">   
              <div class="col-md-6 inputGroupContainer">          
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input name="COO_action"   placeholder="Coordinatrice" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
           <div class="form-group"> 
              <div class="col-md-6 inputGroupContainer">  
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input name="AA_action" placeholder="Assistante" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
        </div>
     </br></br>
        <div>  
           <div class="form-group">   
              <div class="col-md-6 inputGroupContainer">               
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                  <input name="address_COO" placeholder="Adresse de la coordinatrice" class="form-control" type="text">
              </div>                                
              </div>
           </div>
           <div class="form-group">   
              <div class="col-md-6 inputGroupContainer">         
                 <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                 <input name="address_AA" placeholder="Adresse de l'assistante" class="form-control" type="text">
              </div>
           </div>
           </div>
     </br></br>
        <div> 
           <div class="form-group">   
              <div class="col-md-3 inputGroupContainer">  
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input name="tel_AA" placeholder="Téléphone de l'assistante" class="form-control" type="text">
                 </div>                                 
              </div>
           </div>
           <div class="form-group">  
              <div class="col-md-3 inputGroupContainer">              
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="mail_AA" placeholder="assistante@email.com" class="form-control" type="email">
                 </div>                                 
              </div>
           </div>
           <div class="form-group">   
           <div class="col-md-3 inputGroupContainer">          
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                  <input name="tel_COO" placeholder="Téléphone de la coordinatrice" class="form-control" type="text">
              </div>                                 
           </div>
           <div class="form-group">  
              <div class="col-md-3 inputGroupContainer">           
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input name="mail_COO" placeholder="coordinatrice@email.com" class="form-control" type="email">
                 </div>                                
              </div>
           </div>
        </div>   
     </br></br>
        <div class="form-heading">
           <span class="prg">Référent H+</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="prg">Coach</span>
        </div>
        <div>
           <div class="form-group">  
              <div class="col-md-6 inputGroupContainer">           
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="REF_hplus" placeholder="Référent H+" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
           <div class="form-group">   
              <div class="col-md-6 inputGroupContainer">     
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input name="coach" placeholder="Coach" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
        </div>
     </br></br>
        <div>
           <div class="form-group">  
              <div class="col-md-6 inputGroupContainer">           
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <input name="address_REF" placeholder="Adresse du référent H+" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
           <div class="form-group">   
              <div class="col-md-6 inputGroupContainer">  
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                    <input name="coach_modalites" placeholder="Modalités du coach" class="form-control" type="text">
                 </div>                               
              </div>
           </div>
        </div>
      </br></br>
        <div>
          <div class="form-group">
             <div class="col-md-3 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                   <input name="tel_REF" placeholder="Téléphone du référent H+" class="form-control" type="text">
                </div>
             </div>
          </div>
          <div class="form-group">  
             <div class="col-md-3 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                   <input name="mail_REF" placeholder="referentH+@email.com" class="form-control" type="email">
                </div>                                 
             </div>
          </div>
          <div class="form-group">  
             <div class="col-md-3 inputGroupContainer">        
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                   <input name="coach_tel" placeholder="Téléphone du coach" class="form-control" type="text">
                </div>                               
             </div>
          </div>
          <div class="form-group">  
             <div class="col-md-3 inputGroupContainer">   
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                   <input name="coach_mail" placeholder="coach@email.com" class="form-control" type="email">
                </div>                                 
             </div>
          </div>
       </div>
      </br></br>
        <div class="form-heading">
           <span class="prg">Formateur référent</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="prg">DDFPT</span>
        </div>
        <div>
          <div class="form-group">   
             <div class="col-md-6 inputGroupContainer">       
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="reform" placeholder="Formateur référent" class="form-control" type="text">
                </div>                                
             </div>
          </div>
          <div class="form-group">   
             <div class="col-md-6 inputGroupContainer">          
                <div class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                 <input name="DDFPT" placeholder="DDFPT" class="form-control" type="text">
                </div>                                 
             </div>
          </div>
        </div>
      </br></br>
        <div>            
           <div class="form-group">   
              <div class="col-md-3 inputGroupContainer">       
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                    <input name="reform_tel" placeholder="Téléphone du formateur référent" class="form-control" type="text">
                 </div>
              </div>                                 
           </div>
           <div class="form-group">   
              <div class="col-md-3 inputGroupContainer">  
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input name="reform_mail" placeholder="formateureferent@email.com" class="form-control" type="email">
                 </div>                             
              </div>
           </div>
           <div class="form-group">  
              <div class="col-md-3 inputGroupContainer">               
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
                     <input name="DDFPT_tel" placeholder="Téléphone du DDFPT" class="form-control" type="text">
                 </div>                                
              </div>
           </div>
           <div class="form-group">  
              <div class="col-md-3 inputGroupContainer">        
                 <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                     <input name="DDFPT_mail" placeholder="ddfpt@email.com" class="form-control" type="email">
                 </div>                                
              </div>
           </div>
        </div>
      </br></br>
        <div class="form-heading">
          <span class="prg">Equipe pédagogique</span>
        </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">           
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F1" placeholder="Formateur 1" class="form-control" type="text">
                </div>                                
             </div>
          </div>
          <div class="form-group">   
             <div class="col-md-4 inputGroupContainer">   
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F2" placeholder="Formateur 2" class="form-control" type="text">
                </div>                               
             </div>
          </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F3" placeholder="Formateur 3" class="form-control" type="text">
                </div>                                
             </div>
          </div>
          <div class="form-group">   
             <div class="col-md-4 inputGroupContainer">       
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F4" placeholder="Formateur 4" class="form-control" type="text">
                </div>                               
             </div>
          </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F5" placeholder="Formateur 5" class="form-control" type="text">
                </div>  
             </div>
          </div>
          <div class="form-group">   
             <div class="col-md-4 inputGroupContainer">      
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F6" placeholder="Formateur 6" class="form-control" type="text">
                </div>                               
             </div>
          </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">   
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F7" placeholder="Formateur 7" class="form-control" type="text">
                </div>                                 
             </div>
          </div>
          <div class="form-group">     
             <div class="col-md-4 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F8" placeholder="Formateur 8" class="form-control" type="text">
                </div>                                
             </div>
          </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F9" placeholder="Formateur 9" class="form-control" type="text">
                </div>                              
             </div>
          </div>
          <div class="form-group">    
             <div class="col-md-4 inputGroupContainer">  
                <div class="input-group">
                   <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                   <input name="F10" placeholder="Formateur 10" class="form-control" type="text">
                </div>                              
             </div>
          </div>
      </br></br></br></br></br></br></br>
        <div class="form-heading">
           <span class="prg">Stage</span>
        </div>                             
        <div class="form-group">
           <div class="col-md-2 inputGroupContainer">  
              <select name="stage_ent">
                 <option>Oui</option>
                 <option>Non</option>
              </select>
           </div>
        </div>
        <div class="form-group">
           <div class="col-md-8 inputGroupContainer">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button type="submit" class="btn btn-default btn-lg">Enregistrer</button>&nbsp;&nbsp;&nbsp;
              <button type="reset" class="btn btn-default btn-lg">Annuler</button>
           </div>
        </div></br></br></br>
      </div>

</body>
</html>