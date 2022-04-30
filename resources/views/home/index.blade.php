@extends('layouts.frontbase')

@section('title', 'Title from sub file')



@section('content')
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>HAVAALANI TRANSFER</h2>
                    <p><b>Lüks , Konforlu & Güvenli</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/f4.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/f3.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2><b>Mercedes Vito</b></h2>
                            <p>Filomuzda bulundurduğumuz Mercedes Vito araçlarımızla, çekirdek ailenizin ve 6 kişiye kadar arkadaş gruplarınızın
                            ulaşım ihtiyaçlarına yönelik konforlu, güvenli ve yüksek kalite standartlarına sahip hizmet güvencesi sunuyoruz. </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/f5.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/f2.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2><b>Mercedes Spriter</b></h2>
                            <p>Kalabalık aileler veya 12 kişiye kadar olan arkadaş grupları için filomuzda bulundurduğumuz Mercedes Spriter
                                araçlarımız ile şehir içi ve şehirler arası transferleriniz ile konforlu ve güvenli şekilde gerçekleştirin.
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/f8.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/f6.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2><b>Limuzin</b></h2>
                            <p>Limuzin kiralama hizmetleri lüks araçlarla seyahat etmek ve özel etkinliklerinizi unutulmaz bir hale
                                getirmek için tercih edilen oldukça keyifli bir etkinliktir. Sıradan otomobillere kıyasla, özel tasarım detayları içeren limuzinler, içinde lüks ve konfor detaylarını bir arada bulundurması dolayısıyla özel etkinliklerin
                                vazgeçilmez bir öğesi haline gelmesini sağlamıştır.</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/f6.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/f6.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_5.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_5.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="{{asset('assets')}}/images/img_6.jpg" class="fh5co-project-item image-popup">
                        <figure>
                            <div class="overlay"><i class="ti-plus"></i></div>
                            <img src="{{asset('assets')}}/images/img_6.jpg" alt="Image" class="img-responsive">
                        </figure>
                        <div class="fh5co-text">
                            <h2>Constructive heading</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>

@endsection
