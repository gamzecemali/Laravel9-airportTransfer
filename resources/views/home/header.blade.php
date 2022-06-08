<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div id="gtco-logo"><a href="index.html">Splash <em>.</em></a></div>
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                @endphp
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    @foreach($mainCategories as $rs)
                    <li class="has-dropdown">
                        <a href="#">{{$rs->title}}</a>
                        <ul class="dropdown">
                            @if(count($rs->children))
                                @include('home.categorytree',['children' => $rs->children])
                            @endif
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
</nav>







