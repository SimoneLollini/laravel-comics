<section class="current_series">

    <div class="container">
        <div class="badge_title">CURRENT SERIES</div>


        <div class="row row-cols-6">
            <SeriesElement v-for="comic in DcComics" :image="comic.thumb" :series="comic.series" />
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn_primary">LOAD MORE</button>
    </div>
</section>