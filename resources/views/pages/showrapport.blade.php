@extends('layouts.app')
@section('content')
<div class="container">
   <div class="table-wrapper">
       <div class="table-title">
           <div class="row">
                <div class="col-sm-4">
                    <h2></h2>
                </div>
                <div class="col-sm-8">
                     <a href="{{route('Rapports.toExcel',['type' => $type,'date' => $date])}}" class="btn btn-info"><i class="material-icons print">&#xe8ad;</i> <span>Imprimer</span></a>
                </div>
           </div>
       </div>

        <table id="idtablescrollable" class="table table-striped table-hover table-striped table-bordered table-sm" cellspacing="0"
  width="100%">
             <thead style="background:#edfbfe;">
                   <tr>
                   @if(count($crs)!=0)
                       <th class="th-lg text-center no-sort">LIBELLE</th>
                       <th class="th-lg text-center no-sort">MONTANT</th>
                   @else
                       <th class="th-lg text-center no-sort">Cpte</th>
                       <th class="th-lg text-center no-sort">DESIGNATION</th>
                       <th class="th-lg text-center no-sort">MONTANT</th>

                   @endif    
                   </tr>
             </thead>
             
             
             <tbody> 

             @if(count($crs)!=0)

                @foreach($crs as $cr)
                        <tr>
                        <td class="th-lg text-center">{{ $cr->libelle}}</td>
                        <td class="th-lg text-center">{{ $cr->montant }}</td>
                        </tr>

                @endforeach


             @else
                @foreach($rapports as $rapport)
                        <tr>
                        <td class="th-lg text-center">{{ $rapport->cptes}}</td>
                        <td class="th-lg text-center">{{ $rapport->designation}}</td>
                        <td class="th-lg text-center">{{ $rapport->montant }}</td>
                        </tr>

                @endforeach 
             @endif    
        
            </tbody>
            
        
        
        </table>
        
</div>
</div>
<script>
$(document).ready(function() {
$('#idtablescrollable').DataTable({
    "columnDefs":[{targets:'no-sort',orderable:false}],
    "bPaginate":false,
    "bLengthChange":false,
    "dFilter":true,
    "bInfo":false,
    "order":[],
    "bAutoWidth":false,
    
    "scrollY": "50vh",
    "scrollCollapse": true,
    "language": {
    "sProcessing": "Traitement en cours ...",
    "sLengthMenu": "Afficher _MENU_ lignes",
    "sZeroRecords": "Aucun résultat trouvé",
    "sEmptyTable": "Aucune donnée disponible",
    "sInfo": "Lignes _START_ à _END_ sur _TOTAL_",
    "sInfoEmpty": "Aucune ligne affichée",
    "sInfoFiltered": "(Filtrer un maximum de_MAX_)",
    "sInfoPostFix": "",
    "sSearch": "Chercher: ",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Chargement...",
    "oPaginate": {
      "sFirst": "Premier", "sLast": "Dernier", "sNext": "Suivant", "sPrevious": "Précédent"
    },
    "oAria": {
      "sSortAscending": ": Trier par ordre croissant", "sSortDescending": ": Trier par ordre décroissant"
    }
  }
});
$('.dataTables_length').addClass('bs-select');
});
</script>

@endsection
