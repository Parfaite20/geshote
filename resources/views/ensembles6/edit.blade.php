@extends("home")

@section("contenu")


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <center><h4 class="card-title">Modification des utilisateurs</h4></center>
                                    </div>
                                    <div class="card-body">
                                    <form method="post" action="{{route('ensembles6.update', $id->id)}}">
                                            @csrf
                                            @method('put')
                                        <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif 
                                    </div>

                                        <div class="row ">
                                            <div class="col-12" style="margin-bottom:15px">
                                                <label class="form-label">Nom du personnel</label>
                                                <input class="form-control" name="nom" type="text" value="{{$id->nom}}" />
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Téléphone 1</label>
                                                <input class="form-control" name="tel1" type="text" value="{{$id->tel1}}" />
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Téléphone 2</label>
                                                <input class="form-control" name="tel2" type="text" value="{{$id->tel2}}" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2" >
                                            <button type="submit" class="btn btn-success">Modifier</button>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('ensembles6.index')}}" class="btn btn-danger" > Annuler</a>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                            
                        </div>
                        <!-- end row -->  
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@endsection