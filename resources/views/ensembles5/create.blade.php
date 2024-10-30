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
                                        <center><h4 class="card-title">Enregistrement des personnels</h4></center>
                                    </div>

                                
                                    <div class="card-body">
                                    <form method="post" action="{{route('ensembles5.store')}}">
                                        @csrf

                                        <div class="text-center">
                                        @if($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{$message}}</p>
                                            </div>
                                        @endif 
                                    </div>

                                        <div class="row ">
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Nom du personnel</label>
                                                <input type="text" class="form-control shadow-none @error('nom') is-invalid @enderror"
                                                     name ="nom" value="{{ old('nom') }}" autofocus>
                                                     @error("nom")
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">E-mail</label>
                                                <input type="email" class="form-control shadow-none @error('email') is-invalid @enderror"
                                                     name ="email" value="{{ old('email') }}">
                                                     @error("email")
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Téléphone 1</label>
                                                <input type="text" class="form-control shadow-none @error('tel1') is-invalid @enderror"
                                                     name ="tel1" value="{{ old('tel1') }}">
                                                @error("tel1")
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Téléphone 2</label>
                                                <input type="text" class="form-control shadow-none" name ="tel2" value="{{ old('tel2') }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2" >
                                                <button type="submit" class="btn btn-success" name="valider"> Enregistrer</button>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('ensembles5.index')}}" class="btn btn-danger" > Retour</a>
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