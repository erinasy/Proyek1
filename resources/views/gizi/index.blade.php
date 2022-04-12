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
<div class="container">
                <br>
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">DATA POLA MAKAN</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <a href="/gizi/create" class="btn btn-warning">Add Data</a>
                <a href='/home' class="btn btn-dark">Kembali</a>
                    <br><br>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                 <th>ID</th>
                                 <th>Nama Makanan</th>
                                 <th>Jumlah Kalori</th>
                                 <th>Harga</th>
                                 <th>Ketarangan</th>
                                 <th>Photo</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                    @foreach($polaMakan as $a)
                     <tr>
                         <td>{{ $a->id_polaMakan }}</td>
                         <td>{{ $a->nama_makanan }}</td>
                         <td>{{ $a->jumlah_kalori }}</td>
                         <td>{{ $a->harga }}</td>
                         <td>{{ $a->keterangan }}</td>
                         <td>
                           <img width="150px" src="{{asset('storage/'.$a->photo)}}" alt="image">
                          </td>
                         <td>
                            <form action="/gizi/{{$a->id_polaMakan}}" method="post">
                             <a href="/gizi/{{$a->id_polaMakan}}/edit" class="btn btn-warning">Edit</a>
                             <a href="/gizi/{{$a->id_polaMakan}}" class="btn btn-info">View</a>
                                 @csrf
                                 @method('DELETE')
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                     </tbody>
                </table>
</div>
@endsection
@section('footer')
        <!-- Footer-->
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