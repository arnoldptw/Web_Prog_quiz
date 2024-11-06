@extends('layouts.app')

@section('title', 'EduFun - Popular Articles')

@section('content')
<div class="text-center my-4">
    <h2>Popular Articles</h2>
    <p>Check out our most popular articles.</p>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="post-card">
            <img src="https://via.placeholder.com/150" alt="Machine Learning">
            <div class="post-card-body">
                <h5 class="text-primary">Machine Learning Explained</h5>
                <p class="text-muted">14 May 2024 by: Bia</p>
                <p>An in-depth look at the basics of machine learning and its applications...</p>
                <a href="#" class="btn read-more-btn">read more...</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="post-card">
            <img src="https://via.placeholder.com/150" alt="Human-Computer Interaction">
            <div class="post-card-body">
                <h5 class="text-primary">Human-Computer Interaction</h5>
                <p class="text-muted">14 May 2024 by: Sabrina</p>
                <p>Understanding how humans interact with computers and the impact of design...</p>
                <a href="#" class="btn read-more-btn">read more...</a>
            </div>
        </div>
    </div>
</div>
@endsection
