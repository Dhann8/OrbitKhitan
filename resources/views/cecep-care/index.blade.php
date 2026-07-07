@extends('cecep-care.layout.app')

@section('content')
    @include('cecep-care.components.navbar')
    
    <main>
        @include('cecep-care.components.hero')
        @include('cecep-care.components.services')
        @include('cecep-care.components.why-us')
        @include('cecep-care.components.process-workflow')
        @include('cecep-care.components.gallery')
        @include('cecep-care.components.testimonials')
        @include('cecep-care.components.faq')
        @include('cecep-care.components.cta')
    </main>

    @include('cecep-care.components.footer')
    @include('cecep-care.components.whatsapp-fab')
@endsection