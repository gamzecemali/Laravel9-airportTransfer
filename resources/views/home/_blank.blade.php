@extends('layouts.frontbase')

@section('title', $data->title)

@section('title', $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))

@section('content')


@endsection
