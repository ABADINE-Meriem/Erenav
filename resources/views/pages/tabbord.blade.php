@extends('layouts.app')
@section('content')
<div class="container">
   <div class="table-wrapper">
       <div class="table-title">
           <div class="row  d-flex justify-content-center">

                    <h2>Tableaux De Bord Mensuels</h2>

           </div>
       </div>
       <div class="table-filter">
           <div class="row">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    <div class="filter-group">
							<label>Année</label>
							<select class="form-control">
								<option>All</option>
								<option>2020</option>
								<option>2019</option>
								<option>2018</option>
								<option>2017</option>
								<option>2016</option>
							</select>
                    </div>
                    <div class="filter-group">
							<label>Mois</label>
							<select class="form-control">
								<option>All</option>
								<option>Janvier</option>
								<option>Février</option>
								<option>Mars</option>
								<option>Avril</option>
                                <option>Mai</option>
                                <option>Juin</option>
                                <option>Juillet</option>
                                <option>Aout</option>
                                <option>Septembre</option>
                                <option>Octobre</option>
                                <option>Novembre</option>
                                <option>Décembre</option>
							</select>
					</div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
             <thead>
                   <tr>
                       <th class="th-lg">N°</th>
                       <th class="th-lg">Date</th>
                   </tr>
             </thead>
             <tbody>
                   <tr>
                       <td>01</td>
                      <td>20/12/2019</td>
                      <td class="float-right">
                          <a href="#" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a>
                      </td>
                   </tr>
                   <tr>
                       <td>02</td>
                      <td>25/12/2019</td>
                      <td class="float-right">
                          <a href="#" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a></td>
                   </tr>
                   <tr>
                       <td>03</td>
                      <td>15/11/2019</td>
                      <td class="float-right">
                          <a href="#" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a></td>
                   </tr>
                   <tr>
                       <td>04</td>
                      <td>20/11/2019</td>
                      <td class="float-right">
                          <a href="#" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a></td>
                   </tr>
                   <tr>
                       <td>05</td>
                      <td>07/10/2018</td>
                      <td class="float-right">
                          <a href="#" class="voir" title="Voir Details" data-toggle="tooltip"><i class="material-icons info">&#xe88e;</i></a></td>
                   </tr>
            </tbody>
        </table>
        <div class="clearfix ">
                <ul class="pagination pg">
                    <li class="page-item disabled"><a href="#"class="page-link"><<</a></li>
                    <li class="page-item "><a href="#" class="page-link active">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item "><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">6</a></li>
					<li class="page-item"><a href="#" class="page-link">7</a></li>
                    <li class="page-item"><a href="#" class="page-link">>></a></li>
                </ul>
         </div>
</div>
</div>


@endsection
