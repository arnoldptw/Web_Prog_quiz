@extends('layouts.app')

@section('title', 'EduFun - Writers')

@section('content')

<div class="container">
    <div class="card my-4 p-4" style="background-color: #f5f7f9;">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Writer Image">
                <h5 class="fw-bold">Bia Mecca Annisa</h5>
                <p class="text-muted">Spesialis Data Science</p>
            </div>
            <div class="col-md-9">
                <!-- Article 1 -->
                <div class="card mb-3" style="background-color: #e5f2ff;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Machine Learning">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Apa itu Machine Learning?</h5>
                                <p class="card-text">Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI)...</p>
                                <a href="#" class="btn btn-primary">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="card mb-3" style="background-color: #e8edf0;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Deep Learning">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Mengenal Deep Learning Lebih Jelas</h5>
                                <p class="card-text">Deep learning merupakan subbidang machine learning yang algoritmanya terinspirasi dari struktur otak...</p>
                                <a href="#" class="btn btn-primary">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Article 3 -->
                <div class="card mb-3" style="background-color: #d8e7ff;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Natural Language Processing">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Natural Language Processing</h5>
                                <p class="card-text">Natural Language Processing (NLP) merupakan salah satu cabang ilmu AI yang berfokus pada pengolahan...</p>
                                <a href="#" class="btn btn-primary">read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
