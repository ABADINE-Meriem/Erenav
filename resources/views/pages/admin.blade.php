@extends('layouts.app')
@section('content')
<div class="container col-lg-12" style="margin-top:5px;">
   <div class="table-wrapper">
       <div class="table-title">
           <div class="row">
                <div class="col-sm-4">
                    <h2>Tableau de bord</b></h2>
                </div>
                <div class="col-sm-8">
                     <a href="#" class="btn btn-info">Liste des tableaux de bord</a>

                    <a href="#" class="btn btn-info">Rapports des unités</a>

                </div>
           </div>
       </div>
       <div class=" pre-scrollable" style="max-height: 66vh">

       <div class="col-md-6 table-responsive-md ml-5">

                 <table class="table table-bordered ">

                      <tr>
                          <th>GROUPE :</th>
                          <th  > GATMA</th>

                      </tr>
                      <tr>
                          <th>EPE  :</th>
                          <th > E.RE.NAV</th>

                      </tr>


                 </table>
                 </div>
                 <br>
                 <br>
                 <div class="col-md-12 table-responsive-md">

                 <table class="table table-bordered ">

                   <thead>
                      <tr>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;">N</th>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;"> AGREGATS</th>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;">Comptes SCF</th>
                   <th colspan="2" class="mil"> Mois</th>
                   <th colspan="2" class="text-center">Evolution</th>
                   <th colspan="2" class="text-center"> Cumul</th>
                   <th colspan="2" class="text-center">Evolution</th>
                 </tr>
                 <tr>

                   <th>Jan 18</th>
                   <th>Jan 19</th>
                   <th>Ecart en valeur</th>
                   <th>% évolution</th>
                   <th>à fin Jan 2018</th>
                   <th>à fin Jan 2019</th>
                   <th>Ecart en valeur</th>
                   <th>% évolution</th>
                 </tr>
                 <tr><td>1</td></tr>
                 <tr><td>2</td></tr>
                 <tr><td>3</td></tr>
                 <tr><td>4</td></tr>
                 <tr><td>5</td></tr>
                 <tr><td>6</td></tr>
                 <tr><td>7</td></tr>
                 <tr><td>8</td></tr>
                 <tr><td>9</td></tr>
                 <tr><td>10</td></tr>
                 <tr><td>11</td></tr>
                 <tr><td>12</td></tr>
                 <tr><td>13</td></tr>
                 <tr><td>14</td></tr>
                 <tr><td>15</td></tr>
                 <tr><td>16</td></tr>
                 <tr><td>17</td></tr>
                 <tr><td>18</td></tr>
                 <tr><td>19</td></tr>
                 <tr><td>20</td></tr>
                 <tr><td>21</td></tr>






               </thead>
             </table>
                </div>

                <br>
                 <br>
                <div class="col-md-8 table-responsive-md">

                 <table class="table table-bordered ">

                   <thead>
                      <tr>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;">N</th>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;"> AGREGATS</th>
                   <th rowspan="2" style="vertical-align : middle;text-align:center;">Comptes SCF</th>

                   <th colspan="2" class="text-center"> Cumul</th>
                   <th colspan="2" class="text-center">Evolution</th>
                 </tr>
                 <tr>
                   <th>à fin Jan 2018</th>
                   <th>à fin Jan 2019</th>
                   <th>Ecart en valeur</th>
                   <th>% évolution</th>
                 </tr>
               </thead>
               <tr><td>22</td></tr>
                 <tr><td>23</td></tr>
                 <tr><td>24</td></tr>
                </table>
                </div>

       </div>

             @endsection
