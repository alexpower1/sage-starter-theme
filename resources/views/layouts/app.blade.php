<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  <div class="min-h-screen flex flex-col">
    @include('partials.header')

    <main>
      @yield('content')
    </main>

    @include('partials.footer')
  </div>
</body>

</html>
