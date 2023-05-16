@extends('layouts.main')

@section('content')
<section class="documents">
    <div class="container">
        <div class="row text-center">
            <h1 class="doc-header">Dokumen</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12 doc-box">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>documents</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, excepturi!</td>
                            <td><a href="#" class="btn btn-view">View</a></td>
                            <td><a href="#" class="btn btn-download">Download</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, assumenda!</td>
                            <td><a href="#" class="btn btn-view">View</a></td>
                            <td><a href="#" class="btn btn-download">Download</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, assumenda!</td>
                            <td><a href="#" class="btn btn-view">View</a></td>
                            <td><a href="#" class="btn btn-download">Download</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, assumenda!</td>
                            <td><a href="#" class="btn btn-view">View</a></td>
                            <td><a href="#" class="btn btn-download">Download</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, assumenda!</td>
                            <td><a href="#" class="btn btn-view">View</a></td>
                            <td><a href="#" class="btn btn-download">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection