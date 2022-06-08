<div id="gtco-products">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>More Products</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-carousel-carousel">
                @foreach($transferlist1 as $rs)
                <div class="item">
                    <a href="{{route('transfer',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" ></a>
                    <div style="text-align: center;color: white;font-weight:bolder ;">
                        {{$rs->title}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

