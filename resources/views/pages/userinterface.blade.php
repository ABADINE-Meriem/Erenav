@extends('layouts.app')
@section('content')
<div class="container">
   <div class="table-wrapper">
       <div class="table-title">
           <div class="row">
                <div class="col-sm-4">
                    <h2>Rapports Mensuels</h2>
                </div>
                <div class="col-sm-8">
                @if($filter ===false)    
                     <a href="{{route('Rapports.users')}}" class="btn btn-info"><i class="material-icons autorenew">&#xe863;</i> <span>Actualiser la liste</span></a>
                @endif    
                    <div class="dropdown">
                    <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">&#xE24D;</i> <span>Ajouter Rapport</span></a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href="{{route('Rapports.create')}}">Produit</a>
                         <a class="dropdown-item" href="{{route('Charges.create')}}">Charge</a>
                      </div>
                    </div>
                </div>
           </div>
       </div>

    @if (Session::has('success'))
	                <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::has('errors'))
	                <div class="alert alert-warning">{{ Session::get('errors') }}</div>
    @endif
    @if(count($dates)!=0)
       <div class="table-filter">
           <div class="row">
                <div class="col-sm-12">

                <form action="{{url('/filter')}}" method="post">

                {{ csrf_field() }}

                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <div class="filter-group">
							<label for="date">Date</label>
							<select name="date" class="form-control">
                                <option value="All">All</option>
                            @foreach($dates as $date)
								<option value="{{$date->date}}">{{$date->date}}</option>
                            @endforeach    
							</select>
                    </div>
                    <div class="filter-group">
							<label for="type">Type</label>
							<select name="type" class="form-control">
								<option value="All">All</option>
								<option value="Produit">Produit</option>
								<option value="Charge">Charge</option>
                                <option value="Charge">Cr</option>
							</select>
                    </div>
                </form>
                </div>
            </div>
        </div>
    @endif
        @if($rapports->count()>0)
        <table class="table table-striped table-hover">
             <thead>
                   <tr>
                       <th class="th-lg">N°</th>
                       <th class="th-lg">Date</th>
                       <th class="th-lg">Type</th>
                       <th class="th-lg" colspan="2"> </th>
                   </tr>
             </thead>
             <tbody id="table_body">
             
             @foreach($rapports as $rapport)
                   <tr>
                       <td class="text-uppercase"><?php
                        echo \app\Http\Controllers\RapportController::getID();

                        ?></td>
                      <td class="text-uppercase">{{ $rapport->date }}</td>
                      <td class="text-uppercase">{{ $rapport->tableName }}</td>
                      <td class="d-flex justify-content-end">
                      <a href="#" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                      <a href="{{route('Rapports.showRap',['type' => $rapport->tableName,'date' => $rapport->date])}}" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a>
                      </td>
                   </tr>
             @endforeach
            </tbody>
        </table>
        <div class="clearfix ">
                <ul class="pagination pg">
                    {{ $rapports->links()}}
                </ul>
         </div>
 @endif
</div>
</div>

<script>
$(document).ready(function() {

    $('#table_body td:nth-child(2)').each( function(){

        d =new Date($(this).text());

        var month = d.getMonth();

        var year = d.getFullYear();

        const monthNames = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

        var month = monthNames[month];

        var dateStr = month + " " + year;

        $(this).html(dateStr);
});
});
</script>

@endsection
