@extends('layouts.app')
@section('content')



<br>
<br>
<br>
<br> 










      <div class="row" >
        <div class="container" style="background-color: #CFEE91;">
                            

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="agence-tab" data-toggle="tab" href="#agence" role="tab" aria-controls="agence" aria-selected="true">  Agence</a>
                        </li>


                       <li class="nav-item">
                            <a class="nav-link" id="commande-tab" data-toggle="tab" href="#commande" role="tab" aria-controls="commande" aria-selected="false">Commande</a>
                       </li>

                       <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Travaux</a>
                       </li>


                       <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                       </li>
           </ul>


          <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="agence" role="tabpanel" aria-labelledby="agence-tab">
                   
              
                <br>
                <br>
                <br>
                <br>
                <p class="h1" style="">  nouveau lieu ! </p>

                <form method="POST" action="/agences">
                   {{ csrf_field() }}
                     <div class="form-group">
                        <label for="valider"> La commune </label>
                        <input type="text" name="Proposition_commune" id="valider" class="form-control" placeholder="entrer le nom de la commune">
                     </div>

                     <div class="form-group">
                       <label for="avis" >Wilaya</label>
                         <input type="text" class="form-control" name="Proposition_wilaya"placeholder="entrer le nom de la wilaya">
                           
                         
                     </div>
                     <button class="btn btn-primary btn-block btn" type="submit">
                      valider
              
                     </button>


                   </form>


                  <br>
                  <br>
                  <br>

                  <p class="h1" style=""> Liste des Propositions </p>
                   <table class="table table-bordered table-dark">
                      <thead> 
                       <tr>
                         <th scope="col">#</th>
                         <th scope="col">Id Proposition</th>
                         <th scope="col">Lieu</th> 
                         <th scope="col">Adresse</th>
                         <th scope="col">Liste des travaux</th>
                        
                       </tr>
                      </thead>
                      <tbody>
                       
                        <tr>
                          <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>  




                      </tbody>



                   </table>
                   <br><br>
                   
                   <p class="h1" style=""> Valider une proposition</p>

                   <form>
                     <div class="form-group">
                        <label for="valider"> Valider une proposition </label>
                        <input type="text" name="valider" id="valider" class="form-control" placeholder="entrer l'id de la proposition">
                     </div>

                     <div class="form-group">
                       <label for="avis" >Ajouter votre avis</label>
                         <textarea class="form-control" placeholder="Ecrire un commentaire...">
                           
                         </textarea>
                     </div>
                     <button class="btn btn-primary btn-block btn" type="submit">
                      valider
              
                     </button>


                   </form>




          </div>


            <div class="tab-pane fade" id="commande" role="tabpanel" aria-labelledby="commande-tab">
              <br><br><br>
            <p class="h1"> Listes des commandes en attente</p>
            <br><br><br>
               <table class="table">
                <thead class="thead-dark">
                 <tr class="">
                    <th> Id agence</th>
                    <th> Id commande  </th>
                    <th> Contenu      </th>
                 </tr> 
                </thead>
                <tbody> 
                 <tr class="table-info">
                    <td> 1</td>
                    <td> 4 </td>
                    <td> Décision d'ouverture </td>
                 </tr>
                 <tr>
                    <td> 1</td>
                    <td> 4 </td>
                    <td> 
                      Décision d'ouverture
                    </td>
                 </tr>
                </tbody> 



               </table>





               </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              

                       <br><br><br>
            <p class="h1"> Listes des Agences en travaux</p>
            <br><br><br>
               <table class="table">
                <thead class="thead-dark">
                 <tr class="">
                    <th> Id agence</th>
                    <th> avancement des travaux  </th>
                    
                 </tr> 
                </thead>
                <tbody> 
                 <tr class="table-info">
                    <td>
                      2
                    </td>
                    <td> 
                      <div class="progress">
                           <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>

                      </div>

                    </td>
                    
                 </tr>
                 <tr class="table-info">
                    <td>
                       4
 
                    </td>
                   
                    <td> 
                       <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                       </div>
                    </td>
                 </tr>
                </tbody> 



               </table>





            </div>
       

       </div>





        </div>
      </div>   




@endsection