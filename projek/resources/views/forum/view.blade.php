@extends('layouts.master')
@extends('forum.create')

@section('tittle')
    Diskusi : {{$forum->user->name}}
@endsection
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{$forum->user->name}} : {{$forum->judul}}</h3>
                                <p class="panel-subtitle">{{$forum->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="panel-body">
                                {{$forum->konten}}    
                            <hr>
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="lnr lnr-thumbs-up"></i> Suka</button>
                                <button class="btn btn-default" id="btn-komentar-utama"><i class="lnr lnr-bubble"></i> Komentar</button>
                            </div>
                            <form action="" style="margin-top:10px" id="komentar-utama" method="POST">
                                @csrf
                                <input type="hidden" name="forum_id" value="{{$forum->id}}">
                                <input type="hidden" name="parent" value="0">
                                <textarea name="konten" class="form-control" rows="3"></textarea>
                                <input type="submit" class="btn btn-primary" value="kirim">
                            </form>
                            <h4>Komentar</h4>
                            <ul class="list-unstyled activity-list">
                                @foreach($forum->komentar()->where('parent', 0)->orderBy('created_at', 'desc')->get() as $komen)
                                <li>
                                    <p><a href="#">{{$komen->user->name}}</a> <br> 
                                    {{$komen->konten}} <span class="timestamp"> {{$komen->created_at->diffForHumans()}} </span></p>
                                    <form action="" method="POST" style="padding-left : 3.5em;">
                                        @csrf
                                        <input type="hidden" name="forum_id" value="{{$forum->id}}">
                                        <input type="hidden" name="parent" value=" {{$komen->id}} ">
                                        <input type="text" name="konten" class="form-control">
                                        <input style="margin-top:10px;" type="submit" class="btn btn-primary btn-xs" value="kirim">
                                    </form>
                                    @foreach($komen->childs as $child)
                                    <p style="margin-top:10px; padding-left:5em;"><a href="#">{{$child->user->name}}</a> 
                                    {{$child->konten}} <span class="timestamp"> {{$child->created_at->diffForHumans()}} </span></p>
                                    @endforeach
                                </li>
                                @endforeach
							</ul>
                            </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('#btn-komentar-utama').click(function(){
                $('#komentar-utama').toggle('slide');
            });
        });
    </script>
@endsection