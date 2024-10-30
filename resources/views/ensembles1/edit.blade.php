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
                                        <center><h4 class="card-title">Modification des chambres</h4></center>
                                    </div>
                                    <div class="card-body">
                                    <form method="post" action="{{route('ensembles1.update', $id->id)}}">
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
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Nombre de pièces</label>
                                                <input class="form-control" name="nbrpiece" type="number" value="{{$id->nbrpiece}}"/>
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Téléphone</label>
                                                <input class="form-control" name="telcham" type="text" value="{{$id->telcham}}"/>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-12" style="margin-bottom:15px">
                                                <label class="form-label">Etat </label>
                                                <input class="form-control" name="etatcham" type="text" value="{{$id->etatcham}}" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2" >
                                            <button type="submit" class="btn btn-success">Modifier</button>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('ensembles1.index')}}" class="btn btn-danger" > Annuler</a>
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