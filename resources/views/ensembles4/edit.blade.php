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
                                        <center><h4 class="card-title">Modification des reservations</h4></center>
                                    </div>
                                    <div class="card-body">
                                    <form method="post" action="{{route('ensembles3.update', $id->id)}}">
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
                                                <label class="form-label">Montant</label>
                                                <input type="text" class="form-control shadow-none" value="{{$id->montant}}" name ="montant" required>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-12" style="margin-bottom:15px">
                                                <label class="form-label"> Le reservation</label>
                                                <select name="clients_id" class="form-select shadow-none" required>
                                                <option value=""></option>
                                                    @foreach($re as $res)
                                                    @if($res->id == $id->reservations_id)
                                                    <option value="{{$res->id}}" selected>{{$res->id}}</option>
                                                    @else
                                                    <option value="{{$res->id}}">{{$res->id}}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="col-2" >
                                                <button type="submit" class="btn btn-success" name="valider"> Modifier</button>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('ensembles4.index')}}" class="btn btn-danger" > Retour</a>
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