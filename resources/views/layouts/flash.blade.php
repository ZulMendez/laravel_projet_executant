@if ($message = Session::get('success'))
<div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    <p class="font-bold text-center">{{$message}}</p>
</div>
@endif
@if ($message = Session::get('warning'))
<div class="bg-orange-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
    <p class="font-bold text-center">{{$message}}</p>
</div>
@endif
