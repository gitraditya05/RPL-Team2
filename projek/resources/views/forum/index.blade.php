@extends('layouts.master')
@extends('forum.create')

@section('tittle') Forum @endsection
@section('forum') active @endsection

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
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 430px;"><div class="panel-body" style="overflow: hidden; width: auto; height: 430px;">
									<ul class="list-unstyled activity-list">
										@foreach($forum as $frm)
                                        <li>
											<p><a href="/forum/{{$frm->id}}/view">{{ $frm->user->name }} : {{ $frm->judul }} <br> </a> {{ $frm->konten }} <span class="timestamp">{{ $frm->created_at->diffForHumans() }}</span></p>
										</li>
                                        @endforeach
									</ul>
								</div>
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