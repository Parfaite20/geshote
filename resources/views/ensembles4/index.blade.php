@extends("home")

@section("contenu")

 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center><h4 class="card-title">Listes des factures</h4></center>
                                    </div>
                                   
                                    <div class="card-body">
                                    <a href="{{route('ensembles4.create')}}" class="btn btn-success ">Nouveau</a><br><br>

                                    <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif 
                                    </div>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>N° de reservation</th>
                                                <th>Montant</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($fac as $id)
                                                <tr>
                                                    <td>{{$id->id}}</td>
                                                    <td>{{$id->reservations_id}}</td>
                                                    <td>{{$id->montant}}</td>
                                                    <td>
                                                                <form action="{{route('ensembles4.destroy', $id->id) }}" method="post" 
                                                                    onsubmit="return confirm('Voulez-vous vraiment supprimer cette ligne ?');">
                                                                    <a class="btn btn-info" href="{{route('ensembles4.edit', $id->id) }}">
                                                                        <i>Modifier</i>
                                                                    </a>
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i>Supprimer</i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@endsection