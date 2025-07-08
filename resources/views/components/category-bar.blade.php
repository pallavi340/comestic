<div class="d-flex overflow-auto gap-3 px-2">
    @foreach ($categories as $cat)
        <a href="{{route('view.filter', $cat->cat_slug)}}" 
           class="bg-white text-black rounded-pill text-nowrap flex-shrink-0 px-4 py-2 text-decoration-none">
            {{ $cat->cat_title }}
        </a>
    @endforeach
  <a href="{{ route('base.offer') }}" class="text-danger fw-bold">SALE</a>
</div>
 <hr>

