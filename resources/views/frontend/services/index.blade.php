@extends('layouts.layout')

@section('title', 'Services')

@section('content')

<style>

</style>


<section class="section-padding">
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-8 my-3">
                <img src="{{ asset('assets/img/services/concept.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <h4 class="fw-bolder mt-3">Concept</h4>
                <p class="">We will start the whole process by conducting initial consultation with our clients. Getting a clear feel and understanding for your specific wants and needs is mandatory, hence we will listen to you carefully and prepare some event-related questions. The discussion and questionnaire allow us to conceptualize the whole event and devise a master plan to improve the likelihood of providing a high-level experience</p>
            </div>
            <div class="col-sm-8 my-3">
                <img src="{{ asset('assets/img/services/styling.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <h4 class="fw-bolder mt-3">Styling</h4>
                <p class="">After the groundwork has been set, we will attend a site visit to visualize where you want everything to go, devise a layout, and identify potential problems. We will help with the decisions that will pull together any disjointed elements, as well as give a unified look through a mood board to visualize the atmosphere of the event. Furthermore, we will create an inclusive yet flexible direction for your event.</p>
            </div>
            <div class="col-sm-8 my-3">
                <img src="{{ asset('assets/img/services/decor.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <h4 class="fw-bolder mt-3">Decor</h4>
                <p class="">Throughout this crucial step, we will develop the predefined aesthetic elements, materials, and accessories that are required to establish a cohesive design. Our team which consists of professionals will progressively get deeper and deeper into all the details as we proceed from the idea to the concrete realization. We will source special props and equipment, also continuously consult you on everything related to the overall design from floor plans and lighting to the flowers, furniture, linens, and many more, as well as help you to get the most precise idea possible of the whole project by means of sketches, renderings, or photos.</p>
            </div>
            <div class="col-sm-8 my-3">
                <img src="{{ asset('assets/img/services/production.jpg') }}" alt="profile-2" class="img-fluid" width="100%">
                <h4 class="fw-bolder mt-3">Production</h4>
                <p class="">After months of planning and perfecting prior to the event, our focus will be shifted from creating to ensuring that the established décor is in accordance with your wants and needs, as well as the initial plan. In order to enable you to enjoy the memorable occasion to its fullest, we will make certain that all of the décor elements are in place on-site on the big day. It is our duty and privilege to assure that our client’s vision is implemented well and thoroughly.</p>
            </div>
            <div class="col-sm-12">
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
