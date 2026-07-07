@extends('orbit-khitan.layout.app')

@section('content')
    @include('orbit-khitan.components.announcement')
    @include('orbit-khitan.components.navbar')
    <main>
        @include('orbit-khitan.components.hero')
        @include('orbit-khitan.components.services')
        @include('orbit-khitan.components.why-us')
        @include('orbit-khitan.components.process-workflow')
        @include('orbit-khitan.components.gallery')
        @include('orbit-khitan.components.testimonials')
        @include('orbit-khitan.components.faq')
        @include('orbit-khitan.components.cta')
    </main>

    @include('orbit-khitan.components.footer')
    @include('orbit-khitan.components.whatsapp-fab')
@endsection