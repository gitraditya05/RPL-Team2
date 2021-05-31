@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Forum</h3>
                                <div class="right">
                                    <a href="#" class="btn btn-sm btn-primary"> Add New Post </a>
                                </div>
                            </div>
                            <div class="panel-body">
							<!-- TIMELINE -->
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 430px;"><div class="panel-body" style="overflow: hidden; width: auto; height: 430px;">
									<ul class="list-unstyled activity-list">
										@foreach($forum as $frm)
                                        <li>
											<p><a href="#">{{ $frm->user->name }}</a> {{ $frm->konten }} <span class="timestamp">{{ $frm->created_at->diffForHumans() }}</span></p>
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