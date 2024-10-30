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
                                        <center><h4 class="card-title">Enregistrement des reservations</h4></center>
                                    </div>
                                    <div class="card-body">
                                    <form method="post" action="{{route('ensembles3.store')}}">
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
                                                <label class="form-label">Date d'entrée</label>
                                                <input type="date" class="form-control shadow-none" name ="dateE" autofocus required>
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label">Date de sortie</label>
                                                <input type="date" class="form-control shadow-none" name ="dateS" required>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label"> Le client</label>
                                                <select name="clients_id" class="form-select shadow-none" required>
                                                <option value=""></option>
                                                    @foreach($cli as $clis)
                                                    <option value="{{$clis->id}}">{{$clis->nom}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6" style="margin-bottom:15px">
                                                <label class="form-label"> La chambre</label>
                                                <select name="chambres_id" class="form-select shadow-none">
                                                    <option value=""></option> 
                                                    @foreach($cham as $chams)
                                                    <option value="{{$chams->id}}">{{$chams->id}}</option>
                                                    @endforeach                                
                                                </select>
                                            </div>

                                            <div class="col-2" >
                                                <button type="submit" class="btn btn-success" name="valider"> Enregistrer</button>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('ensembles3.index')}}" class="btn btn-danger" > Retour</a>
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