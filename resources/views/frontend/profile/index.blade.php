@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
<style>
    .desc p{
        line-height: 2;
    }
</style>

<section class="section-padding">
    <div class="container px-5">
        <div class="desc">
            <p>Born in Jakarta-Indonesia, Vincent Caesar Jansius Luhur’s formative years were spent in wildeness, exploring his passion towards nature and art. Both his great-grand-mother and grandmother owned a florist and were the floral designer for Dutchman and Japanese private residences during their colonization era in Indonesia, influ-enced by both country’s flower arrangement style, while his grandfather worked as journalist and owned a photography studio. It seems that his creative genes plus his hard work and passion brings out the best artistry in him.</p>
            <p>He started collecting orchid since he was seven because he believes that the com-plexity and incredible diversity of orchid is a representation of natural beauty and has an impressive collection of more than 3,000 varieties, planted and maintained safely in his nursery located in Banjarmasin (South Kalimantan) and Jakarta. Since his child-hood, Vincent has became a member of Indonesian Orchids Society and actively involved in any of the association’s activities.</p>
            <p>Graduated from School of Design, Vincent believes that decoration is a combination between art—design—and flowers. This conviction blossoms out through his signature creations which combine instinct-feel with conceptual theory.</p>
        </div>
        <div class="desc">
            <h2 class=" fw-bold">“A portrait of artistic soul in all of his youthful verdure and irrespressible joie de vivre”</h2>
            <div class="row">
                <div class="col-sm-7">
                    <p>Driven by his dedication to raise environmental awareness through design, he actively participated in government programmes, projects and cam-paigns like his collaboration with Ministry of Environment and Forestry of Indo-nesia called Kesatuan Pengelolaan Hutan (KPH) and Ayo ke Taman Nasion-al, a campaign to encourage people to pay national parks a visit.</p>
                    <p>Vincent was awarded several creative art and design prizes such as Excel-lent Poster Design for Gerakan Indonesia Menanam, The 1st Prize Winner of 2013 International Anti Drugs Day for Campaign Poster Design and Slogan Creator, Excellent Graphics and Visual Communication Design for Kesatuan Pengelolaan Hutan from Ministry of Environment and Forestry of Indonesia in collaboration with The Deutsche Gesellschaft für Internationale Zusam-menarbeit (GIZ) GmbH, and many more.</p>
                </div>
                <div class="col-sm-5">
                    <img src="{{ asset('assets/img/profile/Profile-Photo-1.jpg') }}" alt="profile-1" class="img-fluid">
                </div>
            </div>
            <p>As an artisan floral designer and gardener, Vincent practices modern design and brings a unique and conceptual stylistic context to his tablescapes. His botanic arrangements have a signature informality inspired by wild tropical meadows and woodland glades. He grows his own flowers—especially orchids—in an organic urban garden, scours the roadsides for natural, native and recyclable materials for his creative arrangements, also works as a consultant on other cutting garden projects.</p>
            <p>At its heart, your wedding is about you and your spouse-to-be. We believe that your story is one-of-a-kind and worth telling on your big day, thus each design we create for a client should feel like it belongs to only them. Our goal from the beginning has been to generate an authentic design that will fit you, not the other way around. We won’t ask you to fit into a pre-made design.</p>
        </div>
        <div class="desc">
            <h2 class=" fw-bold">“Instead, we build a remarkable and memorable design to fit you”</h2>
            <p>Known for his floral installations that are often compared to contemporary art, Vincent tends to touch on all five senses and attract the crowd to take part in his imagination world through each and every creations of his.</p>
            <div class="row">
                <div class="col-sm-5">
                    <img src="{{ asset('assets/img/profile/Profile-Photo-2.jpg') }}" alt="profile-1" class="img-fluid">
                </div>
                <div class="col-sm-7">
                    <p>Orchid enthusiast around the world has been familiar with his name, since he is included in the list of top orchid collector. His numerous collection includes the rarest and the most stunning varieties like Dendrobium magistratus which was discovered in 1981 in Papua New Guinea by P.J Cribb and Dendrobium tokai which discovered in 1865 in Fiji and Tonga by Rchb.f.</p>
                    <p>Vincent is now working as Creative Director of a branding consultant based in Jakarta (Indonesia) and Nürnberg (Germany) as well as focusing on his deco-ration projects in full swing.</p>
                </div>
            </div>
        </div>
        <div class="desc-untitled">
            <div class="row align-items-end">
                <div class="col-sm-6">
                    <h4 class=" fw-bold">Right</h4>
                    <p class="">A free-hand drawing by Vincent Luhur at the age of 7. Through this work, his natural talent, aesthetic intelligence, as well as interest in art, design, and flowers are clearly reflected. All three are the things that have attached to him since he was a child.</p>
                </div>
                <div class="col-sm-6">
                    <img src="{{ asset('assets/img/profile/Crayon-on-Canvas.jpg') }}" alt="profile-1" class="img-fluid">
                </div>
                <div class="col-sm-6 my-5">
                    <h4 class=" fw-bold">Untitled</h4>
                    <p>Year : 2000 / Crayon on canvas<br>42 x 30 cm</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')

@endpush
