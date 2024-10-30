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
                                    <div class="card-header ">
                                        <center><h3><i class="fas fa-user-plus fa-1x"></i>Listes des utilisateurs</h3></center>
                                    </div>
                                   
                                    <div class="card-body">
                                    <a href="{{route('ensembles6.create')}}" class="btn btn-success ">Nouveau</a><br><br>

                                    <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif 
                                    </div>
                                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                            <thead>
                                            <tr class="">
                                                <th>Nom</th>
                                                <th>E-mail</th>
                                                <th>Téléphone1</th>
                                                <th>Téléphone2</th>
                                                <th>Role</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($uti as $id)
                                                <tr>
                                                    <td>{{$id->nom}}</td>
                                                    <td>{{$id->email}}</td>
                                                    <td>{{$id->tel1}}</td>
                                                    <td>{{$id->tel2}}</td>
                                                    <td>{{$id->role}}</td>
                                                    <td>
                                                                <form action="{{route('ensembles6.destroy', $id->id) }}" method="post" 
                                                                    onsubmit="return confirm('Voulez-vous vraiment supprimer cette ligne ?');">
                                                                    <a class="btn btn-info" href="{{route('ensembles6.edit', $id->id) }}">
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