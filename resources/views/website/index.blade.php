@extends('website.master')

@section('content')
<center> <code> <a href="locale/ar"> عربي </a>  | <a href="locale/en"> Eng </a> </code> </center>
    @foreach ($items as $item)
    <ul>
        <li>{{app()->getLocale() == 'ar' ? $item->ar_item_name : $item->item_name }}</li>
        <small>{!! app()->getLocale() == 'ar' ? $item->ar_description : $item->description !!}</small>
    </ul>
    @endforeach
@endsection