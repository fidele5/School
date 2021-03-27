@extends("layouts.admin.app")
@section("content")
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Promotions</h5>
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb p-0 mb-0">
                        <li class="breadcrumb-item ">
                            <a href="{{ route('home-admin')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active">
                            Promotions
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Promotions</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Filière</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($promotions as $key=>$promotion)
                                        <tr>
                                            <td>{{ $key + 1}}</td>
                                            <td>{{ $promotion->nom }}</td>
                                            <td>{{ $promotion->filiere->nom }}</td>
                                            <td>
                                                <form method="POST" action="{{ route("promotions.destroy", $promotion)}}">
                                                @csrf
                                                @method("delete")
                                                <a class="btn btn-primary" href="{{ route("promotions.edit", $promotion) }}">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                                <button class="btn btn-danger" type="submit"><i class="bx bx-trash"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Filière</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->
@endsection
