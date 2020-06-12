@extends('layouts.admin')

@section('content')
    <transition name="slide-fade" mode="out-in">
        <router-view></router-view>
    </transition>
@endsection
