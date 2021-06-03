@extends('layouts.master')
@extends('forum.create')

@section('tittle') Forum @endsection
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h2 class="panel-title">Forum Diskusi</h2>
                                <div class="right">
                                    <a class="btn btn-md btn-primary" data-toggle="modal" data-target="#createModal"> Buat Post </a>
                                </div>
                            </div>
                            <div class="panel-body">
							<!-- TIMELINE -->
                            @foreach($forum as $frm)
                            <div class="panel">
                                <p><a href="/forum/{{$frm->id}}/view">{{ $frm->user->name }} : {{ $frm->judul }} <br> 
                                </a> {{ $frm->konten }} <br><span class="timestamp">{{ $frm->created_at->diffForHumans() }}</span></p>
                            </div>
                            @endforeach
							<!-- END TIMELINE -->
						    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection