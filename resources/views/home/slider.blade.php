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
                    <a href="#"><img src="{{Storage::url($rs->image)}}" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div style="text-align: center;color: white;font-weight:bold ;">
                        {{$rs->title}}
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>

