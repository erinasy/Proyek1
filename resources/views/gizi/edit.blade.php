@extends('layouts.app1')
@section('header')
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Start  HEALTHY EATING</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1:8000/dokter">Data Dokter</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="http://127.0.0.1:8000/gizi">Data Pola Makan</a></li>
                        <li class="nav-item mx-0 mx-lg-1">
                                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <br></br>
                    <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/gizi/{{$polaMakan->id_polaMakan}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <input type="hidden" name="id_polaMakan" value="{{$polaMakan->id_polaMakan}}"></br>
                    <div class="form-group">
                        <label for="id_polaMakan">ID</label>
                        <input type="text" class="form-control" 
                        required="required" name="id_polaMakan" value="{{$polaMakan->id_polaMakan}}"></br>
                    </div>
                    <div class="form-group">
                        <label for="nama_makanan">Nama Makanan</label>
                        <input type="text" class="form-control" 
                        required="required" name="name" value="{{$polaMakan->nama_makanan}}"></br>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kalori">Jumlah Kalori</label>
                        <input type="text" class="form-control" 
                        required="required" name="jumlah_kalori" value="{{$polaMakan->jumlah_kalori}}"></br>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" 
                        required="required" name="harga" value="{{$polaMakan->harga}}"></br>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" 
                        required="required" name="keterangan" value="{{$polaMakan->keterangan}}"></br>
                    </div>
                    <div class="form-group">
                      <label for="photo">Photo Produk</label>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" class="form-control" required="required" id="photo" name="photo">
                              <img width="150px" src="{{asset('storage/'.$polaMakan->photo)}}">
                          </div>
                      </div>
                  </div>
                    <button type="submit" name="add" class="btn btn-primary float-right">Save Data</button>
                    <a href='/dokter' class="btn btn-info">Kembali</a>
            </form>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
@section('footer')
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            Jln.Hayam Muruk No.89
                            <br />
                            Malang,Jawa Timur
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
@endsection